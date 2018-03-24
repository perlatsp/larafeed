<template>
    <v-list>
        <v-subheader>Latest Posts</v-subheader>
        <v-list-tile @click="" v-for="post in posts" :key="post.id">
            <v-list-tile-content>
                <v-list-tile-title>
                    {{post.title}}
                </v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-avatar flat>
                <img :src="post.image">
            </v-list-tile-avatar>
        </v-list-tile>
    </v-list>
</template>

<script>
    export default {
        name: "latest-posts",
        data(){
            return {
                posts:[],
                fab:false
            }
        },
        props:{
            latest:{
                type:Number,
                default:5
            }
        },
        methods:{
            getLatestPosts(){
                axios.get('/api/posts?latest='+this.latest)
                    .then(response=>{
                        this.posts = response.data.posts;
                        console.log(response.data.posts)
                    })
            }
        },
        mounted(){
            this.getLatestPosts();
        }
    }
</script>

<style scoped>

</style>