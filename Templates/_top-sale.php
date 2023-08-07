  <!-- Top Sale -->
  <section id="top-sale">
      <div class="container py-5">
          <h4 class="font-rubik font-size-20">الأعلى طلبا</h4>
          <hr>
          <!-- owl carousel -->
          <div class="owl-carousel owl-theme">
              <?Php
                shuffle(array:$product_shufle);

                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(isset($_POST['top_sale_submit']))

                    //add to cat table 
                    $Cart->addToCart(itemid:$_POST['item_id'],userid:$_POST['user_id']);
                }
                foreach ($product_shufle as $item) :
                ?>
                  <div class="item py-2">
                      <div class="product font-rale">
                          <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? './assets/1.png' ?>" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                              <h6><?php echo $item['item_name'] ?? 'unkown' ?></h6>
                              <div class="rating text-warning font-size-12">
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                              </div>
                              <div class="price py-2">
                                  <span><?php echo $item['item_price'] ?? 'unkown' ?></span> ر.ي
                              </div>
                              <form action="" method="POST">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 'null' ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1 ?>">
                                <?php
                            if (in_array($item['item_id'], $Cart->getCartId($Product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">مضاف لسلتك</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">أضف لسلتك</button>';
                            }
                            ?>
                              </form>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
      <!-- !owl carousel -->
      </div>
  </section>
  <!-- !Top Sale -->