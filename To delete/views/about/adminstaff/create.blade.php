@extends('layouts.admin')


@section('title')
Lexicon | Edit Posts
@endsection









@section('content')




<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
    <li class="breadcrumb-item active">Managed Tables</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Create New Programme</h1>
<!-- end page-header -->


   <!-- begin panel -->
   <div class="panel panel-inverse" data-sortable-id="form-stuff-9">
  
    <!-- begin panel-body -->
    <div class="panel-body">
      
        

        {{  Form::open(['action'=> 'StaffController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data'])   }}

        
        <div class="form-group">
            {{ Form::label('name','Name') }}
            {{ Form::text('name', '',['class'=>'form-control', 'placeholder' => 'Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('title','Title') }}
            {{ Form::text('title', '',['class'=>'form-control', 'placeholder' => 'Title']) }}
        </div>

        <div class="form-group">
        {{ Form::label('email','Email') }}
        {{ Form::text('email', '',['class'=>'form-control', 'placeholder' => 'Email']) }}
        </div>

        <div class="form-group">
            {{ Form::label('category','Category') }}
            {{ Form::text('category', '',['class'=>'form-control', 'placeholder' => 'Category']) }}
            </div>

        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>

        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close()  }}
        
          



    </div>
   
</div>
<!-- end panel -->






</div>
@endsection
