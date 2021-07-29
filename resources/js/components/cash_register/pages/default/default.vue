<template>
    <div id="default">
        <div class="menu-items items-container">
            <div class="search">
                <input class="input" type="text" min="0" v-model="search_string">
            </div>
            <div v-for="category in categories" :key="category.id">
                <h3 class="title">{{ category.name }}</h3>
                <ul class="items">
                    <div class="item" v-for="item in menu_items.filter(menu_item =>
                            menu_item.category_id === category.id &&
                            searchFilter(menu_item, category, search_string)
                        )" :key="item.id">
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
                    <div class="other">
                        <input type="number" min="0" v-model.number="item.amount" @change="updateItem(item)">
                        <button @click="toggleRemarks" class="remarks-button">...</button>
                    </div>
                    <div class="remarks hidden">
                        <textarea class="text-entry" name="remarks" v-model.trim="item.remarks"></textarea>
                    </div>
                </div>
            </ul>
        </div>

        <div class="total">
            <h3 class="title">Totaal</h3>
            <span class="amount">{{ euro(getTotal()) }}</span>
            <div class="buttons">
                <button class="other" type="button" @click="submit()">Afrekenen</button>
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

        .remarks {
            height: 5em;
            order: 99;

            .text-entry {
                position: absolute;
                width: 100%;
                height: 5em;
            }
        }
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

    .search {
        margin: 1rem auto;
        width: 80%;
        padding: 0 2rem;

        .input {
            width: 100%;
        }
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
            position: relative;

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
        search_string: "",
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

        toggleRemarks(event) {
            let remarks = event.target.parentElement.parentElement.getElementsByClassName("remarks")[0]
            remarks.classList.toggle("hidden")
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

        searchFilter(menu_item, category, search_string) {
            return (
                menu_item.name.toLowerCase().includes(search_string.toLowerCase()) ||
                (menu_item.number !== null ? (menu_item.number.toString().startsWith(search_string)) : false) ||
                category.name.toLowerCase().includes(search_string.toLowerCase())
            )
        },

        submit() {
            axios.post("/orders/create", this.order_items.map(item => {return {
                id: item.id,
                amount: item.amount,
                remarks: item.remarks ?? "",
            }})).then(() => {
                alert("Order verwerkt")
                this.order_items = []
            })
        },
    }
}
</script>search_filter