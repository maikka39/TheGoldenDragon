<template>
    <div class="menu">
        <h2>{{ $t("pages.menu.title") }}</h2>
        <router-link class="scroll" to="/discounts">{{ $t("pages.menu.discounts") }}</router-link>
        <a href="/api/menuitems/pdf" target="_blank">{{ $t("pages.menu.download") }}</a>
        <MenuItems />
    </div>
</template>

<style lang="scss" scoped>
.menu {
  > * {
    display: block;
  }
}
</style>

<script>
import MenuItems from "./menu_items"

export default {
  components: {
    MenuItems,
  }
}
</script>