<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

function getSubTotal(){
	
}

function getContents(){
	if(!empty($_SESSION['cart'])){
    $total=0;
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
                        <a href="../Product/?title='.str_replace(" ", "-", get($cart[0],"title")).'&id='.$cart[0].'">'.get($cart[0],"title").'</a>
                        <input style="visibility:hidden;" id="id" value="'.$cart[0].'"/>
                      </div>
                    </div>
                  </td>
                  <td>Free</td>
                  <td>
                    <form class="form-inline" method="post">
                      <div class="form-group">
                        <label for="quantity" class="sr-only">Quantity</label>
                        <input type="number" id="quantity" value="'.$cart[1].'" class="form-control shopping-cart__qty">
                      </div>
                    
                  </td>
                  <td>€'.get($cart[0],"price").'</td>
                  <td>€'.floatval(get($cart[0],"price"))*$cart[1].'</td>
                  <td><button id="update" class="btn btn-default">Update</button></td>
                  <td><input type="submit" id="remove" value="Remove" class="btn btn-danger"/></td>
                  </form>
                </tr>';//end of echo
                $total += floatval(get($cart[0],"price"))*$cart[1];
		}
    echo ' </tbody>
            </table>
          </div> <!-- / .table-responsive -->

          <!-- Subtotal -->
          <p class="text-right">
            <strong>Subtotal:</strong> €'.$total.' <a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html#" class="btn btn-primary">Checkout</a>
          </p>';
	}
  else{
    echo '<tr>
                  <td>
                  </tbody>
                  Cart is empty
            </table>
          </div> <!-- / .table-responsive -->';

  }
}//end of getContents()

function get($id,$field){

   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT $field FROM `celtic_chocolates`.`products` WHERE `p_id` = $id";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              return $row[$field];


          }
        }
      }

}

?>