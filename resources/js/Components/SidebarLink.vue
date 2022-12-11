<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps(["href", "active"]);

const classes = computed(() =>
    props.active
        ? "relative text-lg font-bold flex items-center p-2 space-x-2 rounded-md cursor-pointer bg-emerald-400 hover:text-white"
        : "relative text-lg font-bold flex items-center p-2 space-x-2 rounded-md cursor-pointer hover:bg-emerald-400 hover:text-white"
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
