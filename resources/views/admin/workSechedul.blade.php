@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Work Schedual
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content">
        
        <div class="report-msg ">
            {{session('msg')}}
         </div>

        <div class="container" style="margin-left: 70px; max-width: 1000px;">
            <table class="table " style="background-color: #fff;">
                <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">Work Schedule</h1>
                <thead  class="thead">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">change Schedule</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->workshift }}</td>
                            <td>
                                <form method="get" action="{{ route('user.workSchedul',$user->id) }}">
                                    <select name="workShift" id="problem" class="form-control">
                                        <option selected>Select status</option>
                                        <option value="day shift">Day shift</option>
                                        <option value="night shift">Night Shift</option>
                                    </select>
                            </td>
                            <td>
                                <input type="submit" value="Update" class="btn btn-outline-info">
                            </td>
                                </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
