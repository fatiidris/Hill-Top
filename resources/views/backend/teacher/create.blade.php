@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New Teacher</h1>
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
                    <!-- form start -->
                    <form action="{{ url('teacher') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_id">User Type:</label>
                                <select name="user_id" class="form-control" aria-label="Select User">
                                <option selected disabled>Select User</option>
                                    @foreach($admins as $admin)
                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="male">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="female">
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="other">
                                    <label class="form-check-label">Other</label>
                                </div>
                                @error('gender')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="dateofbirth" id="dateofbirth" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Date Appointed</label>
                                <input type="date" name="start_date" id="start_date" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
