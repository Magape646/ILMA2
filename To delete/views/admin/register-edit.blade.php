@extends('layouts.admin')


@section('title')
Lexicon | Edit User
@endsection







@section('content')


<div class="container">
    <div class="row">



<!-- begin col-6 -->
<div class="col-lg-6">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
        <!-- begin panel-heading -->
        <div class="panel-heading">

            <h4 class="panel-title">Edit user details</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
        <form class="form-horizontal" action="/role-register-update/{{  $users->id   }}"  method="POST">

                {{  csrf_field()    }}
                {{  method_field('PUT')    }}

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" >Name * :</label>
                    <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="text" value="{{ $users->name   }}" name="username"  />
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" >Email * :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" value="{{ $users->email   }}" name="email"  />
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" >Is Admin :</label>
                    <div class="col-md-8 col-sm-8">
                        <select name="usertype" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row m-b-0">
                    <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                    <div class="col-md-8 col-sm-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/role-register" class="btn btn-danger">Cancel</a>
                    </div>

                </div>
            </form>
        </div>
        <!-- end panel-body -->

    </div>
    <!-- end panel -->
</div>
<!-- end col-6 -->






    </div>
</div>





@endsection
