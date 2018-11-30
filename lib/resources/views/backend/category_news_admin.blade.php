@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục bài viết</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Thêm danh mục
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="name" required class="form-control" placeholder="nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary" value="Thêm danh mục" />
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
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
                                @foreach($newscate_list as $newscate)
                                    <tr>
                                        <td>{{$newscate->newscate_name}}</td>
                                        <td>
                                            <a href="{{asset('admin/newscategory/edit/'.$newscate->newscate_id)}}" class="btn btn-default">Sửa</a>
                                            <a href="{{asset('admin/newscategory/delete/'.$newscate->newscate_id)}}" class="btn btn-danger" onclick="return confirm_delete_category()" >Xóa</a>
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