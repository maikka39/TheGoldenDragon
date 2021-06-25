<template>
    <div>
        <p>{{ $t("pages.home.best_takeaway_meals") }}</p>
        <p>{{ $t("pages.home.authentic_meals") }}</p>

        <div>
            <h2>{{ $t("pages.home.student_sale") }}</h2>
            <h3>{{ $t("pages.home.chinese_rice_table") }}</h3>
            <p>
                {{ $t("pages.home.three_meal_choices") }}
            </p>
            <ul>
                <li>{{ $t("pages.home.meals.koe_loe_yuk") }}</li>
                <li>{{ $t("pages.home.meals.foe_yong_hai") }}</li>
                <li>{{ $t("pages.home.meals.tjap_tjoy") }}</li>
                <li>{{ $t("pages.home.meals.shrimp") }}</li>
                <li>{{ $t("pages.home.meals.babi_pangang") }}</li>
                <li>{{ $t("pages.home.meals.chicken_breast") }}</li>
            </ul>
            <p>{{ $t("pages.home.with_white_rice") }}</p>
            <p>
                <strong>{{ $t("pages.home.price") }}: €21,00</strong>
            </p>
        </div>
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
