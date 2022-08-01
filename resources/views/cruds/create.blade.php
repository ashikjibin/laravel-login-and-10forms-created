@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
        <h1>News</h1>
    <a href="{{ route('cruds.index') }}">back</a><br/><br/>
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
   
    <form action="{{ route('cruds.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        
            <div class="row">
                <div class="form-group">
                <td>index</td>
                <td><input type="text" name="index" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>headline</td>
                <td><input type="text" name="headline" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>topics</td>
                <td><input type="text" name="topics" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>description</td>
                <td><input type="text" name="description" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>comments</td>
                <td><input type="text" name="comments" class="form-control"></td>
                </div>

                
                
            <div class="form-group">         
                <td></td>
                <td><input type="Submit" name="submit" class="btn btn-danger"></td>
            </div>
         

    </form>
   
  </body>
  </html>
@endsection