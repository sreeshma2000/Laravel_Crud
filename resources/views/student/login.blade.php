<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form h3 {
            margin: 10px 0;
        }

        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form button[type="submit"],
        .form a {
            display: inline-block;
            width: calc(100% - 20px); 
            padding: 10px;
            margin: 10px 0; 
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none; 
        }

        .form button[type="submit"]:hover,
        .form a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form">
        <form method="post" action="">
            @csrf
            <h3>User Name</h3>
            <input type="text" name="name" id="name" /><br>
            <h3>Password</h3>
            <input type="password" name="password" id="password" /><br><br>
            <a href="{{route('student.index')}}">LOGIN</a>
        </form>
    </div>
</body>
</html>
