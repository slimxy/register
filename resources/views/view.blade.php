<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css')}}">

</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Student Register</h1>
        </div>
        <div class="links">
            <a href="{{URL::asset('/')}}">Home</a>
            <a href="">About</a>
            <a href="">Student</a>
            <a href="">Contact</a>
            {{-- <a href="">Home</a> --}}
        </div>

    </div>
    @if ($student)
  <div class="studentData">
    <p style="color: rgb(255, 81, 0);"> <strong> NO#: </strong>{{$student->id}}</p> <br>
    <p style="color: rgb(255, 81, 0);"> <strong> First Name:</strong>  {{$student->firstname}}</p> <br>
    <p style="color: rgb(255, 81, 0);"> <strong> Last Name: </strong>{{$student->lastname}}</p> <br>
    <p style="color: rgb(255, 81, 0);"> <strong> Email: </strong>{{$student->email}}</p> <br>
    <p style="color: rgb(255, 81, 0);"> <strong> Address: </strong>{{$student->address}}</p> <br>
  </div>
      
<div class="profile_pic">
    <img src="{{URL::asset('public/img/'.$student->profile_pic)}}" alt="pic" style="height:250px;width:250px; border-radius:50%;">
<h3 style="color: rgb(255, 81, 0);">profile_pic</h3>
</div>
    
    @endif
    
</body>
</html>