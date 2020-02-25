@extends('layouts.admin')


@section('title')
Lexicon | Add User
@endsection









@section('content')


<!-- #modal-dialog -->
<div class="modal fade" id="modal-alert">
    <div class="modal-dialog">

        <form action="/save-register" method="POST">

            {{  csrf_field()  }}

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>


            <div class="modal-body">
                <div class="alert alert-danger m-b-0">




                    <div class="form-group row m-b-15">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-7">
                            <input  type="text" class="form-control" name="name" placeholder="Enter Name" >
                        </div>
                    </div>


                    <div class="form-group row m-b-15">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-7">
                            <input  type="email" class="form-control" name="email" placeholder="Enter Email" >
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-7">
                            <input  type="password" class="form-control" name="password" placeholder="Enter Password" >
                        </div>
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- End #modal-dialog -->


<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
    <li class="breadcrumb-item active">Managed Tables</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Add Users</h1>
<!-- end page-header -->


@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{  session('status') }}
    </div>
@endif







<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">

        <h4 class="panel-title">Add Staff and new students</h4>



    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">


        <button type="button" data-target="#modal-alert" class="btn btn-sm btn-primary float-right" data-toggle="modal">Add New User</button>

        <table id="data-table-default" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-nowrap">ID</th>
                    <th class="text-nowrap">Name</th>
                    <th class="text-nowrap">Email</th>
                    <th class="text-nowrap">Is Admin</th>
                    <th class="text-nowrap">EDIT</th>
                    <th class="text-nowrap">DELETE</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $row)



                <tr class="odd gradeX">
                    <td>{{  $row->id   }}</td>
                    <td>{{  $row->name   }}</td>
                    <td>{{  $row->email   }}</td>
                    <td>{{  $row->is_admin   }}</td>
                    <td> <a href="/role-edit/{{  $row->id   }}" class="btn btn-success">EDIT</a></td>
                    <td>
                        <form action="/role-delete/{{  $row->id   }}" method="post" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <!-- end panel-body -->
</div>
@endsection
