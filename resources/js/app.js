import {createApp} from 'vue'

import Test from '../../components/Test.vue'
import Counter from '../../components/Counter.vue'
import LoadPosts from '../../components/LoadPosts.vue'

createApp({

  components: {
    Test, Counter, LoadPosts
  },
  data(){
    return {
      title: 'Wordpress + VueJS'
    }
  },
  mounted(){
    console.log('> app');
  }

}).mount('#site-app');