<template>
    <nav class="nav">
        <ul>
            <li><router-link to="/menu">{{ $t("navigation.menu") }}</router-link></li>
            <li><router-link to="/news">{{ $t("navigation.news") }}</router-link></li>
            <li><router-link to="/contact">{{ $t("navigation.contact") }}</router-link></li>
        </ul>
    </nav>
</template>

<style lang="scss" scoped>
.nav {
    ul {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        list-style: none;
        border-spacing: 2px;
        border-color: grey;
        border-collapse: separate;
        border-width: 1px;
        border-style: solid;
        padding: 0;
        align-content: center;
        justify-content: center;

        li {
            padding: .1rem 2rem;
            margin: .1rem;
            color: #ffffff;
            background: #1135ff;
            font-size: 1.5rem;
            line-height: 1.2em;
            background: linear-gradient(0deg, #1135ff 0%, #0081ff 50%, #00fffc 100%);

            a {
                text-decoration: none;
                color: inherit;
            }
        }
    }
}
</style>
