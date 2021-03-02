
@extends('front/layout.layout')
@section('page_name','Contact us')
@section('page_desc','Have questions? I have answers.')
@section('title','Contact Page')
@section('page_img')
  <header class="masthead" style="background-image: url('{{ asset ('front_assects/img/home-bg.jpg') }}')">
@endsection
@section('content')
<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <p style="color: green; font-size: 20px;">{{session('msg')}}</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form method="post" action="{{url('/contact/submit')}}" id="contactForm" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name">              
            </div>
            @error('name')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" name="email">
             
            </div>
             @error('email')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
              
            </div>
            @error('phone')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" class="form-control" placeholder="Message" name="message"></textarea>
            </div>
            @error('messege')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
        </form>
      </div>
    </div>          
@endsection
             


