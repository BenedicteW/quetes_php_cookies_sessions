<?php require 'inc/head.php';

session_start();

if(empty($_SESSION)){
    header('Location: login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <h3>In your cart</h3>
        <table>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
            </tr>
            <?php foreach ($_SESSION['panier']['produits'] as $key => $value) { ?>
                <tr><td><?php echo $value ?></td>
                <td class="text-right"><?php echo $_SESSION['panier']['quantité'][$key]; ?></td></tr>
            <?php } ?>

        </table>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
