<template>
    <div>
        <h1>Top Posts</h1>
        <ul v-if="ready">
            <top-post v-for="post in posts" :post="post"></top-post>
        </ul>
        <span v-else>Loading..</span>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getTopPosts();
        },
        methods: {
            getTopPosts: function(){
                axios.get('/api/posts/top/5')
                .then( (response) => {
                    this.ready = true;
                    this.posts = response.data;
                })
                .catch(function (error) {
                console.log(error);
                });
            }
        },
        data() {
            return {
                ready: false,
                posts: {},
            }
        }
    }
</script>
