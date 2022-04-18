@extends('client.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<main>
  <section>
  <div class="position-relative overflow-hidden home-slider">
    <div class="container">
      <div class="row">
          <div class="col-md-5  col-sm-12  my-5">
          <h1 class="display-4 my-3">Nhà thông minh</h1>
          <div>
            <img src="{{asset('images/client/logo.png')}}" alt="">
          </div>
          <p class="fw-normal  my-3">Hệ thống nhà thông minh thế hệ mới nhất trên thế giới, công nghệ vượt trội so với các sản phẩm của Mỹ và Châu Âu - theo tiêu chí xếp hạng của Gartner</p>
          <a class="btn btnprinary btn-outline-secondary my-3" href="#">Tìm hiểu thêm</a>
        </div>
        <div class="col-md-7  col-sm-12">
            <div class="home-slider-img">
                <img src="{{asset('images/client/hero.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="container my-5">
        <div class="row">
        <div class="col-7 home-bl" >
            <div class="home-bl-header">
              <p>Nhà Thông Minh</p>
              <img src="{{asset('images/client/logo.png')}}" alt="">
            </div>
            <div class="home-bl-body">
              <div class="home-bl-body-b1">
              <div class="card home-box" >
              <img src="{{asset('images/3.png')}}" class="card-img-top" alt="course image">

                <div class="home-box-body">
                  <h2 class="home-box-body-text">Giải pháp an ninh</h2>
                  <p class="home-box-body-text">TBộ thiết bị an ninh cao cấp NeoSmart Security là hệ thống Giám sát, bảo vệ ngôi nhà theo nhiều lớp, từ tường rào, sân vườn, các cửa tới từng khu vực, phòng ốc.</p>
                  <a class="home-box-body-text" href="">Learn more  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></a>
                </div>
              </div>
            </div>
            <div class="home-bl-body-b2">
              <div class="card home-box" >
              <img src="{{asset('images/3.png')}}" class="card-img-top" alt="course image">

                <div class="home-box-body">
                  <h2 class="home-box-body-text">Thiết bị nhà thông minh</h2>
                 
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></a>
                </div>
                <div class="home-box-body-product">
                  <img src="{{asset('images/image 1.png')}}" alt="">
                  <h3 class="text-center">44.000.000 VND</h3>
                  <p class="home-box-body-text">Thiết bị điều khiển trung tâm SH-HC</p>
                  <a class="home-box-body-text" href="">Learn more  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></a>
              </div>
              </div>

            </div>
            </div>
       </div>
    <div class="col-5">
          <div>
            <div class="card home-box" >
            <img src="{{asset('images/3.png')}}" class="card-img-top" alt="course image">

              <div class="home-box-body">
                <h2 class="home-box-body-text">Giải pháp an ninh</h2>
                <p class="home-box-body-text">TBộ thiết bị an ninh cao cấp NeoSmart Security là hệ thống Giám sát, bảo vệ ngôi nhà theo nhiều lớp, từ tường rào, sân vườn, các cửa tới từng khu vực, phòng ốc.</p>
                <a class="home-box-body-text" href="">Learn more  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg></a>
              </div>
            </div>
          </div>
           <div>
            <div class="card home-box" >
            <img src="{{asset('images/3.png')}}" class="card-img-top" alt="course image">

              <div class="home-box-body">
                <h2 class="home-box-body-text">Giải pháp an ninh</h2>
                <p class="home-box-body-text">TBộ thiết bị an ninh cao cấp NeoSmart Security là hệ thống Giám sát, bảo vệ ngôi nhà theo nhiều lớp, từ tường rào, sân vườn, các cửa tới từng khu vực, phòng ốc.</p>
                <a class="home-box-body-text" href="">Learn more  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg></a>
              </div>
            </div>
          </div>
          <div>
            <div class="card home-box" >
            <img src="{{asset('images/3.png')}}" class="card-img-top" alt="course image">

              <div class="home-box-body">
                <h2 class="home-box-body-text">Giải pháp an ninh</h2>
                <p class="home-box-body-text">TBộ thiết bị an ninh cao cấp NeoSmart Security là hệ thống Giám sát, bảo vệ ngôi nhà theo nhiều lớp, từ tường rào, sân vườn, các cửa tới từng khu vực, phòng ốc.</p>
                <a class="home-box-body-text" href="">Learn more  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg></a>
              </div>
            </div>
          </div>
    </div>
        </div>
  </section>

  </main>
@endsection