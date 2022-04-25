@extends('client.layout')
@section('pageTitle', 'Liên hệ')
@section('breadcrumb-first', 'Liên hệ')
@section('breadcrumb-second', 'Liên hệ')
@section('main')
<main>
  <div class="title position-relative text-center">
    <img class="w-100" src="./images/client/bgContact.png" alt="contact background">
    <div class="contact position-absolute d-flex flex-column">
      <h2 class="contact-heading fw-lighter fst-italic text-white">Liên hệ</h2>
      <p class="contact-text fs-lighter m-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, harum
        quibusdam molestias, officia
        laboriosam repellendus architecto eveniet iusto illum commodi amet sapiente rerum quos! Enim sed voluptatem amet
        doloribus officiis.</p>
    </div>
  </div>
  <div class="container-fuild row justify-content-center pt-5 px-4 mx-0">
    <div class="detail-contact col-lg-5 col-sm-12 col-md-12 d-flex flex-column p-4 mt-4">
      <img class="w-100" src="./images/client/imgContact.png" atl="image contact">

      <h2 class="dt-title my-4 fw-400">ADDRESS</h2>
      <p class="text-dt fw-400 fst-italic">12 Hoa Sứ, P.12, Q. Phú Nhuận, TP.HCM, Việt Nam</p>

      <h2 class="dt-title my-4 fw-400">PHONE</h2>
      <p class="text-dt fw-400">
        <i class="bi bi-telephone-fill"></i> +84 1900 6868 <br>
        <i class="bi bi-telephone-fill"></i> +84 909 09 09 90
      </p>

      <h2 class="dt-title my-5 fw-400">ONLINE SERVICE</h2>
      <p class="text-dt fw-400">
        <i class="bi bi-globe"></i> www.neosmart.vn <br>
        <i class="bi bi-envelope-fill"></i> info@neosmart.vn
      </p>
    </div>
    <div class="form-contact col-lg-5 col-sm-12 col-md-12 d-flex flex-column p-5 bg-white mt-4">
      <h2 class="title-form fw-400 lh-30 w-100 text-left">SEND US MESSAGE</h2>
      <form action="#" method="post" class="my-5 ">
        <div class="form-group mb-3">
          <label for="" class="lh-30">Full Name</label>
          <input class="form-control p-2 lh-30" type="text" name="fullname" placeholder="Your Name" />
        </div>
        <div class="form-group my-4">
          <label for="" class="lh-30">Email</label>
          <input class="form-control p-2 lh-30" type="text" name="email" placeholder="Your Email" />
        </div>
        <div class="form-group my-4">
          <label for="" class="lh-30">Phone Number</label>
          <input class="form-control p-2 lh-30" type="text" name="phone_number" placeholder="Your phone number" />
        </div>
        <div class="form-group my-4">
          <label for="txt-message" class="form-label">Message</label>
          <textarea class="form-control p-4 lh-30" id="txt-message" rows="7" placeholder="Your Message"></textarea>
        </div>
        <button class="btn btn-submit w-100 text-white p-3 text-center mt-4" name="btn_submit">SUBMIT</button>
      </form>
    </div>
    <div class="col-12 text-center">
      <iframe class="map-embed m-4"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d269.51637408008725!2d106.68795436217326!3d10.796875691560409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175295011527d6b%3A0x772f366c692e4b78!2zTeG6uXQgMiBNaeG7gW4!5e0!3m2!1svi!2s!4v1649919662673!5m2!1svi!2s"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</main>
@endsection