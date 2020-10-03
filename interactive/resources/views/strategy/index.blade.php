@extends('layouts.app')

@section('content')
  <div class="container">
    {{ @foreach strategy of strategies }}
      <li>{{ strategy->title }}</li>
    {{ @endforeach }}
  </div>
@endsection
