<template>
    <div>
        <label for="table_id">Tafel nr.</label>
        <input id="table_id" name="table_id" class="input" type="number" min="0" v-model="table_id">
        <button v-on:click="askHelp">Help</button>
        <p>{{response}}</p>
    </div>
</template>

<style lang="scss" scoped>
h2 {
    margin: 2.8rem 0 1.5rem;
    text-decoration: underline;
    font-size: 1.6rem;
}

h3 {
    font-size: 2.2rem;
    margin: 1rem 0;
}

ul {
    list-style: none;
    display: grid;
    gap: 1rem 15%;
    grid-template-columns: 1fr 1fr;
    margin: 2rem auto;
    padding: 0;
    width: 70%;

    li {
        justify-self: right;
        display: block;
        text-align: start;
        // width: max-content;

        &:nth-child(even) {
            justify-self: left;
        }
    }
}

p {
    strong {
        font-size: 2rem;
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        table_id: "",
        response: "",
    }),
    methods: {
        askHelp() {
            if (this.table_id === "") {
                alert("Please enter your table id.")
                return
            }
            axios.get(`/askhelp/${this.table_id}`).then((data) => (this.response = data.data))
        },
    }
}
</script>