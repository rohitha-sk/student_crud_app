
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
        <h2 id="heading-stlist">Student List</h2>
        <div class="col-md-12 text-right">
        <a href="{{ url('/student_form') }}" class="btn btn-primary">  <i class="fa fa-plus" aria-hidden="true"></i> Add Student</a>
        </div> 
        <br >
          <!--alert-->
           @if (session('status'))
                <div class="text-center">
                <h5><div class="alert alert-success" role="alert">
                      {{ session('status') }}
                </div></h5>
                </div>
              @endif 
              <!--alert-->

        <div class="col-md-12">
        <table class="table  table-striped stud_list">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Age</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td> <img src="{{asset('uploads/student_imgs/'.$student->image)}}" width="45" height="40" alt="Image">
</td>
      <td>{{$student->age}}</td>
      <td>{{$student->status}}</td>
      <td> 
      <a href="/edit_student_info/{{$student->id}}" class="btn btn-primary "><i class="fa fa-edit" style="font-size:20px"></i></a>

      
      <form  method="POST" action="/delete_stud_record/{{$student->id}}" enctype="multipart/form-data" type="button" class="btn btn-danger p-0 finalpost" id="deleteForm">
      @csrf 
      @method('DELETE')
      <button type="button" class="btn btn-danger m-0" onclick="confirmDelete()"><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>
 </td>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
        </div>
       
        <!--============================================================-->   
        </div>
    </div>   
</div>

@endsection

@section('datatablescripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete() {
  const result = confirm("Are you sure you want to delete this record?");
  if (result) {
    // Submit the form (assuming your delete logic resides in the form action)
    document.getElementById("deleteForm").submit();
  }
}
</script>

@endsection

    