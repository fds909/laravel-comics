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
        @foreach ( $comics as $comic )
          <div class="card">
            <img src="{{ $comic['thumb'] }}" alt="">
            <div class="title">{{ $comic['title'] }}</div>
          </div>
        @endforeach
      </div>

      <div class="load-more">
        <h4>Load More</h4>
      </div>
    </div>
  </div>
@endsection