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
      
        

        {{  Form::open(['action'=> ['AdmincontactusController@update', $contactus->id], 'method' => 'POST', 'enctype'=>'multipart/form-data'])   }}

        <div class="form-group">
                {{ Form::label('researchinsitution','Researchinsitution') }}
                {{ Form::text('researchinsitution', $contactus->researchinsitution,['class'=>'form-control', 'placeholder' => 'Researchinsitution']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('pobox','Pobox') }}
            {{ Form::text('pobox', $contactus->pobox,['class'=>'form-control', 'placeholder' => 'Pobox']) }}
        </div>

        <div class="form-group">
            {{ Form::label('university','University') }}
            {{ Form::text('university', $contactus->university,['class'=>'form-control', 'placeholder' => 'University']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('city','City') }}
            {{ Form::text('city', $contactus->city,['class'=>'form-control', 'placeholder' => 'City']) }}
        </div>

        <div class="form-group">
            {{ Form::label('code','Code') }}
            {{ Form::text('code', $contactus->code,['class'=>'form-control', 'placeholder' => 'Code']) }}
        </div>

        <div class="form-group">
            {{ Form::label('tel','Tel') }}
            {{ Form::text('tel', $contactus->tel,['class'=>'form-control', 'placeholder' => 'Tel']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email','Email') }}
            {{ Form::text('email', $contactus->email,['class'=>'form-control', 'placeholder' => 'Email']) }}
        </div>


        
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close()  }}
        




    </div>
   
</div>
<!-- end panel -->






</div>
@endsection
