<?php 
    include_once "entrar.php";
    include_once "topo.php";
    include_once "assets/classes/atualizacoes/atualizacao.php";
    include_once "assets/classes/atualizacoes/atualizacaoDao.php";

if (isset($_POST['id']) != "") {    

    $atualizacao = new Atualizacao();
    $atualizacao->setIdAtualizacao($_POST['id']);     

    $atualizacaoDao = new AtualizacaoDao();
    $mensagem=$atualizacaoDao->excluiAtualizacao($atualizacao);

    }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";}
    
?>

    <div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="atualizacao.php"><button class="botao-nova">Voltar</a>
    </div>

<?php include_once "footer.php";
?>