@extends('admin/layout.layout')


@section('content')

<div class="">
           

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">

                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <p style="font-size: 30px;">Post</p>
                            <a class="btn btn-primary" href="/admin/post/add">Add Post</a>
                            <span style="color: green; font-size: 20px;">{{session('msg')}}</span>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Tilte</th>
                          <th>Slug</th>
                          <th>Short Desc</th>
                          <th style="width:200px">Image</th>
                          <th>Date</th>
                          <th>Action</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($result as $list)
                        <tr>
                          <td>{{$list->id}}</td>
                          <td>{{$list->title}}</td>
                          <td>{{$list->slug}}</td>
                          <td>{{$list->short_desc}}</td>
                          <td><img src="{{asset('storage/post/'.$list->image)}}" width="180px"></td>
                          <td>{{$list->post_date}}</td>
                          <td>
                            <a href="{{url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger text-white">Delete</a>
                            <a href="{{url('/admin/post/edit/'.$list->id)}}" class="btn btn-primary text-white">Edit</a>
                          </td>
                          
                        </tr>
                        @endforeach
          
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
          </div>
</div>

                     
                       
@endsection
             


