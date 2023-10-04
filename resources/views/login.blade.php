<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,600&display=swap" rel="stylesheet">

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
            font-size: 18px;
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
    {{-- <div>
        @if (session('msg'))
         <h1>{{session('msg')}}</h1>
        @endif
    </div> --}}
<div class="app">
        <h2>Log In</h2>
        <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="field"> 
                <label for="">Email:</label>
                <input type="email" name="email" id="" >
                
            </div>

            <div class="field">
                <label for="">Password:</label>
                <input type="password" name="password" id="">
                
            </div>

            <input type="submit" value="LogIn">
        </form>
    </div>
</body>
</html>