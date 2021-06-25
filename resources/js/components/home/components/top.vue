<template>
    <div class="top">
        <router-link to="/" class="logo">
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">{{ $t("general.name") }}</span>
            <img src="/img/dragon-small.png" alt="Draak" class="flipped">
        </router-link>
        <div class="scrolling-text">
            <a class="scroll" href="#">
                {{ $t("sliding_text.text") }}
            </a>
        </div>
        <router-link to="/" class="logo">
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">{{ $t("general.name") }}</span>
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

    @media screen and (max-width: 960px) {
        flex-direction: column;
    }


    .logo {
        flex: 1;
        display: inline-block;
        padding: 0 1rem;
        text-decoration: none;
        color: inherit;
        text-align: center;
        white-space: nowrap;

        font-size: 1.6rem;

        img {
            height: 10vw;
            max-height: 50px;
        }

        @media screen and (max-width: 1220px) {
            font-size: 1.4rem;
        }

        @media screen and (max-width: 960px) {
            padding: 0;

            &:not(:first-of-type) {
                display: none;
            }
        }

        @media screen and (max-width: 420px) {
            font-size: 1.2rem;
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

        @media screen and (max-width: 960px) {
            width: 80%;
            min-height: 1.2em;
            display: block;
            margin: 1rem;
        }

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
