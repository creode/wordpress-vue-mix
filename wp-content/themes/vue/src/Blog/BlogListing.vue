<template>
    <div v-for="post in posts">
        <blog-listing-item :title="post.name" :content="post.excerpt"></blog-listing-item>
    </div>
</template>

<script>
import BlogListingItem from './BlogListingItem.vue';

    export default {

        components: {
            BlogListingItem
        },

        mounted() {
            console.log(this.posts);
        },

        props: [ 'posts' ]
    }
</script>