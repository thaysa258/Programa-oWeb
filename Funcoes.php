<?php
    echo "Tipos de PHP";
    $meutexto = "texto";
    $numero = 123;
    $decimal = 10.5;
    $logico = true; // false
    $array;
    $object;
    $vazio = null;

    //array ou lista
    $listaCarros = array("values", "BMW", "Toyota");

    $listadenoticias[0] = array(
        "titulo" => "meu titulo",
        "descricao" => "descricao",
        "imagem" => "carro.jpg"
    );

    $listadenoticias[1] = array(
        "titulo" => "meu titulo222",
        "descricao" => "descricao222",
        "imagem" => "222.jpg"
    );

    $listadenoticias[2] = array(
        "titulo" => "meu titulo333",
        "descricao" => "descricao333",
        "imagem" => "333.jpg"
    );

    foreach ($listadenoticias as $noticias) {
        var_dump ($noticias["titulo"]);
        var_dump ($noticias["imagem"]);
        echo "<br>";
    }
    /**
    //@param $texto
    //É o texto que será manupulado

    // @param $tipo
    //é o nuúmero que indica o tipo de manipulação da string 

    //* tipo:
     // * 1 - Quantidade de caracteres de um texto
    // * 2 - Quantidade de palavras de um texto
   //* 3 - Busca posição da palavra na string

   * @param $texto
   * É o texto que será manupulado
   * Retorna Texto maiúsculo
   */
    
    function textoMaiusculo($texto){    
    if($texto){
        return strtoupper($texto);
    }

   function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
   }
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
    return date("d/m/Y"); 
    }

    /**
    * Horaatual
    * Retorna a hora atualizada
    * /

    function Horaatual(){
    return date("h:i:sa);
    }   

    /**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */

}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }
  }

    
    /** 
    * PEGANDO INFORMAÇAO DA URL
    * /

    IF($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina];
    }else{
    $paginaUrl = null;
    }

    include_once('header.php');
    if($paginaUrl == "principal"){
    include_once('principal.php');
}else{
    include_once('telateste.php');
}
include_once('footer.php');

?>