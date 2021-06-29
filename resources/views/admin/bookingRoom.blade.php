@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Booking Room
@endsection

{{-- main content --}}
@section('main-content')
        <div class="content">
            {{-- show validation message --}}
        <div class="validation">
            @foreach ($errors->all() as $error)
                <div class="msg">{{ $error }}<br></div>
            @endforeach
        </div>
            <div class="container"
                style="background-color: white;max-height:600px; margin-left: 200px; max-width: 600px; padding: 20px; margin-top: -550px;">
                <h2>Room Book</h2>
                <form action="" method="post">
                    <!-- csrf token -->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name" class="label">Room No</label>
                        <input type="text" name="roomNo" placeholder="Room No.." class="form-control input" value="{{$room->roomNo}}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label">Type</label>
                        <input type="text" name="type" placeholder="seat.." name="seat" class="form-control input" value="{{$room->roomType}}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label">Price</label>
                        <input type="text" name="price" placeholder="Price" name="Price" class="form-control input" value="{{$room->price}}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label">Patient name</label>
                        <input type="text" name="patientName" placeholder="Patient name.." class="form-control input" value="{{old('patientName')}}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label">Phone No</label>
                        <input type="text" name="phone" placeholder="Phone No.." name="phoneNo" class="form-control input" value="{{old('phone')}}">
                    </div>
                    <input type="submit" class="btn btn-info" style="padding:8px 30px;margin-top:20px" name="RoomBook" value="Booked">
                </form>
            </div>
        </div>
@endsection