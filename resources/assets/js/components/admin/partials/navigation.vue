<template>

       <div>
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
       </div>
</template>

<script>
    export default {
        name: "navigation"
    }
</script>

<style scoped>

</style>