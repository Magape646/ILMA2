@extends('layouts.studentadmin')



@section('title')
Lexicon | Lessons
@endsection









@section('content')

    <!-- begin page-header -->
    <h1 class="page-header">EMS Literacy Software<small></small></h1>
    <!-- end page-header -->






  <!-- begin panel -->
  <div class="panel panel-inverse" data-sortable-id="table-basic-9">
    <!-- begin panel-heading -->
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Lessons</h4>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
        <!-- begin table-responsive -->
        <div class="table-responsive">
            <table class="table m-b-0">
                <thead>
                    <tr>
                        <th>Lesson #</th>
                        <th>Description</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active">
                        <td>1</td>
                        <td>This lesson is about testing your<strong> Eye co-ordination</strong></td>

                        <td class="with-btn-group" nowrap>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-sm width-90">Start</a>
                                <a href="#" class="btn btn-white btn-sm dropdown-toggle width-30 no-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/floor">Floor 1</a></li>
                                    <li><a href="/floor">Floor 2</a></li>
                                    <li><a href="/floor">Floor 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/floor">Floor 4</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="info">
                        <td>2</td>
                        <td>This lesson is about testing your<strong> Comprehension</strong></td>

                        <td class="with-btn-group" nowrap>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-sm width-90">Start</a>
                                <a href="#" class="btn btn-white btn-sm dropdown-toggle width-30 no-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/floor">Floor 1</a></li>
                                    <li><a href="/floor">Floor 2</a></li>
                                    <li><a href="/floor">Floor 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/floor">Floor 4</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>3</td>
                        <td>This lesson is about testing your<strong> Vocabulary</strong></td>

                        <td class="with-btn-group" nowrap>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-sm width-90">Start</a>
                                <a href="#" class="btn btn-white btn-sm dropdown-toggle width-30 no-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/floor">Floor 1</a></li>
                                    <li><a href="/floor">Floor 2</a></li>
                                    <li><a href="/floor">Floor 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/floor">Floor 4</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>4</td>
                        <td>This lesson is about testing your<strong> Grammar</strong></td>

                        <td class="with-btn-group" nowrap>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-sm width-90">Start</a>
                                <a href="#" class="btn btn-white btn-sm dropdown-toggle width-30 no-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/floor">Floor 1</a></li>
                                    <li><a href="/floor">Floor 2</a></li>
                                    <li><a href="/floor">Floor 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/floor">Floor 4</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>5</td>
                        <td>This lesson is about testing your<strong> Reading speed</strong></td>

                        <td class="with-btn-group" nowrap>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-sm width-90">Start</a>
                                <a href="#" class="btn btn-white btn-sm dropdown-toggle width-30 no-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/floor">Floor 1</a></li>
                                    <li><a href="/floor">Floor 2</a></li>
                                    <li><a href="/floor">Floor 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/floor">Floor 4</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end table-responsive -->
    </div>
    <!-- end panel-body -->

</div>
<!-- end panel -->

        @endsection
