<template>
    <div class="content">
        <slot></slot>
    </div>
</template>

<style lang="scss" scoped>
.content {
    margin: 2.5rem 3.5rem 1.5rem;
    padding: 1rem;
    border: 1px solid #000;
    background: #fffaf0;

    @media screen and (max-width: 1220px) {
        margin: 2.5rem 1.5rem 1.5rem;
    }

    @media screen and (max-width: 860px) {
        margin: 2.5rem 0rem 1.5rem;
    }
}
</style>
