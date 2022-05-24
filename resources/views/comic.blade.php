@extends('layout.layout')

@section('title', 'Comic Details')

@section('content')
  <div class="comic-top">
    <div class="container-narrow">
      <div class="cover-frame">
        <img class="comic-cover" src="{{ $singleComic['thumb'] }}" alt="Comic cover">
        <div class="comic-book">COMIC BOOK</div>
        <div class="view-gallery">VIEW GALLERY</div>
      </div>
    </div>
  </div>

  <div class="comic-main">
    <div class="container-narrow">
      
    </div>
  </div>
@endsection