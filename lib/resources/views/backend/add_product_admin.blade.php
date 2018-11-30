@extends('backend.master')
@section('main')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Sản phẩm</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <i class="fa fa-plus"></i> Thêm mới sản phẩm
                    </h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <h4>Tên sản phẩm</h4>
                            <input type="text" value="Iphone" required name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Giá sản phẩm</h4>
                            <input type="number" value="10000000" name="price" required class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Ảnh sản phẩm</h4>
                            <input type="file" class="select_img" required name="img" onchange="change_img()">
                            <p class="pt-3">
                                <img src="images/iphone_01.JPG" height="200" class="img_product img-fluid" alt="">
                            </p>
                        </div>

                        <div class="form-group">
                            <h4>Phụ kiện</h4>
                            <input type="text" name="accessories" value="Tai nghe" required class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Bảo hành</h4>
                            <input type="text" name="warranty" value="12 tháng" required class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Khuyến mãi</h4>
                            <input type="text" name="promotion" value="10%" required class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Tình trạng</h4>
                            <input type="text" name="condition" value="100%" required class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Trạng thái</h4>
                            <select class="form-control" required name="status">
                                <option value="1">
                                    Còn hàng
                                </option>
                                <option value="0">
                                    Hết hàng
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>Danh mục</h4>
                            <select name="cate" required class="form-control">
                                @foreach($catelist as $cate)
                                <option value="{{$cate->cate_id}}">
                                    {{$cate->cate_name}}
                                </option>
                                @endforeach()
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>Miêu tả</h4>
                            <textarea class="form-control" required name="description" id="ckeditor" rows="10">Sản phẩm chính hãng, chất lượng châu âu! Đổi mới hoàn toàn trong vòng 7 ngày đầu sử dụng sản phẩm nếu có lỗi của nhà sản xuất</textarea>
                        </div>

                        <div class="form-group">
                            <h4>Sản phẩm nổi bật</h4>
                            <select class="form-control" name="featured">
                                <option value="1">
                                    Có
                                </option>
                                <option value="0">
                                    Không
                                </option>
                            </select>
                        </div>

                        <div class="form-group text-center pt-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                            <a href="#" class="btn btn-danger">Hủy bỏ</a>
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