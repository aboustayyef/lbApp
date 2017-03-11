<template>
    <div>
        <h1>Top Posts</h1>
        <ul v-if="ready" id="topPosts">
            <top-post v-for="(post,i) in posts" :index="i" :post="post"></top-post>
            <div>
                <h2>Get this list by mail</h2>
                <p>get the lists of top posts weekly by email</p>
            </div>
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
