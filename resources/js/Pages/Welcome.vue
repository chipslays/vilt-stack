<template>
    <div class="flex h-screen">
        <div class="m-auto text-center">
            <Logo />
            <Navbar />
            <p class="mt-4 font-mono text-base text-gray-500 uppercase">
                Now do some shit 🤟
            </p>
        </div>
    </div>
</template>

<script>
import Logo from "./../Components/Logo.vue";
import Navbar from "./../Components/Navbar.vue";

export default {
    components: {
        Logo,
        Navbar,
    },
};
</script>

<style lang="postcss" scoped>
</style>
