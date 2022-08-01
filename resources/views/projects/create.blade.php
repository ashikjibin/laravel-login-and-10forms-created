@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
    <a href="{{ route('projects.index') }}">back</a><br/><br/>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('projects.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        
            <div class="row">
                <div class="form-group">
                <td>Project name</td>
                <td><input type="text" name="projectname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>phone</td>
                <td><input type="text" name="phone" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>date</td>
                <td><input type="date" name="date" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Full name</td>
                <td><input type="text" name="fullname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>company</td>
                <td><input type="text" name="company" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>signature</td>
                <td><input type="text" name="signature" class="form-control"></td>
                </div>

                
            <div class="form-group">         
                <td></td>
                <td><input type="Submit" name="submit" class="btn btn-danger"></td>
            </div>
         

    </form>
   
  </body>
  </html>
@endsection