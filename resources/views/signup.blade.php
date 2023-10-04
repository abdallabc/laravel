<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            height: 100vh;
            overflow: hidden;
        }
        .app{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: #e5e5e5;
            border-radius: 10px;
            padding-bottom: 40px;
        }
        .app h2{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
            color: #3c096c;
        }
        .app form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .field{
            position: relative;
            margin: 30px 0;
    
        }
        .field label{
            padding: 10px;
            font-size: 19px;
        }
        .field input{
            padding: 0 5px;
            width: 100%;
            height: 40px;
            font-size: 15px;
            /* border: none;
            background: none; */
            border: 1px solid ;
            border-radius: 18px;
            border-color: #023e7d;
            
            
            
        }
        /* .field input:hover{
            border-radius: 8px;
            border-color: #184e77;
        } */
        input[type="submit"]{
            width: 100%;
            height: 50px;
            background: #3c096c;
            color: white;
            font-size: 18px;
            font-weight: 700;
            border-radius: 20px;
        }
        input[type="submit"]:hover{
            border-radius:12px ;
            border-color: #3c096c;
        }
        
       
     
        

    </style>
</head>
<body>
 @extends('layouts.default')
 @section('content')
 <div class="app">
    <h2>SignUp</h2>
    <form action="/signup" method="post">
    @csrf
        <div class="field">
            <label for="">Name:</label>
            <input type="text" name="name" required>
            @if ($errors->any())
                <span>
                    @foreach ($errors->all() as $error)
                        <span>error{{$error}}</span>
                    @endforeach
                </span>
            @endif
        </div>

        <div class="field">
            <label for="">Email:</label>
            <input type="email" name="email" id="" required>
            @if ($errors->any())
                <span>{{$errors->email}}</span>
            @endif
        </div>

        <div class="field">
            <label for="">Password:</label>
            <input type="password" name="password" id="" required>
            @if ($errors->any())
                <span>{{$errors->password}}</span>
            @endif
        </div>

        <input type="submit" name="signup" value="SignUp">
    </form>
</div>
 @endsection
</body>
</html>