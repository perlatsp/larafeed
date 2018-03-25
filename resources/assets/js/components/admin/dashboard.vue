<template>
    <div>

        <v-toolbar color="teal lighten-1" fixed app dark>
            <v-toolbar-title style="width: 300px" class="ml-0 pl-3">
                <v-toolbar-side-icon @click.stop="mini = !mini"></v-toolbar-side-icon>
                <span class="hidden-sm-and-down">Dashboard</span>
            </v-toolbar-title>
            <v-text-field
                    flat
                    solo-inverted
                    prepend-icon="search"
                    label="Search"
                    class="hidden-sm-and-down"
            ></v-text-field>
            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>apps</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>notifications</v-icon>
            </v-btn>
            <v-menu :close-on-content-click="false">
                <v-btn icon large slot="activator">
                    <v-avatar size="32px">
                        <img src="http://github.com/perlatsp.png"
                        >
                    </v-avatar>
                </v-btn>

                <v-card>
                    <v-list>
                        <v-list-tile avatar>
                            <v-list-tile-avatar>
                                <img src="http://github.com/perlatsp.png" alt="John">
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title>
                                    Perlat Kociaj
                                </v-list-tile-title>
                                <v-list-tile-sub-title>salamalekum.js</v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>
                    <v-divider></v-divider>
                    <v-card-text>
                        lorem
                    </v-card-text>
                    <v-divider/>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn color="error" flat @click="logOut">
                            Log out
                            <v-icon rigt>
                                exit_to_app
                            </v-icon>
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-menu>
        </v-toolbar>
        <v-navigation-drawer
                fixed
                app
                :mini-variant="mini">
            <navigation/>
        </v-navigation-drawer>
        <v-content>
            <v-container fluid>
                <slot>

                </slot>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </div>
</template>

<script>
    import Navigation from './partials/navigation.vue'

    export default {
        name: "dashboard",
        components: {
            Navigation
        },
        data() {
            return {
                mini: true,
                user: {}
            }
        },
        methods: {
            logOut() {
                axios.post('/logout')
                    .then(response => {
                        console.log(response);
                        this.$toastr.Add({
                            msg: 'Logged OUT succesfully',
                            timeout: 1000
                        });
                        setTimeout(() => {
                            window.location.href = response.data.redirect;

                        }, 1000)
                    })
            }
        },
        mounted() {

        }
    }
</script>

<style scoped>

</style>