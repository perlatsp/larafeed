<template>

    <v-form ref="form">
        <v-container fluid>
            <v-layout>
                <v-flex xs8>
                    <v-card>
                        <v-card-text>
                            <v-text-field
                                    label="Title"
                                    v-model="post.title"
                                    required
                                    counter="80"
                            ></v-text-field>

                            <v-select
                                    label="Category"
                                    chips
                                    multiple
                                    item-text="name"
                                    item-value="name"
                                    :items="categories"
                            >
                            </v-select>
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
                            <v-btn @click="update" :loading="isSaving">
                                Update <v-icon right app>save</v-icon>
                            </v-btn>
                            <v-btn>clear</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
        {{categories}}
    </v-form>
</template>

<script>
    export default {
        name: "edit-post",
        data(){
            return {
                categories:[],
                isSaving:false
            }
        },
        props: {
            post: {
                id:'',
                title: '',
                body: '',
                image: 'https://lorempixel.com/640/480/?57666'
            }

        },
        methods:{
            update(){
                this.isSaving = true;
                this.getCategories();
                axios.put('/admin/posts/'+this.post.id, this.post)
                    .then(response=>{
                        this.$toastr.s('Post updated Succesfully');
                        console.log(response)
                        setTimeout(()=>{
                            this.isSaving = false;
                        },1000)
                    })
                    .catch(error=>{
                        console.log(error)
                    })
            },
            getCategories(){
                axios.get('/admin/categories')
                    .then(response=>{
                    this.categories = response.data;
                        console.log(response)
                })
            }
        }
    }
</script>

<style scoped>

</style>