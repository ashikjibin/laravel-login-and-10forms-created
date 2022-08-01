@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Data</h1>
    <a href="{{ route('datas.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="row">
        <div class="form-group col-md">
            <th>Employer name</th>
            <th>Supervisor name</th>
            <th>email</th>
            <th>phone</th>
            <th>Job Title</th>
            <th>Duty and Responsibility</th>
                        
        </div>
    
        @foreach ($datas as $data)
        <div class="form-group">
            <td>{{ $data->ename }}</td>
            <td>{{ $data->sname }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->jobtitle }}</td>
            <td>{{ $data->duty }}</td>
            
            
           
            <td>
                    <form action="{{ route('datas.destroy',$data->id) }}" method="Post">
                    <a class="btn btn-success" href="{{ route('datas.show',$data->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('datas.edit',$data->id) }}">Edit</a>
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