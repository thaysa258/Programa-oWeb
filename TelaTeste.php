
<?php
/** 
 * PEGANDO INFORMAÇAO DA URL
 * /
 IF($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina];
}else{
    $paginaUrl = null;
}
    var_dump($paginaUrl);die;


include_once('header.php');
if($paginaUrl == "principal"){
    include_once('principal.php');
}else{
    include_once('telateste.php');
}
include_once('footer.php');

/**
 *  TimeZone
 * Retornar o fuso horario local
 * que definira a hora e a data
 * /
 
 function timezone(){
    date_default_timezone_set("america/recife");
}
* DataAtual
* Retorna a data atualizada
*/

function dataAtual(){
    
}