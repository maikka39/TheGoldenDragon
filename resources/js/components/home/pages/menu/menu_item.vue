<template>
    <div class="menu_item">
        <h3 class="name" v-html="name"></h3>
        <span class="number">{{ number }}{{ number_addition }}.</span>
        <p class="description" v-html="description"></p>
        <span class="price">€{{ price | formatNumber }}</span>
    </div>
</template>

<style lang="scss" scoped>
.menu_item {
    display: grid;
    grid-template-columns: min-content auto auto;
    grid-template-rows: max-content max-content;
    align-items: center;
    text-align: start;
    gap: 0;
    border-bottom: .1rem solid #424242;

    @media screen and (max-width: 560px) {
        grid-template-columns: auto;
        text-align: center;
        padding: 1rem 0;
    }

    .name {
        order: 1;
        margin: 10px;
    }

    .number {
        order: 0;
    }

    .description {
        order: 3;
        grid-area: 2 / 1 / 2 / 4;
        word-wrap: break-word;

        @media screen and (max-width: 560px) {
            order: 2;
            grid-area: unset;
        }

        &:not(:empty) {
            margin: 10px;
            font-style: italic;

            &::before {
                content: "(";
            }

            &::after {
                content: ")";
            }
        }

        &:empty {
            margin: 0;
        }
    }

    .price {
        order: 2;
        text-align: end;

        @media screen and (max-width: 560px) {
            order: 3;
            text-align: center;
        }
    }
}
</style>

<script>
export default {
  props: {
    id: Number,
    name: String,
    price: Number,
    description: String,
    number: Number,
    number_addition: String,
  }
}
</script>