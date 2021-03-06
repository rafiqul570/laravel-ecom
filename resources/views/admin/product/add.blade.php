@extends('admin.admin_master')
@section('products') active show-sub @endsection
@section('add-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Products</span>
      </nav>
      <div class="sl-pagebody">
        <div class="row row-sm">        
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">ADD NEW PRODUCTS</h6>
           @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

        <form action="{{route('store.products')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" value="{{old('product_nam')}}" placeholder="Enter Product Name">

                  @error('product_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code" value="{{old('product_code')}}" placeholder="Enter Product Code">
                  @error('product_code')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price" value="{{old('price')}}" placeholder="Enter Price">
                  @error('price')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="product_quantity" value="{{old('product_quantity')}}" placeholder="Enter Quantity">
                  @error('product_quantity')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="category_id" data-placeholder="Choose country">
                    <option label="Choose Category"></option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                  @error('category_id')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="brand_id" data-placeholder="Choose country">
                    <option label="Choose Brand"></option>
                    @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                    @endforeach
                  </select>
                  @error('brand_id')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Short Description: <span class="tx-danger">*</span></label>
                 <textarea name="short_description" id="summernote"></textarea>
                 @error('short_description')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div><!-- col-12 -->
            </div><!-- row -->
            
            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Long Description: <span class="tx-danger">*</span></label>
                 <textarea name="long_description" id="summernote2"></textarea>
                 @error('long_description')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main Thambnail: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_one"> 
                  @error('image_one')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_two"> 
                  @error('image_two')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_three">
                  @error('image_three')
                  <span class="text-danger">{{$message}}</span>
                  @enderror 
                </div>
              </div><!-- col-4 -->
              
              <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Product</button>
              </form>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

         </div>       
      </div>
    </div>
@endsection



