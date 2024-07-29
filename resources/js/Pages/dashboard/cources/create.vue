<template>
    <div>
        <DashboardBreadCrumb :links="[{ label: 'Dashboard', href: route('dashboard') }]" :title="'Dashboard'"
            @search="search" :showSearch="true" :button="{ label: 'Add Cource', href: route('cources.create') }"
            :showButton="true" />

    </div>





    <div
        class="bg-white border-b border-gray-200 dark:border-gray-700 shadow rounded-lg p-5 mt-10 max-w-6xl mx-auto py-20">
        <form @submit.prevent="submit" class="max-w-lg mx-auto">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="email" id="email" v-model="form.title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">body
                </label>
                <quill-editor theme="snow" toolbar="full" v-model:content="form.body"></quill-editor>

            </div>

            <div class="mb-5">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">image
                </label>
                <input @input="form.image = $event.target.files[0]"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file">
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                    800x400px).</p>

            </div>

            <div class="mb-5">

                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                    an option</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Insstractor</option>

                </select>


            </div>
            <button type="submit"
                class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>

</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineOptions({ layout: AuthenticatedLayout });
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue';


const form = useForm({
    title: null,
    body: null,
    image: null,
    instractor_id: null,
    category_id: null,
    price: null,
});


const imagePreview = ref(null);


const HandleAboutImage = (event) => {
    const file = event.target.files[0];
    if (file) {
        form.image = file;
        imagePreview.value = URL.createObjectURL(file);
    }
};



const submit = () => {
    form.post(route('cources.store'));
};

</script>

<style lang="scss" scoped></style>