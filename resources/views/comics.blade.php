@extends ('layout.layout')

@section('title', 'Comics')

@section('content')
  <div class="comics">
    <div class="container">

      <div class="heading">
        <h2>Current Series</h2>
      </div>

      <!-- Products -->
      <div class="row">
        @foreach ( $comics as $key => $comic )
          <div class="card">
            <a href=" {{ route( 'comic', [ 'id' => $key ] ) }} ">
              <img src="{{ $comic['thumb'] }}" alt="">
              <div class="title">{{ $comic['title'] }}</div>
            </a>
          </div>
        @endforeach
      </div>

      <div class="load-more">
        <h4>Load More</h4>
      </div>
    </div>
  </div>
@endsection