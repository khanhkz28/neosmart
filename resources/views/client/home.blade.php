@extends('client.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<main>
<div class="position-relative overflow-hidden home-slider">
    <div class="container">
      <div class="row">
          <div class="col-5  my-5">
          <h1 class="display-4 my-3">Nhà thông minh</h1>
          <div>
            <img src="{{asset('images/client/logo.png')}}" alt="">
          </div>
          <p class="fw-normal  my-3">Hệ thống nhà thông minh thế hệ mới nhất trên thế giới, công nghệ vượt trội so với các sản phẩm của Mỹ và Châu Âu - theo tiêu chí xếp hạng của Gartner</p>
          <a class="btn btnprinary btn-outline-secondary my-3" href="#">Tìm hiểu thêm</a>
        </div>
        <div class="col-7">
            <div class="home-slider-img">
                <img src="{{asset('images/client/hero.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
  </main>
@endsection