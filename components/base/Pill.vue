<template>
  <div>
    <a :href="category.link" @click.prevent="PillClicked" class="btn btn-warning">
      <span class="a__wrap">{{ category.name }}</span>
    </a>
  </div>
</template>

<script>
export default {
  props: ['category'],
  methods: {
    PillClicked(){
      
    
      this.$emit('PillClicked', this.category.id);

    }
  }
}
</script>

<style scoped>
  a.btn{
    text-decoration: none;
    min-width: 75px;
    border-radius: 100px;
  }
</style>