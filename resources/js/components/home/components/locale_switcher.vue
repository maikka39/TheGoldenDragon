<template>
  <!-- <div class="locale-switcher">🌐 {{$i18n.locale}}</div> -->
    <div class="locale-switcher">
        <span>🌐</span>
        <select v-model="$i18n.locale" @change="langSelected">
            <option value="en">English</option>
            <option value="nl">Nederlands</option>
        </select>
  </div>
</template>

<script>
export default {
  methods: {
    langSelected(event) {
      this.$cookies.set("language", event.target.value)
    }
  }
}
</script>