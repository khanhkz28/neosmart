<section class="container faq mb150 my-10">
  <div class="row featurette">
     
      <div class="col-md-5 col-sm-12 featurette-img">
        <div class="featurette-heading"><a>FAQs</a></div>
        <img src="{{asset('images/client/Hfaq.png')}}" alt="">

      </div>
      <div class="col-md-7 col-sm-12">
      @foreach($data["faq"] as $faqs )
                    <div class="featurette-news">
                        <h3>{{$faqs->title}}</h3>
                        <p>{{$faqs->content}}</p>
                    </div>          
            @endforeach
      </div>
    </div>
  </section>      
  <section class="container mb150 my-10">
  <footer class="row featurette">
      <div class="col-md-7 col-sm-12">
        <div class="featurette-heading"><a>Tin tức</a></div>
          
            @foreach($data["faq"] as $faqs )
                    <div class="featurette-news">
                        <h3>{{$faqs->title}}</h3>
                        <p>{{$faqs->content}}</p>
                    </div>          
            @endforeach
      </div>
      <div class="col-md-5 featurette-img col-sm-12">
        <img src="{{asset('images/client/Hnews.png')}}" alt="">

      </div>
    </div>
  </section>
<div class="footer">
    <div class="container">
    <div class="row ">
        <div class="col-3 row">
            <img src="{{ asset('images/logofooter.png') }}" alt="" class="mb-3">
            <p><span>A.</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p><span>T.</span>+62-812-7313-4321</p>
            <p><span>E.</span>neosmart@gmail.com</p>
        </div>
        <div class="col-3 footer-center">
            <h4 class="mb-5">Trang chủ</h4>
            <ul>
                <li><a href="/congtrinh">Công trình</a></li>
                <li><a href="/sanpham">Sản phẩm</a></li>
                <li><a href="hoi-dap">Hỏi đáp</a></li>
                <li><a href="lien-he">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-3">
            <h4 class="mb-5">Follow US</h4>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">LinkedIn</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
        </div>
    </div>
    <h2 class="mt-5">2022 © NeoSmart. All rights reserved.</h2>
    </div>
</footer>