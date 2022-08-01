@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="{{ route('products.index') }}">back</a><br/><br/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('products.update',$product->id) }}" method="POST" name="form1">
        {!! csrf_field() !!}
        <table width="25%" border="0">

            
            <tr>
                <td>title</td>
                <td><input type="text" name="title" value="{{ $product->title }}"></td>
            </tr>
            <tr>
                <td>pname</td>
                <td><input type="text" name="pname" value="{{ $product->pname }}"></td>
            </tr>
            <tr>
                <td>pprice</td>
                <td><input type="text" name="pprice" value="{{ $product->pprice }}"></td>
            </tr>
            <tr>
                <td>pquality</td>
                <td><input type="text" name="pquality" value="{{ $product->pquality }}"></td>
            </tr>
            <tr>
                <td>psize</td>
                <td><input type="text" name="psize" value="{{ $product->psize}}"></td>
            </tr>
            
            <tr>
                <td>pbrand</td>
                <td><input type="text" name="pbrand" value="{{ $product->pbrand }}"></td>
            </tr>
            <tr>
                <td>pdiscount</td>
                <td><input type="text" name="pdiscount" value="{{ $product->pdiscount}}"></td>
            </tr>
            
            <tr>
                <td>description</td>
                <td><input type="text" name="description" value="{{ $product->description }}"></td>
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