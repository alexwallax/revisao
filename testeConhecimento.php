
<?php 
$mensagem = "";
if(isset($_GET["mensagem"]) && $_GET["mensagem"] == "nao") {
    $mensagem = "Opção ERRADA";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Lista</title>
    </head>
    <body>
         <div><?= $mensagem ?></div>
        <fieldset>
            <label>Eu sou bonito?</label>
            <form action="testeFor.php" method="post">

                <br />
                <label>
                    <input type="radio" value="sim" name="escolha" checked>Sim
                </label>
                <label>
                    <input type="radio" value="nao" name="escolha">Não
                </label>           
                <br />
               
                <input type="submit" value="Responder">

            </form>    

        </fieldset>


    </body>
</html>



