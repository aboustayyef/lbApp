<template>
    <div id = "postsWrapper">
        <template v-if="ready">
            <post v-for="(post, i) in posts" :index="i" :post="post"></post>
        </template>
        <template v-else>Loading ... </template>
    </div>
</template>

<script>
    export default {
        mounted() {
            // get initial posts
            this.getPosts();

            // function to handle scrolling and adding posts if distance to bottom is small
            let handleScrolling = () => {
                let distance_to_bottom = document.getElementsByTagName('body')[0].scrollHeight-document.getElementsByTagName('body')[0].scrollTop - window.outerHeight;
                if (distance_to_bottom < 500) {
                    this.addPosts();
                }
                console.log(distance_to_bottom);
            }

            // listening to the window scrolling event
            window.addEventListener('scroll', _.throttle(handleScrolling, 1000));           
        },

        methods: {
            getPosts: function(){
                axios.get('/api/posts/all/' + (this.startingAt) + '/' + this.postsPerPage)
                .then( (response) => {
                    this.ready = true;
                    this.posts = this.posts.concat(response.data);
                })
                .catch(function (error) {
                console.log(error);
                });
            },
            addPosts: function(){
                this.pages++;
                this.getPosts();
            }
        },
        computed: {
            startingAt: function(){
                return (this.pages - 1) * this.postsPerPage
            },
            bbPosts: function(){
                return (this.posts.filter((post) => post.blog_id == 'blogbaladi'));
            }
        },  
        data() {
            return {
                pages:1,
                postsPerPage:10,
                ready: false,
                posts: []
            }
        }
    }
</script>
