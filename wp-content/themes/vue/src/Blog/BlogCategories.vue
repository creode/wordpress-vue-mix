<template>
    <ul>
        <li>
            <a href="#" :key="0" @click.prevent="setActiveCategory(0)">All</a>
        </li>

        <li v-for="category in categories">
            <a :href="category.slug" 
                @click.prevent="setActiveCategory(category.id)" 
                :key="category.id">
                {{ category.name  }}
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['categories'],

        emits: ['setCategory'],

        methods: {
            setActiveCategory(id) {
                this.$emit('setCategory', id);
            }
        },

    }
</script>