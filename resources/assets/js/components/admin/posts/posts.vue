<template>
    <div>
        <v-card>
            <v-data-table
                    :items="posts"
            >
                <template slot="headers" slot-scope="props">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>

                        <th>Options</th>
                    </tr>
                </template>


                <template slot="items" slot-scope="props">
                    <tr class="text-xs-center">
                        <td>{{ props.item.id }}
                        </td>

                        <td>
                            <v-avatar tile><img :src="props.item.image" alt=""></v-avatar>
                        </td>
                        <td class="text-xs-left">
                            {{ props.item.title }}
                        </td>
                        <td>{{ props.item.category }}</td>
                        <td>
                            <v-btn small icon color="teal" dark :href="'/posts/'+props.item.id">
                                <v-icon>link</v-icon>
                            </v-btn>
                            <v-btn small icon color="teal" dark @click="editPost(props.item.id)" >
                                <v-icon>edit</v-icon>
                            </v-btn>
                        </td>
                    </tr>
                </template>
            </v-data-table>
        </v-card>
    </div>
</template>

<script>
    export default {
        name: "posts",
        props: {
            posts: {}
        },
        data() {
            return {
                search: ''
            }
        },
        methods: {
            editPost(id) {
                window.location.href = window.location + '/' + id + '/edit';
            }
        },
        mounted(){

        }
    }
</script>

<style scoped>

</style>