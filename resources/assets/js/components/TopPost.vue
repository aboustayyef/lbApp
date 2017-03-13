<template>
	<div :class="{'topPost':true, 'topPost--has_border_bottom': index < 3}">
		<div class="topPost__header">
			<img class="topPost__thumb" :src="thumblocation(post.blog.blog_thumb)">
			<div class="topPost__title">{{post.blog.blog_name}}</div>
		</div>
		<div class="topPost__body">
			<template v-if="post.post_local_image">
				<img :src="cachelocation(post.post_local_image)" width="350px">
				<h2 class="title is-4">{{post.post_title}}</h2>
			</template>
		</div>
		<div class="topPost__footer">
			
		</div>
	</div>
</template>

<script>
    export default {
        props: ['post','index'],
        methods: 
        {
	   		cachelocation: function(l){
	    			return '/img/cache/'+l+'.jpg';
	    	},
	    	thumblocation: function(t){
	    		return '/img/thumbs/'+t+'.jpg';
	    	}
	    }
    }
</script>
