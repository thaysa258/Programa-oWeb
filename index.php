<?php
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");

  $nome= ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
  $email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
  $peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;
  $altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;
  $login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;
  $senha = ($_SERVER["REQUEST_METHOD"] == "POST"&& !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;
  $telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
  $resposta = 0;
  
  $resposta = calcularImc($peso, $login);
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
    $usuarioCadastrado = verificarLogin($login);
    var_dump($usuarioCadastrado);die;
    if(
      $usuarioCadastrado &&
      validaSenha($senha, $usuarioCadastrado['senha'])
    ){
        registrarAcessoValido($usuarioCadastrado);
  }
  }elseif($paginaUrl === "registro"){
    include_once("registro.php");
  }elseif($paginaUrl === "noticia"){
    protegerTela();
    include_once("criarnoticia.php");   
  }elseif($paginaUrl === "sair"){
  limparSessao();
}

