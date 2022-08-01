@extends('layouts.app')
@section('content')

    <tr>
        
        <h2> Show Post</h2>
        <a href="{{ route('posts.index') }}"> Back</a><br>      
        
        <td><strong>name:</strong>
                {{ $post->name }}
        </td><br>
        
        <td><strong>email:</strong>
                {{ $post->email }}
        </td>
        <td><strong>mobile:</strong>
                {{ $post->mobile }}
        </td><br>
        
        <td><strong>address:</strong>
                {{ $post->address }}
        </td>
        <td><strong>age:</strong>
                {{ $post->age }}
        </td><br>
        
        <td><strong>password:</strong>
                {{ $post->password }}
        </td>
   </tr>
@endsection

