<template>
    <div class="top">
        <router-link to="/" class="logo">
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">De Gouden Draak</span>
            <img src="/img/dragon-small.png" alt="Draak" class="flipped">
        </router-link>
        <div class="scrolling-text">
            <a class="scroll" href="#">
                Welkom bij De Gouden Draak. Klik op deze tekst om de aanbiedingen van deze week te zien!
            </a>
        </div>
        <router-link to="/" class="logo">
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">De Gouden Draak</span>
            <img src="/img/dragon-small.png" alt="Draak" class="flipped">
        </router-link>
    </div>
</template>

<style lang="scss" scoped>
.top {
    grid-area: top;

    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;

    padding: 5px 10px;


    .logo {
        flex: 1;
        display: inline-block;
        padding: 0 2rem;
        text-decoration: none;
        color: inherit;

        font-size: 1.6rem;

        img {
            height: 60px;
        }
    }
    .scrolling-text {
        flex: 1.5;
        font-weight: bold;
        font-size: 1.2rem;
        overflow: hidden;
        position: relative;
        display: inline-block;
        height: 1.2em;

        .scroll {
            text-decoration: none;
            color: inherit;
            line-height: 1.2em;
            position: absolute;
            width: max-content;
            margin: 0;
            white-space: nowrap;
            transform: translateX(0);
            text-align: center;
            animation: scroll-left 15s linear infinite;
            padding-left: 100%;
        }
    }
}

@keyframes scroll-left {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>