<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLOQUIZZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css.css">
    <style type="text/css">
        .headerClasse{
            position: fixed; width: 100%; top: 0;
        }
    </style>
</head>
<body>
    <header class="pb-2 headerClasse">
        <nav class="px-3 navbar navbar-expand-lg navbar-dark bg-dark fixed">
            <div class="container row px-1" style="margin: auto;">
                <div class="col">
                    <a class="navbar-brand" href="#"><img style="width:30%; height: 5%; margin: 2px;" src="Soloquizz.png"></a>
                </div>
                <div class="col" style="margin-left: 100px;">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="px-3 btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="user.png" style="width: 40px; height: 40px; border-radius: 100%;">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-info">
                                    <li>
                                        <a class="dropdown-item text-dark" href="#">
                                            <span<ion-icon name="person"></ion-icon></span>
                                            <strong>&nbsp;Amadou Diogo BA</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="#">
                                            <span<ion-icon name="power"></ion-icon></span>&nbsp;Deconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="bg-light">
<<<<<<< HEAD
        
=======
        <!-- <hr class="bg-primary" style="color: white;"> -->
>>>>>>> 7e061641b27f85ad0857342a781ae17c3f0240e6
        <nav style="padding-left: 35px; margin-top: 70px; padding-top: 2px; background: rgb(41, 98, 255);" class="navbar navbar-expand-lg">
            <div class="container">
                <div class="container-fluid row">
                    <div class="col-7">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <div class="">
                                <ul style="text-align: center;" class="navbar-nav lienNav">
                                    <li class="nav-item ">
                                        <a style="color: rgb(255, 255, 255);" class="nav-link" href="#">Tableau de bord</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="color: rgb(199, 200, 200);" class="nav-link" href="#">Parametres</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a style="color: rgb(199, 200, 200);" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Certifications
                                        </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                                        <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                                        <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                                      </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a style="color: rgb(199, 200, 200);" class="nav-link" href="#">Parametres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="color: rgb(199, 200, 200);" class="nav-link" href="#">Classes</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div style="width: auto;">
            <div style="justify-content: space-around; align-items: center; height: 100px;" class=" row text-center shadow bg-light">
                <div style="margin-left: 75px; padding: 12px 0px; width:320px; color: rgb(109, 109, 109); border-left: 3px solid red; border-bottom-left-radius: 5px; border-top-left-radius: 5px;" class="col-3 shadow-lg ">Etudiants<br><strong class="text-dark">4</strong></div>
                <div style="padding: 12px 0px; width: 320px; color: rgb(109, 109, 109);" class="text-center col-lg-3 shadow-lg rounded">Certifications<br><strong class="text-dark">2</strong></div>
                <div style="margin-right: 75px; padding: 12px 0px; width: 320px; color: rgb(109, 109, 109);" class="text-center col-lg-3 shadow-lg rounded">Classe<br><strong class="text-dark">5</strong></div>
            </div>
            <div class="container bg-light" style="padding: 15px 0px; margin-top: 50px; margin-bottom: 50px;">
                <div class="container bg-light" style="margin-top: 20px; padding-bottom: 30px;">
                    <div class="bg-white" style="padding: 10px 10px; width: 900px; margin: auto;">
                        <nav aria-label="breadcrumb" style="background: rgb(216, 216, 216); font-size: 15px; font-weight: bolder;">
                            <ol class="breadcrumb" style="padding: 13px 8px;">
  <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Accueil</a></li>
  <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Administrateurs</a></li>
  <li class="breadcrumb-item active" aria-current="page">Listes des administrateurs</li>
</ol>
</nav>
<div>
    <div style="display: flex; margin: 20px 0px;" class="center row bg-light">
        <div class="col-4"><strong>Listes des adminstrateurs</strong></div>
        <div class="col-4"><strong>Nombre d'administrateurs 4</strong></div>
<<<<<<< HEAD
        <div class="col-4 text-end"><a href="Pagehtmlformulaire.php" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un administrateur</span></a></div>
=======
        <div class="col-4 text-end"><a href="pagehtmlformulaire.php" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un administrateur</span></a></div>
>>>>>>> 7e061641b27f85ad0857342a781ae17c3f0240e6
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Reseau</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-secondary">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr class="table-secondary">
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
</table>
<nav aria-label="Page navigation example" style="margin-left: 635px;">
  <ul class="pagination">
    <li class="page-item"><a class="page-link text-dark href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link bg-primary text-white href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</div>
</div>
</div>
<footer>
<<<<<<< HEAD

    <div style="background-color: rgb(64, 79, 104); padding: 2px;">
      <div class="container">
          <p class="text-white text-center"><span>Ministerer de l'enseignement superieur, de la Recherche et de l'innovation <span class="text-primary">(MESRI)</span></span><br/>
=======
<!--Footer 2-->
    <div style="background-color: rgb(64, 79, 104); padding: 2px;">
      <div class="container">
          <p class="text-white text-center"><span>Ministre de l'enseignement superieur, de la Recherche et de l'innovation <span class="text-primary">(MESRI)</span></span><br/>
>>>>>>> 7e061641b27f85ad0857342a781ae17c3f0240e6
          <span>Universite Cheikh Anta Diop de DAKAR <span class="text-primary">(UCAD)</span></span><br/>
          <span>Transmission des donnees et securites de linformation <span class="text-primary">(TDSI)</span></span></p>
      </div>
    </div>
</footer>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

