<template>
    <div id="customer">
        <Navigation />
        <Content class="content">
            <router-view></router-view>
        </Content>
    </div>
</template>

<style lang="scss">
#customer {
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;


    background: #fffaf0;
    color: black;

    .content {
      height: 0px;
      flex: 1;
    }
}
</style>

<script>
import Content from './components/content'
import Navigation from './components/navigation'

export default {
  components: {
    Navigation,
    Content,
  }
}
</script>
