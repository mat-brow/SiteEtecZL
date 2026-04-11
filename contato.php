<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
        <link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <?php include 'header.php'; ?>
<main class="content">
    <h1>Entre em contato conosco!</h1><br>
<!--Formulário-->
<div class="contact-form">
    <input type="text" placeholder="Seu nome">
    <input type="email" placeholder="Seu email">
    <input type="tel" placeholder="Seu telefone">
    <textarea placeholder="Sua mensagem"></textarea>
    
    <button class="btn">Enviar</button>
</div>

<!--Informações-->
<div class="contact-info">
    <div class="alignContact1"> <!--Para dividir em duas linahs horizontais-->
        <div class="zapBox">
        <h2>Nosso WhatsApp</h2>
        <p>(11) 95689-5686</p>
        </div>

        <div class="phoneBox">
        <h2>Telefone</h2>
        <p>(11) 94789-9874</p>
        </div>
    </div> <!--Fechamento do alignContact1-->

    <div class="alignContact2">
        <div class="instaBox">
        <h2>Instagram</h2>
        <p><a href="https://www.instagram.com/eteczonalesteoficial/">@eteczonalesteoficial</a></p>
        </div>

        <div class="emailBox">
        <h2>Email</h2>
        <p>contato@eteczl.com</p>
        </div> <!--Fechamento do alignContact2-->
    </div>
</div>
</main>
<?php include 'footer.php'; ?>
</body>
</html>