<div class="breadcrumbs bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>» </span></li>
                    <li class=""> <a title="Go to Home Page" href="#">Product</a><span>» </span></li>
                    <li class="category13"><strong>Sed volutpat ac massa eget lacinia</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
// echo '<pre>';
// print_r($selectSetSize);
// echo '</pre>';
?>
<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <form action="#" method="post" id="product_addtocart_form">
                            <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                            <div class="product-img-box col-sm-5 col-xs-12 bounceInRight animated">
                                <div class="new-label new-top-left"> New </div>
                                <div class="product-image">
                                    <div class="large-image"> <a href="assets/images/products/<?= $selectProductId['image_sets'] ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:10"> <img alt="Thumbnail" src="assets/images/products/<?= $selectProductId['image_sets'] ?>"> </a> </div>
                                    <div class="flexslider flexslider-thumb">
                                        <ul class="previews-list slides">
                                            <?php
                                            foreach ($selectSetImg as $value) {
                                                ?>
                                                <li><a href='assets/images/detail_image_products/<?= $value['sub_images'] ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'assets/images/detail_image_products/<?= $value['sub_images'] ?>' "><img src="assets/images/detail_image_products/<?= $value['sub_images'] ?>" alt="" style="height: 91.84px;" /></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end: more-images -->
                            </div>
                            <div class="product-shop col-sm-7 col-xs-12 bounceInUp animated">
                                <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                                <div class="product-name">
                                    <h1><?= $selectProductId['product_name_sets'] ?></h1>
                                </div>
                                <div class="short-description">
                                    <!--<h2>Quick Overview</h2>-->
                                    <!-- description -->
                                    <p></p>
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:90%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Đánh giá(s)</a> <span class="separator">|</span> <a href="#">Thêm đánh giá của bạn</a> </p>
                                </div>
                                <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                <div class="price-block">
                                    <div class="price-box">

                                        <?php
                                        if ($selectProductId['sale'] != 0) {
                                            ?>
                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?= number_format($selectProductId['price'], 0, ',', '.'); ?> đ </span> </p>
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> <?= number_format($selectProductId['price'], 0, ',', '.'); ?> đ </span> </p>
                                            <?php
                                        } else {
                                            ?>
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> <?= number_format($selectProductId['price'], 0, ',', '.'); ?> đ </span> </p>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <?php
                                        // for($i = 0; $i < count($selectSetSize); $i++){
                                        //     echo $selectSetSize[$i]['name_size'];
                                        // if ($selectSetSize[$i]['name_size'] != 'default') {

                                            ?>
                                            <input type="text" id="sizeDefault" style="display:none;" value="0">
                                            <div style="margin-bottom:20px; padding:10px 10px 10px 0px;" class="checkSize">
                                                <label for="">Size:</label>
                                                <div class="">
                                                    <div class="">
                                                        <div class="">
                                                                <button class="sizeProduct" style="width: 50px; height: 30px;outline: none; background:white; border : 1px #ddd solid;text-align: center;"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="noti-checksize" style="padding: 10px; color:red;"></div>
                                            </div>
                                            <input type="text" id="sizeDefault" style="display:none;" value="1">
                                        <label for="qty">Số lượng:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items-count checkVal" type="button"><i class="icon-minus">&nbsp;</i></button>

                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="5" id="qty" name="qty">

                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count checkVal increase" type="button"><i class="icon-plus">&nbsp;</i></button>

                                                <input id="totalProduct" style="display:none;" value="<?php if (!isset($totalProduct)) {
                                                    echo $getQuantitySizeProduct[0]['quantity'];
                                                    } else {
                                                        echo $totalProduct;
                                                    } ?>">
                                                    <span class="quantityProduct"><?php if (!isset($totalProduct)) {
                                                        echo $getQuantitySizeProduct[0]['quantity'];
                                                    } else {
                                                        echo $totalProduct;
                                                    } ?> Sản phẩm có sẵn</span>
                                                </div>
                                                <p> <button style="margin-top:20px;" product_id="<?= $selectProductId['id'] ?>" class="button btn-cart addProductToCart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Thêm vào giỏ hàng</span></button>
                                                    <button style="margin-top:20px; background : #ee4d2d; " class="button btn-cart addProductToCartNow" title="Add to Cart" type="button"><span> Mua ngay</span></button>
                                                </p>
                                            </div>
                                            <div class="email-addto-box">
                                                <ul class="add-to-links">
                                                    <li> <a class="link-wishlist" href="wishlist.html"><span>Thêm vào yêu thích</span></a></li>
                                                    <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>So sánh</span></a></li>
                                                </ul>
                                                <p class="email-friend"><a href="#" class=""><span>Gửi email cho bạn bè</span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product-collateral col-sm-12 col-xs-12 bounceInUp animated">
                                <div class="add_info">
                                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                                        <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                                        <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                                        <li> <a href="#product_tabs_custom" id="load_comment" product_id="<?php if (isset($_GET['id']) && !empty($_GET['id'])) {echo $_GET['id'];} ?>" data-toggle="tab">Bình luận</a> </li>
                                        <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
                                    </ul>
                                    <div id="productTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="product_tabs_description">
                                            <div class="std">
                                                <?= $selectProductId['description'] ?>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="product_tabs_tags">
                                            <div class="box-collateral box-tags">
                                                <div class="tags">
                                                    <form id="addTagForm" action="#" method="get">
                                                        <div class="form-add-tags">
                                                            <label for="productTagName">Add Tags:</label>
                                                            <div class="input-box">
                                                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                                                <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                            </div>
                                                            <!--input-box-->
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--tags-->
                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="reviews_tabs">
                                            <div class="box-collateral box-reviews" id="customer-reviews">
                                                <div class="box-reviews1">
                                                    <div class="form-add">
                                                        <form id="review-form" method="post" action="http://www.magikcommerce.com/review/product/post/id/176/">
                                                            <h3>Write Your Own Review</h3>
                                                            <fieldset>
                                                                <h4>How do you rate this product? <em class="required">*</em></h4>
                                                                <span id="input-message-box"></span>
                                                                <table id="product-review-table" class="data-table">

                                                                    <thead>
                                                                        <tr class="first last">
                                                                            <th>&nbsp;</th>
                                                                            <th><span class="nobr">1 *</span></th>
                                                                            <th><span class="nobr">2 *</span></th>
                                                                            <th><span class="nobr">3 *</span></th>
                                                                            <th><span class="nobr">4 *</span></th>
                                                                            <th><span class="nobr">5 *</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="first odd">
                                                                            <th>Price</th>
                                                                            <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                                        </tr>
                                                                        <tr class="even">
                                                                            <th>Value</th>
                                                                            <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                                        </tr>
                                                                        <tr class="last odd">
                                                                            <th>Quality</th>
                                                                            <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                                <div class="review1">
                                                                    <ul class="form-list">
                                                                        <li>
                                                                            <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <input type="text" class="input-text" id="nickname_field" name="nickname">
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <label class="required" for="summary_field">Summary<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <input type="text" class="input-text" id="summary_field" name="title">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="review2">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="buttons-set">
                                                                        <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="box-reviews2">
                                                    <h3>Customer Reviews</h3>
                                                    <div class="box visible">
                                                        <ul>
                                                            <li>
                                                                <table class="ratings-table">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Value</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Quality</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="review">
                                                                    <h6><a href="#">Excellent</a></h6>
                                                                    <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                                                                    <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                                                                </div>
                                                            </li>
                                                            <li class="even">
                                                                <table class="ratings-table">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Value</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Quality</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:80%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="review">
                                                                    <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                                                                    <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                                                    <div class="review-txt"> Minimalism is the online ! </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <table class="ratings-table">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Value</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Quality</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <td>
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:80%;"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="review">
                                                                    <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                                                    <small>Review by <span>Anthony Lewis</span>on 1/3/2014 </small>
                                                                    <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_custom">
                                            <div class="comment-content bounceInUp animated">

                                                <div class="comments-wrapper">
                                                    <h3> Comments </h3>
                                                    <ul class="commentlist" id="comment_table">

                                                    </ul>
                                                    <!--commentlist-->
                                                </div>
                                                <div id="load_toolbar">
                                                    <div class="toolbar">
                                                        <div class="pager">
                                                            <div class="pages">
                                                                <ul id="load_page">
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--comments-wrapper-->

                                                <div class="comments-form-wrapper clearfix" id="loadCommentText">
                                                    <h3>Leave A reply</h3>
                                                    <form class="comment-form" method="post" id="postComment" enctype="multipart/form-data">
                                                        <div class="field input-group" style="margin: 30px 0;">
                                                            <label>Thêm ảnh</label>
                                                            <input type="file" class="input-text" id="multiple_files" name="multiple_files" multiple accept="image/*">
                                                            <span id="error_image"></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="field aw-blog-comment-area">
                                                            <label for="comment">Comment<em class="required">*</em></label>
                                                            <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
                                                        </div>
                                                        <div style="width:96%" class="button-set">
                                                            <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                                                                <input type="hidden" value="<?php echo $_GET['id']; ?>" id="product_id">
                                                                <input type="hidden" value="<?php if (isset($_SESSION['idMember']) && !empty($_SESSION['idMember'])) {
                                                                    echo $_SESSION['idMember'];
                                                                } ?>" id="member_id">
                                                                <button type="button" id="submit_files" class="bnt-comment" name="submitComment">Add Comment</button>
                                                            <?php }
                                                            if (isset($_GET['set_id']) && !empty($_GET['set_id'])) { ?>
                                                                <button type="button" class="bnt-comment submitCommentSets" name="">Add Comment</button>
                                                            <?php } ?>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--comments-form-wrapper clearfix-->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_custom1">
                                            <div class="product-tabs-content-inner clearfix">
                                                <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing. 6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem

                                                    Lorem Ipsumis
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                    has been the industry's standard dummy text ever since the 1500s, when
                                                    an unknown printer took a galley of type and scrambled it to make a type
                                                    specimen book. It has survived not only five centuries, but also the
                                                    leap into electronic typesetting, remaining essentially unchanged. It
                                                    was popularised in the 1960s with the release of Letraset sheets
                                                    containing Lorem Ipsum passages, and more recently with desktop
                                                    publishing software like Aldus PageMaker including versions of Lorem
                                                Ipsum.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-slider col-lg-12 col-xs-12 bounceInDown animated">
                                <div class="slider-items-products">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Related Products</h2>
                                        </div>

                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4 products-grid">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product10.jpg"> </a>
                                                                <div class="sale-label sale-top-left">sale</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:80%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product11.jpg"></a>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:30%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-2" class="price"> $567.00 </span> </p>
                                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-2" class="price"> $456.00 </span> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product12.jpg"></a>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:100%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-27" class="price"> $100.00 </span> </p>
                                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-27" class="price"> $90.00 </span> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product13.jpg"> </a>
                                                                <div class="new-label new-top-left">new</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:80%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product14.jpg"></a>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:30%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product15.jpg"></a>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                                            <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:100%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

        <!-- Upsell Product Slider -->
        <section class="upsell-pro bounceInUp animated">
            <div class="container">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2>Upsell Products</h2>
                    </div>
                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product10.jpg"> </a>
                                            <div class="sale-label sale-top-left">sale</div>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product11.jpg"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:30%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product12.jpg"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:100%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product13.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:80%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product14.jpg"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:30%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="assets/products-images/product15.jpg"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                                        <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.html">Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:100%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="top-banner-section wow bounceInUp animated">
            <div class="container">
                <?php
                include_once "views/layout/top_banner_section.php";
                ?>
            </div>
        </div>
        <!-- end banner section -->
        <div class="brand-logo">
            <?php
            include_once "views/layout/brand_logo.php";
            ?>
        </div>