@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Tin tức</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <i class="fa fa-plus"></i> Thêm mới bài viết
                    </h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <h4>Tiêu đề bài viết</h4>
                            <input type="text" required class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <h4>Ảnh bài viết</h4>
                            <input type="file" required class="select_img" onchange="change_img()" name="img">
                            <p class="pt-3">
                                <img src="images/iphone_01.JPG" height="200" class="img_product img-fluid" alt="">
                            </p>
                        </div>

                        <div class="form-group">
                            <h4>Danh mục</h4>
                            <select class="form-control" name="cate">
                                @foreach($newscate as $cate)
                                    <option value="{{$cate->newscate_id}}">
                                        {{$cate->newscate_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>Miêu tả</h4>
                            <textarea class="form-control" required rows="10" name="summary"></textarea>
                        </div>
                        <div class="form-group">
                            <h4>Chi tiết</h4>
                            <textarea class="form-control" required id="ckeditor" name="detail" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <h4>Bài viết nổi bật</h4>
                            <select class="form-control" name="featured">
                                <option value="0">
                                    Không
                                </option>

                                <option value="1">
                                    Có
                                </option>
                            </select>
                        </div>

                        <div class="form-group text-center pt-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                            <a href="{{asset('admin/news')}}" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function change_img() {
        var preview = document.querySelector('.img_product');
        var file = document.querySelector('.select_img').files[0];
        var reader = new FileReader();
        reader.addEventListener('load', function () {
            preview.src = reader.result;
        }, false);

        if(file){
            reader.readAsDataURL(file);
        }
    }
</script>
@stop