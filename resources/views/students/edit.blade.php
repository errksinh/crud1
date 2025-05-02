<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Create
    <div>   
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div> 
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
    <form method="post" action="{{route('student.update',['student'=>$student])}}">
        @csrf
        @method('put')
            <div>
                    <lable>Name</lable>
                    <input type="text" name="name" placeholder="name" value="{{$student->name}}">
            </div>

            <div>
                    <lable>Dob</lable>
                    <input type="text" name="dob" placeholder="dob" value="{{$student->dob}}">
            </div>
            <div>
                    <lable>address</lable>
                    <input type="text" name="address" placeholder="address" value="{{$student->address}}">
            </div>

            <div>
                    <lable>email</lable>
                    <input type="text" name="email" placeholder="email" value="{{$student->email}}">
            </div>
            <div>
                    <lable>mobile</lable>
                    <input type="text" name="mobile" placeholder="mobile" value="{{$student->mobile}}">
            </div>
           
            <div>
                  
                    <input type="submit" value="Click">
            </div>
    </form>
</body>
</html>