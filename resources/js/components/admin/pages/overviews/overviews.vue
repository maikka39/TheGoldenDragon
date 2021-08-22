<template>
    <div id="overviews">
        <div class="items">
            <h2 class="title">Overzichten</h2>
            <ul>
                <li v-for="overview in overviews" :key="overview.id">
                    <h3 class="date">{{ overview.date }}</h3>
                    <a class="download" :href="overview.filename">Download</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#overviews {
    height: 100%;

    display: flex;
    justify-content: center;

    > * {
        border: 1px solid #0066ff;
        border-radius: 5px;
        max-width: 1100px;
    }

    .title {
        font-size: 2rem;
        margin: 2.5rem 0 0;
        text-align: center;
    }

    .items {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;

        list-style: none;
        padding: 0 2rem;

        .item {
            display: grid;
            grid-template-columns: min-content auto auto max-content;
            grid-template-rows: max-content max-content;
            align-items: center;
            text-align: start;
            gap: 0;
            border-bottom: .1rem solid #424242;
            width: 853px;
            max-width: 100%;

            .name {
                order: 1;
                margin: 10px;
                font-size: 1.2rem;
                font-weight: bold;
            }

            .number {
                order: 0;
            }

            .description {
                order: 3;
                grid-area: 2 / 1 / 2 / 4;
                word-wrap: break-word;
                margin-top: 0 !important;

                &:empty {
                    margin: 0;
                }
            }

            .price {
                order: 2;
                text-align: end;
            }

            .other {
                order: 3;
                margin: 0 1rem;
            }
        }
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        overviews: [],
    }),
    created() {
        axios.get("/daily_reports")
            .then(data => (this.overviews = data.data.data))
    },
    methods: {
    },
}
</script>