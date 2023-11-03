@extends('layouts.base')
@section('title','Home Page')
@section('main')
    <div class="container" >
        <div class="row">
            <div class="col-md-2 w-100" >
                <div class="d-flex justify-content-between py-3">
                    <h3 class="text-uppercase" >
                        Quản lý Sản phẩm
                    </h3>
                    <a href="{{route('products.create')}}" class="btn btn-success mt-2">Thêm sản phẩm</a>
                </div>
                @if(Session::has('success'))
                    <p class="text-success">{{ Session::get('success') }}</p>
                @endif
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Giá tiền</th>
                        <th>Doanh thu</th>
                        <th>Số lượng</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $product)
                        <tr>
                            <td>{{$product->product_id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->quantity}}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary" href="{{ route('products.show', $product->product_id) }}">
                                    Xem
                                </a>

                                    <a class="mx-3 btn btn-warning" href="{{ route('products.edit', $product->product_id) }}">
                                        Sửa
                                    </a>

                                    <form action="{{ route('products.update', $product->product_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="ml-3 btn btn-danger " type="submit" onclick="confirmAction(event)">
                                                Xóa
                                            </a>
                                        <script>
                                            function confirmAction(event) {
                                                event.preventDefault();

                                                if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
                                                    event.target.closest('form').submit();
                                                } else {
                                                }
                                            }
                                        </script>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
