<script>

export default {
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

// import { ref } from 'vue'
// export default {

//     setup() {
        
//         

//         async function loadPosts () {

//             

//         }


//         // expose to template and other options API hooks
//         return {
//             count, trackedPosts, loadPosts
//         }
//     }

// }
</script>

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

</template>

