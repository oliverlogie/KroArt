<?php
include_once('../includes/navbar.php');
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
 ?>
<main>
  <div class="container pt-5 pb-5">
    <div class="row d-block d-lg-flex d-md-flex justify-content-center">
      <div class="col-lg-6 col-md-6 col-sm-12">

        <form action="../backend/mail.php" method="post">

          <p><label for="name">Full Name:<span>*</span></label>
          <input id="name" type="text" name="name" required/></p>

          <p><label for="email">Email Address:<span>*</span></label>
          <input id="email" type="email" name="email" required/></p>

          <p><label for="phone">Phone:</label>
          <input id="phone" type="number" placeholder="(XXX) XXX-XXXX"  name="phone" /></p>

          <p><label for="country">Country:</label>
            <input id="country" type="text" name="country" /></p>

            <p><label for="City / Province">City / Province:</label>
              <input id="City / Province" type="text" name="city" /></p>

          <p>Message:<textarea id="" name="message" rows="5" cols="50"></textarea></p>
      </div>
      </form>
      
        <div class="border-0 col-lg-6 col-md-6 col-sm-12  productCard">
          <ul class="border-0">
            <li class="list-group-item border-0"><h3>Artikel</h3></li>
            <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
            <li class="list-group-item border-2 d-flex justify-content-between mb-2">
            <ul class="p-0">
            <li><?php echo $values["item_pic"];?></li>
            <li><?php echo $values["item_name"];?> <?php echo $values["item_lastname"];?></li>
            <li><?php echo $values["item_measurement"];?></li>
            <li><?php echo $values["item_technic"];?></li>
            </ul>
            <span class="text-primary">Preis: € <?php echo $values["item_price"]; ?></span>
            <button><a href="collect.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger remove">Remove</span></a></button>
            <?php
							$total = $total + $values["item_price"];
						}
					  ?>
            <li class="list-group-item border-0 d-flex justify-content-between"><h3>Total: € <?php echo number_format($total, 2); ?></h3><a class="text-muted" href="<?= $previous ?>">previous page...</a></li>
            <?php
					}
					?>
            <li class="list-group-item border-0 mt-5"><input class="productADD" type="submit" name="submit_request" value="SEND REQUEST"></input></li>
          </ul>
        </div>

    </div>
  </div>
</main>
<?php include_once('../includes/footer.php') ?>

