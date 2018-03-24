@extends('admin.dashboard')
@section('content')
    <posts :posts="{{$posts}}"></posts>
@endsection