<?php

function calculate_discount($order_total) {
  $discount_percentage = 0;
  if ($order_total >= 10000) {
    $discount_percentage = 10;
  } else if ($order_total >= 5000) {
    $discount_percentage = 5;
  }
  $discount = $order_total * ($discount_percentage / 100);
  $final_price = $order_total - $discount;

  
  return $final_price ;
}

$order_total = 500000;

$final_price = calculate_discount($order_total);

echo "Total Order - $order_total";
echo"<br>";

echo "The final price with discount - $final_price.";

?>
