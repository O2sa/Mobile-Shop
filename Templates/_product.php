<?php $item_id = $_GET['item_id'] ?? 1;
foreach ($Product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
?>
        <!--   product  -->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "unkown" ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">شراء</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">أضف لسلتك</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "unkown" ?></h5>
                        <small><?php echo $item['item_brand'] ?? "unkown" ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 التقييم | 1000+ الأسلة المجابة</a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>السعر مع الخصم:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? "unkown" ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;شامل للضرائب</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>التوفير:</td>
                                <td><span class="font-size-16 text-danger">$152.00</span></td>
                            </tr>
                        </table>
                        <!---    !product price       -->

                        <!--    #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 أيام <br> لموعد الوصول</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">أحمد قاسم <br>التوصيل</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 سنة <br>ضمان</a>
                                </div>
                            </div>
                        </div>
                        <!--    !policy -->
                        <hr>

                        <!-- order-details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>يُوصل خلال : مارس 29 - أبريل 1</small>
                            <small>البائع <a href="#">Daily Electronics </a>(4.5 من 5 | 18,198 تقييم)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;يُصل للعميل - 424201</small>
                        </div>
                        <!-- !order-details -->

                        <div class="row">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">أللون:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- !color -->
                            </div>
                            <div class="col-6">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">العدد</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !product qty section -->
                            </div>
                        </div>

                        <!-- size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">حجم الذاكرة العشوائية :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size -->


                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">وصف المنتج</h6>
                        <hr>
                        <p class="font-rale font-size-14"> معظمنا لا يسعنا إلا أن نعيش كما لو أن لدينا حياتان
                            لنعيشهما ، أحدهما نموذج بالحجم الطبيعي ، والآخر هو الإصدار النهائي ، وبعد ذلك توجد كل هذه الإصدارات
                            بينهما.</p>
                        <p class="font-rale font-size-14"> معظمنا لا يسعنا إلا أن نعيش كما لو أن لدينا حياتان
                            لنعيشهما ، أحدهما نموذج بالحجم الطبيعي ، والآخر هو الإصدار النهائي ، وبعد ذلك توجد كل هذه الإصدارات
                            بينهما.</p>
                    </div>
                </div>
            </div>
        </section>
<?php endif;
endforeach; ?>

<!--   !product  -->