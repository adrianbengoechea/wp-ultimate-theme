import {createApp} from 'vue'
import App from './components/App.vue';

import ResizeObserver from 'resize-observer-polyfill';

import Test from './Test.vue'
import Counter from './Counter.vue'
import Modal from './modal.vue'
import PostsDisplayAndFiltering from './posts/PostsDisplayAndFiltering'

createApp({

  components: {
    Test, Counter, PostsDisplayAndFiltering, Modal
  },
  mounted(){
    
    window.ResizeObserver = ResizeObserver;

    console.log('> app');
  }

}
).mount('#site-app');