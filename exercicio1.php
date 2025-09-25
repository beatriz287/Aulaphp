<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercicio de PHP</h1>

<form action="">
    <p>
        digite o nome do cliente <br>
        <input type="text" name="cliente">
</p>
<p>
    escolha o sexo do cliente<br>
    <input type="radio" name="sexo" value="Feminino">Feminino<br>
    <input type="radio" name="sexo" value="Masculino">Masculino<br>
</p>
<p>
    digite o valor da compra <br>
    <input typ="text" name="valorcompra">
</p>
<p>
    <input type="submit" name="calcular"values="calcular">
</p>

<?php
    if(isset($_REQUEST["calcular"])){
        $nome=$_REQUEST["cliente"];
        $sexo=$_REQUEST["sexo"];
        $valor=$_REQUEST["valorcompra"];
        

        echo"comprador: $nome<br>";
        echo"sexo do comprador: $sexo<br>";
        echo"valor da compra feita: $valor<br>";

        if($sexo=="Feminino"){
            $descontoF=  $valor*20/100;
            $valorfinalF = $valor - $descontoF;
            echo"o valor de desconto foi de: $descontoF <br>";
            echo"o valor final da compra é de; $valorfinalF<br>";
        }

        if($sexo=="Masculino"){
            $descontom=  $valor*5/100;
            $valorfinalM = $valor - $descontof;
            echo"o valor de desconto foi de: $descontom<br>";
            echo"o valor final da compra é de; $valorfinalM<br>";
        }


        
    }
    ?>
    </form>
</body>
</html>
</form>

    
</body>
</html>