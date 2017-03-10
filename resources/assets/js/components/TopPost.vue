<template>
	<figure class="image is-3by2">
		<img :src="post.post_original_image">
	</figure>
</template>

<script>
    export default {
        props: ['post'],
    }
</script>
