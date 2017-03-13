<template>
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img :src="post.post_original_image" alt="Image">
        </figure>
      </div>
      <div class="card-content">
        <div class="media">
          <div class="media-left">
            <figure class="image" style="height: 40px; width: 40px;">
              <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <p class="title is-4">{{post.blog.blog_title}}</p>
            <p class="subtitle is-6">{{post.blog.blog_name}}</p>
          </div>
        </div>

        <div class="content">
          <a :href="post.post_url">{{index}}- {{post.post_title}}</a>
          <br>
          <small>11:09 PM - 1 Jan 2016</small>
        </div>
      </div>
    </div>
</template>
<script>
    export default {
        props: ['post', 'index'],
    }
</script>
