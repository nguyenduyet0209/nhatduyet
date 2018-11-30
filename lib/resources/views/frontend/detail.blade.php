@extends('frontend.master')
@section('title','Chi tiết sản phẩm')
@section('main')
<section class="section-wrap single-product">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-6 col-xs-12 mb-60">
        <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
          <div class="gallery-cell">
            <a href="{{asset('lib/storage/app/avatar/'.$detail->prod_img)}}" class="lightbox-img">
              <img src="{{asset('lib/storage/app/avatar/'.$detail->prod_img)}}" alt="" />
              <i class="icon arrow_expand"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12 product-description-wrap">
        <h1 class="product-title">
          {{$detail->prod_name}}
        </h1>
        <span class="price">
          <ins>
            <span class="ammount">
              {{number_format($detail->prod_price,0,',','.')}} VND
            </span>
          </ins>
        </span>
        <p class="product-description">
          {!!$detail->prod_description!!}
        </p>
        <ul class="product-actions clearfix">
          <li class="my_li_dt">
            <a href="{{asset('cart/add/'.$detail->prod_id)}}" class="btn btn-color btn-lg add-to-cart left">
              <span>Mua ngay</span>
            </a>
          </li>         
        </ul>
        <div class="socials-share clearfix">
          <div class="social-icons rounded">
            <a href="https://www.facebook.com/duyet.nguyen.5205622" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/DuyetNhat" target="_blank"><i class="fa fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
<section class="section-wrap related-products pt-0">
  <div class="container">
    <div class="row heading-row">
      <div class="col-md-12 text-center">
        <h2 class="heading uppercase"><small>Sản phẩm liên quan</small></h2>
      </div>
    </div>
    <div class="row row-10">
      <div id="owl-related-products" class="owl-carousel owl-theme nopadding">
        @foreach($related as $itemrelated)
        <div class="product-item">
          <div class="product-img">
            <a href="{{asset('detail/'.$itemrelated->prod_id.'/'.$itemrelated->prod_slug.'.html')}}">
              <img src="{{asset('lib/storage/app/avatar/'.$itemrelated->prod_img)}}" alt="" class="w-100 h_img_featured">
            </a>
            <a href="{{asset('detail/'.$itemrelated->prod_id.'/'.$itemrelated->prod_slug.'.html')}}" class="product-quickview">Xem Chi tiết</a>
          </div>
          <div class="product-details">
            <h3>
              <a class="product-title" href="{{asset('detail/'.$itemrelated->prod_id.'/'.$itemrelated->prod_slug.'.html')}}">
                {{$itemrelated->prod_name}}
              </a>
            </h3>
            <span class="price">
              <ins>
                <span class="ammount">
                  {{number_format($itemrelated->prod_price,0,',','.')}} VND
                </span>
              </ins>
            </span>
          </div>
        </div>
        @endforeach
      </div> 
    </div> 
  </div> 
</section>
@stop