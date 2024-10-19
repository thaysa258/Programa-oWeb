<?php
$titulo= ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;
$descricaoCurta = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricaoCurta'])) ? $_POST['descricaoCurta'] : null;
$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;
$img = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['img'])) ? $_POST['img'] : null;
$href = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['href'])) ? $_POST['href'] : null;
include_once("configuracao/conexao.php");
include_once("funcoes.php");
criarNoticia($titulo,$descricaoCurta,$descricao,$img,$href);
?>

<div class="container">
  <header class="header">
    <a class="logo" href="index.html">InfoSports</a>
    <div class="headerBtnGroup">
    <?php include_once("menuTopo.php");?>
      <div>
        <input type="checkbox" class="check" id="chk" />
      
        <label class="label" for="chk">
          <i class="fas fa-moon"></i>
          <i class="fas fa-sun"></i>
          <div class="bola"></div>
        </label>
      </div>
    </div>
    <div class="hamburguer-menu">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </header>
  <section class="main">
    <div class="box-content">
      <form action="#" method="post">
        <h1>Criar notícias!</h1>
        <div class="name">
          <label for="titulo"></label>
          <input type="text" placeholder="Titulo" id="titulo" name="titulo" >
          <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
        </div>
        <div class="email">
          <label for="descricaoCurta"></label>
          <input type="text" placeholder="Descrição Curta" id="descricaoCurta" name="descricaoCurta">
          <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex: abc@abc.com</p>
        </div>
        <div class="telefone">
          <label for="descricao"></label>
          <input type="text" placeholder="Descrição" id="descricao" name="descricao">
          <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
        </div>
        <div class="telefone">
          <label for="img"></label>
          <input type="text" placeholder="Imagem" id="img" name="img">
          <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um login válido.</p>
    
        </div>
        <div class="telefone">
          <label for="href"></label>
          <input type="text" placeholder="Link" id="href" name="href">
          <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira uma senha válida.</p>
        <button type="submit" class="btn-concluir">Concluir</button>
      </form>
    </div>
  </section>
  <footer class="footer">
    <span>Info Sports</span>
    <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
  </footer>
</div>
