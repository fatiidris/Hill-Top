@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Teachers Details</h1>
          </div>
         
        </div>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
<div class ="card">
        <div class = "card-body">
            <div class = "card-body">
            <h5 class = "card-title">User_Id: {{ $teachers-> user_id}}</h5>
            <h5 class = "card-title">Name: {{ $teachers->name }}</h5>
            <p class = "card-text">Gender: {{ $teachers->gender }} </p>
            <p class = "card-text">Phone Number: {{ $teachers->phone }} </p>
            <p class = "card-text">Date Of Birth: {{ $teachers->dateofbirth }} </p>
            <p class = "card-text">Address: {{ $teachers->address}} </p>
            <p class = "card-text">Date Addmited : {{ $teachers->start_date }} </p>
            
            <a href="{{ url('teacher') }}"><button class="btn btn-primary btn-sm">Back</button></a>
        </div>
    </div>

</div>
 <!-- /.card -->

            <!-- Form Element sizes -->
       
            <!-- /.card -->
            <!-- Horizontal Form -->
                    <!-- /.card -->

                    </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    
    </section>
    <!-- /.content -->
  </div>
  @include('layouts.footer')

 @endsection
