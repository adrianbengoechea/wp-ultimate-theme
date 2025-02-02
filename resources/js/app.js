import {createApp} from 'vue'

import ResizeObserver from 'resize-observer-polyfill';

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
    
    window.ResizeObserver = ResizeObserver;

    console.log('> app');
  }

}).mount('#site-app');