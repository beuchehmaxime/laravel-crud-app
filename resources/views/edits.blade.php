@extends('include.layout')
@section('name')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-user-plus text-primary"></i> Edit Employee </h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-2"></div>
            
            <!-- Content Column -->
            <div class="col-lg-8 mb-4">
                <!-- Project Card Example -->
                  <!-- DataTales Example -->
                  
            @include('include.message')
                  <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus text-primary"></i> Edit New Employee</h6>
                    </div>
                    <div class="card-body">
                           <!-- General Form Elements -->
                        <form method="POST" action="{{route('update',$employee->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row d-flex">
                                    <div class="col-6">
                                        <label for="inputText" class="col-sm-12 col-form-label">Empolyee Firstname</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" value="{{$employee->firstname}}"> 
                                    </div>
                                    @error('firstname')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="inputText" class="col-sm-12 col-form-label">Employee Lastname</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{$employee->lastname}}"> 
                                    </div>
                                    @error('lastname')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="inputText" class="col-form-label">Employee Email</label>
                                    <div>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$employee->email}}"> 
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="inputText" class="col-form-label">Employee Position Current Position | {{$employee->position}}</label>
                                    <select name="position" id="position" class="form-control">
                                        <option value="">Select Employee Position</option>
                                        <option value="webdeveloper">Web Developer</option>
                                        <option value="appdeveloper">App Developer</option>
                                        <option value="pdesigner">Product Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="inputText" class="col-form-label">Employee Date Of Birth (Current Start Date: {{$employee->dateofbirth}})</label>
                                    <div>
                                        <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" value="{{$employee->dateofbirth}}"> 
                                    </div>
                                    @error('dob')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="inputText" class="col-form-label">Employee Start Date (Current Start Date: {{$employee->startdate}})</label>
                                    <div>
                                        <input type="date" name="startdate" class="form-control @error('startdate') is-invalid @enderror" id="startdate" value="{{$employee->startdate}}"> 
                                    </div>
                                    @error('startdate')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="inputText" class="col-form-label">Employee Salary</label>
                                    <div>
                                        <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" id="salary" value="{{$employee->salary}}"> 
                                    </div>
                                    @error('salary')
                                    <div class="text-danger">{{$message}}</div>                      
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Update Employee</button>
                            </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection