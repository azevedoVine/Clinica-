<?php 
    include_once "entrar.php";
    include_once "topo.php";
    include_once "assets/classes/tratamentos/tratamento.php";
    include_once "assets/classes/tratamentos/tratamentoDao.php";

if (isset($_POST['id']) != "") {    

    $tratamento = new Tratamento();
    $tratamento->setIdTratamento($_POST['id']);     

    $tratamentoDao = new TratamentoDao();
    $mensagem=$tratamentoDao->excluiTratamento($tratamento);

    }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";}
    
?>

    <div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="tratamentos.php"><button class="botao-nova">Voltar</a>
    </div>

<?php include_once "footer.php";
?>