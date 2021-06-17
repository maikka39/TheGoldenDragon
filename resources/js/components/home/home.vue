<template>
    <div id="home">
        <Top />
        <Border>
            <div class="content-container">
                <Header />
                <Content class="content">
                    <div style="width: 100px; height: 10px; background: green;"></div>
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
        }
    }
}
</style>

<script>
import Top from "./top"
import Border from "./border"
import Header from './header'
import Content from './content'
import Footer from './footer'

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