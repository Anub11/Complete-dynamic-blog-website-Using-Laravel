@extends('admin/layout.layout')


@section('content')

<div class="" style="height: 100vh;">
          <div class="page-title">
            <div class="title_left">
              <h3>Manage Post</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Design <small>different form elements</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" method="post" action="{{url('/admin/post/submit')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Title</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Title" name="title">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Slug</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Title" name="slug">
                        @error('slug')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Short Description</label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="short_desc"></textarea>
                        @error('short_desc')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>


                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Long Description</label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="long_desc"></textarea>
                        @error('long_desc')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Post Image</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>


                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Post Date</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="date" class="form-control"  name="post_date">
                        @error('post_date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>


                    
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

                     
                       
@endsection
             


