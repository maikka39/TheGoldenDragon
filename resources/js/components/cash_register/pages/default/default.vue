<template>
    <div id="default">
        <div class="menu-items items-container">
            <div v-for="category in categories" :key="category.id">
                <h3 class="title">{{ category.name }}</h3>
                <ul class="items">
                    <div class="item" v-for="item in menu_items.filter(menu_item => menu_item.category_id === category.id)" :key="item.id">
                        <h4 class="name" v-html="item.name"></h4>
                        <span class="number">{{ item.number }}{{ item.number_addition }}.</span>
                        <p class="description" v-html="item.description"></p>
                        <span class="price">{{ euro(item.price) }}</span>
                        <button class="other" type="button" @click="addItem(item)">Toevoegen</button>
                    </div>
                </ul>
            </div>
        </div>

        <div class="order-items items-container">
            <h3 class="title">Bestelling</h3>
            <ul class="items">
                <div class="item" v-for="item in order_items" :key="item.id">
                    <h4 class="name" v-html="item.name"></h4>
                    <span class="number">{{ item.number }}{{ item.number_addition }}.</span>
                    <span class="price">{{ euro(item.price * item.amount) }}</span>
                    <input class="other" type="number" min="0" v-model.number="item.amount" @change="updateItem(item)">
                </div>
            </ul>
        </div>

        <div class="total">
            <h3 class="title">Totaal</h3>
            <span class="amount">{{ euro(getTotal()) }}</span>
            <div class="buttons">
                <button class="other" type="button" @click="addItem(item)">Afrekenen</button>
                <button class="other" type="button" @click="clearOrder()">Verwijderen</button>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#default {
    height: 100%;

    display: grid;
    grid-template-columns: 3fr 2fr;
    grid-template-rows: 3fr 2fr;
    gap: 1rem;

    grid-template-areas:
        "items order"
        "items total";

    > * {
        border: 1px solid #0066ff;
        border-radius: 5px;
    }

    .menu-items {
        grid-area: items;
    }

    .order-items {
        grid-area: order;
    }

    .total {
        grid-area: total;

        .amount {
            font-size: 4rem;
            text-align: center;
            display: block;
            padding: 2rem 0;
        }

        .buttons {
            text-align: center;
        }
    }

    .title {
        font-size: 2rem;
        margin: 2.5rem 0 0;
        text-align: center;
    }

    .items-container {
        overflow-y: scroll;
    }

    .items {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;

        list-style: none;
        padding: 0 2rem;

        .item {
            display: grid;
            grid-template-columns: min-content auto auto max-content;
            grid-template-rows: max-content max-content;
            align-items: center;
            text-align: start;
            gap: 0;
            border-bottom: .1rem solid #424242;

            .name {
                order: 1;
                margin: 10px;
                font-size: 1.2rem;
            }

            .number {
                order: 0;
            }

            .description {
                order: 3;
                grid-area: 2 / 1 / 2 / 4;
                word-wrap: break-word;
                margin-top: 0 !important;

                &:not(:empty) {
                    margin: 10px;
                    font-style: italic;

                    &::before {
                        content: "(";
                    }

                    &::after {
                        content: ")";
                    }
                }

                &:empty {
                    margin: 0;
                }
            }

            .price {
                order: 2;
                text-align: end;
            }

            .other {
                order: 3;
                margin: 0 1rem;
            }
        }
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        categories: [],
        menu_items: [],
        order_items: [],
    }),
    created() {
        axios.get("/categories")
            .then(data => (this.categories = data.data.data))
        axios.get("/menuitems")
            .then(data => (this.menu_items = data.data.data))
    },
    watch: {
        order_items: function () {
            this.$nextTick(function() {
                for (const el of this.$el.getElementsByClassName("order-items")) {
                    el.scrollTo({
                        left: 0,
                        top: el.scrollHeight,
                        behavior: "auto",
                    });
                }
            });
        }
    },
    methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            })

            return f.format(price)
        },

        addItem(item) {
            if (this.order_items.includes(item)) {
                let order_item = this.order_items.find(oi => oi.id === item.id)
                order_item.amount++
                this.$forceUpdate()
                return
            }

            let orderItem = item
            orderItem.amount = 1

            this.order_items.push(orderItem)
        },

        removeItem(item) {
            this.order_items = this.order_items.filter(oi => oi.id !== item.id)
        },

        updateItem(item) {
            if (item.amount === 0) {
                this.removeItem(item)
            }
            this.$forceUpdate()
        },

        clearOrder() {
            this.order_items = []
        },

        getTotal() {
            return this.order_items.map(item => item.amount * item.price).reduce((a, b) => a + b, 0)
        },
    }
}
</script>