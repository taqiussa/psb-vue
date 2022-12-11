<script setup>
// import { ref } from "vue";
// import SidebarLink from "@/Components/SidebarLink.vue";

// let open = ref(false);
</script>

<template>
    <!-- Sidebar -->
    <Sidebar />
    <!-- Right Col -->
    <div
        class="max-w-full min-h-screen ml-0 transition lg:ml-64 lg:max-w-7xl xl:max-w-full"
    >
        <!-- NavBar -->
        <Navbar />

        <!-- Main Content -->
        <div class="px-2 py-2 container-fluid">
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
