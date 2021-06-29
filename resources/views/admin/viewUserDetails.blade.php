@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    User Details
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content" style="background-color:">
        <div class="container" style="margin-left: -120px; max-width: 1100px; margin-top:30px">
            <h2 style="margin-left:350px;margin-bottom:-20px">User Details</h2>
            <table class="tables">
                <tr>
                    <td>Name</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{$user->username}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>{{$user->type}}</td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td>{{$user->active}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$user->phone}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$user->address}}</td>
                </tr>
                {{-- <tr>
                    <td>DOB</td>
                    <td>{{$user->dob}}</td>
                </tr> --}}
                <tr>
                    <td>Blod Group</td>
                    <td>{{$user->bloodGroup}}</td>
                </tr>
            </table>

        </div>
    </div>
@endsection
