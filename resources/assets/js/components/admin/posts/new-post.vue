<template>
    <v-form ref="form">
        <v-container fluid>
            <v-layout>
                <v-flex xs8>
                    <v-card>
                            <h2 class="text-md-center pt-2">
                                New Post
                            </h2>
                        <v-card-text>
                            <v-text-field
                                    label="Title"
                                    v-model="post.title"
                                    required
                            ></v-text-field>
                            <vue-editor v-model="post.body"/>

                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs4 offset-xs1>
                    <v-card>
                        <v-card-text>
                            <img :src="post.image" width="100%">
                        </v-card-text>
                        <v-card-actions>
                            <v-btn @click="save" :loading="isSaving">
                                Save <v-icon right>save</v-icon>
                            </v-btn>
                            <v-btn>clear</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </v-form>
</template>

<script>
    export default {
        name: "edit-post",
        data() {
            return {
                post: {
                    title: '',
                    body: '',
                    image: 'https://lorempixel.com/640/480/?57666'
                },
                isSaving:false
            }
        },
        methods: {
            save() {
                this.isSaving = true;
                axios.post('/admin/posts', this.post)
                    .then(response => {
                        let post = response.data;
                        this.$toastr.s('Post saved Succesfully',post.title);
                        this.isSaving = false;
                        setTimeout(()=>{
                            window.location.href = '/admin/posts'
                        },2000);
                    })
                    .catch(error => {
                    this.isSaving = false;
                        console.log(error)
                    })
            }
        },
        mounted(){

        }
    }
</script>

<style scoped>

</style>