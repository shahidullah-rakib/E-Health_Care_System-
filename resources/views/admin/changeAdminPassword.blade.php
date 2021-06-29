@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Change Password
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content" style="background-color:#fff">

        {{-- session value print --}}
        <div class="report-msg">
            {{session('msg')}}
         </div>

        {{-- show validation message --}}
        <div class="validation">
            @foreach ($errors->all() as $error)
                <div class="msg">{{ $error }}<br></div>
            @endforeach
        </div>
        
        <div class="changePassword">
            <img src="{{ asset('/images/password.jpg') }}" alt="" width="200px"
                style="width:200px;height:200px;margin-top: 100px;margin-bottom: -30px"><br><br><br>
            <form method="POST">
                {{csrf_field() }}
                <input type="password" name="currentPass" id="currentPass" placeholder="Current Password"><br>
                <label id="lcurrent" style="color: red;font-size: .5rem;"></label><br>

                <input type="password" name="newPassword" id="newPass" placeholder="New Password"><br>
                <label id="lnew" style="color: red;font-size: .8rem;"></label><br>
                <input type="password" name="retypePassword" id="retypePass" placeholder="Confirm New Password"><br>

                <label id="lretype" style="color: red;font-size: .8rem;"></label><br>
                <div id="password-container" style="padding: 20px 0px;">
                    <input class="btn btn-dark" type="submit" name="submit" value="Change Password">
                </div>
            </form>
        </div>
    </div>
@endsection
