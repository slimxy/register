<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('App_NAME')}}</title>
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
   {{-- $student->profile_pic = {{url::asset('public/img/'.$student->profile_pic)}}" --}}
    @if ($student)
        
   <div class="myform">
    <form action="{{route('update',$student->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" value="{{$student->firstname}}">
        </p>
        <p>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname"value="{{$student->lastname}}">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$student->email}}">
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="{{$student->address}}">
        </p>
        <p>
            <label for="profile_pic">Profile_pic</label>
            <input type="file" name="profile_pic" id="profile_pic " value="{{ $student->profile_pic}}">
        </p>
        <input type="submit" value="Register">
    </form>
   </div>
    @endif
</body>
</html>