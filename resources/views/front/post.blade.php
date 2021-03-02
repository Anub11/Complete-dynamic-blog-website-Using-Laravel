@extends('front/layout.layout')

@section('title')
{{$result[0]->title}}  
@endsection

@section('page_name')
{{$result[0]->title}}  
@endsection

@section('page_desc')
{{$result[0]->short_desc}}  
@endsection


@section('page_img')
  <header class="masthead" style="background-image: url('{{asset('storage/post/'.$result[0]->image)}}')">
@endsection

@section('content')
  <p>{{$result[0]->long_desc}} </p>
@endsection
             


