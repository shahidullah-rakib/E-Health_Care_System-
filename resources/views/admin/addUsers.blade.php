@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Add User
@endsection

@section('msg')
    <section class="validation">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </section>
@endsection
{{-- main content --}}
@section('main-content')
    <div class="content">

        {{-- show validation message --}}
        <div class="validation">
            @foreach ($errors->all() as $error)
                <div class="msg">{{ $error }}<br></div>
            @endforeach
        </div>

        <div class="container"
            style="background-color: white;max-height:590px; margin-left: 200px; max-width: 600px; padding: 20px; margin-top: -550px;">

            <h2>Add User</h2>
            <form action="" method="post">
                <!-- csrf token -->
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="label">Userame</label>
                    <input type="text" placeholder="Enter username" class="form-control input" name="username" value="{{old('username')}}">
                </div>
                <div class="form-group">
                    <label class="label">Email</label>
                    <input type="email" class="form-control input" placeholder="Enter email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" class="form-control input" name="salary" placeholder="Salary" value="{{old('salary')}}">
                </div>
                <div class="form-group">
                    <label class="label">Password</label>
                    <input type="password" class="form-control input" id="password" name="password"
                        placeholder="Enter password" />
                    {{-- <i class="bi bi-eye-slash" id="togglePassword"></i> --}}
                </div>

                <div id='type-select'>
                    <label for="">Type</label>
                    <select name="type" id="problem" class="form-control">
                        <!-- <option selected>Select type</option> -->
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="patient">Patient</option>
                        <option value=" receptionist"> Receptionist</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-info"
                    style="padding:8px 50px;margin-top:20px;margin-left:180px;font-size:1.1rem" name="submit" value="Add">
            </form>
        </div>
    </div>
@endsection

@section('js')

    {{-- <script>
        const password = document.querySelector('#password');
        document.querySelector('#togglePassword').addEventListener('click', function(e) {
            if (password.type === 'password') {
                password.type = 'text';
                //this means togglePassword
                this.classList.toggle('bi-eye');
            } else {
                password.type = "password";
                this.classList.toggle('bi-eye');
            }
        });
    </script> --}}
@endsection
