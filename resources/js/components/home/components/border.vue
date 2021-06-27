<template>
    <div class="custom-border">
        <slot></slot>
    </div>
</template>

<style lang="scss">
.custom-border {
    width: 100%;
    min-height: 100%;

    border-image-source: url('/img/border.png');
    border-image-slice: 110 fill;
    border-image-width: 100px;
    border-image-outset: 0;
    border-image-repeat: repeat;

    padding: 100px;

    @media screen and (max-width: 1220px) {
        padding: 60px;
    }
}
</style>

<script>

</script>
