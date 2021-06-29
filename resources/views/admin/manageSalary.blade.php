@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    manage salary
@endsection

{{-- main content --}}


@section('main-content')
<div class="content">
    <div class="block-msg">
        {{session('msg')}}
     </div>
    <div class="container" style="margin-left: 70px; max-width: 1100px;">
        
        <table class="table" style="background-color: #fff;">
            <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">Manage Employee Salary</h1>  
                <thead class="thead">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->salary}}</td>
                        <td>
                            <a class="btn btn-outline-success" href="/admin/updateSalary/{{$user->id}}">update salary</a>
                        </td>
                    </tr>
                    @endforeach     
                </tbody>
            </table>
        </div>
    </div>
@endsection
