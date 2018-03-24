<template>
    <div>
        <v-container fluid>
            <v-layout row wrap>
                <v-flex xs12 class="text-xs-center" mt-5>
                    <h1>Sign In</h1>
                </v-flex>
                <v-flex xs12 sm6 offset-sm3 mt-3>
                    <v-card>
                        <v-card-text>
                            <form :submit.prevent="login">
                                <v-layout column>
                                    <v-flex>
                                        <v-text-field
                                                name="email"
                                                label="Email"
                                                id="email"
                                                type="email"
                                                 ></v-text-field>
                                    </v-flex>
                                    <v-flex>
                                        <v-text-field
                                                name="password"
                                                label="Password"
                                                id="password"
                                                type="password"
                                                required></v-text-field>
                                    </v-flex>
                                    <v-flex class="text-xs-center" mt-5>
                                        <v-btn color="primary" type="submit">Sign In</v-btn>
                                    </v-flex>
                                </v-layout>
                            </form>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
    export default {
        name: "login",
        methods:{
            login(){
                axios.post('/login',{email,password})
                    .then(response=>{
                        console.log(response)
                    })
            }
        }
    }
</script>

<style scoped>

</style>