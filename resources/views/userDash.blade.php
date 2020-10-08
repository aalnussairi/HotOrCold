@extends('templates/master')

@section('pageTitle')
  Dashboard | Hot or Cold
@endsection

@section('customHead')

@endsection

@section('content')
    @include('widgets/userDash')

@endsection

@section('customScripts')
  @include('widgets/userDashScripts')
@endsection
