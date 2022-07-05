@extends('admin.layouts.master');
@section('content')
<div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Instructors</h5>
                                            <span>Add Instructor</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Instructors</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Instructor</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        {{Session::get('message')}}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Add Instructor</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('instructor.store')}}" method="post" class="forms-sample" enctype="multipart/form-data">@csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="">Full name</label>
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="instructor name" value="{{old('name')}}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="instructor email" value="{{old('email')}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="instructor password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Gender</label>
                                                     <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                                       <option value="">Please select</option>
                                                          <option value="male">Male</option>
                                                          <option value="female">Female</option>
                                                     </select>
                                                     @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="">Instructor Credentials</label>
                                                    <input type="education" name="education" class="form-control @error('education') is-invalid @enderror" placeholder="instructor credentials" value="{{old('education')}}">
                                                    @error('education')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="instructor address" value="{{old('address')}}">
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="">Specialty</label>
                                                    <select name="department" class="form-control @error('department') is-invalid @enderror" value="{{old('department')}}">
                                                       <option value="">Please select</option>
                                                          <option value="jumping">Jumping</option>
                                                          <option value="basics">Basics</option>
                                                     </select>
                                                     @error('specialty')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="instructor phone" value="{{old('phone_number')}}">
                                                    @error('phone_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>Role</label>
                                                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror" value="{{old('role_id')}}">
                                                                    <option value="">Please select role<option>
                                                                        @foreach(App\Role::where('name','!=','patient')->where('name','!=','student')->get() as $role)
                                                                            <option value="{{$role->id}}">
                                                                                {{$role->name}}
                                                                            </option>
                                                                        @endforeach
                                                                </select>
                                                                @error('role_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                      </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6"> 
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <div class="input-group col-md-6">
                                                            <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror" placeholder="Upload Image" name="image">
                                                            @error('image')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleTextarea1">About</label>
                                                <textarea class="form-control @error('image') is-invalid @enderror" id="exampleTextarea1" rows="4"name="description"> {{old('description')}}</textarea>
                                               
                                                
                                                @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection