@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    User report
@endsection

{{-- main content --}}
@section('main-content')
    <div class="content">
        <div class="report-msg ">
            {{session('msg')}}
         </div>
         
        <div class="container" style="background-color: #fff;max-width: 1000px; margin-left:100px">
            <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">User Report</h1>
            <table class="table">
                <thead >
                    <th>Name</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Issue Action</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    @foreach ($reportlist as $report)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $report->name }}</td>
                            <td>{{ $report->message }}</td>
                            <td>{{ $report->status }}</td>
                            <td>
                                <form method="get" action="{{route('user.userReportStatus',$report->id)}}">
                                    <select name="status" id="problem" class="form-control">
                                        <option selected>Select status</option>
                                        <option value="working">Working</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                            </td>
                            <td><input type="submit" value="Update" class="btn btn-success"></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection