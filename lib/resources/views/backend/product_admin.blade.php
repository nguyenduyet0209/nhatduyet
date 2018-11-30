@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Dánh sách sản phẩm</h1>
        </div>
        <div class="col-lg-6 text-right">
            <h1 class="page-header">
                <a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list"></i> Danh sách sản phẩm
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover custom_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th style="width: 215px;">Ảnh sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listproduct as $product)
                                    <tr>
                                        <td>{{$product->prod_id}}</td>
                                        <td>{{$product->prod_name}}</td>
                                        <td>
                                            {{number_format($product->prod_price,0,',','.')}} VND
                                        </td>
                                        <td>
                                            <img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" width="200px" height="150px" alt="">
                                        </td>
                                        <td>{{$product->cate_name}}</td>
                                        <td>
                                            <a href="{{asset('admin/product/edit/'.$product->prod_id)}}" class="btn btn-default">Sửa</a>
                                            <a href="{{asset('admin/product/delete/'.$product->prod_id)}}" class="btn btn-danger" onclick="return confirm_delete_product()" >Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach()
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop