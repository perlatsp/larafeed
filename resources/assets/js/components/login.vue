<template>
    <div>
        <v-container fluid>
            <v-layout row wrap>
                <v-flex xs12 class="text-xs-center" mt-5>
                    <h1>Sign In</h1>
                </v-flex>
                <v-flex xs12 sm6 offset-sm3 md4 offset-md4 mt-3>
                    <v-card>
                        <v-card-text>
                                <v-layout column>
                                    <form>
                                    <v-flex>
                                        <v-text-field
                                                label="Username"
                                                type="text"
                                                v-model="user.username"
                                                 ></v-text-field>
                                    </v-flex>
                                    <v-flex>
                                        <v-text-field
                                                name="password"
                                                label="Password"
                                                id="password"
                                                type="password"
                                                v-model="user.password"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex class="text-xs-center" mt-5>
                                        <v-btn :loading="loggingIn" color="primary" @click="login()">Sign In</v-btn>
                                    </v-flex>
                                    </form>
                                </v-layout>
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
        data(){
            return {
                user:{
                    username:'perlat',
                    password:'secret'
                },
                loggingIn:false
            }
        },
        methods:{
            login(){
                this.loggingIn = true;
                axios.post('/login',this.user)
                    .then(response=>{
                        console.log(response)
                        this.$toastr.Add({
                            msg:'Logged in succesfully',
                            timeout:1000
                        });
                        setTimeout(()=>{
                            window.location.href = response.data.redirect;
                        },1000)
                    })
                    .catch(error=>{
                        console.log(error)

                    })
            }
        }
    }
</script>

<style scoped>

</style>