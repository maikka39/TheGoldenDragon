<template>
    <div id="menu">
        <div class="items-container">
            <div v-for="category in categories" :key="category.id">
                <h3 class="title">{{ category.name }}</h3>
                <ul class="items">
                    <div class="item" v-for="item in menu_items.filter(menu_item => menu_item.category_id === category.id)" :key="item.id">
                        <h4 class="name" v-html="item.name"></h4>
                        <span class="number">{{ item.number }}{{ item.number_addition }}.</span>
                        <p class="description" v-html="item.description"></p>
                        <span class="price">{{ euro(item.price) }}</span>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#menu {
    height: 100%;

    display: flex;
    justify-content: center;

    > * {
        border: 1px solid #0066ff;
        border-radius: 5px;
        max-width: 1100px;
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
    methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            })

            return f.format(price)
        },
    },
}
</script>