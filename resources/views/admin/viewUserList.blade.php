@extends('admin.main')
@extends('admin.link')
{{-- @extends('admin.header') --}}
@extends('admin.navbar')

{{-- title --}}
@section('title')
    User List
@endsection

@section('header')
    <div class="header">
        <div class="input-group" style="margin-left:50px">
            <div class="form-outline">
                <input type="text" id="form" name="search" class="form-control search-input" placeholder="Search"
                    style="width:300px;" />
            </div>
            <button type="button" class="btn btn-primary" style="height:37px;margin-top:1px">
                <i class="flaticon-loupe"></i>
            </button>
        </div>
        <img src="{{ asset('upload/' . session('image')) }}" alt="profile">
        <div class="img-content">
            <ul>
                <li><b>{{ session('uname') }}</b></li>
                <li><a href="{{ route('admin.myProfile') }}"><i class="flaticon-user" aria-hidden="true"
                            style="padding-right: 15px;"></i>My profile</a></li>
                <li><a href="{{ route('admin.changePassword') }}"><i class="flaticon-padlock" aria-hidden="true"
                            style="padding-right: 15px;"></i>Change Password</a></li>
                <li><a href="{{ route('logout') }}"><i class="flaticon-logout" aria-hidden="true"
                            style="padding-right: 15px;"></i>logout</a></li>
            </ul>
        </div>
    </div>

@endsection
{{-- main content --}}
@section('main-content')
    <div class="content">
        <div class="block-msg">
            {{ session('msg') }}
        </div>
        <div class="search-result" style=""></div>

        <div class="container" style="margin-left: 70px; max-width: 1100px;">

            <table class="table" style="background-color: #fff;">
                <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">User List</h1>
                <thead  class="thead">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userlist as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->active }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('user.editUserView',$user->id)}}">Edit</a>
                                <a class="btn btn-warning" href="{{route('user.blockUser',$user->id)}}">Block</a>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')" href=" /admin/delete/{{ $user->id}}">delete</a>
                                <a class="btn" href="{{route('user.viewUserDetails',$user->id)}}"
                                    style="background-color:#eb8d5e;color:#fff">View Details</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {

                $('.search-input').on('keyup', function() {
                    var query = $(this).val();

                    $.ajax({
                        url: "{{ route('user.search') }}",
                        type: "GET",
                        data: {
                            'search': query
                        },
                        success: function(data) {
                            $('.search-result').html(data);
                        }
                    });
               });

               
        });
    </script>
@endsection
