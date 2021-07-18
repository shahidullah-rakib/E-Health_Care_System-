<html>
<h1> Patient Room page</h1>
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
                    <td>Room type</td>
                    <td>Price</td>
                    <td>status</td>
                    <td>room no</td>
                </tr>
                
                @foreach($rooms as $d)
                    <tr>
                        <td>{{$d->roomType}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{$d->status}}</td>
                        <td>{{$d->roomNo}}</td>
                    </tr> 
                @endforeach
                
            </table>





</body>
</html>