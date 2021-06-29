@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')
{{-- title --}}
@section('title')
    Edit User
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content">
        <div class="validation">
            @foreach ($errors->all() as $error)
                <div class="msg">{{ $error }}<br></div>
            @endforeach
        </div>
        <div class="container"
            style="background-color: white;margin-bottom: 200px; margin-left: 200px; max-width: 600px; padding: 20px; margin-top: -550px;">
            <h2>Edit User</h2>
            <form action="" method="post">

                <!-- csrf token -->
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="label">Userame</label>
                    <input type="text" name="username" placeholder="username.." class="form-control input" value="{{$user->username}}">
                </div>
                <div class="form-group">
                    <label class="label">Email</label>
                    <input type="email" name="email" class="form-control input" placeholder="email.." value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label class="label">Phone</label>
                    <input type="text" name="phone" class="form-control input" placeholder="null" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                    <label class="label">Active</label>
                    <input type="text" name="active" class="form-control input"  value="{{$user->active}}">
                </div>
                <input type="submit" class="btn btn-info" style="padding:8px 40px;margin-top:20px;margin-left:200px;"
                    name="submit" value="Save">
            </form>
        </div>
    </div>
@endsection
