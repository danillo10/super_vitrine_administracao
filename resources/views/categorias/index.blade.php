@extends('layouts.header')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Categorias</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                <li class="active">
                    <a href="">Categorias</a>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                    <tr>
                                        <td class="d-flex flex-row">
                                          <a class="mr-1" href="{{route('categorias.edit',$categoria->id)}}" title="Editar"><i class="far fa-edit"></i></a>
                                          <form class="mr-1" action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-link" style="margin:0;padding:0;color:red" type="submit" title="Excluir" onclick="return confirm('Deseja remover este registro ?')"><i class="fas fa-minus-circle"></i></button>
                                          </form>
                                        </td>
                                        <td>{{$categoria->descricao}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot> 
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
