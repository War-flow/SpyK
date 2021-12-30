<!DOCTYPE html>
<html lang="form">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="HomeAd.php">DATA-KGB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Database.php">Database</a>
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Recherche</button>
          </form>
        </ul>
        <form method="post" action="../Log/Logout.php">
          <button class="btn btn-outline-warning" type="submit">Déconnexion</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>