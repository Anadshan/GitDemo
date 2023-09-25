@extends('admin/layout')
@section('page_title','Manage Product')
@section('container')

@if($id>0)
{{$image_required=""}}
@else
{{$image_required="required"}}
@endif

<h1>Manage Product</h1>
<br/>
<a href="{{url('admin/product')}}">
    <button type="button" class="btn btn-success">
        Back
    </button>
</a>
<div class="row m-t-30">
  <div class="col-md-12">
     <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
                <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">Name</label>
                            <input id="name" name="name" value="{{$name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label mb-1">Image</label>
                            <input id="image" name="image" value="{{$image}}" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}>
                            @error('image')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug" class="control-label mb-1">Slug</label>
                            <input id="slug" name="slug" value="{{$slug}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('slug')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                      </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="category_id" class="control-label mb-1">Category</label>
                                    <select id="category_id" name="category_id" value="{{$category_id}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        <option value="">Select Category</option>
                                        @foreach($category as $list)
                                            @if($category_id==$list->id)
                                            <option selected value="{{$list->id}}">
                                            @else
                                                <option value="{{$list->id}}">
                                            @endif

                                            {{$list->category_name}}</option>
                                        @endforeach
                                 </select>
                                    
                                      @error('category_id')
                                         <div class="alert alert-danger" role="alert">
                                             {{$message}}
                                         </div>
                                      @enderror
                             </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="brand" class="control-label mb-1">Brand</label>
                                            <input id="brand" name="brand" value="{{$brand}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            @error('brand')
                                            <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="model" class="control-label mb-1">Model</label>
                                            <input id="model" name="model" value="{{$model}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            @error('model')
                                            <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                  
                                    </div>
                                    <div class="form-group">
                                        <label for="short_description" class="control-label mb-1">Short Description</label>
                                        <textarea id="short_description" name="short_description" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$short_description}}</textarea>
                                        @error('short_description')
                                        <div class="alert alert-danger" role="alert">
                                           {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">Description</label>
                                        <textarea id="description" name="description" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$description}}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger" role="alert">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="keywords" class="control-label mb-1">Keywords</label>
                                        <input id="keywords" name="keywords" value="{{$keywords}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        @error('keywords')
                                        <div class="alert alert-danger" role="alert">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="technical_specification" class="control-label mb-1">Technical Specification</label>
                                        <input id="technical_specification" name="technical_specification" value="{{$technical_specification}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        @error('technical_specification')
                                        <div class="alert alert-danger" role="alert">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="uses" class="control-label mb-1">Uses</label>
                                        <input id="uses" name="uses" value="{{$uses}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        @error('uses')
                                        <div class="alert alert-danger" role="alert">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="warranty" class="control-label mb-1">Warranty</label>
                                        <input id="warranty" name="warranty" value="{{$warranty}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        @error('warranty')
                                        <div class="alert alert-danger" role="alert">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                               
                  <input type="hidden" name="id" value="{{$id}}">
              </form>
           </div>
       </div>
       </div>
       </div>
       
        <div class="row">
           <h2 class="m-t-10">Product Attribute</h2>
            <div class="col-lg-12" id="product_attr_box">
                <div class="card" id="product_attr_1">
                    <div class="card-body">
                       <div class="row">
                        <div class="form-group col-md-2">
                            <label for="sku" class="control-label mb-1">SKU</label>
                            <input id="sku" name="sku[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('sku')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="mrp" class="control-label mb-1">MRP</label>
                            <input id="mrp" name="mrp[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('mrp')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price" class="control-label mb-1">Price</label>
                            <input id="price" name="price[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('price')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="qty" class="control-label mb-1">Quantity</label>
                            <input id="qty" name="qty[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('qty')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="size_id" class="control-label mb-1">Size</label>
                            <select id="size_id" name="size_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                <option value="">Select Category</option>
                                @foreach($size as $list)
                                    @if($id==$list->id)
                                    <option selected value="{{$list->id}}">
                                    @else
                                        <option value="{{$list->id}}">
                                    @endif

                                    {{$list->size}}</option>
                                @endforeach
                            </select>
                            @error('size_id')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                           @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="color_id" class="control-label mb-1">Color</label>
                            <select id="color_id" name="color_id[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                <option value="">Select Category</option>
                                @foreach($color as $list)
                                    @if($id==$list->id)
                                      <option selected value="{{$list->id}}">
                                    @else
                                      <option value="{{$list->id}}">
                                    @endif

                                    {{$list->color}}</option>
                                @endforeach
                            </select>
                            @error('color_id')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>  
                        <div class="form-group col-md-4">
                            <label for="attr_image" class="control-label mb-1">Image</label>
                            <input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false">
                       </div>
                       &nbsp; &nbsp; &nbsp; &nbsp;
                     <div class="m-t-30">
                       <button type="button" class="btn btn-success" onClick="add_more()">                        <i class="fa fa-plus"></i>&nbsp; Add</button>
                     </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
       

            
         
      
        <div>
            <button id="payment-button"  type="submit" class="btn btn-lg btn-info btn-block">
                Submit
            </button>
        </div>
 </div>

</div>
<script>
var loop_count=1;
function add_more(){
    loop_count++;
  var html='<div class="card" id="product_attr_'+loop_count+'"> <div class="card-body"><div class="row">';
    html+='   <div class="form-group col-md-2"><label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
    html+='   <div class="form-group col-md-2"><label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
    html+='   <div class="form-group col-md-2"><label for="price" class="control-label mb-1">Price</label><input id="price" name="price[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
    html+='   <div class="form-group col-md-2"><label for="qty" class="control-label mb-1">Quantity</label><input id="qty" name="qty[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
    var size_id_html=jQuery('#size_id').html();
    html+='   <div class="form-group col-md-2"><label for="size" class="control-label mb-1">Size</label><select id="size_id" name="size_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required="">'+size_id_html+'</select></div>';
    var color_id_html=jQuery('#color_id').html();
    html+='   <div class="form-group col-md-2"><label for="color" class="control-label mb-1">Color</label><select id="color_id" name="color_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required="">'+color_id_html+'</select></div>';
    html+='   <div class="form-group col-md-4"><label for="attr_image" class="control-label mb-1">Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false">';
    html+= '<div class="form-group col-md-2 m-t-10"><label for="attr_image" class="control-label mb-1">&nbsp;&nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger" onClick=remove("'+loop_count+'")><i class="fa fa-minus"></i>&nbsp; Remove</button></div>'
    html+='</div></div></div>';
  jQuery('#product_attr_box').append(html);
}
function remove(loop_count){
    jQuery('#product_attr_'+loop_count).remove();
}
</script>
 
@endsection