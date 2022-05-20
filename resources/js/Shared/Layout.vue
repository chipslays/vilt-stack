<template>
    <Head>
        <title>{{ title ? `${title} — ${$page.props.app.name}` : $page.props.app.name }}</title>
    </Head>
    <main class="selection:text-white selection:bg-black">
        <slot />
    </main>
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    title: String,
});
</script>
