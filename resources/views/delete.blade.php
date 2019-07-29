@extends('layout.app')
@section('main')
                    <table class="table table-bordered table-hover">
                        <h2 style="color: red; text-align:center;">Danh Sách Sản Phẩm</h2>
                        <thead>
                            <tr>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Danh Mục</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Giày</td>
                                <td>115</td>
                                <td>giày</td>
                                <td> 
                                    <a href="/add" class="btn btn-default">Sửa</a>
                                    <a href="#" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
               @endsection