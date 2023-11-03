<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3>Sản phẩm</h3>
              </div>
              <div class="card-body">
                <h5 class="card-title">Mã sản phẩm: {{$product->product_id}}</h5>
                <h5 class="card-text">Tên sản phẩm: {{$product->name}}</h5>
                <p class="card-text" >Mô tả: {{$product->description}}</p>
                <p class="card-text">Giá tiền: {{$product->price}}</p>
                <a href="{{route('products.index')}}" class="btn btn-warning">Quay lại</a>
              </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/bootstrap.bundle.js')}}" ></script>
