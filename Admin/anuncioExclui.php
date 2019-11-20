<?php 
    include_once "entrar.php";
    include_once "topo.php";
    include_once "assets/classes/anuncios/anuncio.php";
    include_once "assets/classes/anuncios/anuncioDao.php";

if (isset($_POST['id']) != "") {    

    $anuncio = new Anuncio();
    $anuncio->setIdAnuncio($_POST['id']);     

    $anuncioDao = new AnuncioDao();
    $mensagem=$anuncioDao->excluiAnuncio($anuncio);

    }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";}
    
?>

    <div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="anuncios.php"><button class="botao-nova">Voltar</a>
    </div>

<?php include_once "footer.php";
?>