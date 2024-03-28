@extends('layouts.master_page')

@section('datatablestyle')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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

        <div class="st-form">
        <div class="card" style="width: 42rem;">
        <h2 id="heading-stlist">Edit Student Data</h2>
     
        <div class="col-md-12">
            <!--============================================================-->  
            <form  method="POST" action="/update_student_info/{{$edit_stud_profile->id}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputEmail4" style="font-size:16px">Name</label>
                        <input type="text" name="name" value="{{$edit_stud_profile->name}}" class="form-control my-colorpicker1" placeholder="Name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputEmail4" style="font-size:16px">Image</label>
                        <input type="file" name="image" value="{{$edit_stud_profile->image}}" class="form-control my-colorpicker1" >

                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputPassword4" style="font-size:16px">Age</label>
                        <input type="number" name="age" value="{{$edit_stud_profile->age}}" class="form-control my-colorpicker1" placeholder="Age">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputPassword4" style="font-size:16px">Status</label>
                        <select class="form-control my-colorpicker1" name="status" value="{{$edit_stud_profile->status}}">
                            <option value="active" {{($edit_stud_profile->status === 'active') ? 'Selected' : ''}}>Active</option>
                            <option value="inactive" {{($edit_stud_profile->status === 'inactive') ? 'Selected' : ''}}>Inactive</option>
                            
                      </select>

                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <a href="{{url('/added_students')}}" type="submit" class="btn btn-secondary btn-block btn-lg">Back</a>
                    </div>

                    <div class="mb-3 col-md-6">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Save</button>
                    </div>
                </div>

                
            </form>

            <!--============================================================-->  
        </div> 
      
    </div>   
    </div>   


@endsection

@section('datatablescripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

    