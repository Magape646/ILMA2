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
      
        

        {{  Form::open(['action'=> ['AdmineventsController@update', $eventilma->id], 'method' => 'POST', 'enctype'=>'multipart/form-data'])   }}

        <div class="form-group">
                {{ Form::label('invitationtype','Invitationtype') }}
                {{ Form::text('invitationtype', $eventilma->invitationtype,['class'=>'form-control', 'placeholder' => 'Invitationtype']) }}
        </div>

        <div class="form-group">
            {{ Form::label('eventtitle','Eventtitle') }}
            {{ Form::text('eventtitle', $eventilma->eventtitle,['class'=>'form-control', 'placeholder' => 'Eventtitle']) }}
        </div>

        <div class="form-group">
            {{ Form::label('eventvenue','Eventvenue') }}
            {{ Form::text('eventvenue', $eventilma->eventvenue,['class'=>'form-control', 'placeholder' => 'Eventvenue']) }}
        </div>

        <div class="form-group">
            {{ Form::label('eventdate','Eventdate') }}
            {{ Form::text('eventdate', $eventilma->eventdate,['class'=>'form-control', 'placeholder' => 'Eventdate']) }}
        </div>

        <div class="form-group">
            {{ Form::label('eventintro','Eventintro') }}
            {{ Form::text('eventintro', $eventilma->eventintro,['class'=>'form-control', 'placeholder' => 'Eventintro']) }}
        </div>

        <div class="form-group">
            {{ Form::label('background','Background') }}
            {{ Form::textarea('background', $eventilma->background,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'Background Text']) }}
        </div>

        <div class="form-group">
        {{ Form::label('speaker1','Speaker1') }}
        {{ Form::text('speaker1', $eventilma->speaker1,['class'=>'form-control', 'placeholder' => 'Speaker1']) }}
        </div>

        <div class="form-group">
        {{ Form::label('speaker1insitution','Speaker1insitution') }}
        {{ Form::text('speaker1insitution', $eventilma->speaker1insitution,['class'=>'form-control', 'placeholder' => 'Speaker1insitution']) }}
        </div>

        <div class="form-group">
            {{ Form::label('speaker2','Speaker2') }}
            {{ Form::text('speaker2', $eventilma->speaker1,['class'=>'form-control', 'placeholder' => 'Speaker1']) }}
            </div>
    
            <div class="form-group">
            {{ Form::label('speaker2insitution','Speaker2insitution') }}
            {{ Form::text('speaker2insitution', $eventilma->speaker1insitution,['class'=>'form-control', 'placeholder' => 'Speaker2insitution']) }}
            </div>

       
        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>

    
        <div class="form-group">
            {{ Form::file('cover1_image') }}
        </div>

        <div class="form-group">
            {{ Form::file('cover2_image') }}
        </div>

        
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close()  }}
        




    </div>
   
</div>
<!-- end panel -->






</div>
@endsection
