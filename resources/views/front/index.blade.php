@extends('front.partials.page')
@section('content')
    <v-container fluid>
        <v-container fluid grid-list-sm fill-height>
            <v-layout justify-space-around>
                <v-flex md9>
                    <v-card>
                        <v-layout row wrap justify-space-arround>
                            @foreach($posts as $post)
                                <v-flex d-flex md4 class="pa-1">
                                    <post :post="{{$post}}"></post>
                                </v-flex>
                            @endforeach
                        </v-layout>
                    </v-card>
                </v-flex>
                </v-flex>
                <v-flex md3 class="pl-3" fill-height>
                    <v-card>
                        <v-card-text>
                            <latest-posts></latest-posts>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>

    </v-container>


@endsection