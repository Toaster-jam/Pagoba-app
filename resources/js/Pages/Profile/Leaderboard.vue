<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { GiphyFetch } from '@giphy/js-fetch-api';
import { renderGrid } from '@giphy/js-components';
import { onMounted } from 'vue';
const gf = new GiphyFetch('QlhvD3QUBrT5RHO4TMTNRsxol98uqToW')
import {ref, watch} from "vue";

const selectedValue = ref(null)
const categories = ref([])
function fetchGifs(offset) {
    const value = selectedValue.value;
    if (value === null) {
        return [];
    }
    return gf.gifs(value.category_encoded, value.subcategory_encoded)
}
const gifGridContainer = ref(null);

function render() {
    return renderGrid({
        fetchGifs,
        width: 500,
        columns: 3,
        gutter: 6,
    }, gifGridContainer.value);
}

let removeFunction = null;
watch(
    selectedValue,
    (selectedCategory) => {
        if (removeFunction) {
            removeFunction();
        }
        removeFunction = render();
    }
)

onMounted(async () => {
   const { data: giphyCategories } = await gf.categories()

   categories.value = giphyCategories.map((category) => {
    const subcategories = category.subcategories.map((subcategory) => {
        return {
            name: `${category.name} - ${subcategory.name}`,
            category_encoded: category.name_encoded,
            subcategory_encoded: subcategory.name_encoded
        }
    });
    return subcategories;
   }, []).flat()
})


</script>

<template>
    <Head title="Leaderboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">GIF Leaderboard</h2>
        </template>
    <!-- {name: "nice name", category_encoded: "category_name", subcategory_encoded: "subcategory_name"} -->
       
       

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <select v-model="selectedValue" name="cars" id="cars">
            <option v-for="category in categories" :value="category">{{ category.name }}</option>
        </select>
                    <div class="p-6 text-gray-900">Top 100 Best Gifs!</div>
                    <div ref="gifGridContainer" id="gif-grid"></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


