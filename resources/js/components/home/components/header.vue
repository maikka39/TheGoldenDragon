<template>
    <div class="header">
        <img src="/img/dragon-large.png" alt="Draak" class="logo">
        <div class="center-info">
            <h1 class="title">De Gouden Draak</h1>
            <strong class="info">Chinees Indische Specialiteiten</strong>
            <Navigation class="nav" />
        </div>
        <img src="/img/dragon-large.png" alt="Draak" class="logo flipped">
    </div>
</template>

<style lang="scss" scoped>
.header {
    width: 100%;
    // display: flex;
    // flex-direction: row;
    // flex-wrap: nowrap;
    // align-items: flex-end;
    // justify-content: space-between;
    display: grid;
    grid-template-columns: auto auto auto;
    align-items: end;

    @media screen and (max-width: 1220px) {
        grid-template-columns: 1fr 1fr;

        .center-info {
            grid-area: 2 / 1 / 2 / 3;
            padding-top: 3rem !important;
        }

        .logo {
            justify-self: center !important;
        }
    }

    .center-info {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        padding: 0 1rem;
        text-align: center;

        .title {
            order: 1;
            font-size: 2.8rem;
            font-weight: 900;
            margin: 0.5rem 0;
        }

        .info {
            order: 0;
            font-size: 2.6rem;
            font-weight: 800;
        }

        .nav {
            order: 2;
        }
    }

    .logo {
        height: 200px;
        justify-self: left;

        &:nth-child(3) {
            justify-self: right;
        }
    }
}
</style>

<script>
import Navigation from "./navigation"

export default {
  components: {
    Navigation,
  }
}
</script>