@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Membros</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Inicio</a></li>
                        <li class="active">membros</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="box-title">
                            <button type="button" name="button" class='btn btn-success' data-toggle="modal" data-target="#create_member"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Adicionar Membro</button>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Cidade</th>
                                        <th>Aniversário</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($membros as $membro)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="{{route('membro.edit', $membro->id)}}">
                                                {{$membro->name}}
                                            </a>
                                        </td>
                                        <td>{{$membro->tel}}</td>
                                        <td>{{$membro->cidade}}</td>
                                        <td>----</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="create_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Criando Membro...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('membro.store')}}" method="post">
                        <div class="modal-body">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    Nome
                                    <input type="text" name="name" class='form-control' value="">
                                    Telefone
                                    <input type="text" name="tel" class='form-control' value="">
                                    Cidade
                                    <input type="text" name="cidade" class='form-control' value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name='encontro' value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Fez Encontro?">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Radio button for following text input" name='batismo' value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Foi Batizado?">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name='ccc' value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Fez CCC?" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Radio button for following text input" name='ctl' value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Fez CTL?">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name='casado' value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="É Casado?" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" name='dizimista' aria-label="Radio button for following text input" value='0'>
                                        </span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="É Dizimista?">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <select class="form-control" name="tipo_id">
                                            @foreach($tipos as $tipo)
                                                <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Adicionar membro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @endsection
