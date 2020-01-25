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

</head>

<body id="page-top">
  <!-- Navbar -->
  <?php require_once ("inc/navbar.php") ?>


  <header class="text-white slide-fond">
    <div class="container text-center">
      <h1>La Raie-Création</h1>
    </div>
  </header>

  <!-- Présentation entreprise -->
  <section id="about">
    <div class="container">
      <div class="row">
        <!-- Parti gauche texte -->
        <div class="col-lg-8 mx-auto">
          <h2>Qui sommes-nous? </h2>
          <p class="lead">Nous sommes un salon de coiffure implanté à Toulouse.<br>Nous avons plusieurs domaines de
            compétences : </p>
          <ul>
            <li>Coiffure homme/femme</li>
            <li>Couleur cheveux</li>
            <li>Défrissage cheveux</li>
            <li>Soin du visage</li>
          </ul>
        </div>
        <!-- Parti droite vidéo -->
        <div class="col-lg-4 mx-auto">
          <h2>Vidéo de présentation </h2>
          <video src="asset/MONTAGE_RDM_VIDEO1_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
            Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
            Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
          </video>
        </div>
      </div>
    </div>
  </section>

  <!-- Prendre rdv -->
  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Prendre rendez-vous</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita
            quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore
            ut velit dignissimos.</p><br>
            <div class="form-field col-lg-12">
            <a href="rdv.php" class="submit-btn">PRENDRE RDV</a>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nos coiffure -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Voir nos créations</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor,
            provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa
            exercitationem, in, quo totam.</p><br>
            <div class="form-field col-lg-12">
            <a href="post.php" class="submit-btn">NOS CRÉATIONS</a>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php require_once ("inc/footer.php") ?>

  <!-- Script js -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>

</body>
</html>