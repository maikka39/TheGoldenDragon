<template>
  <div id="content">
    <div id="nav">
      <router-link to="/">Home</router-link>
      <router-link v-if="isLoggedIn" to="/cash">Cash</router-link>
      <router-link v-if="!isLoggedIn" to="/login">Login</router-link>
      <button type="button" @click="logout()" v-if="isLoggedIn">
        Logout
      </button>
    </div>
    <div id="page">
      <router-view/>
    </div>
  </div>
</template>

<style scoped lang="scss">
#content {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;

  #page {
    flex: 1;
  }
}

#nav {
  display: none
}
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
