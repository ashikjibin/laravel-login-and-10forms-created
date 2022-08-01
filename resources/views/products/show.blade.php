@extends('layouts.app')
@section('content')

    <tr>
        
        <h2> Show Post</h2>
        <a href="{{ route('products.index') }}"> Back</a><br>      
        
        <td><strong>titlepprice:</strong>
                {{ $product->title }}
        </td><br>
        
        <td><strong>pname:</strong>
                {{ $product->pname }}
        </td>
        <td><strong>pprice:</strong>
                {{ $product->pprice }}
        </td><br>
        
        <td><strong>pquality:</strong>
                {{ $product->pquality }}
        </td>
        <td><strong>psize:</strong>
                {{ $product->psize }}
        </td><br>
        
        <td><strong>pbrand:</strong>
                {{ $product->pbrand }}
        </td>
        <td><strong>pdiscount:</strong>
                {{ $product->pdiscount }}
        </td><br>
        
        <td><strong>description:</strong>
                {{ $product->description }}
        </td>
   </tr>
@endsection

