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
        <h2 id="heading-stlist">Student Data Form</h2>
     
        <div class="col-md-12">
            <!--============================================================-->  
            <form  method="POST" action="/save_student_info" enctype="multipart/form-data" id="myForm">
                {{csrf_field()}}
           

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputEmail4" style="font-size:16px">Name</label>
                        <input type="text" id="name" name="name" class="form-control my-colorpicker1" placeholder="Name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputEmail4" style="font-size:16px">Image</label>
                        <input type="file" name="image" class="form-control my-colorpicker1" >

                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputPassword4" style="font-size:16px">Age</label>
                        <input type="number" name="age" class="form-control my-colorpicker1" placeholder="Age">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputPassword4" style="font-size:16px">Status</label>
                        <select class="form-control my-colorpicker1" name="status">
                            <option selected disabled>Select</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            
                      </select>

                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <a href="{{url('/dashboard')}}" type="submit" class="btn btn-secondary btn-block btn-lg">Back</a>
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
<script>
    window.onload = function() {
        // Get the form element
        var form = document.getElementById('myForm');

        // Add event listener for form submission
        form.addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get all input elements within the form
            var inputs = form.querySelectorAll('input');

            // Flag to check if any input is empty
            var isEmpty = false;

            // Loop through each input element
            inputs.forEach(function(input) {
                // Check if the input value is empty or consists only of whitespace
                if (input.value.trim() === '') {
                    isEmpty = true;
                    // Highlight the empty input (you can add your own styling)
                    input.style.border = '1px solid red';
                } else {
                    // Reset border if input is not empty
                    input.style.border = '';
                }
            });

            // If any input is empty, display an error message
            if (isEmpty) {
                alert('Please fill in all the fields.');
                return false; // Prevent form submission
            }

            // If all inputs are filled, proceed with form submission
            // Uncomment the line below to allow form submission
             form.submit();
        });
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

    