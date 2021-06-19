<template>
    <div class="footer">
        <router-link to="/contact">{{ $t("footer.to_contact") }}</router-link>
        <LocaleSwitcher />
    </div>
</template>

<style lang="scss" scoped>
.footer {
    text-align: center;

    a {
        text-decoration: none;
        color: inherit;
    }
}
</style>

<script>
import LocaleSwitcher from "./locale_switcher"

export default {
  components: {
    LocaleSwitcher,
  }
}
</script>
