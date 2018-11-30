@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Dánh sách bài viết</h1>
        </div>
        <div class="col-lg-6 text-right">
            <h1 class="page-header">
                <a href="{{asset('admin/news/add')}}" class="btn btn-primary">Thêm bài viết</a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list"></i> Danh sách bài viết
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover custom_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề bài viết</th>
                                    <th>Hiển thị</th>
                                    <th style="width: 215px;">Ảnh bài viết</th>
                                    <th>Danh mục</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newslist as $news)
                                    <tr>
                                        <td>{{$news->news_id}}</td>
                                        <td>
                                            {{$news->news_name}}
                                        </td>
                                        <td>
                                            @if($news->news_featured == 1) Có
                                            @elseif($news->news_featured == 0) Không 
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{asset('lib/storage/app/avatar/'.$news->news_img)}}" width="200px" height="150px" alt="">
                                        </td>
                                        <td>
                                            {{$news->newscate_name}}
                                        </td>
                                        <td>
                                            <a href="{{asset('admin/news/edit/'.$news->news_id)}}" class="btn btn-default">Sửa</a>
                                            <a href="{{asset('admin/news/delete/'.$news->news_id)}}" class="btn btn-danger" onclick="return confirm_delete_product()">Xóa</a>
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