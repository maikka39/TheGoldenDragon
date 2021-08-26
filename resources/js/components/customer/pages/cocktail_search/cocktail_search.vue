<template>
    <div id="default">
        <div class="cocktails items-container">
            <div class="search">
                <input class="input" type="text" min="0" v-model="search_string">
                <button class="search-button" v-on:click="search">Zoek</button>
            </div>
            <div class="result" v-for="result in results" :key="result.idDrink">
                <h3 class="title">{{ result.strDrink }}</h3>
                <span class="number">{{ result.strCategory }} {{result.strAlcoholic}}</span>
                <p class="description">{{result.strInstructions}}</p>
                <!-- <span class="price">{{ euro(item.price) }}</span> -->
                <img class="other" :src="result.strDrinkThumb" alt="" />
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#default {
    height: 100%;

    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    gap: 1rem;

    grid-template-areas:
        "items";

    > * {
        border: 1px solid #0066ff;
        border-radius: 5px;
    }

    .cocktails {
        grid-area: items;
        text-align: center;

        img {
            width: 70%;
        }

        .result {
            max-width: 40rem;
            margin: auto;

        }
    }

    .title {
        font-size: 2rem;
        margin: 2.5rem 0 0;
        text-align: center;
    }

    .search {
        margin: 1rem auto;
        width: 80%;
        padding: 0 2rem;

        .input {
            width: 100%;
        }
    }

    .items-container {
        overflow-y: scroll;
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        search_string: "",
        results: [],
    }),
    methods: {
        search() {
            axios.get(`/cocktails/search/${this.search_string}`)
            .then(data => (this.results = data.data.drinks))
        },
    }
}
</script>