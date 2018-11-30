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
                        <i class="fa fa-plus"></i> Cập nhật sản phẩm
                    </h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <h4>Tên sản phẩm</h4>
                            <input required type="text" name="name" class="form-control" value="{{$product->prod_name}}">
                        </div>

                        <div class="form-group">
                            <h4>Giá sản phẩm</h4>
                            <input required type="number" name="price" value="{{$product->prod_price}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Ảnh sản phẩm</h4>
                            <input type="file" name="img" class="select_img" onchange="change_img()">
                            <p class="pt-3">
                                <img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" height="200" class="img_product img-fluid" alt="">
                            </p>
                        </div>

                        <div class="form-group">
                            <h4>Phụ kiện</h4>
                            <input required type="text" name="accessories" value="{{$product->prod_accessories}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Bảo hành</h4>
                            <input required type="text" name="warranty" value="{{$product->prod_warranty}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Khuyến mãi</h4>
                            <input required type="text" class="form-control" name="promotion" value="{{$product->prod_promotion}}">
                        </div>

                        <div class="form-group">
                            <h4>Tình trạng</h4>
                            <input required type="text" name="condition" value="{{$product->prod_condition}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <h4>Trạng thái</h4>
                            <select class="form-control" required name="status">
                                <option value="1" @if($product->prod_status==1) selected @endif >
                                    Còn hàng
                                </option>
                                <option value="0" @if($product->prod_status==1) selected @endif>
                                    Hết hàng
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>Danh mục</h4>
                            <select class="form-control" name="cate">
                                @foreach($listcate as $cate)
                                    <option value="{{$cate->cate_id}}" @if($product->prod_cate == $cate->cate_id) selected @endif>
                                        {{$cate->cate_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>Miêu tả</h4>
                            <textarea class="form-control" required name="description" id="ckeditor" rows="10">
                                {{$product->prod_description}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <h4>Sản phẩm nổi bật</h4>
                            <select class="form-control" name="featured">
                                <option value="1" @if($product->prod_status==1) selected @endif>
                                    Có
                                </option>
                                <option value="0" @if($product->prod_status==0) selected @endif>
                                    Không
                                </option>
                            </select>
                        </div>

                        <div class="form-group text-center pt-3">
                            <input type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop