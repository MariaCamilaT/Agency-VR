<?php 
include('../app/config.php');

?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="./styleInicio.css">
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
                    <li style="width: 180px;" ><a href="">INICIO</a></li>
                    <li style="width: 180px;" ><a href="../sections/about_us.php">SOBRE NOSOTROS</a></li>
                    <li style="width: 180px;" ><a href="../sections/services.php">SERVICIOS</a></li>
                    <li style="width: 180px;" ><a href="../sections/contac_us.php">CONTACTANOS</a></li>
                    <li style="width: 180px;" > 
                        <a href="<?php echo $URL; ?>/app/controladores/login/cerrar_sesion.php" class="btn btn-danger">CERRAR SESION </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="section_first">
            <div>
                <article>
                    <div>
                        <img src="../public/images/background.png" alt="">
                    </div>
                </article>
                <article>
                    <div>
                        <h3>AGENCY VR</h3>
                        <h2>MARKETING DIGITAL</h2>
                        <h1>Conquista el mercado con innovación.</h1>
                        <p>Lorem ipsum accusant consectetur adipisicing elit. Eveniet accusantium, officia iure quis molestias nihil, suscipit commodi, totam quod iste distinctio haur nisi dolorum magnam ab vo</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="section_services">
            <article class="article_services">
                <div class="child_one">
                    <div>
                        <h3> Impulsamos tu negocio al siguiente nivel digital</h3>
                    </div>
                </div>
                <div class="child_two">
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <h1>SEO ESPECIALIZADO</h1>
                            <h2>Mejora la posición de tu página web en los buscadores con estrategias SEO efectivas Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui recusandae ad cum iusto veniam, sint ab nesciunt molestias quos alias deleniti fugit quod aspernatur vero perspiciatis accusamus ducimus nihil debitis..</h2>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <h1>REDES SOCIALES </h1>
                            <h2>Creamos contenido atractivo y campañas exitosas para aumentar tu audiencia en redes Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, assumenda ex. Possimus voluptas inventore a nostrum, ad officiis assumenda, ut dicta non minus dolore fuga doloremque quo, reiciendis aliquam ab.</h2>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <h1>ANÁLISIS DE DATOS </h1>
                            <h2>Utilizamos métricas avanzadas para optimizar y mejorar tus estrategias de marketing digital. Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, reiciendis delectus odit blanditiis fugiat libero expedita consequuntur dolorum in non ipsa a quia dignissimos nemo voluptatum voluptates voluptatem ratione omnis. </h2>
                        </div>
                    </div>
                </div>
                <div class="child_three">
                    <button><a href="../sections/about_us.php">SOBRE NOSOTROS</a> </button>
                </div>
            </article>
        </section>
        <section class="section_image">
            <article>
                <div>
                    <div>
                        <h1>Nos enfocamos en asegurar una ventaja competitiva</h1>
                    </div>
                    <div>
                        <img src="../public/images/cell.png" alt="">
                    </div>
                </div>
            </article>
            <article>
                <div>
                    <div>
                        <p>Ofrecemos soluciones innovadoras y personalizadas en marketing digital. Nuestro equipo de expertos maximiza el impacto de tu marca, aumentando su visibilidad y atrayendo más clientes potenciales. Utilizamos estrategias inteligentes y herramientas analíticas avanzadas para asegurar un retorno óptimo de tu inversión. Ya sea optimizando tu presencia en redes sociales, mejorando el SEO o creando campañas de publicidad, nos adaptamos a tus necesidades específicas. Nos comprometemos a ser tu socio en el crecimiento, transformando tus desafíos en oportunidades. Juntos, podemos llevar tu marca al siguiente nivel, consolidando su presencia en el mercado digital.</p>
                        <h1>AGENCY VR</h1>
                    </div>
                </div> 
            </article>
        </section>
        <section class="section_vision">
            <div>
                <article>
                    <div style="height: auto;">
                        <h1>Marketing Digital Flexible y Eficaz</h1>
                        <p>Ofrecemos estrategias de marketing digital flexibles y disponibles 24/7 para adaptarse a tus necesidades. Conviértete en un líder del sector con nuestras soluciones innovadoras y personalizadas, completamente online.</p>
                    </div>
                </article>
                <article>
                    <div style="height: auto;"> 
                        <div>
                            <h1>NUESTROS VALORES</h1>
                            <p>Ofrecemos soluciones innovadoras en marketing digital con un enfoque en la satisfacción del cliente, la creatividad y la transparencia.</p>
                        </div>
                        <div>
                            <h1>NUESTRA MISIÓN</h1>
                            <p>Ayudamos a las empresas a crecer en el mundo digital con estrategias personalizadas, transformando su presencia online y alcanzando nuevos niveles de éxito.</p>
                        </div>
                        <div>
                            <h1>NUESTRAS HABILIDADES</h1>
                            <p>Expertos en SEO, SEM, marketing de contenido, redes sociales y análisis de datos, combinamos creatividad y estrategia para obtener resultados impactantes.</p>
                        </div>
                    </div>
                </article>
                <footer class="footer">
                    <div>
                        <h1>AGENCY VR</h1>
                        <p>Creado por Camila Tuberquia y Mauricio Santamaria</p>
                        <h2>2024</h2>
                    </div>
                </footer>
            </div>
        </section>
    </main>
</body>
</html>

