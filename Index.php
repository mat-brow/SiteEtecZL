<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include "header.php"; ?> <!--Para linkar php de HEADER com todas as páginas-->
        <main class="content">
        <div class="hero">
                <img src="images/etecDeCima.jpg" alt="Etec Zona Leste">
            <div class="hero-text">
    <h1>Bem-vindo à ETEC Zona Leste</h1>
    <p>Formando profissionais para o futuro</p>
            </div>
        </div>
<section class="intro">
    <h2>Sobre a ETEC Zona Leste</h2>
        <p>
          A ETEC Zona Leste é uma instituição de ensino técnico reconhecida pela qualidade
        de seus cursos e pela formação de profissionais preparados para o mercado de trabalho.
        </p>
        <p>
          Com ensino gratuito e professores qualificados, a escola oferece diversas 
        oportunidades para jovens que desejam construir uma carreira sólida.
        </p>
</section>
<section class="content">
    <div class="info-container"> <!-- BLOCO COM TEXTO + MAPA -->
        <div class="info-box"> <!-- TEXTO (ESQUERDA) -->
            <p>
              A ETEC possui uma localização privilegiada, com fácil acesso. Situa-se na Avenida Águia de Haia,
            ao lado do Terminal A.E. Carvalho e próxima ao Terminal Artur Alvim. Além disso, está próxima ao cruzamento com a Avenida Imperador e
            conta com tráfego constante de ônibus na região, o que facilita o acesso de estudantes de diferentes regiões de São Paulo.
            </p>
            <p>
              Fundada em 2008, a instituição de ensino rapidamente se estabeleceu como 
            ponto de referência no ensino técnico e tecnológico.
            </p>
            <a href="https://maps.app.goo.gl/yczJTFgKGSUvNUy27">Toque aqui para o link da localização da escola.</a>
        </div>
            <div class="map-box"> <!-- MAPA (DIREITA) -->
                <!--LINK INCORPORADO DO GOOGLE MAPS!-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4846.689816091402!2d-46.47682646906342!3d-23.52352584259475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1775798642765!5m2!1spt-BR!2sbr" width="600" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
    <div class="contactUs">
        <p><a href="contato.php">Entre em contato aqui</a></p>
    </div>
</main>
    <?php include "footer.php"; ?> <!--Para linkar php de FOOTER com todas as páginas-->
</body>
</html>