<template>
    <div>
        <h2>{{ $t("pages.menu.title") }}</h2>
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