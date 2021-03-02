@extends('front/layout.layout')

@section('title')
{{$result[0]->name}}  
@endsection

@section('page_name')
{{$result[0]->name}}  
@endsection




@section('page_img')
	<header class="masthead" style="background-image: url('{{ asset ('front_assects/img/home-bg.jpg') }}')">
@endsection

@section('content')
  <p>{{$result[0]->description}} </p>
@endsection
             


