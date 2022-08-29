<?php $priceTotal = 0; ?> 
@foreach(Cart::content() as $p)
<?php 
    $price = $p->price * $p->qty;
    $priceTotal = $priceTotal + $price;
?>
@endforeach
    $  {{$priceTotal}}.00