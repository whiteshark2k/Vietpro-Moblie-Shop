<?php
  if(isset($_SESSION['cart'])) {
    $total_notify = 0;
    foreach($_SESSION['cart'] as $item => $value) {
      $total_notify+= $value;
    }
  }
?>

<div id="cart" class="col-lg-3 col-md-3 col-sm-12">
  <a class="mt-4 mr-2" href="#">giỏ hàng</a><span class="mt-3"><?php echo isset($_SESSION['cart']) ? $total_notify:"0" ?></span>
</div>