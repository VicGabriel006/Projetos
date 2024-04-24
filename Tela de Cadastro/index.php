<?php
    //if(isset($_POST['submit']))
    //{
        //print_r($_POST['firstname']);
        //print_r($_POST['lastname']);
        //print_r($_POST['email']);
        //print_r($_POST['number']);

    //}
    
    
    include_once('bd.php');
    $first_name = filter_input(INPUT_POST,"firstname",FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST,"lastname",FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST,"number",FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST,"gender",FILTER_SANITIZE_SPECIAL_CHARS);



    $result = "INSERT INTO usuario(first_name, last_name, email, senha, telefone, gender) 
    VALUES('$first_name', '$last_name', '$email', '$senha', '$phone', '$gender')";



    mysqli_query($conn, $result);

    header("imc.html");

    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <div class="form-img">
            <img src="assets/img/Shapebuilder-1.png">
        </div>
        <div class="form">
            <form action="" method="POST"> 
                <div class="header">
                    <div class="tittle">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required >
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="number" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Confirme sua senha</label>
                        <input id="Confirmpassword" type="password" name="Confirmword" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-tittle">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit" name="submit"><a href="#">Continue</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>