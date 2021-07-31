<template>
    <div id="default">
        <div class="date">
            <select v-model="selected_menu_item_id">
                <option disabled value="">Selecteer een gerecht</option>
                <option v-for="item in menu_items" :key="item.id" :value="item.id">{{ item.number }}{{ item.number_addition }}. {{ item.name }}</option>
            </select>
            <p>Huidige prijs: {{ euro(currentItem().price) }}</p>
            <label for="new_price">Nieuwe prijs: &euro;</label>
            <input id="new_price" name="new_price" type="number" v-model="new_price" :min="0">
            <button type="button" @click="createDiscaount()">Maak aanbieding</button>
        </div>

        <div class="total"></div>

        <div class="order-items-container">
            <div class="order-items items-container">
                <ul class="items">
                    <li class="item" v-for="item in discounted_items" :key="item.id">
                        <h4 class="name" v-html="item.name"></h4>
                        <span class="old_price">{{ euro(item.old_price) }}</span>
                        <span class="new_price">{{ euro(item.new_price) }}</span>
                        <span class="end_date">{{ new Date(item.expiry_date).toDateString() }}</span>
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
        padding: 1rem;
        height: 75vh;

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
            grid-template-columns: auto max-content max-content max-content;
            grid-template-rows: max-content max-content;
            align-items: center;
            text-align: start;
            gap: 0rem 2rem;
            border-bottom: .1rem solid #424242;

            .name {
                margin: 10px;
                font-weight: inherit;
                font-size: 1.2rem;
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
        discounted_items: [],
        selected_menu_item_id: '',
        new_price: 0,
    }),
    created() {
        axios.get("/categories")
            .then(data => (this.categories = data.data.data))
        axios.get("/menuitems")
            .then(data => (this.menu_items = data.data.data))
        axios.get("/discounts/items")
            .then(data => (this.discounted_items = data.data.data))
    },
    methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            })

            return f.format(price)
        },

        createDiscaount() {
            if (this.currentItem().id === undefined) {
                alert("Please select an item")
                return
            }

            var now = new Date();
            var expiry_date = new Date(now.getFullYear(), now.getMonth(), now.getDate()+7);

            axios.post("/discounts/create", {
                menu_item_id: this.currentItem().id,
                new_price: this.new_price,
                expiry_date: expiry_date.toISOString(),
            }).then(() => {
                alert("Aanbieding verstuurd")

                this.selected_menu_item_id = ''
                this.new_price = ''

                axios.get("/discounts/items")
                    .then(data => (this.discounted_items = data.data.data))
            })
        },

        currentItem() {
            let menu_item = this.menu_items.filter(item => item.id === this.selected_menu_item_id).pop()

            if (menu_item === undefined)
                return {}

            return menu_item
        },
    },
}
</script>