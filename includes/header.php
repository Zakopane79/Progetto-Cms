<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CMS</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #343a40;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" alt="Logo" style="width: 40px; height: 40px;">
                    CMS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="views/about.php">Chi siamo</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="shopDropdown">
                                <a class="dropdown-item" href="shop/products.php">Prodotti</a>
                                <a class="dropdown-item" href="shop/cart.php">Carrello</a>
                                <a class="dropdown-item" href="shop/checkout.php">Checkout</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ml-lg-3">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cerca" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerca</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
</body>
</html> 