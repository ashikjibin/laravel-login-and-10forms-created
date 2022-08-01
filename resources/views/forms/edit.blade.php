@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="{{ route('forms.index') }}">back</a><br/><br/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('forms.update',$form->id) }}" method="POST" name="form1">
        {!! csrf_field() !!}
        <table width="25%" border="0">

            
            <tr>
                <td>studentname</td>
                <td><input type="text" name="studentname" value="{{ $form->studentname }}"></td>
            </tr>
            <tr>
                <td>studentemail</td>
                <td><input type="text" name="studentemail" value="{{ $form->studentemail }}"></td>
            </tr>
            <tr>
                <td>studentmobile</td>
                <td><input type="text" name="studentmobile" value="{{ $form->studentmobile }}"></td>
            </tr>
            <tr>
                <td>studentaddress</td>
                <td><input type="text" name="studentaddress" value="{{ $form->studentaddress }}"></td>
            </tr>
            <tr>
                <td>studentage</td>
                <td><input type="text" name="studentage" value="{{ $form->studentage}}"></td>
            </tr>
            
            <tr>
                <td>studentpassword</td>
                <td><input type="text" name="studentpassword" value="{{ $form->studentpassword }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>
            </tr>
         </table>

    </form>
   
  </body>
  </html>
@endsection