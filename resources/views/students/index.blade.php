<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    WElcome to index
    <a href="{{route('student.create')}}">Create</a>
   <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
    <div>
            <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Dob</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($crud1s as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>
                            <a href="{{route('student.edit',['student'=>$student])}}">Edit</a>
                        </td>
                        <td>
                                <form method="post" action="{{route('student.destroy',['student'=>$student])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" />
                                </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
    </div>
</body>
</html>