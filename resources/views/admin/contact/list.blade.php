@extends('admin/layout.layout')

@section('title','Contact Listing')

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
                            <p style="font-size: 30px;">Contacts</p>
                          
                            <span style="color: green; font-size: 20px;">{{session('msg')}}</span>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Messege</th>
                          <th>Added On</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($result as $list)
                        <tr>
                          <td>{{$list->id}}</td>
                          <td>{{$list->name}}</td>
                          <td>{{$list->email}}</td>
                          <td>{{$list->mobile}}</td>
                          <td>{{$list->message}}</td>
                          <td>{{$list->added_on}}</td>
                    
                          
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
             


