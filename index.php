<?php
  $nome= ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
  $email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
  $peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;
  $altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;
  $resposta = 0;


  include_once("configuracao.php");
  include_once("configuracao/conexao.php");
  include_once("funcoes.php");
  $resposta = calcularImc($peso, $altura);
  $classificacao = classificarImc($resposta);
  cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
  timeZone();
  $data = dataAtual();
  $tituloDoSite = "BEM VINDO A INFOSPORTS!";
  $subTituloDoSite = "Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
  preferido. <br>".$data;

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];
}else{
  $paginaUrl = null;
}

include_once("header.php");
  if($paginaUrl === "principal"){
    include_once("principal.php");
  }elseif($paginaUrl === "contato"){
    include_once("contato.php");
  }elseif($paginaUrl === "login"){
    include_once("login.php");
  }elseif($paginaUrl === "registro"){
    include_once("registro.php");
  }else{
    echo "404 Página não existe!";
  }

include_once("footer.php");
?>
