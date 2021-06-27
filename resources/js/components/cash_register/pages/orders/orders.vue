<template>
    <div id="default">
        <div class="date">
            <label for="start_date">Start datum</label>
            <input id="start_date" name="start_date" type="date" v-model="start_date">
            <label for="end_date">Eind datum</label>
            <input id="end_date" name="end_date" type="date" v-model="end_date">
            <button type="button" @click="refreshOrders()">Maak Overzicht</button>
        </div>

        <div class="total">
            <h3 class="title">Omzet</h3>
            <span class="amount">{{ euro(getRevenue()) }}</span>
            <h3 class="title">BTW</h3>
            <span class="amount">{{ euro(getVat()) }}</span>
            <h3 class="title">excl. BTW</h3>
            <span class="amount">{{ euro(getRevenue() - getVat()) }}</span>
        </div>

        <div class="order-items-container">
            <div class="order-items items-container">
                <ul class="items">
                    <li class="item" v-for="item in view_order_items" :key="item.id">
                        <h4 class="name" v-html="item.name"></h4>
                        <span class="order_date">{{ item.date }}</span>
                        <span class="price">{{ euro(item.price) }}</span>
                        <span class="amount">{{ item.amount }}</span>
                        <span class="subtotal">{{ euro(item.subtotal) }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#default {
    height: 100%;

    display: grid;
    grid-template-columns: 3fr 4fr;
    grid-template-rows: 1fr 7fr;
    gap: 1rem;

    grid-template-areas:
        "date total"
        "items items";

    .order-items-container {
        grid-area: items;
        display: flex;
        justify-content: center;
        align-items: center;

        .order-items {
            border: 1px solid #0066ff;
            border-radius: 5px;
            max-width: 1100px;
            width: 100%;
            height: 100%;
        }
    }

    .date {
        grid-area: date;
        border: 1px solid #0066ff;
    }

    .total {
        grid-area: total;
        border: 1px solid #0066ff;

        > * {
            display: inline-block;
            font-size: 2rem;
            margin: 0 1rem;
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
            grid-template-columns: max-content auto max-content max-content max-content;
            grid-template-rows: max-content max-content;
            align-items: center;
            text-align: start;
            gap: 0rem 2rem;
            border-bottom: .1rem solid #424242;

            .name {
                order: 1;
                margin: 10px;
                font-weight: inherit;
                font-size: 1.2rem;
            }

            .order_date {
                order: 0;
            }

            .price {
                order: 2;
                text-align: end;
            }

            .amount {
                order: 2;
                text-align: end;
            }

            .subtotal {
                order: 2;
                text-align: end;
            }
        }
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        start_date: null,
        end_date: null,
        order_items: [],
        view_order_items: [],
    }),
    created() {
        axios.get("/orders/items")
            .then(data => (this.order_items = data.data.data))
    },
    methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            })

            return f.format(price)
        },
        refreshOrders() {
            let start_date = Date.parse(this.start_date)
            let end_date = Date.parse(this.end_date)

            this.view_order_items = this.order_items.filter((item) => {
                let date = Date.parse(item.date)

                return !(date < start_date || date > end_date)
            })
            console.log(this.view_order_items)
        },
        getRevenue() {
            return this.view_order_items.map(item => item.subtotal).reduce((a, b) => a + b, 0)
        },
        getVat() {
            let revenue = this.getRevenue();
            return revenue - revenue / 1.06
        },
    }
}
</script>