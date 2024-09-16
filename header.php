<!DOCTYPE html>
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php if ($paginaUrl === "contato"):?>
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/validacao-contato.css">
  <?php endif ?>
  <?php if($paginaUrl === "registro"):?>
    <link rel="styleheet" href="css/registro.css">
  <?php endif; ?>
  <?php if($paginaUrl === "login"):?>
    <link rel="styleheet" href="css/login.css">
  <?php endif; ?>
  
  <script src="./InfoSports_files/header.js.download" defer=""></script>
  <title>InfoSports</title>
<style type="text/css" id="operaUserStyle"></style><style type="text/css"></style><link rel="stylesheet" href="./InfoSports_files/index.css"><link rel="stylesheet" href="./InfoSports_files/header.css"><link rel="stylesheet" href="./InfoSports_files/footer.css"><link rel="stylesheet" href="./InfoSports_files/temaescuro.css"></head>

<body>

<header class="header">
      <a class="logo" href="http://127.0.0.1:5500/">InfoSports</a>
      <div class="headerBtnGroup">
        <button class="navBtn"><a href="">Login</a></button>
        <button class="navBtn"><a href="http://127.0.0.1:5500/registro">Registro</a></button>
        <button class="navBtn"><a href="http://127.0.0.1:5500/contato">Contato</a></button>
        <div>
          <input type="checkbox" class="check" id="chk">

          <label class="label" for="chk">
            <i class="fas fa-moon" aria-hidden="true"></i>
            <i class="fas fa-sun" aria-hidden="true"></i>
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
