@extends('admin/layout')
@section('page_title','Product')
@section('product_select','active')
@section('container')
@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
{{session('message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
@endif 
<h1>Product</h1>
<br/>
<a href="{{url('admin/product/manage_product')}}">
<button type="button" class="btn btn-success">
    Add Product
</button>
</a>
<div class="row m-t-30">

    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                       <th>ID</th>
                       <th>Category_id</th>
                       <th>Name</th>
                       <th>Image</th>
                       <th>Slug</th>
                       <th>Brand</th>
                       <th>Model</th>
                       <th>Short Description</th>
                       <th>Description</th>
                       <th>keywords</th>
                        <th>technical_specification</th>
                        <th>uses</th>
                        <th>warranty</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $list)
                   <tr>
                      <td>{{$list->id}}</td> 
                      <td>{{$list->category_id}}</td> 
                      <td>{{$list->name}}</td> 
                      <td><img src="{{asset('storage/media/'.$list->image)}}" alt=""></td> 
                      <td>{{$list->slug}}</td> 
                      <td>{{$list->brand}}</td> 
                      <td>{{$list->model}}</td>
                      <td>{{$list->short_description}}</td>
                      <td>{{$list->description}}</td>
                      <td>{{$list->keywords}}</td>
                      <td>{{$list->technical_specification}}</td>
                      <td>{{$list->uses}}</td>
                      <td>{{$list->warranty}}</td>
                      <td>
                      <a href="{{url('admin/product/manage_product/')}}/{{$list->id}}">
                        <button type="button" class="btn btn-success">Edit</button>
                        </a>
                        @if($list->status==1)
                        <a href="{{url('admin/product/status/0')}}/{{$list->id}}">
                        <button type="button" class="btn btn-primary">Active</button>
                        </a>
                        @elseif($list->status==0)
                        <a href="{{url('admin/product/status/1')}}/{{$list->id}}">
                        <button type="button" class="btn btn-secondary">Deactive</button>
                        </a>
                        @endif
                        <a href="{{url('admin/product/delete/')}}/{{$list->id}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                      </td>

                    </tr>
                    @endforeach
                                        
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection
