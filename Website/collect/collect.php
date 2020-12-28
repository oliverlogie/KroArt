<?php  include_once('../includes/navbar.php'); ?>
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
            <li class="list-group-item border-0"><h3>Artikeln</h3></li>
            <li class="list-group-item border-0 d-flex justify-content-between"><h5>Name des Kunstwerk</h5><span class="text-success">Preis</span>
            <li class="list-group-item border-0 d-flex justify-content-between"><h3>Total: </h3> <span class="text-success">Preis</span></li>
            <li class="list-group-item border-0 mt-5"><button class="productADD">Send riquest</button></li>
          </ul>
        </div>
    </div>
  </div>
</main>
<?php include_once('../includes/footer.php') ?>
