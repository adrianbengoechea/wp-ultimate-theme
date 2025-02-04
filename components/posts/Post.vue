<template>
  <li>
    
    <div class="card w-100 h-100" style="width: 18rem;">
      <div class="card__wrap w-100 h-100">

        <figure class="media m-0">
          <a :href="post.link" target="_blank">
            <div class="media__wrap">
              <img v-if="post.featured_media" :src="post.featured_media.link" class="card-img-top" :alt="post.id">
            </div>
          </a>
        </figure>
        <div class="card-body">
          <a :href="post.link" target="_blank">
            <h5 class="card-title">{{ post.title.rendered }}</h5>
          </a>
          <div class="card-text" v-html="post.excerpt.rendered"></div>
          <a :href="post.link" class="btn btn-primary">View Post</a>
        </div>

      </div>
    </div>

  </li>
</template>

<script>
export default {
  props: [
    'post'
  ]
}
</script>

<style scoped>
  a:not(.btn){
    color: #000;
    text-decoration: none;
  }
  a:not(.btn):hover{
    text-decoration: underline;
  }
</style>