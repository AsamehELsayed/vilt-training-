<template>
    <div class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg p-5 mt-10 ">

        <nav class="flex mb-4 bg-white" aria-label="Breadcrumb ">
            <ol class="flex items-center  space-x-1 md:space-x-2 rtl:space-x-reverse">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                <li class="inline-flex items-center" v-for="(link, index) in links" :key="index">
                    <Link :href="link.href"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    {{ link.label }}
                    <svg class="w-3 h-3 text-gray-400 ml-3 rtl:rotate-180" aria-hidden="true"
                        v-if="index < links.length - 1" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    </Link>
                </li>
            </ol>
        </nav>
        <div class="flex justify-between items-center">

            <h2 class=" text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                {{
                    title }}</h2>
            <Link :href="button.href" as="button" v-if="showButton" type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                {{ button.label }}
                </Link>

        </div>

        <div v-if="showSearch" class="relative max-w-lg mt-5">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                </svg>
            </div>
            <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search ..." v-model="search" />
        </div>

    </div>


</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import debounce from 'lodash/debounce';
import { ref, watch } from 'vue';
defineProps({
    title: String,
    links: Array,
    showSearch: {
        type: Boolean,
        default: false,
    },
    showButton: {
        type: Boolean,
        default: true,
    },
    button: Object
})

const search = ref(null)

const emit = defineEmits({
    search: String,
});

watch(search, debounce(function (value) {
    emit('search', value);
}, 500));


</script>

<style lang="scss" scoped></style>