<?php 
include('../app/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link rel="stylesheet" href="../css/style_about.css">
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
    <nav class="nav">
        <div>
            <img src="../public/images/logo.png" alt="">
        </div>
        <div>
            <ul>
                <li><a href="../home/index.php">INICIO</a></li>
                <li><a href="./about_us.php">SOBRE NOSOTROS</a></li>
                <li><a href="./services.php">SERVICIOS</a></li>
                <li><a href="./contac_us.php">CONTACTANOS</a></li>
                <li> 
                    <a href="<?php echo $URL; ?>/app/controladores/login/cerrar_sesion.php" class="btn btn-danger">CERRAR SESION </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="about_us">
        <div>
            <article>
                <div>
                    <h1>Sobre <span>Nuestra Empresa</span></h1>
                    <p>En AGENCY VR, nos especializamos en ofrecer soluciones integrales de marketing digital para ayudar a empresas a crecer en el entorno en línea. Con un equipo de expertos apasionados por la tecnología y el marketing, estamos comprometidos en proporcionar estrategias personalizadas que se adapten a las necesidades únicas de cada cliente.</p>
                    
                </div>
            </article>
            <article>
                <h3>NUESTROS SERVICIOS</h3>
                <ul>
                    <li><span>Estrategia de Marketing Digital: </span>Desarrollamos estrategias a medida que abarcan desde el SEO y SEM hasta la gestión de redes sociales y marketing de contenido. </li>
                    <li><span>Publicidad en Redes Sociales:</span> Creamos y gestionamos campañas publicitarias efectivas en plataformas como Facebook, Instagram, LinkedIn y más.</li>
                    <li><span>Optimización para Motores de Búsqueda (SEO): </span> Mejoramos la visibilidad de su sitio web en los motores de búsqueda para atraer tráfico cualificado y aumentar su presencia en línea.</li>
                    <li><span>Desarrollo de Contenidos: </span> Ofrecemos servicios de creación de contenido que incluye redacción de blogs, artículos, y contenido multimedia para captar la atención de su audiencia.</li>
                    <li><span>Análisis y Reportes: </span> Proporcionamos informes detallados sobre el desempeño de las campañas y estrategias, ayudando a tomar decisiones basadas en datos.                        </li>
                </ul>
            </article>
        </div>
    </section>
    <footer class="footer">
        <div>
            <h1>AGENCY VR</h1>
            <p>Creado por Camila Tuberquia y Mauricio Santamaria</p>
            <h2>2024</h2>
         </div>
    </footer>
</body>
</html>