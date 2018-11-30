@extends('frontend.master')
@section('title','Sản phẩm')
@section('main')
<div class="container">
  <h3 class="name_cate">
    {{$cate_name->cate_name}}
  </h3>
</div>

<section class="section-wrap pt-70 pb-40 catalogue">
  <div class="container relative">
    <div class="row">
      @foreach($items as $listitem)
        <div class="col-md-3 col-xs-6">
          <div class="product-item">
            <div class="product-img">
              <a href="{{asset('detail/'.$listitem->prod_id.'/'.$listitem->prod_slug.'.html')}}">
                <img src="{{asset('lib/storage/app/avatar/'.$listitem->prod_img)}}" class="w-100 h_img_featured" alt="">
              </a>
              <a href="{{asset('detail/'.$listitem->prod_id.'/'.$listitem->prod_slug.'.html')}}" class="product-quickview">Xem chi tiết</a>
            </div>
            <div class="product-details">
              <h3>
                <a href="{{asset('detail/'.$listitem->prod_id.'/'.$listitem->prod_slug.'.html')}}" class="product-title" >
                  {{$listitem->prod_name}}
                </a>
              </h3>
              <span class="price">
                <ins>
                  <span class="ammount">
                    {{number_format($listitem->prod_price,0,',','.')}} VND
                  </span>
                </ins>
              </span>
            </div>
          </div>
        </div>
      @endforeach
      <div class="clear"></div>
      <div class="pagination-wrap">
        {{$items->links()}}
      </div>
    </div>
  </div> 
</section>
@stop