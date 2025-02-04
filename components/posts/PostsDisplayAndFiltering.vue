<template>

  <load-categories-list :categories="trackedCategories" @filterCategoryByID="filterCategoryByID"></load-categories-list>
  <load-posts :posts="trackedPosts" v-if="trackedPosts.length"></load-posts>
  <div v-else>
    <div class="w-100 py-3 text-center">
      <h3>No Posts Found.</h3>
    </div>
  </div>

</template>

<script>

import LoadPosts from './LoadPosts.vue'
import LoadCategoriesList from '../categories/LoadCategoriesList.vue'

export default {
  components: {
    LoadPosts, LoadCategoriesList
  },
  data(){

    const trackedCategories = [];
    const trackedPosts = [];

    return {
      trackedCategories, trackedPosts
    }

  },
  mounted (){

    this.loadPosts();
    this.loadCategories();

  },
  methods: {

    async filterCategoryByID ( id ){
      this.loadPosts( id );

    },

    async loadPosts ( id = 0 ){

      const endpoint = '/wp-json';
      let postsEndpoint = `${endpoint}/wp/v2/posts${ id ? `?categories=${id}` : ''}`;

      console.log('load posts');

      console.log( postsEndpoint );

      try {

          const response = await fetch(postsEndpoint);

          if (!response.ok) {
              throw new Error(`Response status: ${response.status}`);
          }

          const json = await response.json();

          this.requestPostMedia( json );

      } catch (error) {

          console.error(error.message);

      }

    },

    async requestPostMedia( response ){

      const endpoint = '/wp-json';

      console.log('load posts media');

      let updatedJson = response;

      console.log(updatedJson);

      for (const key in response){
          if( response[key].featured_media ){

              const postsMediaEndpoint = endpoint + '/wp/v2/media/' + response[key].featured_media;

              
              try{

                  const mediaResponse = await fetch(postsMediaEndpoint);

                  if (!mediaResponse.ok) {
                      throw new Error(`Response status: ${response.status}`);
                  }

                  const json = await mediaResponse.json();
                  console.log('media: ', json);

                  
                  updatedJson[key].featured_media = json;
                  
                  // console.log(mediaResponse);
                  

              } catch (error) {

                  console.error(error.message);

              }

              

          }
      }


      this.trackedPosts = updatedJson;

    },

    async loadCategories(){

      const endpoint = '/wp-json';
      const categoriesEndpoint = endpoint + '/wp/v2/categories';

      try {

        const response = await fetch(categoriesEndpoint);

        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const json = await response.json();

        console.log('categories: ', json);
        this.trackedCategories = json;

      } catch (error) {

        console.error(error.message);

      }

    }

  }
}
</script>