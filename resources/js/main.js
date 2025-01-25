(function(){

    const siteAppID = '#site-app';
    const { createApp, ref } = Vue

    createApp({
      setup() {
        const title = ref('Hello vue!')
        const count = ref(0);

        const endpoint = '/wp-json';
        const postsEndpoint = endpoint + '/wp/v2/posts';

        const trackedPosts = ref([]);

        async function loadPosts () {

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
        return {
          title, count, loadPosts, trackedPosts
        }
      }
    }).mount( siteAppID )
    
})();