<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="icon" type="image/png" sizes="56x56" href="asset/favicon.png">

  <title>Nos Coiffures | La Raie-Création - Coiffeur / Visagiste depuis 1993</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/post.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Navbar -->
  <?php require_once ("inc/navbar.php") ?>

  <header class="text-white slide-fond">
    <div class="container text-center">
      <h1>NOS COIFFURES</h1>
      <p class="lead">Ci dessous, vous retrouverez toutes les coiffures / créations du Salon La Raie-Création</p>
    </div>
  </header>

  <!-- Diaporama d'image -->
  <section>
    <div class="gp nogp wht-lyr opc8">

      <div class="container">
        <div class="col-12 text-center">
          <h1>DIAPORAMA D'IMAGES</h1>
        </div>
        <!-- Ligne 1 -->
        <div class="hover13 column">
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Coiffure femme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Couleur femme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Déffrisage femme</span>
          </div>
        </div><br>
        <!-- Ligne 2 -->
        <div class="hover13 column">
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Coiffure homme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Couleur homme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Déffrisage homme</span>
          </div>
        </div><br>
        <!-- Ligne 3 -->
        <div class="hover13 column">
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Soin visage femme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Soin visage homme</span>
          </div>
          <div>
            <figure><img src="asset/coiffure.jpg" /></figure>
            <span>Masque du visage</span>
          </div>
        </div>

        <!-- Télécharger une image -->
        <div class="col-12 text-center">
          <h1>TÉLÉCHARGER UNE IMAGES</h1>
        </div>
        <!-- Upload image -->
        <div class="upload_image">
          <?php require_once ("inc/upload-post.php") ?>
        </div>
        <!-- Afficher image uploader -->
        <?php require_once ("inc/afficher-post.php") ?>

        <!-- Vidéo -->
        <div class="row">
          <div class="col-12 text-center">
            <h1>NOS VIDEO</h1>
          </div>
          <!-- Ligne 1 -->
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO1_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
          </div>
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO2_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
          </div>
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO3_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
          </div>
        </div>
        <br><br><br>
        <!-- Ligne 2 -->
        <div class="row">
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO4_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
          </div>
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO5_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
          </div>
          <div class="col py-2">
            <video src="asset/MONTAGE_RDM_VIDEO6_v2.0.mp4" width=320 height=240 controls poster="vignette.jpg">
              Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
              Une version est disponible en téléchargement sous <a href="URL">adresse du lien </a> .
            </video>
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