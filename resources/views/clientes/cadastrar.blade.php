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
          <form id="cliente" action="{{route('clientes.store')}}" method="POST">
            @csrf
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Cliente/Fornecedor</h3>
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
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo</label>
                      <select name="Tipo" id="Tipo" class="form-control">
                        <option value="1">Cliente</option>
                        <option value="2">Fornecedor</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo de Pessoa</label>
                      <select name="pessoa" id="pessoa" class="form-control">
                        <option value="1">Pessoa Física</option>
                        <option value="2">Pessoa Jurídica</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-6  ">
                    <div class="form-group">
                      <label for="Nome" class="tipopessoa">Nome</label>
                      <input name="Nome" id="Nome" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cpf" class="tipopessoadoc">CPF</label>
                      <input name="Documento1" id="cpf" class="form-control cpf" type="text" placeholder="000.000.000-00">
                      <input name="Documento2" id="cnpj" class="form-control cnpj" type="text" placeholder="00.000.000/0000-00" style="display:none;">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">  
                      <label for="Telefone1">Telefone</label>
                      <input name="Telefone1" id="Telefone1" class="form-control fone" type="text" placeholder="(00) 0000-0000">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="Cep">Cep</label>
                      <input name="Cep" id="Cep" class="form-control cep" type="text" placeholder="00000-000">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Endereco">Endereço</label>
                      <input name="Endereco" id="Endereco" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="numero">Número</label>
                      <input name="numero" id="numero" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="complemento">Complemento</label>
                      <input name="complemento" id="complemento" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex flex-row">
                  <div class="col-md-3">
                  <div class="form-group">
                      <label for="Bairro">Bairro</label>
                      <input name="Bairro" id="Bairro" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="Cidade">Cidade</label>
                      <input name="Cidade" id="Cidade" class="form-control" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="UF">Estado</label>
                      <select name="UF" id="UF" class="form-control" id="estado" name="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        {{-- <option value="EX">Estrangeiro</option> --}}
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">E-mail</label>
                      <input type="email" name="Email1" id="Email1" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Observação</label>
                      <textarea maxlength="300" name="Obs" id="Obs" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-light" id="cancelar">Cancelar</button>
                      <button type="button" class="btn btn-primary" id="salvar">Salvar</button>
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
  $("#salvar").on("click", function(){
    let cpf = $("#cpf").val();
    let tipo = $("#pessoa").val();

    if(cpf.length < 14 && tipo == 1){
      return alert("Informar corretamente o cpf");
    }

    $("#cliente").submit();

  })
  
  $("#pessoa").change(function(){
    let tipo = $(this).val();

    if(tipo == '1'){
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

  })
</script>