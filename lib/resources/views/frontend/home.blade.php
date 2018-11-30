@extends('frontend.master')
@section('title','Cung cấp các dịch vụ website')
@section('main')
<section class="section-wrap nopadding">
	<div class="container">
		<div class="entry-slider">
			<div class="flexslider" id="flexslider-hero">
				<ul class="slides clearfix">
					<li>
						<img src="img/slider/1.jpg" alt="">
						<div class="img-holder img-1"></div>
					</li>
					<li>
						<img src="img/slider/2.jpg" alt="">
						<div class="img-holder img-2"></div>
					</li>
					<li>
						<img src="img/slider/3.jpg" alt="">
						<div class="img-holder img-3"></div>
					</li>
					<li>
						<img src="img/slider/4.jpg" alt="">
						<div class="img-holder img-4"></div>
					</li>
				</ul>
			</div>
		</div> 
	</div>
</section> 

<section class="section-wrap new-arrivals pb-40">
	<div class="container">

		<div class="row heading-row">
			<div class="col-md-12 text-center">
				<h2 class="heading uppercase"><small>Sản phẩm nổi bật</small></h2>
			</div>
		</div>

		<div class="row row-10">
			@foreach($featured as $item)
			<div class="col-md-3 col-xs-6">
				<div class="product-item">
					<div class="product-img">
						<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
							<img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="" class="h_img_featured">
						</a>
						<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" class="product-quickview">Chi tiết sản phẩm</a>
					</div>
					<div class="product-details">
						<h3>
							<a class="product-title" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
								{{$item->prod_name}}
							</a>
						</h3>
						<span class="price">
							<ins>
								<span class="ammount">
									{{number_format($item->prod_price,0,',','.')}} VND
								</span>
							</ins>
						</span>
					</div>                        
				</div>
			</div>
			@endforeach
		</div> 
	</div>
</section> 

<section class="section-wrap pb-0 pt-0">
	<div class="container">
		<div class="row heading-row">
			<div class="col-md-12 text-center">
				<h2 class="heading uppercase"><small>Sản phẩm mới</small></h2>
			</div>
		</div>

		<div class="row row-10">
			@foreach($new as $itemnew)
			<div class="col-md-3 col-xs-6 animated-from-left">
				<div class="product-item">
					<div class="product-img">
						<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
							<img src="{{asset('lib/storage/app/avatar/'.$itemnew->prod_img)}}" alt="" class="h_img_featured">
						</a>
						<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" class="product-quickview">Chi tiết sản phẩm</a>
					</div>
					<div class="product-details">
						<h3>
							<a class="product-title" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
								{{$itemnew->prod_name}}
							</a>
						</h3>
						<span class="price">
							<ins>
								<span class="ammount">
									{{number_format($itemnew->prod_price,0,',','.')}} VND
								</span>
							</ins>
						</span>
					</div>                        
				</div>
			</div>
			@endforeach
		</div> 
	</div>
</section> 

<section class="section-wrap partners pt-0 pb-50">
	<div class="container">
		<div class="row">

			<div id="owl-partners" class="owl-carousel owl-theme">

				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_1.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_2.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_3.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_4.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_5.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_6.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_1.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)">
						<img src="img/partners/partner_logo_dark_2.png" alt="">
					</a>
				</div>

			</div> 

		</div>
	</div>
</section>
@stop