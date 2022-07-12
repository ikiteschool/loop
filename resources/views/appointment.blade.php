@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Doctor Information
                    </h4>
                    <img src="/doctor/doctor.png" width="100px" style="border-radius: 50%;">
                    <p>Name:</p>
                    <p>Expertise:</p>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <form action="" method="post">
            <div class="card">
                <div class="card-header">{{$date}}</div>

                <div class="card-body">
                   <div class="row">
                       @foreach($times as $time)
                       <div class="col-md-3">
                           <label class="btn btn-outline-primary">
                                <input type="radio" name="status" value="1">
                                <span>{{$time->time}}</span>
                           </label>
                       </div>
                       @endforeach
                   </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn-success" style="width:100%;">Schedule Appointment</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
