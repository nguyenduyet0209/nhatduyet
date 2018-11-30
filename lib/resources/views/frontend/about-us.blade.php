@extends('frontend.master')
@section('title','Về chúng tôi')
@section('main')
<section class="section-wrap about-us pb-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="img/About-us.png" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <h4 class="about-intro uppercase">Giới thiệu về Mr.duyet Shop</h4>
        <p>
          Mr.Duyet chỉ làm việc trực tiếp với các nhà sản xuất và nhà phân phối chính thức, các sản phẩm phải có nguồn gốc xuất xứ rõ ràng. Các thương hiệu và sản phẩm đều qua tiền kiểm duyệt khắt khe và đòi hỏi chứng từ chặt chẽ theo quy định của nhà nước Việt Nam. Do vậy, người mua có thể hoàn toàn an tâm khi mua sắm và tận hưởng trải nghiệm mua sắm đảm bảo.
          <br>
          Khẩu hiệu của Mr.Duyet là “Hàng 100% chính hãng – Dịch vụ linh hoạt – Cam kết bồi hoàn”. Đây cũng chính là nỗ lực và cam kết của tập thể Mr.Duyet với quyết tâm cao độ, nhằm đem đến người tiêu dùng những sản phẩm chất lượng, giá ưu đãi và nhiều chính sách hấp dẫn.
        </p>
        <h3>Tầm nhìn</h3>
        <p>
          Mr.Duyet mong muốn trở thành điểm đến số 1 cho nhu cầu mua sắm trực tuyến tại Việt Nam.
        </p>
        <h3>Sứ mệnh</h3>

        <p>
          Sứ mệnh của Mr.Duyet là mang thương mại điện tử đến với mọi đối tượng khách hàng, từ những tầng lớp bình dân nhất, ít quan tâm đến công nghệ nhất. Từ đó, Mr.Duyet sẽ từng bước xây dựng văn hoá tiêu dùng tiện lợi và văn minh cho người Việt Nam.
        </p>

        <p>
          Mr.Duyet cũng tạo ra cơ hội cho các Nhà sản xuất nội địa mở rộng thị trường, có được một môi trường phát triển lành mạnh, hiệu quả. Đây là một phần quan trọng tạo ra động lực mạnh mẽ để phát triển nền kinh tế, từ đó góp phần vào sự thịnh vượng của đất nước.
        </p>

        <h3>Giá trị cốt lõi</h3>

        <p>
          Mr.Duyet xác định luôn trung thành với những giá trị cốt lõi của mình để luôn là sự lựa chọn số một của người tiêu dùng. Hệ thống giá trị bao gồm:
          <ul>
            <li>- Chất lượng sản phẩm và dịch vụ tốt nhất</li>
            <li>- Thanh toán an toàn, bảo mật, đáp ứng tiêu chuẩn Quốc tế.</li>
            <li>- Thời gian giao hàng linh hoạt.</li>
            <li>- Chăm sóc khách hàng 24/7.</li>
            <li>
              - Nền tảng công nghệ hiện đại, luôn được cập nhật, đổi mới.
            </li>
          </ul>
        </p>
      </div>
      <div class="col-sm-3 col-sm-offset-1">
        <div class="statistic">
          <span>2017</span>
          <h4 class="uppercase">Năm thành lập</h4>
        </div>            
        <div class="statistic">
          <span>120</span>
          <h4 class="uppercase">Đối tác của chúng tôi</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <hr>
</div>
<section class="section-wrap our-team pb-50">
  <div class="container">

    <div class="row heading-row">
      <div class="col-md-12 text-center">
        <h2 class="heading uppercase">Thành viên</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
        <div class="team-member">
          <div class="team-img">
            <img src="img/team/team_1.jpg" alt="">
          </div>
          <h4 class="team-title uppercase">Nhật Duyệt</h4>
          <span>Front-End Dev</span>
                  
        </div>
      </div>
      <div class="col-md-3 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
        <div class="team-member">
          <div class="team-img">
            <img src="img/team/team_2.jpg" alt="">
          </div>
          <h4 class="team-title uppercase">Long Nguyễn</h4>
          <span>Leader Dev</span>
                  
        </div>
      </div>
      {{-- <div class="col-md-3 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
        <div class="team-member">
          <div class="team-img">
            <img src="img/team/team_3.jpg" alt="">
          </div>
          <h4 class="team-title uppercase">Katerine Winslow</h4>
          <span>HR Manager</span>
          
        </div>
      </div>
      <div class="col-md-3 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
        <div class="team-member">
          <div class="team-img">
            <img src="img/team/team_4.jpg" alt="">
          </div>
          <h4 class="team-title uppercase">Joey Tribbiani</h4>
          <span>Lead Designer</span>
                      
        </div>
      </div> --}}
    </div>
  </div>
</section>

<div class="container">
  <hr>
</div>

<section class="section-wrap testimonials">
  <div class="container">
    <div class="row heading-row mb-60">
      <div class="col-md-12 text-center">
        <h2 class="heading uppercase">Ý kiến của khách hàng</h2>
      </div>
    </div>
    <div id="owl-testimonials" class="owl-carousel owl-theme owl-dark-dots text-center">
      <div class="item">
        <div class="testimonial">
          <p class="testimonial-text">
            Tôi ngạc nhiên, tôi nên nói cảm ơn bạn rất nhiều cho awesome mẫu của bạn. Thiết kế như vậy là tốt và gọn gàng, mỗi chi tiết đã được chăm sóc những đội ngũ thực sự tuyệt vời và tài năng!
          </p>
          <span class="uppercase">Sara Simpson / Google</span>
        </div>
      </div>
      <div class="item">
        <div class="testimonial">
          <p class="testimonial-text">
            Tôi ngạc nhiên, tôi nên nói cảm ơn bạn rất nhiều cho awesome mẫu của bạn. Thiết kế như vậy là tốt và gọn gàng, mỗi chi tiết đã được chăm sóc những đội ngũ thực sự tuyệt vời và tài năng! Tôi sẽ chỉ làm việc với các bạn
          </p>
          <span class="uppercase">John C. Marshall / Apple</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <hr>
</div>

<section class="section-wrap partners pt-50 pb-50">
  <div class="container">
    <div class="row">
      <div id="owl-partners" class="owl-carousel owl-theme">
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_1.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_2.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_3.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_4.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_5.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_6.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_1.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="about-us.html#">
            <img src="img/partners/partner_logo_dark_2.png" alt="">
          </a>
        </div>
      </div> 
    </div>
  </div>
</section>
@stop