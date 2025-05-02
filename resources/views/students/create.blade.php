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
            <ui>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
            </ui>
        @endif
    </div>
    <form method="post" action="{{route('student.store')}}">
        @csrf
        @method('post')
            <div>
                    <lable>Name</lable>
                    <input type="text" name="name" placeholder="name">
            </div>

            <div>
                    <lable>Dob</lable>
                    <input type="text" name="dob" placeholder="dob">
            </div>
            <div>
                    <lable>address</lable>
                    <input type="text" name="address" placeholder="address">
            </div>

            <div>
                    <lable>email</lable>
                    <input type="text" name="email" placeholder="email">
            </div>
            <div>
                    <lable>mobile</lable>
                    <input type="text" name="mobile" placeholder="mobile">
            </div>
           
            <div>
                  
                    <input type="submit" value="Click">
            </div>
    </form>
</body>
</html>