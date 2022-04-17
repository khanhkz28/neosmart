@extends('client.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<main>
<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
    <div class="col-md-5 p-lg-5  my-5">
      <h1 class="display-4 fw-normal">Nhà thông minh</h1>
      <p class="lead fw-normal">Hệ thống nhà thông minh thế hệ mới nhất trên thế giới, công nghệ vượt trội so với các sản phẩm của Mỹ và Châu Âu - theo tiêu chí xếp hạng của Gartner</p>
      <a class="btn btnprinary btn-outline-secondary" href="#">Tìm hiểu thêm</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  </main>
@endsection