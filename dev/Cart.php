<?php

function getSubTotal(){
	
}

function getContents(){
	if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $cart){

			echo '<tr>
                  <td>
                    <div class="media">
                      <div class="media-left media-middle">
                        <a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html#">
                          <img class="media-object shopping-cart__img" src="./cart_files/product_1.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html#">'.$cart[0].'</a>
                      </div>
                    </div>
                  </td>
                  <td>Free</td>
                  <td>
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="product__quantity_1" class="sr-only">Quantity</label>
                        <input type="number" id="product__quantity_1" value="'.$cart[1].'" class="form-control shopping-cart__qty">
                      </div>
                    </form>
                  </td>
                  <td>$25.00</td>
                  <td>$25.00</td>
                  <td><button class="btn btn-default">Update</button></td>
                  <td><button class="btn btn-danger">Remove</button></td>
                </tr>';//end of echo
		}
	}
}

?>