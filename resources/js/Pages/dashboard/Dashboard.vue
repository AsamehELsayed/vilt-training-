<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineOptions({ layout: AuthenticatedLayout });
import { ref } from 'vue';

const options = ref({
    chart: {
        id: 'vuechart-example'
    },
    xaxis: {
        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
    }
});

const series = ref([{
    name: 'series-1',
    data: [30, 40, 45, 50, 49, 60, 70, 91]
}]);






</script>

<template>

    <Head title="Dashboard" />

    <DashboardBreadCrumb :links="[{ label: 'Dashboard', href: route('dashboard') }]" :title="'Dashboard'" />



    <div class=" grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6" >
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg lg:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
        <div
            class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow rounded-lg sm:p-5  mt-10 flex items-center">
            <apexchart class="w-full" type="bar" :options="options" :series="series"></apexchart>

        </div>
    </div>


</template>
