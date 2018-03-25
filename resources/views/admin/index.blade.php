@extends('admin.dashboard')
@section('content')
    <v-layout justify-space-arround>
        <v-flex md8 class="pa-1">
            <v-layout row wrap>
                <v-flex>
                    <v-card>
                        <posts :posts="{{$posts}}"></posts>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-flex>
        <v-flex md4 class="pa-1">
            <v-card height="100%">
                <v-card-text>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi optio porro provident sapiente vero. Accusamus consectetur consequuntur, cupiditate facere laboriosam, magni molestiae nam odit quam recusandae reiciendis repellendus, sunt voluptates?
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>
@endsection