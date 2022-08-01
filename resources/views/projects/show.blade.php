@extends('layouts.app')
@section('content')


        
        <h2> Show Post</h2>
        <a href="{{ route('projects.index') }}"> Back</a><br>      
    <div class="row">
    <div class="form-group">   
        <td><strong>name:</strong>
                {{ $project->name }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>email:</strong>
                {{ $project->email }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>mobile:</strong>
                {{ $project->mobile }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>address:</strong>
                {{ $project->address }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>age:</strong>
                {{ $project->age }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>password:</strong>
                {{ $project->password }}
        </td>
   </div>
@endsection

