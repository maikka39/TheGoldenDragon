<template>
    <div class="menu_item">
        <button class="favorite-button" @click="toggleFavorite">
            <svg :class="'favorite ' + (isFavorite() ? 'is-favorite' : '')" height="511pt" viewBox="0 -10 511.98685 511" width="511pt" xmlns="http://www.w3.org/2000/svg">
                <title>{{ isFavorite() ? "Favorite" : "Not favorite" }}</title>
                <path
                    d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                />
            </svg>
        </button>
        <h4 class="name" v-html="name"></h4>
        <span class="number">{{ number }}{{ number_addition }}.</span>
        <p class="description" v-html="description"></p>
        <span class="price">{{ euro(price) }}</span>
    </div>
</template>

<style lang="scss" scoped>
.menu_item {
    display: grid;
    grid-template-columns: min-content min-content auto auto;
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

    .favorite-button {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }

    .favorite {
        height: 1em;
        width: 1em;
        padding: 0.2rem;
        margin-right: 0.5rem;

        &.is-favorite path {
            fill: #ffc107;
        }
    }

    .name {
        order: 1;
        margin: 10px;
        font-size: 1.2rem;
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
  },
  methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            });

            return f.format(price);
        },

        toggleFavorite() {
            if (!this.$cookies.isKey("favorites")) {
                this.$cookies.set("favorites", {favorites: []})
            }

            let favorites = this.$cookies.get("favorites").favorites

            if (!this.isFavorite())
                favorites.push(this.$props.id)
            else
                favorites.splice(favorites.indexOf(this.$props.id, 1))

            this.$cookies.set("favorites", {favorites})

            this.$forceUpdate()
        },

        isFavorite() {
            if (!this.$cookies.isKey("favorites"))
                return false

            return this.$cookies.get("favorites").favorites.includes(this.$props.id)
        }
  },
}
</script>