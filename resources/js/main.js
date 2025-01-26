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
      count: 0,
      title: 'Wordpress + VueJS'
    }
  }

}).mount('#site-app');