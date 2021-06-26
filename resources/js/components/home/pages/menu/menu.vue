<template>
    <div>
        <h2>{{ $t("pages.menu.title") }}</h2>
        <a href="/api/menuitems/pdf" target="_blank">{{ $t("pages.menu.download") }}</a>
        <MenuItems />
    </div>
</template>

<script>
import MenuItems from "./menu_items"

export default {
  components: {
    MenuItems,
  }
}
</script>