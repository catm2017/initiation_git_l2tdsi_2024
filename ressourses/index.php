<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/Style1.css">
        <title>SOLOQUIZZ</title>
    </head>
    <body>
        <header class="pb-2 headerClass">
            <nav class="px-3 navbar navbar-expand-lg navbar-dark bg-dark fixed">
                <div class="container row px-1 containerClass">
                    <div class="col">
                        <a class="navbar-brand" href="#"><img class="imgClass1" src="Soloquizz.png"></a>
                    </div>
                    <div class="col divClass1">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <button class="px-3 btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="imgClass2" src="user.png">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-info">
                                        <li>
                                            <a class="dropdown-item text-dark" href="#">
                                                <span<ion-icon name="person"></ion-icon></span>
                                                <strong>&nbsp;Alassane Laye Diop</strong>
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
            <!-- <hr class="bg-primary" style="color: white;"> -->
            <nav class="navbar navbar-expand-lg navClass1">
                <div class="container">
                    <div class="container-fluid row">
                        <div class="col-7">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <div class="">
                                    <ul class="navbar-nav lienNav ulClass1">
                                        <li class="nav-item ">
                                            <a class="nav-link ul_a_Class1" href="#">Tableau de bord</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ul_a_Class1" href="#">Parametres</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link ul_a_Class1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Certifications
                                            </a>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                                          </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ul_a_Class1" href="#">Parametres</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ul_a_Class1" href="#">Classes</a>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div>
                <div class="row text-center shadow bg-light divClassB">
                    <div class="col-3 shadow-lg divClass3">Etudiants<br><strong class="text-dark">4</strong></div>
                    <div class="text-center col-lg-3 shadow-lg rounded divClass4">Certifications<br><strong class="text-dark">2</strong></div>
                    <div class="text-center col-lg-3 shadow-lg rounded divClass5">Classe<br><strong class="text-dark">5</strong></div>
                </div>
                <div class="container bg-light divBreakClass1">
                    <div class="container bg-light divBreakClass2">
                        <div class="bg-white divBreakClass3">
                            <nav aria-label="breadcrumb" class="divBreakClass4">
                                <ol class="breadcrumb divBreakClass5">
                                  <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                                  <li class="breadcrumb-item divBreakClass6"><a href="#">Administrateurs</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Listes des administrateurs</li>
                                </ol>
                            </nav>
                            <div>
                                <div class="center row bg-light divAdmin">
                                    <div class="col-4"><strong>Listes des adminstrateurs</strong></div>
                                    <div class="col-4"><strong>Nombre d'administrateurs 4</strong></div>
                                    <div class="col-4 text-end"><a href="Form.php" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un administrateur</span></a></div>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Réseau</th>
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
                            <nav aria-label="Page navigation example" class="navClass2">
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
        </div>
        <footer>
        <!--Footer 2-->
            <div class="divClass2">
              <div class="container">
                  <p class="text-white text-center"><span>Ministèrer de l'enseignement supérieur, de la Recherche et de l'innovation <span class="text-primary">(MESRI)</span></span><br/>
                  <span>Université Cheikh Anta Diop de DAKAR <span class="text-primary">(UCAD)</span></span><br/>
                  <span>Transmission des données et sécurités de linformation <span class="text-primary">(TDSI)</span></span></p>
              </div>
            </div>
        </footer>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>