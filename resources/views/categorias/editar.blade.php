@extends('layouts.header')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Categorias</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">Categorias</a></li>
            {{-- <li class="breadcrumb-item active">Cadastrar Cliente-Fornecedor</li> --}}
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="col-md-12">
          <form id="cliente" action="{{route('categorias.update',$categoria->id)}}" method="POST">
            @method('PUT')
            @csrf
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Categorias</h3>
              </div>
              <div class="card-body">
                <div class="col-md-5">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                  @endif
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <input value="{{$categoria->descricao}}" name="descricao" id="descricao" class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-light" id="cancelar">Cancelar</button>
                      <button class="btn btn-primary" id="salvar">Salvar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </form>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection