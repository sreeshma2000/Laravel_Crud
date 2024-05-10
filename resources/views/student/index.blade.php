    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
    
    table {
        width: 80%; 
        margin: 50px auto; 
        border-collapse: collapse; 
        border: 2px solid #000;
    }
    th {
        border: 2px solid #000; 
        padding: 10px; 
        text-align: left; 
    }
    td {
        border: 1px solid #000; 
        padding: 10px; 
        text-align: left; 
    }
    </style>
            <body>
               Name: {{session()->get('first_name')}}
               user id:{{session()->get('userid')}}
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <a href="{{route('student.create')}}" class="btn btn-primary">ADD</a>
                <table>
                    <thead>
                        <tr>
                            <th>slno</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>gender</th>
                            <th>qualifications</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->qualifications}}</td>
                            <td>{{$student->orders->count()}}</td>
                            <td><a href="{{route('student.edit',$student->id)}}" class="btn btn-success" id="btn1">EDIT</a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('are you sure you want to delete');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="btn2">DELETE</button>
                             </form>
                             <a href="{{route('student.show',$student->id)}}" class="btn btn-warning" id="btn2">VIEW</a>

                        @endforeach
                    </tbody>
                </table>
                {!! $students->links()!!}
               
            </body>   
    </html>