@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
        <h1>Datas</h1>
    <a href="{{ route('datas.index') }}">back</a><br/><br/>
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
   
    <form action="{{ route('datas.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        
            <div class="row">
                <div class="form-group">
                <td>Employer name</td>
                <td><input type="text" name="ename" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Supervisor name</td>
                <td><input type="text" name="sname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>email</td>
                <td><input type="text" name="email" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Phone</td>
                <td><input type="text" name="phone" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Job Title</td>
                <td><input type="text" name="jobtitle" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Duty and Responsibility</td>
                <td><input type="text" name="duty" class="form-control"></td>
                </div>
                
            <div class="form-group">         
                <td></td>
                <td><input type="Submit" name="submit" class="btn btn-danger"></td>
            </div>
         

    </form>
   
  </body>
  </html>
@endsection