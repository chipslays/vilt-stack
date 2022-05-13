<template>
    <Head>
        <title>{{ title ? `${title} — ${$page.props.app.name}` : $page.props.app.name }}</title>
    </Head>
    <main class="selection:text-white selection:bg-black">
        <slot />
    </main>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Head,
        Link,
    },
    props: {
        title: String,
    },
};
</script>

<style lang="postcss" scoped>
</style>
