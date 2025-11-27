<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include "menu.php" ?>
    <div class="conteudo">


    <form action="cadastro_curso1.php" method="post">

    <p>Informe o nome do curso <br>
    <input type="text" name="nome">
    </p>

    <p>Informe o nome do coordenador<br>
    <input type="text" name="coordenador">
    </p>


    <p>
    <input type="submit" name="enviar" value="Cadastrar curso">
    </p>

    </form>

    </div>
    
</body>
</html>