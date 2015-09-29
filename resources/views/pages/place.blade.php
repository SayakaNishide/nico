@extends('layout')
 
@section('place')
  <div class="place container text-center">
    <h2>あき施設</h2>
      <div class="goods col-md-3">
        @if ($place_able !== null)
        <form method="GET" action="{{action('PagesController@select')}}" accept-charset="UTF-8">
          <div class="use_place">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-warning">使う</button>
          </div>
       </div>
    </div>
    <h1>About Place: {{ $first_name }} {{ $last_name }}</h1>
@endsection