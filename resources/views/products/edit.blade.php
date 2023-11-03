@extends('layouts.base')
@section('title','Edit Page')
@section('main')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="{{route('products.update',$product->product_id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="product_id">Mã sản phẩm</label>
          <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Nhập mã sản phẩm" value="{{$product->product_id}}">
        </div>
        <div class="form-group">
          <label for="name">Tên sản phẩm</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
        </div>
        <div class="form-group" >
          <label for="description">Mô tả</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Mô tả" value="{{$product->description}}">
        </div>
        <div class="form-group" >
          <label for="price">Giá tiền</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá tiền" value="{{$product->price}}">
        </div>
          <div class="form-group" >
              <label for="stock">Doanh thu</label>
              <input type="text" class="form-control" id="stock" name="stock" placeholder="Nhập doanh thu" value="{{$product->stock}}">
          </div>
        <div class="form-group">
          <label for="quantity">Số lượng</label>
          <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Nhập số lượng" value="{{$product->quantity}}">
        </div>
          <div class="mt-1" >
              <button type="submit" class="btn btn-primary">Sửa</button>
              <a href="{{route('products.index')}}" class="btn btn-warning">Quay lại</a>
          </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('js/bootstrap.bundle.js')}}" ></script>
@endsection
