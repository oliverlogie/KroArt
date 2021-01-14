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
        <form action="">
          <p><label for="name">Full Name:<span>*</span></label>
          <input id="name" type="text" name="name" required/></p>
          <p><label for="email">Email Address:<span>*</span></label>
          <input id="email" type="email" name="email" required/></p>
          <p><label for="phone">Phone:<span>*</span></label>
          <input id="phone" type="number" placeholder="(XXX) XXX-XXXX"  name="phone" required/></p>
          <p><label for="country">Country:<span>*</span></label>
            <input id="country" type="text" name="country" required/></p>
            <p><label for="City / Province">City / Province:<span>*</span></label>
              <input id="City / Province" type="text" name="City / Province" required/></p>
          <p>Message:<textarea id="" name="" rows="5" cols="50"></textarea></p>
        </form>
      </div>
      
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
            <li class="list-group-item border-0 d-flex justify-content-between"><h5><?php echo $values["item_name"];?></h5>
            <span class="text-success">Preis: € <?php echo $values["item_price"]; ?></span>
            <button><a href="collect.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger remove">Remove</span></a></button>
            <?php
							$total = $total + $values["item_price"];
						}
					  ?>
            <li class="list-group-item border-0 d-flex justify-content-between"><h3>Total: € <?php echo number_format($total, 2); ?></h3><a href="<?= $previous ?>">back to shopping...</a></li>
            <?php
					}
					?>
            <li class="list-group-item border-0 mt-5"><button class="productADD">Send request</button></li>
          </ul>
        </div>
    </div>
  </div>
</main>
<?php include_once('../includes/footer.php') ?>

