<template>
  <div class="container-fluid pt-3">
    <div class="row">
      <div class="col col-12">
        <ul class="p-0 d-flex gap-2">
          <pill @PillClicked="CategoryPillClicked" v-for="category in categories" :key="category.id" :category="category"></pill>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>

import Pill from '../base/Pill.vue'

export default {
  props: [
    'categories'
  ],
  components: {
    Pill
  },
  methods: {
    CategoryPillClicked( id ){
      this.$emit('filterCategoryByID', id);
      // alert(id);
    }
  }
}
</script>