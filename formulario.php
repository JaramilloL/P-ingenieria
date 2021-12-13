<?php
    require 'conexion.php';

    $message = '';

    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users(username,email,password) VALUES(:username, :email, :password)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);

        if($stmt->execute()) {
            $message = "creado con exito";
        }else{
            $message = "a ocurrido un error";
        }

    }
?>

<?php
    session_start();
    require "conexion.php";

    if (isset($_SESSION['user_id'])) {
      header('Location: /php-index');
    }
  
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
      $records->bindParam(':email', $_POST['email']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
  
      $message = '';
  
      if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /php-index");
      } else {
        $message = 'Sorry, those credentials do not match';
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Inicias secion</h2>
                <h2>Si ya tienes cuenta</h2>
                <button class="signinBtn">Iniciar</button>
            </div>

            <div class="box signup">
                <h2>CREAR CUENTA</h2>
                <button class="signUpBtn">Crear cuenta nueva</button>
            </div>
        </div>
        <div class="formBox">
            <div class="form signinForm">
                <form action="formulario.php" method="post">
                    <h3>Iniciar secion</h3>
                    <input type="text" placeholder="nombre de usuario" name="username">
                    <input type="password" placeholder="contraseña" name="password">
                    <button class="signinBtn"><a href="index.php">entrar</a></button>
                    <a href="recuperacion.php" class="forgot">recuperar password</a>
                </form>
            </div>

            <div class="form signupForm">
                <form action="" method="POST">
                    <h3>signin</h3>
                    <input type="text" placeholder="nombre de usurio" name="username">
                    <input type="email" placeholder="correo" name="email">
                    <input type="password" placeholder="contraseña" name="password">
                    <input type="tel" placeholder="telefono"
                    name="telefono">
                    <input type="datetime-local" name="" id="">
                    <select selected="sexo">
                        <option value="Hombre">
                            Hombre
                        </option>
                        <option value="Mujer">
                            Mujer
                        </option>
                    </select>

                   <input type="submit" value="registrarse" name="login" >
                </form>
            </div>
        </div>
    </div>

    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signUpBtn = document.querySelector('.signUpBtn');
        const formBox = document.querySelector('.formBox');
        const body = document.querySelector('body');

        signUpBtn.onclick = function() {
            formBox.classList.add('active');
            body.classList.add('active');
        }
        signinBtn.onclick = function() {
            formBox.classList.remove('active');
            body.classList.remove('active');
        }
    </script>
</body>
</html>