<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <link rel="icon" type="image/png" sizes="56x56" href="asset/favicon.png">

   <title>La Raie-Création - Coiffeur / Visagiste depuis 1993</title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- CSS -->
   <link href="css/scrolling-nav.css" rel="stylesheet">
   <link href="css/contact.css" rel="stylesheet">


</head>

<body id="page-top">
   <?php require_once ("inc/navbar.php") ?>


   <header class="text-white slide-fond">
      <div class="container text-center">
         <h1>CONTACT</h1>
         <p class="lead">Remplissez le formulaire de contact ci-dessous, nous vous recontactons dans les plus brefs
            délais!</p>
      </div>
   </header>

   <!-- Formulaire de contact -->
   <section class="get-in-touch">
      <form class="contact-form row">
         <div class="form-field col-lg-6">
            <input id="name" name="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="email" name="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="company" name="sujet" class="input-text js-input" type="text" required>
            <label class="label" for="company">Sujet</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="phone" name="tel" class="input-text js-input" type="text" required>
            <label class="label" for="phone">N° Téléphone</label>
         </div>
         <div class="form-field col-lg-12">
            <input id="message" name="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Message</label>
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Envoyer">
         </div>
      </form>
   </section>
   <!-- Fin Formulaire de contact -->

   <!-- Carte google maps -->
   <section id="services" class="bg-light">
      <div class="container">
         <div class="row">

            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.110179886316!2d1.4301876154968336!3d43.625065679122265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb4dc73a2a17%3A0xdbe46ab4f8e2f477!2s42%20Impasse%20Charles%20Fourier%2C%2031200%20Toulouse!5e0!3m2!1sfr!2sfr!4v1579864901250!5m2!1sfr!2sfr"
               width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

         </div>
      </div>
   </section>
   <!-- Fin carte google maps -->

   <!-- Footer -->
   <?php require_once ("inc/footer.php") ?>

     <!-- Script js -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="js/scrolling-nav.js"></script>

</body>

</html>