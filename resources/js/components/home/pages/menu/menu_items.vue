<template>
    <div class="menu_items">
        <div v-for="category in categories" :key="category.id">
            <h3>{{ category.name }}</h3>
            <ul class="items">
                <MenuItem v-bind="menu_item" v-for="menu_item in sortedMenuItems().filter(menu_item => menu_item.category_id === category.id)" :key="menu_item.id" />
            </ul>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.menu_items {
    h3 {
        font-size: 2rem;
        margin: 2.5rem 0 0;
    }

    .items {
            display: flex;
            justify-content: center;
            flex-direction: column;
            flex-wrap: nowrap;

            list-style: none;
            padding: 0 2rem;

            @media screen and (max-width: 860px) {
                padding: 0;
            }
    }
}
</style>

<script>
import axios from "axios"
import MenuItem from "./menu_item"

export default {
  data: () => ({
    categories: [],
    menu_items: [],
  }),
  created() {
    axios.get("/categories")
      .then(data => (this.categories = data.data.data))
    axios.get("/menuitems")
      .then(data => (this.menu_items = data.data.data))
  },
  methods: {
    sortedMenuItems() {
      return [...this.menu_items].sort((a, b) => {
        if (a.number > b.number) return 1

        if (a.number !== b.number) return -1

        if (b.number_addition === null) return 1

        if (a.number_addition > b.number_addition) return 1

        return -1
      })
    },
  },
  components: { MenuItem }
}
</script>
