@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Cập nhật danh mục sản phẩm
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="nhập tên danh mục" value="{{$cate->cate_name}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Cập nhật" />
                        </div>
                        <div class="form-group">
                            <a class="form-control btn btn-danger" href="{{asset('admin/category')}}">Hủy bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
