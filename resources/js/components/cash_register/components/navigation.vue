<template>
    <nav class="nav">
        <img class="logo" src="/img/goodpay_logo.png" alt="Goodpay logo">
        <ul class="items">
            <li class="item"><router-link to="/cashregister/">Kassa</router-link></li>
            <li class="item"><router-link to="/cashregister/menu">Gerechten</router-link></li>
            <li class="item"><router-link to="/cashregister/orders">Verkoop Overzicht</router-link></li>
            <li class="item"><router-link to="/logout">Log uit</router-link></li>
        </ul>
    </nav>
</template>

<style lang="scss" scoped>
.nav {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    height: 6rem;
    border-bottom: 3px solid #0066ff;

    .logo {
        height: 100%;
        padding: 0.25rem 1rem;
    }

    .items {
        display: flex;
        flex-direction: row;
        list-style: none;
        align-content: center;
        justify-content: center;
        padding: .5rem 2rem;


        .item {
            background-color: #deebf7;
            font-weight: bold;
            border: 1px solid #0066ff;
            border-radius: 10px;
            color: #0066ff;
            text-align: center;
            margin: 0.1rem 0.5rem;
            padding: 0.2rem 0.4rem;
            font-size: 1.5rem;
            min-width: 10rem;

            display: flex;
            justify-content: center;
            align-items: center;


            a {
                text-decoration: none;
                color: inherit;
                width: 100%;
                height: 100%;
            }
        }
    }
}
</style>
