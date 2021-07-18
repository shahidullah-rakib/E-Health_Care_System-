<html>
<h1> Doctor Information Page</h1>
<body>

<style>
body {
  background-color: green;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  font-size: 50px;
}
</style>


<table border="1">

<style>
table {
  background-color: white;
}
</style>
                <tr>
                    <td>Doctor name</td>
                    <td>Doctor Email</td>
                    <td>Doctor Blood Group</td>
                    <td>Phone</td>
                    <td>Work Shift</td>
                </tr>
                
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->bloodGroup}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{$d->workshift}}</td>
                    </tr> 
                @endforeach
                
            </table>





</body>
</html>