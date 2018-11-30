@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Thêm danh mục
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post">
                        <div class="form-group">
                            <input type="text" required name="name" class="form-control" placeholder="nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Thêm danh mục" name="submit" class="form-control btn btn-primary" />
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Danh sách danh mục
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover custom_table">
                            <thead>
                                <tr>
                                    <th class="w-70">Tên danh mục</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catelist as $cate)
                                <tr>
                                    <td>{{$cate->cate_name}}</td>
                                    <td>
                                        <a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-default">Sửa</a>
                                        <a href="{{asset('admin/category/delete/'.$cate->cate_id)}}" class="btn btn-danger" onclick="return confirm_delete_product()">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
