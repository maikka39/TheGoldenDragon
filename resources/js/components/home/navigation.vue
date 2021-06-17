<template>
    <nav class="nav">
        <ul>
            <li><router-link to="/menukaart">Menukaart</router-link></li>
            <li><router-link to="/nieuws">Nieuws</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
        </ul>
    </nav>
</template>

<style lang="scss" scoped>
.nav {
    width: max-content;

    ul {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        list-style: none;
        border-spacing: 2px;
        border-color: grey;
        border-collapse: separate;
        border-width: 1px;
        border-style: solid;
        padding: 0;
        align-content: center;
        justify-content: center;
        width: max-content;

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