<template>

    <div class="container-fluid">
        <ul class="py-4 js--show-posts-response row">
            <post v-for="post in posts" :post="post" v-bind:key="[post.id]" class="col-4 mb-3"></post>
        </ul>
    </div>

    <div class="py-4">
        <counter></counter>
    </div>

</template>

<script>

import Counter from '../Counter.vue';
import Post from './Post.vue';

export default {
    components: { Counter, Post },
    props: [
        'posts'
    ],
}
</script>

<style scoped>
ul{
    list-style: none;
    padding: 0;
}
</style>

