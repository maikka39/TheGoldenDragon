<template>
    <div class="top">
        <div>
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">De Gouden Draak</span>
            <img src="/img/dragon-small.png" alt="Draak" class="flipped">
        </div>
        <div class="scrolling-text">
            <marquee behavior="scroll" direction="left">
                Welkom bij De Gouden Draak. Klik op deze tekst om de aanbiedingen van deze week te zien!
            </marquee>
        </div>
        <div>
            <img src="/img/dragon-small.png" alt="Draak">
            <span class="chinese">De Gouden Draak</span>
            <img src="/img/dragon-small.png" alt="Draak" class="flipped">
        </div>
    </div>
</template>

<style lang="scss" scoped>
.top {
    grid-area: top;

    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;

    padding: 5px 10px;

    > div {
        height: 100%;
        flex: 1;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 0 0.5rem;

        font-size: 1.6rem;

        > * {
            padding: 0.2rem;
        }


        &.scrolling-text {
            flex: 1.5;
            font-weight: bold;
            font-size: 1.2rem;
        }

        img {
            height: 100%;
        }
    }
}

</style>