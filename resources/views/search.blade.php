@extends('layout.app')
@section('main')
@include('include.sidebar')
<div class="card-header">
    <form action="{{route('search')}}" method="GET" class="form-inline" role="form">
        <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Nhập tên hoặc gía sản phẩm   ">
        </div>
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
</div>
<table class="table table-bordered table-hover">
    <h2 style="color: red; text-align:center;">Danh Sách Tìm Kiếm</h2>
    <thead>
        <tr style="background-color: yellow ;" >
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Sản Phẩm</th>
            <th>Danh Mục</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pro as $p)
        <tr style="text-align: center;">
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->category_id}}</td>
            <td> 
                <a href="{{route('cat_edit',['id'=>$p->id])}}" class="btn btn-default">Sửa</a>
                <a href="{{route('cat_del',['id'=>$p->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa ?)">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table> 
@endsection
