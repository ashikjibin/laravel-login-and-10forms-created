@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Cruds</h1>
    <a href="{{ route('cruds.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="row">
        <div class="form-group">
            <th>index</th>
            <th>headline</th>
            <th>topics</th>
            <th>description</th>
            <th>comments</th>
            
        </div>
    </div>
        @foreach ($cruds as $crud)
        <div class="form-group">
            <td>{{ $crud->index }}</td>
            <td>{{ $crud->headline }}</td>
            <td>{{ $crud->topics }}</td>
            <td>{{ $crud->description }}</td>
            <td>{{ $crud->comments }}</td>
           
            <td>
                    <form action="{{ route('cruds.destroy',$crud->id) }}" method="Post">
                    <a class="btn btn-success" href="{{ route('cruds.show',$crud->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('cruds.edit',$crud->id) }}">Edit</a>
                    <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </div>
    </div>
        @endforeach
        
    </table>
</body>
</html>

@endsection