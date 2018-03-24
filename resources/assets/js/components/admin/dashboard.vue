<template>
    <div>
        <v-navigation-drawer
                fixed
                app
                :mini-variant="mini">
            <v-toolbar color="teal" dark>
                <v-list>
                    <v-list-tile avatar>
                        <v-list-tile-avatar>
                            <img src="https://github.com/perlatsp.png">
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Perlat Kociaj</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>


            </v-toolbar>


            <v-list dense>
                <v-list-tile href="/admin">
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Dashboard</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>

                <v-divider/>

                <v-list-tile href="/admin/posts">
                    <v-list-tile-action>
                        <v-icon>list</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Posts</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>

                <v-divider/>

                <v-list-tile href="/admin/posts/create">
                    <v-list-tile-action>
                        <v-icon>note_add</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>New</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>

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
            <v-menu :close-on-content-click="false" >
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
                                <v-list-tile-title>Perlat Kociaj</v-list-tile-title>
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
                        <v-btn color="error" flat @click="menu = false">
                            Log out
                            <v-icon rigt>
                                exit_to_app
                            </v-icon>
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-menu>
        </v-toolbar>


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
    export default {
        name: "dashboard",
        data() {
            return {
                mini: true,
            }
        }
    }
</script>

<style scoped>

</style>