@extends('layout.app')
@section('main')
@include('include.sidebar')
<div class="container-fluid">
  <h2 style="text-align: center;color: red;">Sửa sản phẩm</h2>
  
  <form class="form-horizontal" action="" method="post">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên Sản Phẩm</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Tên Sản Phẩm" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Giá Sản Phẩm</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="price" placeholder="Giá Sản Phẩm" name="price">
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <select name="category_id" id="input" class="form-control" required="required">
            <option>--Chọn Danh mục--</option>
            <option value="1">Áo Mưa</option>
            <option value="2">Áo Sơ Mi</option>
            <option value="3">Giày Dép</option>
            <option value="4">Đồng Hồ</option>
            <option value="5">Túi Sách</option>
        </select>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-md-10">
        <button type="submit" class="btn btn-warning">Lưu</button>
      </div>
    </div>
  </form>
</div>
@endsection
