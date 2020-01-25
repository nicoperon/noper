<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="icon" type="image/png" sizes="56x56" href="asset/favicon.png">

  <title>Prise de rendez-vous | La Raie-Création - Coiffeur / Visagiste depuis 1993</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/rdv.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Navbar -->
  <?php require_once ("inc/navbar.php") ?>

  <header class="text-white slide-fond">
    <div class="container text-center">
      <h1>RENDEZ-VOUS</h1>
      <p class="lead">Grace au formulaire de contact ci dessous, vous pouvez consulter et prendre rendez-vous au salon
        gratuitement depuis notre site internet.</p>
    </div>
  </header>

  <div class="container">
    <div class="flex-grid">
      <aside class="col sidebar">
        <section id="about">
          <div class="container">
            <!-- Afficher un rdv -->
            <?php require_once ("inc/afficher-rdv.php") ?>
          </div>
        </section>
      </aside>
      <section class="col main">
        <section id="services" class="bg-light">
          <div class="container">
            <!-- Formulaire prise rdv -->
            <form action="inc/traitement-rdv.php" method="post">
              <p><label>Nom :<input type="text" name="nom" required></label></p>
              <p><label>Date :<input type="date" name="date" required></label></p>
              <p><label>Heure :<input type="time" name="heure" min="09:00" max="18:00" required></label>
                <i>Entre 09h et 18h</i></p>
              <p><input type="submit" name="insert" value="Insérer"></p>
            </form>
          </div>
        </section>
      </section>
    </div>
  </div>
  <!-- Footer -->
  <?php require_once ("inc/footer.php") ?>

  <!-- Script js -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>

</body>

</html>