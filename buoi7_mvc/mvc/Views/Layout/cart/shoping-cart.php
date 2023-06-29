<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($_SESSION['cart'] as $row) {
                                ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img width="50px" src="<?php echo 'mvc/Views/Hide/images/' . $row['img']; ?>" alt="">
                                        <h5><?php echo $row['tensp']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $row['gia']; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <a href="<?php echo URL.'/card/update1/'.$row['id']; ?>"
                                                class="qtyUpdate"
                                                data-id="<?php echo $row['id']; ?>" >
                                                <span class="dec qtybtn">-</span>
                                            </a>
                                                <p class="<?php  echo 'num'.$row['id'];?>">
                                                    <span class="<?php echo 'subNum'.$row['id']; ?>">
                                                        <?php  echo $row['num'];?>
                                                    </span>
                                                </p>

                                            <a href="<?php URL.'/cart/update2/'.$row['id']; ?>"
                                            class="qtyUpdate"
                                            date-id = "<?php echo $row['id']; ?>"
                                            >
                                            <span class="inc qtybtn">+</span>
                                            </a>
                                            <!-- <div class="pro-qty">
                                                <a href="<?php echo URL."/cart/giam/".$row['id']?>"><span>-</span></a>
                                                <input type="text" value="<?php echo $row['num']?>">
                                                <a href="<?php echo URL."/cart/tang/".$row['id']?>"><span>+</span></a>
                                            </div> -->
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total" id="<?php echo 'total'.$row['id'];?>">
                                        <p class="<?php echo 'subTotal'.$row['id']; ?>">
                                            <?php echo number_format($row['num']*$row['gia'],2);?>$
                                        </p>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="<?php echo URL."/cart/delete/".$row['id']?>"
                                            data-id="<?php echo $row['id']; ?>" class="deleteCartById"
                                        ><span class="icon_close"></span></a>
                                        
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total 
                            <?php
                            $tong=0;
                            foreach ($data as $value){
                                $tong+=$value['num']*$value['gia'];
                            }
                            echo number_format($tong,2);
                            ?>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->