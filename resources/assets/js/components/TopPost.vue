<template>
	<div class="topPost">
		<div class="topPost__header">
			{{post.blog.blog_name}}
		</div>
		<div class="topPost__body">
			<h2>{{post.post_title}}</h2>
			<img :src="post.post_original_image" width="350px">
		</div>
		<div class="topPost__footer">
			
		</div>
	</div>	
</template>

<script>
    export default {
        props: ['post'],
    }
</script>
