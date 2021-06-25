<template>
    <div class="menu_items">
        <ul class="items">
            <MenuItem v-bind="menu_item" v-for="menu_item in menu_items" :key="menu_item.id" />
        </ul>
    </div>
</template>

<style lang="scss" scoped>
.menu_items {
    .items {
            display: flex;
            justify-content: center;
            flex-direction: column;
            flex-wrap: nowrap;

            list-style: none;
            padding: 2rem;

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
    menu_items: []
  }),
  created() {
    fetch("/api/menuitems")
      .then(response => response.json())
      .then(data => (this.menu_items = data.data.sort((e1, e2) => {
          console.log(e1.number > e2.number);
          return e1.number > e2.number
      }))).then(() => {
          console.log(this.menu_items);
      })
  },
  components: { MenuItem }
}
</script>
