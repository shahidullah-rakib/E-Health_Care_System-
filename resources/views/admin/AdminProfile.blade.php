@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    My Profile
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content">
        <div class="block-msg">
            {{session('msg')}}
         </div>
        <div class="container" style="margin-left: 100px; margin-top: 20px;">

            {{-- profile image  --}}
            <div style="margin-bottom: 20px">
                <img src="{{asset('upload/'.$profile->image)}}" alt="profileImg"
                style="width: 200px; height: 200px; margin-left: 150px;"><br><br>

                <form action="/admin/image" method="POST" enctype="multipart/form-data">
                    <input type="file" name="profile" style="margin-left: 100px;">
                    <input type="submit" class="btn btn-outline-info" name="upload" value="Upload">
                </form>
            </div>

            <form action="" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Name</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="email" placeholder="null"
                                    value="{{$profile->name}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Username</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="email" value="{{$profile->username}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Email</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" value="{{$profile->email}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Phone</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="email" placeholder="null" value="{{$profile->phone}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Blood Group</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="text" name="bloodGroup" class="form-control" id="email" placeholder="null" value="{{$profile->bloodGroup}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="padding: 20px; margin-bottom: 100px;">Location</span></td>
                        <td style="min-width: 400px;">
                            <div class="form-group">
                                <input type="lext" name="location" class="form-control" id="email" placeholder="null"
                                    value="{{$profile->address}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Update" class="btn btn-info" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection

</body>

</html>
