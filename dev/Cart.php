<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

function getContents(){
  if(!empty($_SESSION['cart'])){
    $total=0;
    $quant=0;
    foreach($_SESSION['cart'] as $cart){
      echo '<tr>
                  <td>
                    <div class="media">
                      <div class="media-left media-middle">
                        <a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html#">
                          <img class="media-object shopping-cart__img" src="'.get($cart[0],"image").'" alt="..." height="40">
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
                        <input type="number" id="quantity'.$cart[0].'"  min="1" value="'.$cart[1].'" class="form-control quantity shopping-cart__qty">
                      </div>
                    
                  </td>
                  <td>€'.get($cart[0],"price").'</td>
                  <td>€'.floatval(get($cart[0],"price"))*$cart[1].'</td>
                  <td><button id="update" name="'.$cart[0].'" class="btn btn-default update">Update</button></td>
                  <td><input type="submit" name="'.$cart[0].'" id="remove" value="Remove" class="btn btn-danger remove"/></td>
                  </form>
                </tr>';//end of echo
                $total += floatval(get($cart[0],"price"))*$cart[1];
                $quant += intval($cart[1]);
    }
    echo ' </tbody>
            </table>
          </div> <!-- / .table-responsive -->
          <!-- Subtotal -->
          <p class="text-right ">
            <strong>Subtotal:</strong> €'.$total;
            if(isset($_SESSION['logged_in'])){ echo ' <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Checkout</a>';
          }else{
            echo ' <a href="../../Login" class="btn btn-primary" >Login</a>';
          }
          echo '</p>';
            echo '<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Checkout Address</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
                      <label>Enter Name</label>
                      <input class="form-control" id="name" placeholder="Name" value="'.Encryption::decrypt($_SESSION["name"]).'" type="text">
              </div>
         <div class="form-group">
                      <label>Enter address</label>
                      <input class="form-control" id="address" placeholder="Address" value="'.Encryption::decrypt($_SESSION["address"]).'" type="text">
              </div>
              <div class="form-group">
                      <label>Enter city</label>
                      <input class="form-control" id="city" placeholder="City" value="'.Encryption::decrypt($_SESSION["city"]).'" type="text">
              </div>
              <div class="form-group">
                      <label>Enter country</label>
                      <input class="form-control" id="country" placeholder="Country" value="'.Encryption::decrypt($_SESSION["country"]).'" type="text">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" name="'.$quant.'" id="'.$total.'" class="btn btn-success submitCart">Checkout</button>
      </div>
    </div>

  </div>
</div>';
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