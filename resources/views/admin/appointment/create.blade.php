@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>appointment time</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
    </div>
</div>
<div class="container">
    @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    <form action="{{route('appointment.store')}}" method="post">
        @csrf
    <div class="card">
        <div class="card-header">
            Choose date
            <span></span>
        </div>
        <div class="card-body">
        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
           Choose AM Time
           <span style="margin-left: 700px">Check/Uncheck
               <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </div>
        <div class="card-body">
        <table class="table table-striped">
  <tbody>
    <tr>
      <td><input type="checkbox" name="time[]" value="6am"> 6am</td>
      <td><input type="checkbox" name="time[]" value="7am"> 7am</td>
      <td><input type="checkbox" name="time[]" value="8am"> 8am</td> 
      <td><input type="checkbox" name="time[]" value="9am"> 9am</td> 
      <td><input type="checkbox" name="time[]" value="10am"> 10am</td> 
      <td><input type="checkbox" name="time[]" value="11am"> 11am</td> 
      <td><input type="checkbox" name="time[]" value="12am"> 12pm</td> 
    </tr>
  </tbody>
</table>
        </div>
        <div class="card">
        <div class="card-header">
           Choose PM Time
        </div>
        <div class="card-body">
        <table class="table table-striped">
  <tbody>
    <tr>
      <td><input type="checkbox" name="time[]" value="1pm"> 1pm</td>
      <td><input type="checkbox" name="time[]" value="2pm"> 2pm</td>
      <td><input type="checkbox" name="time[]" value="3pm"> 3pm</td> 
      <td><input type="checkbox" name="time[]" value="4pm"> 4pm</td> 
      <td><input type="checkbox" name="time[]" value="5pm"> 5pm</td> 
      <td><input type="checkbox" name="time[]" value="6pm"> 6pm</td> 
      <td><input type="checkbox" name="time[]" value="7pm"> 7pm</td> 
    </tr>
  </tbody>
</table>
        </div>
    </div>
<div class="card">
    <div class="card-body">
        <button type="submit"class="btn btn-primary"> Submit</button>
    </div>
</div>
</form>
</div> 
 <style type="text/css">
        input[type="checkbox"]{
            zoom:1.5;
        }
        body{
            font-size:20px;
        }
    </style>
@endsection