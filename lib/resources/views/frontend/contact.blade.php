@extends('frontend.master')
@section('title','Liên hệ')
@section('main')
<div class="container mt-60">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.875297692539!2d105.77189311432441!3d21.03767508599354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b59ab19135%3A0xa93c07eda9c54db4!2zxJDGsOG7nW5nIEjhu5MgVMO5bmcgTeG6rXUsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1543561487481" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<section class="section-wrap contact">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h5 class="uppercase mb-30">GỬI THÔNG ĐIỆP CỦA CHÚNG TÔI</h5>
        <form id="contact-form" method="post">
          <div class="contact-name">
            <input name="name" required  type="text" placeholder="Họ Tên*">
          </div>
          <div class="contact-email">
            <input name="email" required  type="email" placeholder="E-mail*">
          </div>
          <div class="contact-subject">
            <input name="phone" required  type="number" placeholder="Số điện thoại">
          </div>                
          <textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
          <input type="submit" class="btn btn-lg btn-color btn-submit" value="Gửi" name="submit">
          <div id="msg" class="message"></div>
          {{csrf_field()}}
        </form>
      </div>
      <div class="col-md-4 mb-40 mt-mdm-40 contact-info">
        <div class="address-wrap">
          <h4 class="uppercase">Địa chỉ</h4>
          <h6>Hà Nội</h6>
          <address class="address">Hồ Tùng Mậu, Cầu Giấy, Hà Nội</address>
        </div>
        <h4 class="uppercase">Thông tin liên hệ</h4>
        <ul class="contact-info-list">
          <li><span>Phone: </span><a href="tel:+84969131921">0969.131.921</a></li>
          <li><span>Email: </span><a href="mailto:hello@nhatduyet.me" class="sliding-link">hello@nhatduyet.me</a></li>
        </ul>
      </div>          
    </div>
  </div>
</section>
@stop