<div class="titulo">Inserir Registro #02</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h2>Cadastro</h2>

<?php 
if(count($_POST) > 0) {
    // isset($_POST['nome'])

    $dados = $_POST;

    $erros = [];

    //Validando nome: campo obrigatório
    if(trim($dados['nome']) === '') {
        $erros['nome'] = 'Nome é um campo obrigatório'; 
    }

    //Validando o formato da data de nasc: campo não obrigatório
    if(isset($dados['nascimento'])) {
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if(!$data) {
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    //Validando email usando o filtro do próprio php
    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "Email inválido!";
    }

    //Validando a url enviada usando outro filtro do php
    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site Inválido : incluir https://";
    }

    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];

    //Validando quantidade de filhos usando o filtro do php e passando um parâmetro de range min/max
    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
        $erros['filhos'] = "Quantidades de filhos inválida";
    }

    $salarioConfig = ["options" => ["decimal" => ',']];

    //Validando o salário usando o filtro do php e passando um parametro para a formatação
    if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido.";
    }

    //Fluxo de inserção seguro

    if(!count($erros)) {
        require_once 'conexao.php';

        $sql = "INSERT INTO cadastro
        ( nome, nascimento, email, site, filhos, salario ) 
        VALUES 
        (? , ?, ?, ?, ?, ?)";

        $conexao = novaConexao();

        $stmt = $conexao->prepare($sql);

        // Definindo array de params para passar na função com operador ...
        $params = [
            $dados['nome'],
            $dados ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario']
        ];

        $stmt->bind_param('ssssid', ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}


?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control <?= isset($erros['nome']) ? 'is-invalid' :'' ?>" 
            <?php if(isset($dados['nome'])){ echo "value=".$dados['nome'] .'';}?> >

            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento:</label>
            <input type="text" name="nascimento" id="nascimento" placeholder="Data nascimento" class="form-control <?= isset($erros['nascimento']) ? 'is-invalid' :'' ?>"
            <?php if(isset($dados['nascimento'])){ echo "value=".$dados['nascimento'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" class="form-control <?= isset($erros['email']) ? 'is-invalid' :'' ?>"
            <?php if(isset($dados['email'])){ echo "value=".$dados['email'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site:</label>
            <input type="text" name="site" id="site" placeholder="Data site" class="form-control <?= isset($erros['site']) ? 'is-invalid' :'' ?>"
            <?php if(isset($dados['site'])){ echo "value=".$dados['site'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['site']?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd de Filhos:</label>
            <input type="number" name="filhos" id="filhos" placeholder="Qtd de filhos" class="form-control <?= isset($erros['filhos']) ? 'is-invalid' :'' ?>"
            <?php if(isset($dados['filhos'])){ echo "value=".$dados['filhos'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário:</label>
            <input type="text" name="salario" id="salario" placeholder="Salário" class="form-control <?= isset($erros['salario']) ? 'is-invalid' :'' ?>"
            <?php if(isset($dados['salario'])){ echo "value=".$dados['salario'] .'';}?>>

            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>