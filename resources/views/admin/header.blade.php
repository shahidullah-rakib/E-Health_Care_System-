
@section('header')
<div class="header">
    <img src="{{asset('upload/'.session('image'))}}" alt="profile">
    <div class="img-content">
        <ul>
            <li><b>{{session('uname')}}</b></li>
            <li><a href="{{route('admin.myProfile')}}"><i class="flaticon-user" aria-hidden="true" style="padding-right: 15px;"></i>My profile</a></li>
            <li><a href="{{route('admin.changePassword')}}"><i class="flaticon-padlock" aria-hidden="true" style="padding-right: 15px;"></i>Change Password</a></li>
            <li><a href="{{route('logout')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>logout</a></li>
        </ul>
    </div>
</div>
@endsection
