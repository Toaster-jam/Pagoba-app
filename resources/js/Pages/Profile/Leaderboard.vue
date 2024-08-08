<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { GiphyFetch } from '@giphy/js-fetch-api';
import { onMounted } from 'vue';
const gf = new GiphyFetch('QlhvD3QUBrT5RHO4TMTNRsxol98uqToW')
import {ref} from "vue";

const selectedValue = ref(null)
const categories = ref([])
function fetchGifs(offset) {
    return gf.trending({offset, limit: 10})
}
//
onMounted(async () => {
   const { data: giphyCategories } = await gf.categories()
   
   categories.value = giphyCategories.map((category) => {
    const subcategories = category.subcategories.map((subcategory) => {
        return {
            name: `${category.name} - ${subcategory.name}`,
            category_encoded: category.name_encoded,
            subcategory_encoded: subcategory.name_encoded
        }
    });console.log(categories)
    return subcategories;
   }, []).flat()
//categories.forEach((category) => {
    //console.log(category) // ICategory
//})
})

</script>

<template>
    <Head title="Leaderboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">GIF Leaderboard</h2>
        </template>

        <select v-model="selectedValue" name="cars" id="cars">
            <option v-for="category in categories" :value="category">{{ category.name }}</option>
        </select>
       

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Top 100 Best Gifs! {{ selectedValue }}</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


