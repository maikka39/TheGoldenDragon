<template>
    <div id="home">
        <Top />
    </div>
</template>

<style lang="scss">
#home {
    height: 100%;
    width: 100%;

    background: red;
    color: yellow;

    display: grid;

    grid-template-columns: 1fr 2fr 1fr;
    grid-template-rows: 80px 4fr 2fr;

    border: solid darkred 3rem;
    border-top-width: 1rem;
    border-bottom-width: 1rem;

    grid-template-areas:
        "top      top     top"
        ".     . ."
        ". . .";

    .chinese {
        font-family: "chinese_takeawayregular", serif;
    }
}


</style>

<script>
import Top from "./top"

export default {
  components: {
    Top
  }
}
</script>