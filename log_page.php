<?php 
session_start();

include("connection.php");
include("functions.php");

$missatge = "";

//La variable $_SERVER proporciona informació com el mètode de solicitud que es realitza
if($_SERVER['REQUEST_METHOD'] == "POST") {
    //Si la petició es register
    if(isset($_POST['register'])) {
        $user_name = $_POST['user_name'];
        $email = $_POST['email']; 
        $password = $_POST['password'];

        //Si els inputs no son buits fem...
        if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
            //Obtenim un id aleatori del 1 al 20
            $user_id = random_num(20);
            //Creem la consulta
            $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";
            //Executem la consulta
            mysqli_query($con, $query);
            header("Location: log_page.php");
            die;
        } else {
          $missatge = "Si us plau, introduïu informació vàlida a tots els camps.";
        }
      //Si la petició es login
    } elseif(isset($_POST['login'])) {
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];

        //Si els inputs no son buits
        if(!empty($user_email) && !empty($password)) {
            //Seleccionem les dades de la base de dades
            $query = "SELECT * FROM users WHERE email = '$user_email' LIMIT 1";
            //Executem la consulta
            $result = mysqli_query($con, $query);

            //Si trobem alguna fila
            if($result && mysqli_num_rows($result) > 0) {
                //Obtenim la info de l'usuari
                $user_data = mysqli_fetch_assoc($result);
                
                //Comrpovem que la password coincideix
                if($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        
            $missatge = "Correu electrònic o contrasenya incorrectes.";
        } else {
          $missatge = "Si us plau introdueix el teu correu electrònic i contrasenya.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sessió / Registre</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="Styles/style_log.css" />

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Obtenir el missatge emmagatzemat en PHP
          var missatge = '<?php echo isset($missatge) ? $missatge : "" ?>';

          // Verificar si n'hi ha un missatge per a mostrar
          if (missatge !== '') {
              // Obtenir el contenidor de resultats
              var resultatDiv = document.getElementById('resultat');

              // Crear un element per al missatge
              var missatgeElement = document.createElement('p');
              missatgeElement.textContent = missatge;

              // Afegir el missatge al contenidor
              resultatDiv.appendChild(missatgeElement);
          }
      });
    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="form-wrapper signin-wrapper">
        <form method="post">
          <h1>Inicia sessió</h1>
          <div class="socials">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <span>o Utilitzeu les vostres credencials</span>
          <input type="email" name="user_email" placeholder="Correu electrònic" required />
          <input type="password" name="password" placeholder="Contrasenya" required />
          <div id="resultat"></div>
          <a href="#">Has oblidat la contrasenya?</a>
          <button type="submit" name="login">Iniciar sessió</button>
        </form>
      </div>

      <div class="overlay-wrapper">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <h1>No ets usuari?</h1>
            <p>Creeu el vostre compte de Coderzone per accedir als nostres serveis</p>
            <button class="border signup-btn">Registra't</button>
          </div>

          <div class="overlay-panel overlay-left">
            <h1>Ja ets usuari?</h1>
            <p>Inicieu sessió al vostre compte de CoderZone per accedir als nostres serveis</p>
            <button class="border signin-btn">Iniciar Sessió</button>
          </div>
        </div>
      </div>

      <div class="form-wrapper signup-wrapper">
        <form method="post">
          <h1>Create Account</h1>

          <div class="socials">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>

          <span>o Utilitzeu el vostre correu electrònic per registrar-vos</span>
          <input type="text" name="user_name" placeholder="Nom d'usuari" required />
          <input type="email" name="email" placeholder="Correu electrònic" required />
          <input type="password" name="password" placeholder="Contrasenya" required />
          <button type="submit" name="register">Registra't</button>
        </form>
      </div>
    </div>

    <script src="Logica/script_log.js"></script>
    <script>
    document.getElementById("signupButton").addEventListener("click", function() {
      document.querySelector(".signup-wrapper form").submit();
    });
  </script>
  </body>
</html>