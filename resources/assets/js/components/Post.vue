<template>
    <v-card hover transition="slide-x-transition" :href="'/posts/'+post.id">
        <v-card-media
                class="white--text"
                height="170px"
                :src="post.image"
        >
        </v-card-media>

        <v-card-title align-center>
            <h3 class="headline text-sm-center">
                {{post.title}}
            </h3>
        </v-card-title>

        <v-card-text>
            {{ post.body.substr(0,200) }}
        </v-card-text>
        <v-card-actions>
            <v-btn icon class="red--text" >
                <v-icon>share</v-icon>
            </v-btn>

            <v-btn icon class="light-blue--text">
                <v-icon medium>fab fa-twitter</v-icon>
            </v-btn>
            <v-btn icon class="blue--text text--darken-4">
                <v-icon medium>fab fa-facebook</v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn flat class="blue--text">Read More</v-btn>
        </v-card-actions>

    </v-card>


</template>

<script>
    export default {
        name: "post",
        props: {
            post: {}
        },
        data(){
            return {
                fab: false
            }
        }
    }
</script>

<style scoped>

</style>