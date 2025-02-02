<template>

    <div class="py-4">
        <button class="js--show-posts btn btn-primary me-2" @click="loadPosts()">Show Posts</button>
        <button class="btn btn-primary" @click="count++">Count ({{count}})</button>
    </div>
    <ul class="py-4 js--show-posts-response">
        <li v-for="post in trackedPosts">
            <a :href="post.link" target="_blank"><strong>{{ post.title.rendered }}</strong></a>  
        </li>
    </ul>

    <div class="py-4">
        <counter></counter>
    </div>

</template>

<script>
import anime from 'animejs/lib/anime.es.js';

import Counter from '../components/Counter.vue';

export default {
    components: {
        Counter
    },
    data(){
        const trackedPosts = [];
        const count = 0;

        return {
            trackedPosts, count
        }

    },
    methods: {
        async loadPosts (){

            const endpoint = '/wp-json';
            const postsEndpoint = endpoint + '/wp/v2/posts';
            
            console.log('load posts');

            try {

                const response = await fetch(postsEndpoint);

                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }

                const json = await response.json();
                console.log(json);

                this.trackedPosts = json;

            } catch (error) {

                console.error(error.message);

            }

        }
    }
}
</script>


