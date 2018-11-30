@extends('frontend.master')
@section('title','Giỏ hàng')
@section('main')
<script>
  function updateCart(qty,rowId) {
    $.get(
      '{{asset('cart/update')}}',
      {qty:qty,rowId:rowId},
      function () {
        location.reload();
      }
      );
  }
</script>
<section class="page-title text-center">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">Chi tiết giỏ hàng</h1>
      </div>
    </div>
  </div>
</section>

<section class="section-wrap shopping-cart pt-0">
  @if(Cart::count()>=1)
  <div class="container relative">
    <div class="row">

      <div class="col-md-12">
        <div class="table-wrap mb-30">
          <form>
            <table class="shop_table cart table">
              <thead>
                <tr>
                  <th class="product-name">Sản phẩm</th>
                  <th class="product-price">Giá</th>
                  <th class="product-quantity">Số lượng</th>
                  <th class="product-subtotal">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                <tr class="cart_item">
                  <td class="">
                    <a href="javascipt:void(0)">
                      <img src="{{asset('lib/storage/app/avatar/'.$item->options->img)}}" alt="">
                    </a>
                  </td>
                  <td class="product-price">
                    <span class="amount">
                      <b>
                        {{number_format($item->price,0,',','.')}} VND
                      </b>
                    </span>
                  </td>
                  <td class="product-quantity">
                    <div class="quantity buttons_added">
                      <b>
                        <input type="number" class="text-center mb-0" step="1" min="0" value="{{$item->qty}}" title="Qty" onchange="updateCart(this.value,'{{$item->rowId}}')" />
                      </b>
                    </div>
                  </td>
                  <td class="product-subtotal">
                    <span class="amount">
                      {{number_format($item->price*$item->qty,0,',','.')}} VND
                    </span>
                  </td>
                  <td class="product-remove">
                    <a href="{{asset('cart/delete/'.$item->rowId)}}" onclick="return confirm_delete_product()" class="remove" title="Remove this item">
                      <i class="icon icon_close"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </form>
        </div>
        <div class="row mb-50">
          <div class="col-md-offset-6 col-md-6">
            <div class="actions right">
              <div class="wc-proceed-to-checkout">
                <a href="{{asset('cart/delete/all')}}" onclick="return confirm_delete_product()" class="btn btn-md btn-color"><span>Xóa giỏ hàng</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 shipping-calculator-form">
        <form method="post">
          <h2 class="heading relative heading-small uppercase mb-30">Tiến hành thanh toán</h2>
          <div class="row row-20">
            <div class="col-sm-6">
              <p>
                Họ Tên
              </p>
              <p class="form-row form-row-wide">
                <input type="text" required class="input-text" placeholder="Ví dụ: Văn Sự" name="name">
              </p>
            </div>

            <div class="col-sm-6">
              <p>
                Email
              </p>
              <p class="form-row form-row-wide">
                <input type="email" required class="input-text" placeholder="Ví dụ: abcd@gmail.com" name="email">
              </p>
            </div>

            <div class="col-sm-6">
              <p>
                Số điện thoại
              </p>
              <p class="form-row form-row-wide">
                <input type="number" required class="input-text" placeholder="Ví dụ: +84969131921" name="phone">
              </p>
            </div>

            <div class="col-sm-6">
              <p>
                Địa chỉ
              </p>
              <p class="form-row form-row-wide">
                <input type="text" required class="input-text"  placeholder="Ví dụ: số 1, ngõ 1, cầu giấy Hà Nội" name="address">
              </p>
            </div>

            <div class="col-sm-12">
              <p>
                Chú thích
              </p>
              <p class="form-row form-row-wide">
                <textarea name="" class="input-text" placeholder="Chi chú" rows="5"></textarea>
              </p>
            </div>

            <div class="col-sm-6">
              <p>
                <input value="Thanh toán" type="submit" name="submit" class="btn btn-md btn-dark mt-20 mb-mdm-40" />
              </p>
            </div>
          </div>
          {{csrf_field()}}
        </form>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <div class="cart_totals">
          <h2 class="heading relative heading-small uppercase mb-30">Tổng tiền </h2>
          <table class="table shop_table">
            <tbody>
              <tr class="shipping">
                <th>Mr.Duyet Shop</th>
                <td>
                  <span>Free Shipping</span>
                </td>
              </tr>
              <tr class="order-total">
                <th><strong>Tổng hóa đơn</strong></th>
                <td>
                  <strong>
                    <span class="amount">
                      {{$total}} VND
                    </span>
                  </strong>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @else()
  <div class="container relative">
    <h3 class="text-center">Bạn chưa có sản phẩm nào trong giỏ hàng, hãy chọn sản phẩm của bạn</h3>
  </div>
  @endif
</div>
</section>

@stop