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
<h1 class="page-header">Update Post</h1>
<!-- end page-header -->


   <!-- begin panel -->
   <div class="panel panel-inverse" data-sortable-id="form-stuff-9">
  
    <!-- begin panel-body -->
    <div class="panel-body">
      
        

        {{  Form::open(['action'=> ['AdminprojectsController@update', $project->id], 'method' => 'POST', 'enctype'=>'multipart/form-data'])   }}

        <div class="form-group">
                {{ Form::label('title','Title') }}
                {{ Form::text('title', $project->title,['class'=>'form-control', 'placeholder' => 'Title']) }}
        </div>

        <div class="form-group">
            {{ Form::label('team','Team') }}
            {{ Form::text('team', $project->team,['class'=>'form-control', 'placeholder' => 'Team']) }}
        </div>

        <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', $project->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'Body Text']) }}
        </div>

        <div class="form-group">
        {{ Form::label('pdftitle','Pdftitle') }}
        {{ Form::text('pdftitle', $project->pdftitle,['class'=>'form-control', 'placeholder' => 'Pdftitle']) }}
        </div>

        <div class="form-group">
        {{ Form::label('pdfauthor','Pdfauthor') }}
        {{ Form::text('pdfauthor', $project->pdfauthor,['class'=>'form-control', 'placeholder' => 'Pdfauthor']) }}
        </div>

        <div class="form-group">
            {{ Form::label('pdfdate','Pdfdate') }}
            {{ Form::text('pdfdate', $project->pdfdate,['class'=>'form-control', 'placeholder' => 'Pdfdate']) }}
        </div>

        <div class="form-group">
            {{ Form::label('linkstitle','Linkstitle') }}
            {{ Form::text('linkstitle', $project->linkstitle,['class'=>'form-control', 'placeholder' => 'Linkstitle']) }}
        </div>

        <div class="form-group">
            {{ Form::label('linksurl','Linksurl') }}
            {{ Form::text('linksurl', $project->linksurl,['class'=>'form-control', 'placeholder' => 'Linksurl']) }}
        </div>

        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close()  }}
        




    </div>
   
</div>
<!-- end panel -->






</div>
@endsection
