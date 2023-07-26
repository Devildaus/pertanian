<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/4d548a4e76.js" crossorigin="anonymous"></script>
<style>
     .navbar{
    background-color: white;
    font-family: 'Arbutus Slab';
    font-size: 14px;
  }

  .navbar {
    position: relative;
    transition: border-bottom-color 0.3s ease-in-out;
  }

  .navbar:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #004d00;
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
  }

  .navbar:hover {
    border-bottom-color: #004d00;
  }

  .navbar:hover:before {
    transform: scaleX(1);
  }
/* Navbar styles and hover styles start*/



/* Brand or logo (image) styles and hover styles start*/
  .logo-img {
      transition: transform 0.3s ease-in-out;
    }
  
  .logo-img:hover {
  transform: scale(1.1);
  border: 2px solid #000;
  animation: border-animation 2s infinite;
  }

  @keyframes border-animation {
  0% {
      border-color: #b3ffb3;
  }
  25% {
      border-color: #66ff66;
  }
  50% {
      border-color:#00cc00 ;
  }
  75% {
      border-color:#006600 ;
  }
  100% {
      border-color:#001a00 ;
  }
  }
/* Brand or logo (image) styles and hover styles end*/



/* Navbar list (Home, About, Vision, Contact) styles and hover starts*/
  .navbar-nav {
    list-style: none;
    padding: 0;
  }
  
  .nav-item {
    display: inline-block;
    margin-right: 15px;
    position: relative;
    padding-top: 12px;
  }
  
  .nav-link {
    position: relative;
    display: inline-block;
    text-decoration: none;
    color: #000;
    transition: transform 0.3s ease-in-out;
  }
  
  .nav-link:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #000;
    transition: width 0.5s ease-in-out;
  }
  
  .nav-link:hover {
    transform: scale(1.1);
    font-weight: bold;
  }
  
  .nav-link:hover:before {
    width: 100%;
    animation: underline 0.6s linear;
  }
  
  @keyframes underline {
    0% {
      left: 0;
      width: 0;
    }
    25% {
      left: 0;
      width: 100%;
    }
    50% {
      left: 100%;
      width: 0;
    }
    75% {
      left: 0;
      width: 100%;
    }
    100% {
      left: 0;
      width: 100%;
    }
  }
/* Navbar list (Home, About, Vision, Contact) styles and hover starts*/


    
/* search box styles and hover styles starts */  
  .search-form input[type="text"]:hover,
  .search-form input[type="text"]:focus {
    animation: border-animation 2s infinite;
  }
  
  @keyframes border-animation {
    0% {
      border-color: #004d00;
      box-shadow: 0 0 5px #004d00;
    }
    50% {
      border-color: #00cc00;
      box-shadow: 0 0 5px #00cc00;
    }
    100% {
      border-color: #004d00;
      box-shadow: 0 0 5px #004d00;
    }
  }
  
  .search-form input[type="text"]:hover::placeholder {
    font-size: 14px;
    transition: font-size 0.3s ease-in-out;
  }

  .search-wrapper {
    position: relative;
  }
  
  .search-button {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    cursor: pointer;
  }
  
  .search-button i {
    color: #000;
  }
  
  .search-form input[type="text"] {
    padding-right: 30px;
  }

  .search-button i:hover {
    transform: scale(1.2);
  }
/* search box styles and hover styles ends */ 



/* User profile or dropdown styles and hover styles starts */
  .fa-regular{
    color: white;
    font-size: 20px;
    padding: 5px;
    background-color: black;
  }

  .dropdown-menu.dropdown-menu-center {
    left: 40% !important;
    right: auto !important;
    transform: translateX(-50%) !important;
  }

  .dropdown .btn:hover {
    transform: scale(1.1);
    }

  .dropdown-item{
    font-family: 'Arbutus Slab';
    font-size: 14px;
    transition: all 0.3s ease;
  }

  .dropdown-item:hover {
    transform: scale(1.1);
  }

  .dropdown-divider {
    border: none;
    height: 2px;
    background-color: #000;
    margin: 0.5rem 0;
    opacity: 0.5;
  }
/* User profile or dropdown styles and hover styles starts */  



/* Media query styles for 576 px size user window starts */  
  @media (max-width: 576px) {
    .nav-item{
        padding-left: 10%;
    }

    .dropdown{
        padding-left: 8%;
    }
    
    .dropdown-menu.dropdown-menu-center {
      left: 30% !important;
      right: 0 !important;
      transform: translateX(0) !important;
    }
  }
/* Media query styles for 576 px size user window ends */
</style>
</head>
<body>
    <nav class="navbar navbar-expand-sm p-3 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="https://upland.psp.pertanian.go.id/asset_public/img/logo/upland-color.png" alt="UPLAND" class="logo-img" style="width:90px;"> 
          </a>
          <a class="navbar-brand" href="/">
            <img src="https://upland.psp.pertanian.go.id/asset_public/img/logo/kementan.png" alt="UPLAND" class="logo-img" style="width:50px; height:50px"> 
          </a>
          <a class="navbar-brand" href="/">
            <img src="https://malangkab.go.id/uploads/assets/portal/logo1.png" alt="UPLAND" class="logo-img" style="width:90px; height:50px"> 
          </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/blog" >Blog</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/about" >About</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/contact" >Contact</a>
                </li>
              </ul>
              <form class="d-flex ms-auto nav-item search-form">
                <div class="search-wrapper">
                  <input class="form-control me-2 p-1 ps-2" type="text" placeholder="Search">
                  <button type="submit" class="search-button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              
            <div class="dropdown nav-item">
                <button type="button" class="btn dropdown-toggle border-0" data-bs-toggle="dropdown">
                    <i class="fa-regular fa-user border border-3 border-dark rounded-circle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-center">
                  <li><a class="dropdown-item" href="#">Register</a></li>
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Contact</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign in</a></li>
                </ul>
              </div>
            </div>
          </div>
        
        
    </nav>

<h1> WOW </h1>
</body>
</html>