@extends('layouts.admin')


@section('title')
Lexicon | Programmes Section
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
<h1 class="page-header">News Section</h1>
<!-- end page-header -->
 





<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">

        <h4 class="panel-title">Edit Programme Posts</h4>



    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
       
        <a href="/projects/adminprojects/create" class="btn btn-sm btn-primary float-right">Create New Post</a>
        

        <table id="data-table-default" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-nowrap">ID</th>
                    <th class="text-nowrap">Title</th>
                    <th class="text-nowrap">EDIT</th>
                    <th class="text-nowrap">DELETE</th>
                </tr>
            </thead>
            <tbody>

                @if (count($adminprojects) > 0)

                @foreach ($adminprojects as $adminproject)
             

                <tr class="odd gradeX">
                    <td>{{ $adminproject->id }}</td>
                    <td>{{ $adminproject->title }}</td>
                    <td> <a href="/projectslanding/{{ $adminproject->id  }}/edit" class="btn btn-success">EDIT</a></td>
                    <td>
                       
                        {!! Form::open(['action'=>['AdminprojectsController@destroy',$adminproject->id],'method'=>'POST','class'=>'float-right']) !!}

                        {{ Form::hidden('_method', 'DELETE') }}

                        {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}

                        {{Form::close()}}

                    </td>
                </tr>

                @endforeach

                @else
                <p>No posts found</p>

                @endif

              
               
            </tbody>
           
        </table>
        <ul class="pagi-nation">
            {{ $adminprojects->links()   }}
       </ul>
    </div>
    <!-- end panel-body -->
</div>
@endsection
