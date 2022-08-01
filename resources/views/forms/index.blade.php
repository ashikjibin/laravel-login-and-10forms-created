@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Form</h1>
    <a href="{{ route('forms.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table width='80%' border=0>
        <tr>
            <th>studentname</th>
            <th>studentemail</th>
            <th>studentmobile</th>
            <th>studentaddress</th>
            <th>studentage</th>
            <th>studentpassword</th>
        </tr>
        @foreach ($forms as $form)
        <tr>
            <td>{{ $form->studentname }}</td>
            <td>{{ $form->studentemail }}</td>
            <td>{{ $form->studentmobile }}</td>
            <td>{{ $form->studentaddress }}</td>
            <td>{{ $form->studentage }}</td>
            <td>{{ $form->studentpassword }}</td>
            <td>
                    <form action="{{ route('forms.destroy',$form->id) }}" method="Post">
                    <a href="{{ route('forms.show',$form->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('forms.edit',$form->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>
@endsection