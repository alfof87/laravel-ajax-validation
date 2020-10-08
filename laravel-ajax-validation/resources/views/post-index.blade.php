@extends('layouts.main-layout')
@section('content')
  <div class="card">
    <div class="card-header">
      Posts
    </div>
    <div class="">
      <input type="checkbox" name="best_of" value="">
      <label for="best_of">Best of</label>
    </div>
    <div class="card-body">
      <ul id="posts">
        {{-- @foreach ($posts as $post)
          <li>
            {{ $post -> title }} {{ $post -> like }}
          </li>
        @endforeach --}}

      </ul>
    </div>
  </div>
@endsection
