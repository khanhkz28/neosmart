@extends('client.layout')
@section('pageTitle', 'Công trình chi tiết')
@section('breadcrumb-first', 'Công trình chi tiết')
@section('breadcrumb-second', 'Công trình chi tiết')
@section('main')
<main>
{{ $row->title }}
{{ $row->description }}
{{ $row->content }}
  </main>
@endsection