@extends('layouts.master_page')

@section('title')
Dashboard
@endsection

@section('dashboard_name')
<br>
Student Dashboard
@endsection


@section('navbar')

@include('layouts.navigation')

@endsection





@section('content')

@include('crud_option_design')

@endsection