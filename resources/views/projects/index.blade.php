@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Projects</h1>
    <div class="container">
                <div class="">
                    <div class="card-header">Project</div>
                    <div class="card-body">
    <a href="{{ route('projects.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="row">
        <div class="form-group">
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>zipcode</th>
            <th>mobile</th>
            
        </div>
    
        @foreach ($projects as $project)
        <div class="form-group">
            <td>{{ $project->projectname }}</td>
            <td>{{ $project->phone }}</td>
            <td>{{ $project->date }}</td>
            <td>{{ $project->fullname }}</td>
            <td>{{ $project->company }}</td>
            <td>{{ $project->signature }}</td>
            
           
            <td>
                    <form action="{{ route('projects.destroy',$project->id) }}" method="Post">
                    <a class="btn btn-success" href="{{ route('projects.show',$project->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>
                    <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </div>
    </div>
        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
    </table>
</body>
</html>

@endsection