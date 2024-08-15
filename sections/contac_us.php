<?php 
include('../app/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="../css/style_contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&family=Raleway:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <nav class="nav">
            <div>
                <img src="../public/images/logo.png" alt="">
            </div>
            <div>
                <ul>
                    <li style="width: 180px;" ><a href="../home/index.php">INICIO</a></li>
                    <li style="width: 180px;" ><a href="../sections/about_us.php">SOBRE NOSOTROS</a></li>
                    <li style="width: 180px;" ><a href="../sections/services.php">SERVICIOS</a></li>
                    <li style="width: 180px;" ><a href="./contac_us.php">CONTACTANOS</a></li>
                    <li style="width: 180px;" > 
                        <a href="<?php echo $URL; ?>/app/controladores/login/cerrar_sesion.php" class="btn btn-danger">CERRAR SESION </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="contactanos">
            <article>
                <div>
                    <h1>CONTÁCTANOS</h1>
                </div>
            </article>
            <article>
                <div>
                    <form action="">
                        <div>
                            <div>
                                <label for="">Nombre</label>
                                <input type="text">
                            </div>
                            <div>
                                 <label for="">Apellido</label>
                                <input type="text">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="">Email</label>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">Mensaje</label>
                                <input type="text">
                            </div>
                        </div>
                        <div>
                            <button><a href="">ENVIAR</a></button>
                        </div>
                    </form>
                </div>
            </article>
        </section>
        <footer class="footer">
            <div>
                <h1>AGENCY VR</h1>
                <p>Creado por Camila Tuberquia y Mauricio Santamaria</p>
                <h2>2024</h2>
            </div>
        </footer>
    </main>
</body>
</html>