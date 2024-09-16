<?php
if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];
}else{
  $paginaUrl = null;
}
include_once("header.php");
if($paginaUrl === "principal"){
  include_once ("principal.php");
}
elseif($paginaUrl === "login"){
  include_once ("login.php");
}
elseif($paginaUrl === "registro"){
  include_once ("registro.php");
}
elseif($paginaUrl === "contato"){
  include_once ("contato.php");
}
else{
    include_once('telateste.php');
}
include_once('footer.php');

?>