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
        @if(Session::has('errmessage'))
            <div class="alert bg-danger alert-success text-white" role="alert">
                {{Session::get('errmessage')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
                
            </div>
                
        @endforeach
    <form action="{{route('appointment.check')}}" method="post">
        @csrf
    <div class="card">
        <div class="card-header">
            Choose date
             <br>
                @if(isset($date))
                Your timetable for:
                    {{$date}}
                @endif
        </div>
        <div class="card-body">
        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        <br>
        <button type="submit" class="btn btn-primary">check</button>    
    </div>
    </div>
</form>
@if(Route::is('appointment.check'))
<form action="{{route('update')}}" method="post">@csrf
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
      <input type="hidden" name="appointmentId" value="{{$appointmentId}}">
    <tr>
      <td><input type="checkbox" name="time[]" value="6am"  @if(isset($times)){{$times->contains('time','6am')?'checked':''}}@endif> 6am</td>
      <td><input type="checkbox" name="time[]" value="7am"  @if(isset($times)){{$times->contains('time','7am')?'checked':''}}@endif> 7am</td>
      <td><input type="checkbox" name="time[]" value="8am"  @if(isset($times)){{$times->contains('time','8am')?'checked':''}}@endif> 8am</td> 
      <td><input type="checkbox" name="time[]" value="9am"  @if(isset($times)){{$times->contains('time','9am')?'checked':''}}@endif> 9am</td> 
      <td><input type="checkbox" name="time[]" value="10am" @if(isset($times)){{$times->contains('time','10am')?'checked':''}}@endif> 10am</td> 
      <td><input type="checkbox" name="time[]" value="11am" @if(isset($times)){{$times->contains('time','11am')?'checked':''}}@endif> 11am</td> 
      <td><input type="checkbox" name="time[]" value="12am" @if(isset($times)){{$times->contains('time','12pm')?'checked':''}}@endif> 12pm</td> 
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
      <td><input type="checkbox" name="time[]" value="1pm" @if(isset($times)){{$times->contains('time','1pm')?'checked':''}}@endif> 1pm</td>
      <td><input type="checkbox" name="time[]" value="2pm" @if(isset($times)){{$times->contains('time','2pm')?'checked':''}}@endif> 2pm</td>
      <td><input type="checkbox" name="time[]" value="3pm" @if(isset($times)){{$times->contains('time','3pm')?'checked':''}}@endif> 3pm</td> 
      <td><input type="checkbox" name="time[]" value="4pm" @if(isset($times)){{$times->contains('time','4pm')?'checked':''}}@endif> 4pm</td> 
      <td><input type="checkbox" name="time[]" value="5pm" @if(isset($times)){{$times->contains('time','5pm')?'checked':''}}@endif> 5pm</td> 
      <td><input type="checkbox" name="time[]" value="6pm" @if(isset($times)){{$times->contains('time','6pm')?'checked':''}}@endif> 6pm</td> 
      <td><input type="checkbox" name="time[]" value="7pm" @if(isset($times)){{$times->contains('time','7pm')?'checked':''}}@endif> 7pm</td> 
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
 
</div> 
</form>
@else
<h3>My Appointment Times: {{$myappointments->count()}}</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Creator</th>
      <th scope="col">Date</th>
      <th scope="col">View/Update</th>
    </tr>
  </thead>
  <tbody>
      @foreach($myappointments as $appointment)
    <tr>
      <th scope="row">{{$appointment->id}}</th>
      <td>{{$appointment->doctor->name}}</td>
      <td>{{$appointment->date}}</td>
      <td>
      <form action="{{route('appointment.check')}}" method="post">
        @csrf

        <input type="hidden" name="date" value={{$appointment->date}}>
                    <button type="submit" class="btn btn-primary">View/Update</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
 <style type="text/css">
        input[type="checkbox"]{
            zoom:1.5;
        }
        body{
            font-size:20px;
        }
    </style>
@endsection