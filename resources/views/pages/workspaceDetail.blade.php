@extends('layouts.app')

@section('content')
  @include('components.detail-info')
  @include('components.detail-filter')
  @include('components.ulasan')
  {{-- @include('components.detail-relevan') --}}
@endsection
