<template>
    <div class="discounts">
        <h2>{{ $t("pages.discounts.title") }}</h2>
        <div class="discounts-list">
            <div class="discount" v-for="discount in discounted_items" :key="discount.id">
                <h3 class="name">{{ discount.name }}</h3>
                <span class="expiry-date">{{ $t("pages.discounts.expires_at") }} {{ (new Date(discount.expiry_date)).toISOString().split('T')[0] }}</span>
                <p class="old-price">{{ $t("pages.discounts.old_price") }}: {{ euro(discount.old_price) }}</p>
                <p class="new-price">{{ $t("pages.discounts.discount_price") }}:</p>
                <span class="price">{{ euro(discount.new_price) }}</span>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.discounts {
    .discounts-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;

        .discount {
            background-color: yellow;
            border: red dashed 0.2rem;
            padding: 0 1rem 1rem;
            text-align: start;
            position: relative;
            font-weight: normal;

            .name {
                font-weight: bold;
            }

            .expiry-date {
                position: absolute;
                top: 0.5rem;
                right: 0.5rem;
                font-size: 0.8em;
            }

            .new-price {
                font-size: 1.2em;
            }

            .price {
                background: red;
                display: block;
                border-radius: 99999px;
                padding: 0.5rem;
                font-size: 1.5em;
                position: absolute;
                right: 0.5rem;
                bottom: 1.5rem;
            }
        }
    }
}
</style>

<script>
import axios from "axios"

export default {
    data: () => ({
        discounted_items: [],
    }),
    created() {
        axios.get("/discounts/items")
            .then(data => (this.discounted_items = data.data.data))
    },
    methods: {
        euro(price) {
            let f = new Intl.NumberFormat('nl-NL', {
                style: 'currency',
                currency: 'EUR',
            })

            return f.format(price)
        },
    }
}
</script>