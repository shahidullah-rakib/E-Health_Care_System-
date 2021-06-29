@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Room Check
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content">
        <div class="block-msg">
            {{session('msg')}}
         </div>
        <div class="container"
            style="margin-left: 70px; margin-top: 150px; max-width: 1000px; background-color:#fff;margin-bottom:400px">
            <table class="table">
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Price(tk)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($rooms as $room)
                        
                    <tr>
                        <td>{{$room->roomNo}}</td>
                        <td>{{$room->roomType}}</td>
                        <td>{{$room->status}}</td>
                        <td>{{$room->price}}</td>
                        <td><a href="{{route('room.roomBookView',$room->id)}}" class="btn btn-warning">Booking</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection
