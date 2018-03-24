@include('front.partials.header')
<body>
<div id="app">
    <v-app>
        <v-toolbar>
            <v-toolbar-side-icon></v-toolbar-side-icon>
            <v-toolbar-title>LaraFeed</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                <v-btn flat href="/posts">Posts</v-btn>
                <v-btn >Link Two</v-btn>
                <v-btn flat>Link Three</v-btn>
                <v-btn href="/admin">Admin <v-icon right>person</v-icon></v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <v-content>
            @yield('content')
        </v-content>

        <v-footer class="pa-3">
            <v-spacer></v-spacer>
            <div>&copy; 2018</div>
        </v-footer>
    </v-app>
</div>
@include('front.partials.footer')