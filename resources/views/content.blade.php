@extends('layouts.app')

@section('content')
@parent
  @include('Dashboard')
  @include('Report')
  @include('Statistics')
  @include('Articles')
  
@stop