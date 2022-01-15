<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php 
if(count($_POST) > 0) {
    // isset($_POST['nome'])

    $erros = [];

    //Validando nome: campo obrigatório
    if(!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é um campo obrigatório'; 
    }

    //Validando o formato da data de nasc: campo não obrigatório
    if(filter_input(INPUT_POST, 'nascimento')) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    //Validando email usando o filtro do próprio php
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "Email inválido!";
    }

    //Validando a url enviada usando outro filtro do php
    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site Inválido : incluir https://";
    }

    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];

    //Validando quantidade de filhos usando o filtro do php e passando um parâmetro de range min/max
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = "Quantidades de filhos inválida";
    }

    $salarioConfig = ["options" => ["decimal" => ',']];

    //Validando o salário usando o filtro do php e passando um parametro para a formatação
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido.";
    }
}


?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control <?= isset($erros['nome']) ? 'is-invalid' :'' ?>" 
            <?php if(isset($_POST['nome'])){ echo "value=".$_POST['nome'] .'';}?> >

            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento:</label>
            <input type="text" name="nascimento" id="nascimento" placeholder="Data nascimento" class="form-control <?= isset($erros['nascimento']) ? 'is-invalid' :'' ?>"
            <?php if(isset($_POST['nascimento'])){ echo "value=".$_POST['nascimento'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" class="form-control <?= isset($erros['email']) ? 'is-invalid' :'' ?>"
            <?php if(isset($_POST['email'])){ echo "value=".$_POST['email'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site:</label>
            <input type="text" name="site" id="site" placeholder="Data site" class="form-control <?= isset($erros['site']) ? 'is-invalid' :'' ?>"
            <?php if(isset($_POST['site'])){ echo "value=".$_POST['site'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['site']?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd de Filhos:</label>
            <input type="number" name="filhos" id="filhos" placeholder="Qtd de filhos" class="form-control <?= isset($erros['filhos']) ? 'is-invalid' :'' ?>"
            <?php if(isset($_POST['filhos'])){ echo "value=".$_POST['filhos'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário:</label>
            <input type="text" name="salario" id="salario" placeholder="Salário" class="form-control <?= isset($erros['salario']) ? 'is-invalid' :'' ?>"
            <?php if(isset($_POST['salario'])){ echo "value=".$_POST['salario'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>