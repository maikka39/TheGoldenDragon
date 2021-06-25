<template>
    <div>
        <p>
            {{ $t("pages.contact.description") }}
        </p>
        <p class="centered">
            {{ $t("pages.contact.address") }}
        </p>
        <iframe class="gmap_canvas" src="https://maps.google.com/maps?q=Onderwijsboulevard%20215%2C%205223%20DE%20's-Hertogenbosch&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
</template>

<style lang="scss" scoped>
.centered {
    text-align: center;
}

.gmap_canvas {
    width: 100%;
    height: 60rem;
    border: none;
}
</style>
