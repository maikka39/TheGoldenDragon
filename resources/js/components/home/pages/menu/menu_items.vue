<template>
    <div class="menu_items">
        <div v-for="category in categories" :key="category.id">
            <h3>{{ category.name }}</h3>
            <ul class="items">
                <MenuItem v-bind="menu_item" v-for="menu_item in menu_items.filter(menu_item => menu_item.category_id === category.id)" :key="menu_item.id" />
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
import MenuItem from "./menu_item"

export default {
  data: () => ({
    categories: [],
    menu_items: [],
  }),
  created() {
    fetch("/api/categories")
      .then(response => response.json())
      .then(data => (this.categories = data.data))
    fetch("/api/menuitems")
      .then(response => response.json())
      .then(data => (this.menu_items = data.data.sort((e1, e2) => {
          return e1.number > e2.number
      })))
  },
  components: { MenuItem }
}
</script>
