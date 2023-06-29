<template>
    <blog-categories :categories="categories" @setCategory="setActiveCat"></blog-categories>

    <div class="flex flex-wrap">
        <blog-listing-item class="basis-1/3" 
            v-for="post in filteredPosts"
            :title="post.name" 
            :content="post.excerpt" 
            key="{{ post.id }}" 
            >
        </blog-listing-item>
    </div>
</template>

<script>
import BlogListingItem from './BlogListingItem.vue';
import BlogCategories from './BlogCategories.vue';

    export default {
        props: [ 
            'posts', 
            'categories' 
        ],

        data() {
            return {
                currentCategoryId: 0
            }
        },

        components: {
            BlogListingItem,
            BlogCategories
        },

        computed: {

            filteredPosts() {
                if ( this.currentCategoryId == 0 ) return this.posts;

                return this.posts.filter(post => post.categories.map(category => category.id).includes(this.currentCategoryId));
            }
        },

        methods: {
            setActiveCat(id) {
                this.currentCategoryId = id;
            }
        }

    }
</script>
