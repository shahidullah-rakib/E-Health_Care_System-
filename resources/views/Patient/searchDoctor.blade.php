<!--Search bar for searching doctors-->
<html>
<h1> Doctor Search Page</h1>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  background-color: green;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

.topnav .search-container {
  float:center;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: center;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #4db444;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <div class="search-container">
    <form action=" " method=" ">
      <input type="text" placeholder="Search Doctor..." name="name">
      <button type="submit" a href='/ViewDoctorInfoPage'><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>






<table border="1">

<style>
table {
  background-color: white;
}
</style>
                <tr>
                    <td>id</td>
                    <td> name</td>
                    <td> Email</td>
                    <td> Blood Group</td>
                    <td>Phone</td>
                    <td>Work Shift</td>
                </tr>
                
                @foreach($data1 as $d)
                    <tr>
                        <td>{{$d->id}}</td>
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