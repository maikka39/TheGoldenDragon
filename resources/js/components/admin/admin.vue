<template>
    <div id="admin">
        <Navigation />
        <Content class="content">
            <router-view></router-view>
        </Content>
    </div>
</template>

<style lang="scss">
#admin {
    height: 100%;
    width: 100%;

    background: aqua;
    color: black;

    // padding: 5px;

    // display: flex;
    // flex-direction: column;

    // border: solid darkred 3rem;
    // border-top-width: 1rem;
    // border-bottom-width: 1rem;

    // white-space: pre-line;

    // @media screen and (max-width: 860px) {
    //     border-width: 1rem;
    // }

    // .chinese {
    //     font-family: "chinese_takeawayregular", serif;
    // }

    // .content-container {
    //     height: 100%;
    //     width: 100%;
    //     display: flex;
    //     flex-direction: column;

    //     .content {
    //         flex: 1;
    //         color: #000000;
    //         font-weight: 700;
    //         text-align: center;
    //         font-size: 1.15rem;
    //     }
    // }
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
