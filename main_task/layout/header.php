<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/style.css">
    <title></title>
  </head>
  <body >
    <!-- Background -->
       <img src="../layout/img/aa.jpg" class="img-fluid rounded position-absolute top-0"style="height: 150%; width: 100%; opacity: 100% alt="...>
       <img src="../layout/img/ss.jpg" class="img-fluid position-absolute top-0"  style="height: 150%; width: 100%; opacity: 20%"alt="...">
       <img src="../layout/img/ii.jpg" class="img-fluid position-absolute top-0 "  style="height: 150%; width: 100%; opacity: 50%"alt="..."> 
      
<!-- NavBar -->
  <nav class=" navbar navbar-dark text-secondary sticky-top position-fixed" style="opacity:100%">

  <div class="container-fluid">
    
    <a class="navbar-brand text-dark position-fixed z-index-100 start-50 translate-middle-x active" href="#"></a>

    <button class="navbar-toggler text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon active"></span>
    </button>
  
    <div class="offcanvas offcanvas-start"  id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-dark ">
       <p class=""></p>
       <figure class="figure">
       <img src="../layout/img/ukr1.png" class="figure-img img-fluid rounded" alt="...">
      </figure>
        <h5 class="offcanvas-title bg-dark" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close  bg-secondary" data-bs-dismiss="offcanvas"  aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-primary bg-dark" >
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3 text-dark bg-dark py-5 mb-">
        <li class="nav-item">
          <a class="nav-link   text-center " aria-current="page" href="../views/forum.php" <?php echo ($_SESSION['status'] == 0) ? 'style="display:none;"' : '' ?>>Forum</a>
          </li>
          <li class="nav-item">
          <a class="nav-link   text-center " aria-current="page" href="../views/users.php" <?php echo ($_SESSION['status'] == 0) ? 'style="display:none;"' : '' ?>>Users</a>
          </li>
          <li class="nav-item">
          <a class="nav-link   text-center " aria-current="page" href="../views/login.php" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?> >Log in</a>
          </li>
          <li class="nav-item">
          <a class="nav-link  text-center active" href="../views/register.php" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?>>Register</a>
          </li>
          <li class="nav-item">
          <a class="nav-link  text-center active" href="../views/login.php" <?php echo ($_SESSION['status'] == 0) ? 'style="display:none;"' : '' ?>>Log out</a>
          </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


