<!DOCTYPE html>
<html lang="fr"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Jarditou</title>
  <?php session_start(); ?>
</head>

<body>


  <div class="container-fluid">
    <div class="row">
      <div class="col-9">
        <img src="jarditoulogo.jpg" height="45px" width="150px">
      </div>
      <div class="col-3">
        <p class="h1">Tout le jardin</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Jarditou.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="jarditou.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Tableau2.html">Tableau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="formulaire.html">contact</a>
              </li>
            </ul>

            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <img src="promotion.jpg" height="100%" width="100%">

  <?php if (isset($_SESSION["valider"]) == true) {

  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert"> <!--Permet d'afficher le message "Formulaire valider"-->
      <strong> <?php echo $_SESSION["valider"]; ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>
  <h6><br>Ces zones sont obligatoires*</h6></br>



  <form action="script.php" method="POST">


    <fieldset>
      <legend> *Vos Coordonnées </legend> <br> <!-- Modification des différents champs du formulaire on rajoute les message d'erreur-->

      <div class="form-group">
        <label for="name">Nom*</label>
        <input type="" class="form-control" id="nom" name="nom" placeholder="Veuillez saisir votre nom">

        <?php if (isset($_SESSION["erreur"]["nom"]) && $_SESSION["erreur"]["nom"] != "") { ?>
          <div id="erreurName" class="Erreur">
            <p><?php echo $_SESSION["erreur"]["nom"]; ?></p>
          </div><br>
        <?php } ?>

        <label for="name">Prénom*</label>
        <input type="" class="form-control" id="prénom" name="prénom" placeholder="Veuillez saisir votre prénom">

        <?php if (isset($_SESSION["erreur"]["prénom"]) && $_SESSION["erreur"]["prénom"] != "") { ?>
          <div id="erreurprénom" class="Erreur">
            <p><?php echo $_SESSION["erreur"]["prénom"]; ?></p>
          </div><br>
        <?php } ?>

        <label>Sexe*</label>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="Féminin">
            <label class="form-check-label" id="feminin">Féminin</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="Masculin">
            <label class="form-check-label" id="masculin">Masculin</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="inlineRadio3" value="Neutre">
            <label class="form-check-label" id="neutre">Neutre</label>
          </div>
          <?php if (isset($_SESSION["erreur"]["sexe"]) && $_SESSION["erreur"]["sexe"] != "") { ?>
            <div id="erreursexe" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["sexe"]; ?></p>
            </div><br>
          <?php } ?>

        </div>

        <div class="form-group">
          <label for="name">Date de naissance*</label>
          <input type="date" class="form-control" id="start" name="ddn">
          <?php if (isset($_SESSION["erreur"]["ddn"]) && $_SESSION["erreur"]["ddn"] != "") { ?>
            <div id="erreurddn" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["ddn"]; ?></p>
            </div><br>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="code">Code Postal*</label>
          <input id="codepostal" type="" class="form-control" name="cp" placeholder="Code Postal">
          <?php if (isset($_SESSION["erreur"]["cp"]) && $_SESSION["erreur"]["cp"] != "") { ?>
            <div id="erreurcp" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["cp"]; ?></p>
            </div><br>
          <?php } ?>

          <label for="adresse">Adresse</label>
          <input type="" class="form-control" name="adresse" id="adresse" placeholder="adresse">
          <?php if (isset($_SESSION["erreur"]["adresse"]) && $_SESSION["erreur"]["adresse"] != "") { ?>
            <div id="erreuradresse" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["adresse"]; ?></p>
            </div><br>
          <?php } ?>

          <label for="city">Ville</label>
          <input id="ville" type="" class="form-control" name="ville" placeholder="ville">
          <?php if (isset($_SESSION["erreur"]["ville"]) && $_SESSION["erreur"]["ville"] != "") { ?>
            <div id="erreurville" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["ville"]; ?></p>
            </div><br>
          <?php } ?>
          <label for="courriel">Email*</label>
          <input id="email" type="" class="form-control" name="email" placeholder="dave.loper@afpa.fr">
          <?php if (isset($_SESSION["erreur"]["email"]) && $_SESSION["erreur"]["email"] != "") { ?>
            <div id="erreuremail" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["email"]; ?></p>
            </div><br>
          <?php } ?>

          <select class="form-select" aria-label="Default select example">
            <option selected>Veuillez sélectionner un sujet</option>
            <option value="1">Mes commandes</option>
            <option value="2">Question sur un produit</option>
            <option value="3">Réclamation</option>
            <option value="4">Autres</option>
          </select><br>
          <br>

          <fieldset>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Commentaire" floatingTextarea2 style="height: 100px">Votre question*:</textarea>
              <label for="floatingTextarea2"></label>
            </div>
            <br>
          </fieldset>
          <br>
          <br>

          <input type="checkbox" name="condition" value="cocher"> *J'accepte le traitement informatique de ce formulaire <br>
          <br>
          <?php if (isset($_SESSION["erreur"]["condition"]) && $_SESSION["erreur"]["condition"] != "") { ?>
            <div id="erreurcondition" class="Erreur">
              <p><?php echo $_SESSION["erreur"]["condition"]; ?></p>
            </div><br>
          <?php } ?>
          <div class="champ">
            <input type="submit" value="Envoyer" class="btn btn-dark"></button>
            <input type="reset" value="Annuler" class="btn btn-dark"> <br>
            </br>
          </div>

          <nav class="navbar navbar-expand navbar-dark bg-dark">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Mention légale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Horaires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Plan du site</a>
              </li>
              </button>
            </ul>
        </div>

  </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>