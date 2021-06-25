<template>
    <div id="home">
        <Top />
        <Border>
            <div class="content-container">
                <Header />
                <Content class="content">
                    <router-view></router-view>
                </Content>
                <Footer />
            </div>
        </Border>
    </div>
</template>

<style lang="scss">
#home {
    height: 100%;
    width: 100%;

    background: red;
    color: yellow;

    padding: 5px;

    display: flex;
    flex-direction: column;

    border: solid darkred 3rem;
    border-top-width: 1rem;
    border-bottom-width: 1rem;

    white-space: pre-line;

    @media screen and (max-width: 860px) {
        border-width: 1rem;
    }

    .chinese {
        font-family: "chinese_takeawayregular", serif;
    }

    .content-container {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;

        .content {
            flex: 1;
            color: #000000;
            font-weight: 700;
            text-align: center;
            font-size: 1.15rem;
        }
    }
}
</style>

<script>
import Top from "./components/top"
import Border from "./components/border"
import Header from './components/header'
import Content from './components/content'
import Footer from './components/footer'

export default {
  components: {
    Top,
    Border,
    Header,
    Content,
    Footer,
  }
}
</script>
