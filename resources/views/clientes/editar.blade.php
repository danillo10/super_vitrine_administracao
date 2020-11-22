@include('includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Clientes/Fornecedores</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes-Fornecedores</a></li>
            {{-- <li class="breadcrumb-item active">Editar Cliente-Fornecedor</li> --}}
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
          <form action="{{route('clientes.update', $cliente->Id)}}" method="POST">
            @csrf
            @method('PUT')
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Editar Cliente/Fornecedor</h3>
              </div>
              <div class="card-body">
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo</label>
                      <select name="Tipo" id="Tipo" class="form-control">
                        <option value="1" {{($cliente->Tipo == '1') ? 'selected' : '' }}>Cliente</option>
                        <option value="2" {{($cliente->Tipo == '2') ? 'selected' : '' }}>Fornecedor</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo de Pessoa</label>
                      <select name="pessoa" id="pessoa" class="form-control">
                        <option value="1" {{($cliente->pessoa == '1') ? 'selected' : '' }}>Pessoa Física</option>
                        <option value="2" {{($cliente->pessoa == '2') ? 'selected' : '' }}>Pessoa Jurídica</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nome" class="tipopessoa">{{($cliente->pessoa == '1') ? 'Nome' : 'Nome Fantasia' }}</label>
                      <input value="{{$cliente->Nome}}" name="Nome" id="Nome" class="form-control" type="text" placeholder="Nome Completo">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cpf" class="tipopessoadoc">CPF/CNPJ</label>
                      <input value="{{$cliente->Documento}}" name="Documento1" id="Documento1" class="form-control cpf" type="text" placeholder="000.000.000-00">
                      <input value="{{$cliente->Documento}}" name="Documento2" id="Documento2" class="form-control cnpj {{ ($cliente->pessoa == '2') ? '' : 'hide' }}" type="text" placeholder="00.000.000/0000-00" style="display:none;">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="Telefone1">Telefone</label>
                      <input value="{{$cliente->Telefone1}}" name="Telefone1" id="Telefone1" class="form-control fone" type="text" placeholder="(00) 0000-0000">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="Cep">Cep</label>
                      <input value="{{$cliente->Cep}}" name="Cep" id="Cep" class="form-control cep" type="text" placeholder="00000-000">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Endereco">Endereço</label>
                      <input value="{{$cliente->Endereco}}" name="Endereco" id="Endereco" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="numero">Número</label>
                      <input value="{{$cliente->numero}}" name="numero" id="numero" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="complemento">Complemento</label>
                      <input value="{{$cliente->complemento}}" name="complemento" id="complemento" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-3">
                  <div class="form-group">
                      <label for="Bairro">Bairro</label>
                      <input value="{{$cliente->Bairro}}" name="Bairro" id="Bairro" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="Cidade">Cidade</label>
                      <input value="{{$cliente->Cidade}}" name="Cidade" id="Cidade" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="UF">Estado</label>
                      <select name="UF" id="UF" class="form-control">
                        <option value="AC" {{($cliente->UF == 'AC') ? 'selected' : '' }}>Acre</option>
                        <option value="AL" {{($cliente->UF == 'AL') ? 'selected' : '' }}>Alagoas</option>
                        <option value="AP" {{($cliente->UF == 'AP') ? 'selected' : '' }}>Amapá</option>
                        <option value="AM" {{($cliente->UF == 'AM') ? 'selected' : '' }}>Amazonas</option>
                        <option value="BA" {{($cliente->UF == 'BA') ? 'selected' : '' }}>Bahia</option>
                        <option value="CE" {{($cliente->UF == 'CE') ? 'selected' : '' }}>Ceará</option>
                        <option value="DF" {{($cliente->UF == 'DF') ? 'selected' : '' }}>Distrito Federal</option>
                        <option value="ES" {{($cliente->UF == 'ES') ? 'selected' : '' }}>Espírito Santo</option>
                        <option value="GO" {{($cliente->UF == 'GO') ? 'selected' : '' }}>Goiás</option>
                        <option value="MA" {{($cliente->UF == 'MA') ? 'selected' : '' }}>Maranhão</option>
                        <option value="MT" {{($cliente->UF == 'MT') ? 'selected' : '' }}>Mato Grosso</option>
                        <option value="MS" {{($cliente->UF == 'MS') ? 'selected' : '' }}>Mato Grosso do Sul</option>
                        <option value="MG" {{($cliente->UF == 'MG') ? 'selected' : '' }}>Minas Gerais</option>
                        <option value="PA" {{($cliente->UF == 'PA') ? 'selected' : '' }}>Pará</option>
                        <option value="PB" {{($cliente->UF == 'PB') ? 'selected' : '' }}>Paraíba</option>
                        <option value="PR" {{($cliente->UF == 'PR') ? 'selected' : '' }}>Paraná</option>
                        <option value="PE" {{($cliente->UF == 'PE') ? 'selected' : '' }}>Pernambuco</option>
                        <option value="PI" {{($cliente->UF == 'PI') ? 'selected' : '' }}>Piauí</option>
                        <option value="RJ" {{($cliente->UF == 'RJ') ? 'selected' : '' }}>Rio de Janeiro</option>
                        <option value="RN" {{($cliente->UF == 'RN') ? 'selected' : '' }}>Rio Grande do Norte</option>
                        <option value="RS" {{($cliente->UF == 'RS') ? 'selected' : '' }}>Rio Grande do Sul</option>
                        <option value="RO" {{($cliente->UF == 'RO') ? 'selected' : '' }}>Rondônia</option>
                        <option value="RR" {{($cliente->UF == 'RR') ? 'selected' : '' }}>Roraima</option>
                        <option value="SC" {{($cliente->UF == 'SC') ? 'selected' : '' }}>Santa Catarina</option>
                        <option value="SP" {{($cliente->UF == 'SP') ? 'selected' : '' }}>São Paulo</option>
                        <option value="SE" {{($cliente->UF == 'SE') ? 'selected' : '' }}>Sergipe</option>
                        <option value="TO" {{($cliente->UF == 'TO') ? 'selected' : '' }}>Tocantins</option>
                        {{-- <option value="EX">Estrangeiro</option> --}}
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">E-mail</label>
                      <input value="{{$cliente->Email1}}" type="email" name="Email1" id="Email1" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Observação</label>
                      <textarea maxlength="300" name="Obs" id="Obs" cols="30" rows="10" class="form-control">{{$cliente->obs}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-3">
                    <div class="form-group">
                      <button class="btn btn-primary">Salvar</button>
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

@include('includes.footer')

<script>

  $(document).ready(function(){
    let tipo = $("#pessoa").val();

    if(tipo == 1){
      $(".tipopessoa").html("Nome");
      $(".tipopessoadoc").html("CPF");
      $(".cnpj").hide();
      $(".cpf").show();
    }else{
      $(".tipopessoa").html("Nome Fantasia");
      $(".tipopessoadoc").html("CNPJ"); 
      $(".cnpj").show();
      $(".cpf").hide();
    }

    $("#pessoa").change(function(){
      let tipo = $(this).val();

      if(tipo == 1){
        $(".tipopessoa").html("Nome");
        $(".tipopessoadoc").html("CPF");
        $(".cnpj").hide();
        $(".cpf").show();
      }else{
        $(".tipopessoa").html("Nome Fantasia");
        $(".tipopessoadoc").html("CNPJ"); 
        $(".cnpj").show();
        $(".cpf").hide();
      }
    });
  })

</script>