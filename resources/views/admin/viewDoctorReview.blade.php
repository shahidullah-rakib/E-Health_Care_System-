@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Doctor Review
@endsection

{{-- main content --}}
@section('main-content')
        <div class="content">
            <div class="container" style="background-color: #fff;margin-bottom: 400px;max-width: 1000px; margin-left:100px;margin-top:150px">
                <table class="table">
                <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">Doctor Review</h1> 
                    <thead>
                        <th>Name</th>
                        <th>Review</th>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                        <tr>

                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->message}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
@endsection