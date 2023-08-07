 <!-- Special Price -->
 <section id="special-price">
     <div class="container">
         <h4 class="font-rubik font-size-20">عرض خاص</h4>
         <div id="filters" class="button-group text-left font-baloo font-size-16">
             <button class="btn is-checked" data-filter="*">كل الأنواع</button>
             <button class="btn" data-filter=".Apple">آبل</button>
             <button class="btn" data-filter=".Samsung">سامسونج</button>
             <button class="btn" data-filter=".Redmi">ردمي</button>
         </div>
         <div class="grid">
             <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if(isset($_POST['special_price_submit']))
                    //add to cat table 
                    $Cart->addToCart(itemid: $_POST['item_id'], userid: $_POST['user_id']);
                }
                $in_cart=$Cart->getCartId($Product->getData('cart')) ?? [];
                shuffle(array: $product_shufle);
                array_map(function ($item) use($in_cart) {  ?>
                 <div class="grid-item <?php echo $item['item_brand'] ?? 'unkown' ?> border">
                     <div class="item py-2" style="width: 200px;">
                         <div class="product font-rale">
                             <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? 'unkown' ?>" alt="product1" class="img-fluid"></a>
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
                            if (in_array($item['item_id'], $in_cart)){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">مضاف لسلتك</button>';
                            }else{
                                echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">أضف لسلتك</button>';
                            }
                            ?>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php }, $product_shufle)   ?>
         </div>
     </div>
 </section>
 <!-- !Special Price -->