<template>
    <div id="menu">
        <div class="items-container">
            <div class="actions">
                <button class="save" @click="submit">Opslaan</button>
                <input class="number" name="dish_number" type="number" placeholder="Nr." v-model="new_item.number">
                <input class="number-addition" name="dish_number_addition" type="text" placeholder="Toev." v-model="new_item.number_addition">
                <input class="name" name="dish_name" type="text" placeholder="Naam" v-model="new_item.name">
                <input class="price" name="dish_price" type="number" placeholder="Prijs" v-model="new_item.price">
                <textarea class="description" name="dish_description" placeholder="Opmerking" v-model="new_item.description"></textarea>
                <select class="category" v-model="new_item.category_id">
                    <option disabled value="">Selecteer een categorie</option>
                    <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                </select>
                <button class="insert" @click="insertNewItem">Invoegen</button>
            </div>
            <div v-for="category in categories" :key="category.id">
                <h3 class="title">{{ category.name }}</h3>
                <ul class="items">
                    <div class="item" v-for="item in sortedMenuItems().filter(menu_item => menu_item.category_id === category.id)" :key="item.id">
                        <input class="name" name="dish_name" type="text" v-model="item.name">
                        <span class="number">{{ item.number }}{{ item.number_addition }}.</span>
                        <textarea class="description" name="dish_description" v-model="item.description"></textarea>
                        <div class="price">
                            <span>&euro;</span>
                            <input name="price" type="number" v-model="item.price" :min="0">
                        </div>
                        <div class="other">
                            <button class="remove" @click="removeItem(item)">X</button>
                        </div>
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

    .actions {
        width: 853px;
        max-width: 100%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 80px 80px auto 140px;
        grid-template-areas:
            "save        save            save        save"
            "number      number_addition name        price"
            "description description     description description"
            "category    category        category    category"
            "insert      insert          insert      insert";

        > * {
            margin: 0.25rem 0.5rem;
        }

        .save,
        .insert {
            height: 3rem;
        }

        .save {
            grid-area: save;
        }

        .number {
            grid-area: number;
        }

        .number-addition {
            grid-area: number_addition;
        }

        .name {
            grid-area: name;
        }

        .price {
            grid-area: price;
        }

        .description {
            grid-area: description;
        }

        .category {
            grid-area: category;
        }

        .insert {
            grid-area: insert;
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
            width: 853px;
            max-width: 100%;

            .name {
                order: 1;
                margin: 10px;
                font-size: 1.2rem;
                font-weight: bold;
            }

            .number {
                order: 0;
            }

            .description {
                order: 3;
                grid-area: 2 / 1 / 2 / 4;
                word-wrap: break-word;
                margin-top: 0 !important;

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
        new_item: {},
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

        sortedMenuItems() {
            return [...this.menu_items].sort((a, b) => {
                if (a.number > b.number) return 1

                if (a.number !== b.number) return -1

                if (b.number_addition === null) return 1

                if (a.number_addition > b.number_addition) return 1

                return -1
            })
        },

        removeItem(item) {
            this.menu_items = this.menu_items.filter(menu_item => menu_item != item)
        },

        insertNewItem() {
            this.new_item.id = Math.max(...this.menu_items.map(item => item.id)) + 1
            window.menu_items = this.menu_items
            this.menu_items.push(this.new_item)
            console.log(this.new_item);
            // this.new_item = {}
        },

        submit() {
            axios.put("/menuitems", this.menu_items.map(item => {return {
                id: item.id,
                name: item.name,
                description: item.description,
                price: item.price,
                number: item.number,
                number_addition: item.number_addition,
                category_id: item.category_id,
            }})).then(() => {
                alert("Menuitems opgeslagen")

                axios.get("/menuitems")
                    .then(data => (this.menu_items = data.data.data))
            })
        },
    },
}
</script>