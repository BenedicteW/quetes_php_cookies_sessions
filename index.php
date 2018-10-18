<?php require 'inc/head.php';

session_start();

if ($_POST){
    if (!isset($_SESSION['Login'])){
        header('Location: login.php');
    }else{
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier']['produits'] = ['Pecan nuts', 'Chocolate chips', 'Chocolate cookie', 'M&M\'s cookies'];
            $_SESSION['panier']['quantité'] = [0, 0, 0, 0];
        }

        if($_POST['PecanNuts'] == 'Addtocart'){
            $_SESSION['panier']['quantité'][0] += 1;
        }

        if($_POST['Chocolatechips'] == 'Addtocart'){
            $_SESSION['panier']['quantité'][1] += 1;
        }

        if($_POST['ChocolateCookie'] == 'Addtocart'){
            $_SESSION['panier']['quantité'][2] += 1;
        }

        if($_POST['M&MsCookie'] == 'Addtocart'){
            $_SESSION['panier']['quantité'][3] += 1;
        }
    }
}






?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <form action="" method="post">
            <input type="submit" class="btn btn-primary" name="PecanNuts" value="Addtocart">
          </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <form action="" method="post">
              <input type="submit" class="btn btn-primary" id="Chocolatechips" name="Chocolatechips" value="Addtocart">
          </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <form action="" method="post">
              <input type="submit" class="btn btn-primary" name="ChocolateCookie" value="Addtocart">
          </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <form action="" method="post">
              <input type="submit" class="btn btn-primary" name="M&MsCookie" value="Addtocart">
          </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
