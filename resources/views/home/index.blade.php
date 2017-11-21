@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Inicio</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Different data widgets -->
            <!-- ============================================================== -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total de Membros</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Fiz a Frequência?</h3>
                        <ul class="list-inline">
                            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="text-info">Não</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Data</h3>
                        <ul class="list-inline">
                            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="text-info">{{date('d/m/Y')}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.row -->
            <!--row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                    <!-- ============================================================== -->
                    <!-- chat-listing & recent comments -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- .col -->
                        <div class="col-md-12 col-lg-8 col-sm-12">
                            <div class="white-box">
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                    <select class="form-control pull-right row b-none">
                                        <option>March 2017</option>
                                        <option>April 2017</option>
                                        <option>May 2017</option>
                                        <option>June 2017</option>
                                        <option>July 2017</option>
                                    </select>
                                </div>
                                <h3 class="box-title">Frequência</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>STATUS</th>
                                                <th>Aniversário</th>
                                                <th>Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($membros as $membro)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td class="txt-oflo">{{$membro->name}}</td>
                                                <td>{{$membro->tipo->name}}</td>
                                                <td class="txt-oflo">April 18, 2017</td>
                                                <td><span class="text-success">$24</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="panel">
                                <div class="sk-chat-widgets">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Lista de membros
                                        </div>
                                        <div class="panel-body">
                                            <ul class="chatonline">
                                                @foreach($membros as $membro)
                                                <li>
                                                    <div class="call-chat">
                                                        <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                        <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                    </div>
                                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>{{$membro->name}} <small class="text-success">online</small></span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
@endsection
