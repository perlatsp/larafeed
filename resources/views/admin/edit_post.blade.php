@extends('admin.dashboard')

@section('content')
           <edit-post :post="{{$post}}"></edit-post>
@endsection