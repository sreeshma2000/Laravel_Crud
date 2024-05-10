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
            background-color:lightblue;
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
        
    </style>
</head>
<body>
   
    <div class="form">
    <form method="post" action="{{route('student.update',$student->id)}}">
        @csrf
        @method('PUT')
    <h3> First Name </h3>
    <input type="text" name="first_name" id="first_name" value="{{$student->first_name}}"/>
    <h3> Last Name </h3>
    <input type="text" name="last_name" id="name" value="{{$student->last_name}}"/>
    <h3>Gender</h3>
    <input type="text" name="gender" id="gender" value="{{$student->gender}}"/>
    <h3>Qualification</h3>
    <input type="text" name="qualifications" id="quali" value="{{$student->qualifications}}"/><br>
    <a href="{{route('student.index')}}" class="btn btn-danger" id="btn1">BACK</a>
    <button type="submit" name="submit" id="btn">EDIT</button>
    </div>
    </form>
</body>
</html>
