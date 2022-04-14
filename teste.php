<?php
    include_once "./conect.php"
?>


<!DOCTYPE html>

<html>

<head>
    <title>teste php</title>
    <meta charset="utf-8"> 

</head>


<body>
    <h1>
         CADASTRO
    </h1>

    <?php
        $dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($dados["cadastrouser"])){
            //var_dump($dados);

            $query_user= "INSERT INTO usuários (nome, email) VALUES (:nome, :email) ";
            $cadusuario=$conn->prepare($query_user);
            $cadusuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cadusuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $cadusuario->execute();
        }
    ?>

    <form name="cadastro" method="POST" action="">
        <label>Nome:</label>
        <input type="=text" name="nome" id="nome" placeholder="digite"><br><br>

        <label>email:</label>
        <input type="=text" name="email" id="email" placeholder="digite o email"><br><br>

        <input type="submit" value="cadastro" name="cadastrouser">


    </form>

</body>

</html>