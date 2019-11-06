<?php 
    include_once "entrar.php";
    include_once "topo.php";
    include_once "assets/classes/tratamentos/tratamento.php";
    include_once "assets/classes/tratamentos/tratamentoDao.php";

if (isset($_POST['titulo']) && $_POST['descricao'] != "") {    

    $tratamento = new Tratamento();
    $tratamento->setIdTratamento($_POST['id']);
    $tratamento->setTitulo($_POST['titulo']);
    $tratamento->setDescricao($_POST['descricao']);
    $tratamento->setPublicacao($_POST['publicacao']);


    $tratamentoDao = new TratamentoDao();
    $mensagem=$tratamentoDao->editaTratamento($tratamento);

    }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";
    }
    
?>

    <div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="tratamentos.php"><button class="botao-nova">Voltar</a>
    </div>

<?php include_once "footer.php";
?>