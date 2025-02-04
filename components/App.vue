<script>

import ResizeObserver from 'resize-observer-polyfill';
import bootstrap from 'bootstrap'

import Test from './Test.vue'
import Counter from './Counter.vue'
import Modal from './modal.vue'
import PostsDisplayAndFiltering from './posts/PostsDisplayAndFiltering'


export default {

  components: {
    Test, Counter, PostsDisplayAndFiltering, Modal
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

}
</script>