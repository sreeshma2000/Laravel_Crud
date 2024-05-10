<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightgrey;
        }
        h1{
            text-align:center;
        }
        h3{
            margin-left:10px;
        }
        div {
            background-color:white;
            width: 500px;
            margin: 0 auto;
            margin-top:100px;
            box-shadow: 5px 10px 18px rgb(172, 170, 166);
        }
       input{
            width:90%;
            padding: 5px;
            margin-bottom: 10px;
            margin-left:10px;
        }
         #btn{
            margin-left:10px;
            width:75px;
            height:40px;
            margin-top:10px;
            background-color:yellow;
            border:none;
            border-radius: 7px;
        }
        table {
        width: 50%; 
        margin: 50px auto; 
        border-collapse: collapse; 
        border: 2px solid #000;
        }
        th {
            border: 2px solid #000; 
            padding: 10px; 
            text-align: left; 
        }
        td {
            border: 1px solid #000; 
            padding: 10px; 
            text-align: left; 
        }
        
    </style>
</head>
<body>
   
    <div class="form">
    <form method="post" action="{{route('student.update',$student->id)}}">
        @csrf
        @method('PUT')
    <h3> First Name </h3>
    <input type="text" name="first_name" id="first_name" value="{{$student->first_name}}" readonly/>
    <h3> Last Name </h3>
    <input type="text" name="last_name" id="name" value="{{$student->last_name}}" readonly/>
    <h3>Gender</h3>
    <input type="text" name="gender" id="gender" value="{{$student->gender}}" readonly/>
    <h3>Qualification</h3>
    <input type="text" name="qualifications" id="quali" value="{{$student->qualifications}}" readonly/><br>
    <h3>Housename</h3>
    <input type="text" name="housename" id="house" value="{{$student->address->housename}}" readonly/><br>
    <h3>Post</h3>
    <input type="text" name="post" id="post" value="{{$student->address->post}}" readonly/><br>
    <h3>City</h3>
    <input type="text" name="city" id="city" value="{{$student->address->city}}" readonly/><br>
    <h3>State</h3>
    <input type="text" name="state" id="state" value="{{$student->address->state}}" readonly/><br>
    <a href="{{route('student.index')}}" class="btn btn-danger" id="btn1">BACK </a>
    </div> 
    {{-- <h3>Housename</h3>
    <input type="text" name="housename" id="house" value="{{$address->housename}}" readonly/><br>
    <h3>Post</h3>
    <input type="text" name="Post" id="post" value="{{$address->post}}" readonly/><br>
    <h3>City</h3>
    <input type="text" name="City" id="city" value="{{$address->city}}" readonly/><br>
    <h3>State</h3>
    <input type="text" name="state" id="state" value="{{$address->state}}" readonly/><br>
    <h3>FirstName</h3>
    <input type="text" name="name" id="name" value="{{$address->user->first_name}}" readonly/><br>
    <h3>LastName</h3>
    <input type="text" name="name" id="name" value="{{$address->user->last_name}}" readonly/><br>
    <h3>Gender</h3>
    <input type="text" name="gender" id="gender" value="{{$address->user->gender}}" readonly/><br>
    <h3>Qualification</h3>
    <input type="text" name="quali" id="quali" value="{{$address->user->qualifications}}" readonly/><br> --}}
    </form>
    <table>
        <tr>
            <th></th>
            <th>price</th>
            <th>status</th>
        </tr>
    @foreach($student->orders as $order) 
    <tr>
        <td>{{$order->order_id}}</td>
        <td>{{number_format($order->price,2)}}</td>
        <td>{{$order->statustext}}</td>
    </tr>
    @endforeach
</table>
  

    
</body>
</html>
 
