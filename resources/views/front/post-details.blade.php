@extends('front.partials.page')

@section('content')
    <v-container fluid>
        <section>
            <v-container fluid grid-list-sm>
                <v-parallax src="{{$post->image}}" height="600">
                    <v-layout
                            column
                            align-center
                            justify-center
                            class="white--text"
                    >
                        <h1 class="white--text mb-2 display-1 text-xs-center">
                            {!! $post->title !!}
                        </h1>

                        <div class="subheading mb-3 text-xs-center">{{$post->category}}</div>
                        <v-btn
                                class="blue lighten-2 mt-5"
                                dark
                                large
                                href="#post-body"
                        >
                            Read
                        </v-btn>
                    </v-layout>
                </v-parallax>
            </v-container>
        </section>

        <section>
            <v-container fluid grid-list-sm>
                <v-layout justify-space-aroun wrap>
                    <v-flex md9>
                        <v-card raised>
                            <v-card-text>
                                <p id="post-body">
                                    {!! $post->body !!}
                                </p>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex md3 class="pl-3" fill-height>
                        <v-card>
                            <v-card-text>
                                <v-list>
                                    <v-list-tile avatar>
                                        <v-list-tile-avatar>
                                            <img src="http://github.com/perlatsp.png">
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>
                                                Perlat Kociaj
                                            </v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon>star</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>
                                                {{$post->created_at}}
                                            </v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn icon class="light-blue--text">
                                    <v-icon medium>fab fa-twitter</v-icon>
                                </v-btn>
                                <v-btn icon class="blue--text text--darken-4">
                                    <v-icon medium>fab fa-facebook</v-icon>
                                </v-btn>
                                <v-spacer></v-spacer>
                            </v-card-actions>
                        </v-card>
                        <br>
                        <v-divider></v-divider>
                        <v-card>
                            <v-card-text>
                                <latest-posts ></latest-posts>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </section>

    </v-container>

@endsection