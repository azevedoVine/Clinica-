<?php 
      include_once "entrar.php";
      include_once "topo.php";
      include_once 'assets\classes\paciente\paciente.php';
      include_once 'assets\classes\paciente\pacienteDao.php';

      $pacienteDao = new pacienteDao();
      $dados = $pacienteDao->listaPacientes();
?>

<section>
		<div class="container">
    <div class="menu-lateral">
				<p>Ordenar por:</p>
					<select name="filtros">
						<option value="padrao">Padrão</option>
						<option value="descricao">Descrição</option>
						<option value="data">Data</option>
						<option value="titulo">Titulo</option>                                    
					</select>		
      </div>		

			<div class="tabela">
			<table id="playlistTable">
        <a data-modal-target="#inserir" ><button class="botao-nova">Cadastrar Paciente</button></a>
            <caption class="titulo-tabela">Pacientes</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Foto de Perfil</th>
                <th colspan="3">Ações</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $pacientes):?>
              <tr>
                <td><?php echo $pacientes['idPaciente'] ?></td>
                <td><?php echo $pacientes['nome'] ?></td>
                <td><?php echo $pacientes['email'] ?></td>
                <td><img src="assets/upload/<?php echo $pacientes['fotoPerfil'] ?>" width="70"></td>
                <td><a data-modal-target="#detalhe" class="detalha-paciente" data-id="<?php echo $pacientes['idPaciente']?>"
                                                                             data-nome="<?php echo $pacientes['nome']?>"
                                                                             data-tel="<?php echo $pacientes['telefone']?>"
                                                                             data-email="<?php echo $pacientes['email'] ?>"
                                                                             data-end="<?php echo $pacientes['endereco'] ?>"
                                                                             data-nasc="<?php echo $pacientes['nascimento'] ?>"
                                                                             data-foto="<?php echo $pacientes['fotoPerfil']?>">                                                                             
                                                                             <i class="fas fa-eye icone-tabela "></i></a></td>
                 <td><a data-modal-target="#editar" class="edita-paciente" data-id="<?php echo $pacientes['idPaciente']?>"
                                                                             data-nome="<?php echo $pacientes['nome']?>"
                                                                             data-tel="<?php echo $pacientes['telefone']?>"
                                                                             data-email="<?php echo $pacientes['email'] ?>"
                                                                             data-end="<?php echo $pacientes['endereco'] ?>"
                                                                             data-nasc="<?php echo $pacientes['nascimento'] ?>"
                                                                             data-foto="<?php echo $pacientes['fotoPerfil']?>">                                                                             
                                                                             <i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir" class="exclui-paciente" data-id="<?php echo $pacientes['idPaciente']?>"
                                                                           data-nome="<?php echo $pacientes['nome']?>">
                                                                           <i class="fas fa-trash-alt icone-tabela "></i></a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
			
			</div>
		</div>
		</section>

    <div class="modal" id="inserir">
					<div class="modal-header">
					  <div class="titulo negrito">Inserir Paciente</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form action="pacienteInsere.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">                   
              <label>Nome:</label><input required="true" type="text" name="nome" >      
              <label>Telefone:</label><input type="text" name="tel" >
              <label>Email:</label><input type="text" name="email" >
              <label>Endereço:</label><input type="text" name="end" >
              <label>Data de Nascimento:</label><input type="date" name="nasc" >
              <label>Foto de Perfil:</label><input type="file" name="foto">
              <label>Login:</label><input type="text" name="login">
              <label>Senha:</label><input type="password" name="senha">
              <button type="submit" class="botao-editar">Inserir</button>
              <button data-close-button class="botao-editar-cancelar">Cancelar</button>
            </form>
						</div>
					</div>
				</div>
		<div id="overlay"></div>

    <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar Paciente</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form action="pacienteEdita.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">                   
              <input type="hidden" name="id" id="id-edita" >
              <img id="foto-edita" width="100px">      
              <label>Nome:</label><input required="true" type="text" name="nome" id="nome-edita" >      
              <label>Telefone:</label><input type="text" name="tel" id="tel" >
              <label>Email:</label><input type="text" name="email" id="email" >
              <label>Endereço:</label><input type="text" name="end" id="end" >
              <label>Data de Nascimento:</label><input type="text" name="nasc" id="nasc" >
              <button type="submit" class="botao-editar">Editar</button>
              <button data-close-button class="botao-editar-cancelar">Cancelar</button>
            </form>
						</div>
					</div>
				</div>
		<div id="overlay"></div>

    <div class="modal" id="detalhe">
					<div class="modal-header">
					  <div class="titulo negrito">Mais informações sobre o Paciente</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">       
              <img id="foto-detalhe" width="100px">           
              <input type="hidden" name="id" id="id-detalhe" >      
              <label>Nome:</label><input required="true" type="text" name="nome" id="nome-detalhe" >      
              <label>Telefone:</label><input type="text" name="tel" id="tel-detalhe" >
              <label>Email:</label><input type="text" name="email" id="email-detalhe" >
              <label>Endereço:</label><input type="text" name="end" id="end-detalhe" >
              <label>Data de Nascimento:</label><input type="text" name="nasc" id="nasc-detalhe">
            </form>
						</div>
					</div>
				</div>
		<div id="overlay"></div>

    <div class="modal" id="excluir">
                <div class="modal-header">
                    <div class="titulo negrito">Excluir Paciente</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este elemento:
                    <form action="pacienteExclui.php" method="POST" accept-charset="UTF-8">
                    <input type="hidden" id="id-exclui" name="id">  
                    <label>Nome:</label><input type="text"  id="nome-exclui" name ="nome" value="">      
                        <button type="submit" data-close-button class="botao-editar">Excluir</button>
                        <button data-close-button class="botao-editar-cancelar">Cancelar</button>
                    </form>
                </div>
            </div>
        <div id="overlay"></div>
 



<?php include_once "footer.php" ?>

<script>
  $('.edita-paciente').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');
    var tel = $(this).data('tel');
    var email = $(this).data('email');
    var end = $(this).data('end');
    var nasc = $(this).data('nasc');
    var foto = $(this).data('foto');

    console.log(email)

    document.getElementById('id-edita').value = id;
    document.getElementById('tel').value = tel;
    document.getElementById('email').value = email;
    document.getElementById('end').value = end;
    document.getElementById('nasc').value = nasc;
    document.getElementById('nome-edita').value = nome;
    document.getElementById('foto-edita').src = "assets/upload/"+foto;

    
  });
  $('.exclui-paciente').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');

    document.getElementById('id-exclui').value = id;
    document.getElementById('nome-exclui').value = nome;

    
  });

  $('.detalha-paciente').on('click', function(){
    var nome = $(this).data('nome');
    var tel = $(this).data('tel');
    var email = $(this).data('email');
    var end = $(this).data('end');
    var nasc = $(this).data('nasc');
    var foto = $(this).data('foto');

    document.getElementById('tel-detalhe').value = tel;
    document.getElementById('email-detalhe').value = email;
    document.getElementById('end-detalhe').value = end;
    document.getElementById('nasc-detalhe').value = nasc;
    document.getElementById('nome-detalhe').value = nome;
    document.getElementById('foto-detalhe').src = "assets/upload/"+foto;

    
  });

</script>
