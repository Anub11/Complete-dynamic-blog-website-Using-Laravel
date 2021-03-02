@extends('admin/layout.layout')

@section('title','Page Listing')

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
                            <p style="font-size: 30px;">Page</p>
                            <a class="btn btn-primary" href="/admin/page/add">Add Page</a>
                            <span style="color: green; font-size: 20px;">{{session('msg')}}</span>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Action</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($result as $list)
                        <tr>
                          <td>{{$list->id}}</td>
                          <td>{{$list->name}}</td>
                          <td>{{$list->slug}}</td>
                          <td>
                            <a href="{{url('/admin/page/delete/'.$list->id)}}" class="btn btn-danger text-white">Delete</a>
                            <a href="{{url('/admin/page/edit/'.$list->id)}}" class="btn btn-primary text-white">Edit</a>
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
             


