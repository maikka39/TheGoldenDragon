<template>
  <div>
    <div id="nav">
      <router-link to="/">Home</router-link>
      <router-link v-if="isLoggedIn" to="/cash">Cash</router-link>
      <router-link v-if="!isLoggedIn" to="/login">Login</router-link>
      <button type="button" @click="logout()" v-if="isLoggedIn">
        Logout
      </button>
    </div>
    <router-view/>
  </div>
</template>

<style lang="scss">

</style>

<script>
import { mapGetters } from 'vuex'

export default {
  computed: {
    ...mapGetters([
      'isLoggedIn'
    ])
  },

  methods: {
    logout () {
      this.$store.dispatch('logout')
    }
  }
}
</script>