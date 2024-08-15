<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Seymour+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&family=Raleway:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <main class="container_first">
        <section class="container">
            <article id="article_child_one">
                <div>
                    <div class="container_tittle">
                        <h1>Bienvenido a VR</h1>
                        <h2>Primero lo primero</h2>
                        <p>Crea un perfil personalizado en VR</p>
                    </div>
                    <div class="container_image">
                        <img src="file_two.png" alt="">
                    </div>
                </div>
            </article>
            <article id="article_child_two">
                <div class="container_register">
                    <h1>REGISTRO</h1>
                    <form action="" method="post" >
                        <div class="container_name_last">
                            <div style="width:100%;">
                                <label class="label" for="nombre">NOMBRE:</label>
                                <input id="change" type="text" class="input" name="name">
                            </div>
                        </div>
                        <div>
                            <label class="label" for="email">CORREO:</label>
                            <input type="email" class="input" name="email">
                        </div>
                        <div>
                            <label class="label" for="contraseña"> CONTRASEÑA:</label>
                            <input type="password" class="input" name="password">
                        </div>
                        <div>
                            <button type="submit" class="button_create" name="registrar">Crear cuenta</button>
                        </div>
                    </form>
                    <?php
                        include("registrar.php");
                    ?>
                </div>
            </article>
        </section>
    </main>
</body>
</html>