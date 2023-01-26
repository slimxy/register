<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
</head>

<body>

    <div class="header">
        <div class="logo">
            <h1>Student Register</h1>
        </div>
        <div class="links">
            <a href="{{ URL::asset('/') }}">Home</a>
            <a href="">About</a>
            <a href="">Student</a>
            <a href="">Contact</a>
            {{-- <a href="">Home</a> --}}
        </div>

    </div>
    <div class="myform">
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname">
            </p>
            <p>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname">
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Email">
            </p>
            <p>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Enter your State">
            </p>
            <p>
                <label for="profile_pic">Profile_pic</label>
                <input type="file" name="profile_pic" id="profile_pic">
            </p>
            <input type="submit" value="Register">
        </form>
    </div>
    <div class="tableCaption">
        <p> STUDENTS</p>
    </div>
    <div class="data">
        <table>
            
                <tr>
                    <th>S/N</th>
                    <th>Profile_pic</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View Student</th>
                </tr>
        
            @if ($students)
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>
                            <img src="{{ URL::asset('public/img/' . $student->profile_pic) }}" alt="pic" style="height:100px;width:100px; border-radius:50%;">
                        </td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>                            {{-- {{$student->profile_pic}} --}}
                            {{-- {{$student->profile_pic}} --}}

                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td><a href="{{ route('edit', $student->id) }}"> <input type="submit" value="Edit" ></a></td>
                        <td><a href="{{ route('delete', $student->id) }}"> <input type="submit" value="Delete" ></a>
                        </td>
                        <td><a href="{{ route('view', $student->id) }}"> <input type="submit" value="View"></a></td>
                    </tr>
                @endforeach
                {{-- @endforeach --}}

            @endif
        </table>
    </div>

</body>

</html>
