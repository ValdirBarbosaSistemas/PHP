<h1>CABEÇALHO</h1>
<?PHP
//PEGANDO AS INFORMAÇÕES DO COOKIE CRIADO
if (isset($_COOKIE['nomeCookie'])) { //Está setado? Se sim continue, senão pare
    $nomeCookie = $_COOKIE['nomeCookie']; //Armazenando o cookie em uma variável qualquer
    echo '<h2>' . $nomeCookie . '</h2>'; //Exibindo o cookie no navegador
}
?>

<hr />