
@extends('layouts.master_page')

@section('datatablestyle')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection


@section('title')
<title>User Roles</title>
@endsection

@section('dashboard_name')
<br>
Student Dashboard
@endsection



@section('navbar')
@include('layouts.navigation')
@endsection

@section('content')


<div class="row">

    <div class="col-12 col-xl-12">
        <div class="card">
        <!--============================================================-->  
        <br>
        <div class="container">
  <div class="row">
    <div class="col">
      <!--==============================================-->
            <div class="card">
            <h5 class="card-header">Add New Student</h5>
            <div class="card-body">
            <div class="text-center">
            <a href="{{ url('/student_form') }}" class="btn btn-primary" style="width:70px">  <i class="fa fa-plus" aria-hidden="true"></i> </a>
            </div>
            </div>
            </div>
      <!--==============================================-->
    </div>
    <div class="col">
      <!--==============================================-->
      <div class="card">
            <h5 class="card-header">View Added Students</h5>
            <div class="card-body">
                <div class="text-center">
            <a href="{{ url('/added_students') }}" class="btn btn-primary" style="width:60px"><i class="fa fa-eye" aria-hidden="true"></i> </a>
            </div>
            </div>
            </div>
      <!--==============================================-->
    </div>
    <div class="col">
      <!--==============================================-->
      <div class="card">
            <h5 class="card-header">Edit or Delete Records</h5>
            <div class="card-body">
            <div class="text-center">
           <a href="{{ url('/added_students') }}"  class="btn btn-primary"> <i class="fa fa-edit" style="font-size:20px"></i> OR <i class="fa fa-trash" aria-hidden="true" style="font-size:20px"></i></a>
            </div>
            </div>
            </div>
      <!--==============================================-->
    </div>
  </div>
</div>
        <div>
    </div>   

    <div class="col-12 col-xl-12">
    <div class="card">
            <h5 class="card-header">Logged in user Information</h5>
            <div class="card-body">
            <div class="text-center">
            <ul style="text-align:left;font-weight:bold">
              <li>User ID: {{ Auth::user()->id }}</li>
              <li>Name : {{ Auth::user()->name }} </li>
              <li>Email : {{ Auth::user()->email }}</li>
            </ul>
            </div>
            </div>
    </div>
</div>

@endsection

@section('datatablescripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

    