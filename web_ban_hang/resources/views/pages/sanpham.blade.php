@extends('layouts.index')

@section('content')
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="woocommerce-shop-header woocommerce-shop-header--columned">

      <div class="woocommerce-shop-header--title">

        <h1 class="page-title">
          Cửa hàng
          <small>
            <p class="woocommerce-result-count">
              Hiển thị 1&ndash;16 of 45 kết quả</p>
          </small>
        </h1>

      </div>


      <div class="woocommerce-shop-header--sorting">
        <form class="woocommerce-ordering" method="get">

          <div class="form-group sort pull-right-md">

            <div class="dropdown">

              <button class="btn btn-block btn-bordered dropdown-toggle" type="button" data-toggle="dropdown">
                Sắp xếp mặc định <span class="caret"></span>
              </button>

              <ul class="dropdown-menu" role="menu">
                <li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#menu_order">Mặc định
                  sắp xếp</a>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#popularity">Sắp xếp theo mức độ phổ biến</a>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#rating">Sắp xếp theo xếp hạng trung bình</a>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#date">Sắp xếp theo mới nhất</a>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#price">Sắp xếp theo giá: thấp đến cao</a>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#price-desc">Sắp xếp theo giá: cao đến
                  thấp</a>
              </ul>
            </div>

          </div>

          <select name="orderby" class="orderby" aria-label="Shop order">
            <option value="menu_order" selected='selected'>Sắp xếp mặc định</option>
            <option value="popularity">Sắp xếp theo mức độ phổ biến</option>
            <option value="rating">Sắp xếp theo xếp hạng trung bình</option>
            <option value="date">Sắp xếp theo mới nhất</option>
            <option value="price">Sắp xếp theo giá: thấp đến cao</option>
            <option value="price-desc">Sắp xếp theo giá: cao đến
              thấp</option>
          </select>
          <input type="hidden" name="paged" value="1" />
        </form>
      </div>

    </div>
    <div class="products-archive">

      <div class="products-archive--products">
        <div class="woocommerce-notices-wrapper"></div>
        <ul class="products columns-4">
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-303 status-publish instock product_cat-accessories has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="{{route('pages.ctsp')}}"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async"
                  
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/anh1.jpg.webp')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150px"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl2.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl2-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-303  wishlist-fragment on-first-load"
                data-fragment-ref="303"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;303&quot;,&quot;parent_product_id&quot;:303,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="indexb4e2.html?add_to_wishlist=303&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="303" data-product-type="simple"
                    data-original-product-id="303" data-title="Add to Wishlist" rel="nofollow">
                    <span>Thêm vào danh sách mong muốn</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/paul-smith/index.html" target="_self">Paul Smith</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/index.html" rel="tag">Accessories</a> </span>

              <a href="index1f03.html?add-to-cart=303"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_303" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="303" data-product_sku="" aria-label="Add to cart: &ldquo;Paul Smith&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Paul Smith&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_303" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>45.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-301 status-publish last instock product_cat-accessories has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/pocket-watch/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl2.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src=" {{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl2-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl6.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image2xxl6-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-301  wishlist-fragment on-first-load"
                data-fragment-ref="301"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;301&quot;,&quot;parent_product_id&quot;:301,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="indexea32.html?add_to_wishlist=301&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="301" data-product-type="simple"
                    data-original-product-id="301" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/pocket-watch/index.html" target="_self">Pocket Watch</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/index.html" rel="tag">Accessories</a> </span>

              <a href="index8573.html?add-to-cart=301"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_301" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="301" data-product_sku="" aria-label="Add to cart: &ldquo;Pocket Watch&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Pocket Watch&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_301" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>16.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-283 status-publish instock product_cat-men product_tag-bag product_tag-bags has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/cheap-monday/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-111-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl22.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl22-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-283  wishlist-fragment on-first-load"
                data-fragment-ref="283"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;283&quot;,&quot;parent_product_id&quot;:283,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index6f67.html?add_to_wishlist=283&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="283" data-product-type="simple"
                    data-original-product-id="283" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <span class="onsale">Sale!</span>
            <div class="item-info">

              <h3>
                <a href="../product/cheap-monday/index.html" target="_self">Cheap Monday</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/men/index.html" rel="tag">Men</a> </span>

              <a href="index646c.html?add-to-cart=283"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_283" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="283" data-product_sku="124" aria-label="Add to cart: &ldquo;Cheap Monday&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Cheap Monday&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_283" class="screen-reader-text">
              </span>

              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span></del> <span
                  class="screen-reader-text">Original price was: &pound;35.00.</span><ins aria-hidden="true"><span
                    class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></ins><span
                  class="screen-reader-text">Current price is: &pound;20.00.</span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-76 status-publish last instock product_cat-accessories has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/rayban-classics/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-112.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-112-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl23.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl23-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-76  wishlist-fragment on-first-load"
                data-fragment-ref="76"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;76&quot;,&quot;parent_product_id&quot;:76,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index0d74.html?add_to_wishlist=76&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="76" data-product-type="simple"
                    data-original-product-id="76" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/rayban-classics/index.html" target="_self">Rayban Classics</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/index.html" rel="tag">Accessories</a> </span>

              <a href="index499f.html?add-to-cart=76"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_76" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="76" data-product_sku="" aria-label="Add to cart: &ldquo;Rayban Classics&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Rayban Classics&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_76" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>15.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-70 status-publish outofstock product_cat-women has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/sweetheart/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl21.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl21-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl41.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl41-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-70  wishlist-fragment on-first-load"
                data-fragment-ref="70"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;70&quot;,&quot;parent_product_id&quot;:70,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="indexfe06.html?add_to_wishlist=70&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="70" data-product-type="simple"
                    data-original-product-id="70" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="onsale oos">Out of stock</div>

            <div class="item-info">

              <h3>
                <a href="../product/sweetheart/index.html" target="_self">Sweetheart</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/women/index.html" rel="tag">Women</a> </span>

              <a href="../product/sweetheart/index.html"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_70" data-quantity="1"
                class="button product_type_simple  product-type-simple" data-product_id="70" data-product_sku=""
                aria-label="Read more about &ldquo;Sweetheart&rdquo;" rel="nofollow" data-success_message=""
                data-toggle="tooltip" data-placement="left" data-title="Read more"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_70" class="screen-reader-text">
              </span>

              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>15.00</bdi></span></del> <span
                  class="screen-reader-text">Original price was: &pound;15.00.</span><ins aria-hidden="true"><span
                    class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>12.00</bdi></span></ins><span
                  class="screen-reader-text">Current price is: &pound;12.00.</span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-293 status-publish last instock product_cat-bags has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/cheap-monday-bag/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/cheapmondaybag.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/cheapmondaybag-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl12.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl12-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-293  wishlist-fragment on-first-load"
                data-fragment-ref="293"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;293&quot;,&quot;parent_product_id&quot;:293,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="indexcb5f.html?add_to_wishlist=293&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="293" data-product-type="simple"
                    data-original-product-id="293" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/cheap-monday-bag/index.html" target="_self">Cheap Monday Bag</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/bags/index.html" rel="tag">Bags</a> </span>

              <a href="indexb25b.html?add-to-cart=293"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_293" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="293" data-product_sku="" aria-label="Add to cart: &ldquo;Cheap Monday Bag&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Cheap Monday Bag&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_293" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-40 status-publish instock product_cat-men has-post-thumbnail taxable shipping-taxable purchasable product-type-variable">
            <div class="item-image">
              <a href="../product/abadon-ship/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl9.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl9-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl22.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image2xxl22-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-40  wishlist-fragment on-first-load"
                data-fragment-ref="40"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;40&quot;,&quot;parent_product_id&quot;:40,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index3285.html?add_to_wishlist=40&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="40" data-product-type="variable"
                    data-original-product-id="40" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/abadon-ship/index.html" target="_self">Abandon Ship</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/men/index.html" rel="tag">Men</a> </span>

              <a href="../product/abadon-ship/index.html"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_40" data-quantity="1"
                class="button product_type_variable add_to_cart_button  product-type-variable" data-product_id="40"
                data-product_sku="" aria-label="Select options for &ldquo;Abandon Ship&rdquo;" rel="nofollow"
                data-toggle="tooltip" data-placement="left" data-title="Select options"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_40" class="screen-reader-text">
                This product has multiple variants. The options may be chosen on the product page </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>16.00</bdi></span> &ndash; <span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>49.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-53 status-publish last onbackorder product_cat-accessories has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            <div class="item-image">
              <a href="../product/bobble-beanie/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-1.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-1-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image3xxl.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image3xxl-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-53  wishlist-fragment on-first-load"
                data-fragment-ref="53"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;53&quot;,&quot;parent_product_id&quot;:53,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index3d85.html?add_to_wishlist=53&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="53" data-product-type="variable"
                    data-original-product-id="53" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/bobble-beanie/index.html" target="_self">Bobble Beanie</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/index.html" rel="tag">Accessories</a> </span>

              <a href="../product/bobble-beanie/index.html"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_53" data-quantity="1"
                class="button product_type_variable add_to_cart_button  product-type-variable" data-product_id="53"
                data-product_sku="215" aria-label="Select options for &ldquo;Bobble Beanie&rdquo;" rel="nofollow"
                data-toggle="tooltip" data-placement="left" data-title="Select options"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_53" class="screen-reader-text">
                This product has multiple variants. The options may be chosen on the product page </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>18.00</bdi></span> &ndash; <span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>22.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-297 status-publish instock product_cat-bags has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/asap-bag/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl3-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl7.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl7-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-297  wishlist-fragment on-first-load"
                data-fragment-ref="297"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;297&quot;,&quot;parent_product_id&quot;:297,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index0e4c.html?add_to_wishlist=297&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="297" data-product-type="simple"
                    data-original-product-id="297" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <span class="onsale">Sale!</span>
            <div class="item-info">

              <h3>
                <a href="../product/asap-bag/index.html" target="_self">Asap Bag</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/bags/index.html" rel="tag">Bags</a> </span>

              <a href="index3d95.html?add-to-cart=297"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_297" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="297" data-product_sku="123" aria-label="Add to cart: &ldquo;Asap Bag&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Asap Bag&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_297" class="screen-reader-text">
              </span>

              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>34.00</bdi></span></del> <span
                  class="screen-reader-text">Original price was: &pound;34.00.</span><ins aria-hidden="true"><span
                    class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&pound;</span>29.00</bdi></span></ins><span
                  class="screen-reader-text">Current price is: &pound;29.00.</span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-292 status-publish last instock product_cat-bags has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/vintage/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl8.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl8-330x421.jpg')}}" /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl18.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl18-330x421.jpg')}}" /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-292  wishlist-fragment on-first-load"
                data-fragment-ref="292"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;292&quot;,&quot;parent_product_id&quot;:292,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index9bba.html?add_to_wishlist=292&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="292" data-product-type="simple"
                    data-original-product-id="292" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/vintage/index.html" target="_self">Vintage</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/bags/index.html" rel="tag">Bags</a> </span>

              <a href="indexaa03.html?add-to-cart=292"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_292" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="292" data-product_sku="" aria-label="Add to cart: &ldquo;Vintage&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Vintage&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_292" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-73 status-publish instock product_cat-women has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/monki/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl20.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl20-330x421.jpg')}}" /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl39.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl39-330x421.jpg')}}" /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-73  wishlist-fragment on-first-load"
                data-fragment-ref="73"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;73&quot;,&quot;parent_product_id&quot;:73,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index3c82.html?add_to_wishlist=73&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="73" data-product-type="simple"
                    data-original-product-id="73" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/monki/index.html" target="_self">Monki</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/women/index.html" rel="tag">Women</a> </span>

              <a href="index18c1.html?add-to-cart=73"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_73" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="73" data-product_sku="" aria-label="Add to cart: &ldquo;Monki&rdquo;" rel="nofollow"
                data-success_message="&ldquo;Monki&rdquo; has been added to your cart" data-toggle="tooltip"
                data-placement="left" data-title="Add to cart" data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_73" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>15.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-56 status-publish last instock product_cat-shoes has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/onetwos-shoes-2/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl16-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl33.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl33-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-56  wishlist-fragment on-first-load"
                data-fragment-ref="56"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;56&quot;,&quot;parent_product_id&quot;:56,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index76fc.html?add_to_wishlist=56&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="56" data-product-type="simple"
                    data-original-product-id="56" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/onetwos-shoes-2/index.html" target="_self">Jenga</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/shoes/index.html" rel="tag">Shoes</a> </span>

              <a href="index6fc7.html?add-to-cart=56"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_56" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="56" data-product_sku="" aria-label="Add to cart: &ldquo;Jenga&rdquo;" rel="nofollow"
                data-success_message="&ldquo;Jenga&rdquo; has been added to your cart" data-toggle="tooltip"
                data-placement="left" data-title="Add to cart" data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_56" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-284 status-publish instock product_cat-men has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/billionaire-boys/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-110-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl20.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl20-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-284  wishlist-fragment on-first-load"
                data-fragment-ref="284"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;284&quot;,&quot;parent_product_id&quot;:284,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index41c0.html?add_to_wishlist=284&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="284" data-product-type="simple"
                    data-original-product-id="284" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="onsale featured">Nổi bật</div>

            <div class="item-info">

              <h3>
                <a href="../product/billionaire-boys/index.html" target="_self">Billionaire Boys</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/men/index.html" rel="tag">Men</a> </span>

              <a href="indexe95f.html?add-to-cart=284"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_284" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="284" data-product_sku="" aria-label="Add to cart: &ldquo;Billionaire Boys&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Billionaire Boys&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_284" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-294 status-publish last instock product_cat-bags has-post-thumbnail taxable shipping-taxable product-type-external">
            <div class="item-image">
              <a href="../product/cayler/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-16.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-16-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl11.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl11-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-294  wishlist-fragment on-first-load"
                data-fragment-ref="294"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;294&quot;,&quot;parent_product_id&quot;:294,&quot;product_type&quot;:&quot;external&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index6af3.html?add_to_wishlist=294&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="294" data-product-type="external"
                    data-original-product-id="294" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/cayler/index.html" target="_self">Cayler</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/bags/index.html" rel="tag">Bags</a> </span>

              <a href="https://demo.kaliumtheme.com/fashion/shop/"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_294" data-quantity="1"
                class="button product_type_external  product-type-external" data-product_id="294"
                data-product_sku="214" aria-label="Buy this bag" rel="nofollow" data-toggle="tooltip"
                data-placement="left" data-title="Buy this bag" data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_294" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>29.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-304 status-publish instock product_cat-accessories has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
            <div class="item-image">
              <a href="../product/leather-gloves/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-12.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-12-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image2xxl3.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image2xxl3-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-304  wishlist-fragment on-first-load"
                data-fragment-ref="304"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;304&quot;,&quot;parent_product_id&quot;:304,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="indexfa65.html?add_to_wishlist=304&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="304" data-product-type="simple"
                    data-original-product-id="304" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <div class="item-info">

              <h3>
                <a href="../product/leather-gloves/index.html" target="_self">Leather Gloves</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/accessories/index.html" rel="tag">Accessories</a> </span>

              <a href="indexfb7a.html?add-to-cart=304"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_304" data-quantity="1"
                class="button product_type_simple add_to_cart_button ajax_add_to_cart  product-type-simple"
                data-product_id="304" data-product_sku="" aria-label="Add to cart: &ldquo;Leather Gloves&rdquo;"
                rel="nofollow" data-success_message="&ldquo;Leather Gloves&rdquo; has been added to your cart"
                data-toggle="tooltip" data-placement="left" data-title="Add to cart"
                data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_304" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span>
            </div>
          </li>
          <li
            class="shop-item hover-effect-1 columns-xs-2 product type-product post-87 status-publish last instock product_cat-men has-post-thumbnail sale taxable shipping-taxable product-type-grouped">
            <div class="item-image">
              <a href="../product/selected/index.html"
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><span class="image-placeholder"
                  style="padding-bottom:127.333333%"><img width="150" height="191"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/sle.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/sle-330x421.jpg')}} " /></span><span
                  class="image-placeholder shop-image" style="padding-bottom:127.333333%"><img width="150"
                    height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt=""
                    decoding="async" loading="lazy"
                    srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image4xxl31.jpg 870w"
                    sizes="(max-width: 150px) 100vw, 150px"
                    data-src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image4xxl31-330x421.jpg')}} " /></span></a>
              <div class="bounce-loader">
                <div class="loading loading-0"></div>
                <div class="loading loading-1"></div>
                <div class="loading loading-2"></div>
              </div>
            </div>
            <div class="yith-add-to-wishlist">
              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-87  wishlist-fragment on-first-load"
                data-fragment-ref="87"
                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;87&quot;,&quot;parent_product_id&quot;:87,&quot;product_type&quot;:&quot;grouped&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added to Wishlist!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                <!-- ADD TO WISHLIST -->

                <div class="yith-wcwl-add-button">
                  <a href="index815a.html?add_to_wishlist=87&amp;_wpnonce=bae5d782d8"
                    class="add_to_wishlist single_add_to_wishlist" data-product-id="87" data-product-type="grouped"
                    data-original-product-id="87" data-title="Add to Wishlist" rel="nofollow">
                    <span>Add to Wishlist</span>
                  </a>
                </div>

                <!-- COUNT TEXT -->

              </div>
            </div>
            <span class="onsale">Sale!</span>
            <div class="item-info">

              <h3>
                <a href="../product/selected/index.html" target="_self">Selected</a>
              </h3>

              <span class="product-terms">
                <a href="../product-category/men/index.html" rel="tag">Men</a> </span>

              <a href="../product/selected/index.html"
                aria-describedby="woocommerce_loop_add_to_cart_link_describedby_87" data-quantity="1"
                class="button product_type_grouped  product-type-grouped" data-product_id="87" data-product_sku=""
                aria-label="View products in the &ldquo;Selected&rdquo; group" rel="nofollow" data-toggle="tooltip"
                data-placement="left" data-title="View products" data-title-loaded="Product added to cart!"></a> <span
                id="woocommerce_loop_add_to_cart_link_describedby_87" class="screen-reader-text">
              </span>

              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span> &ndash; <span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>29.00</bdi></span></span>
            </div>
          </li>
        </ul>
        <nav class="woocommerce-pagination">
          <ul class="pagination pagination-center">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="page/2/index.html">2</a></li>
            <li><a class="page-numbers" href="page/3/index.html">3</a></li>
            <li><a class="next page-numbers" href="page/2/index.html">Next &raquo;</a></li>
          </ul>
        </nav>
      </div>


    </div>

  </main>
</div>
<div class="container">

  <div class="row sidebar shop-footer-sidebar">
    <div class="sidebar widget-area" role="complementary">

      <div class="col-md-3 col-sm-6">
        <div class="widget sidebar-entry woocommerce widget_products woocommerce_products-6">
          <h3 class="sidebar-entry-title">Featured</h3>
          <ul class="product_list_widget">
            <li>

              <a href="../product/billionaire-boys/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-110-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-110.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Billionaire Boys</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span>
            </li>
            <li>

              <a href="../product/selected-2/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl19-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl19.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Coolkids</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>3.00</bdi></span>
            </li>
            <li>

              <a href="../product/dialog/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl15-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl15.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Dialog</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>15.00</bdi></span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget sidebar-entry woocommerce widget_products woocommerce_products-4">
          <h3 class="sidebar-entry-title">Sản phẩm mới</h3>
          <ul class="product_list_widget">
            <li>

              <a href="../product/butterfly/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-11-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-11.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Butterfly</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>18.00</bdi></span>
            </li>
            <li>

              <a href="../product/stonedetail/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-14-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-14.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Stonedetail</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span>
            </li>
            <li>

              <a href="../product/festival-stone/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Festival Stone</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="0 out of 5">
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>13.00</bdi></span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget sidebar-entry woocommerce widget_products woocommerce_products-3">
          <h3 class="sidebar-entry-title">Đang bán</h3>
          <ul class="product_list_widget">
            <li>

              <a href="../product/cheap-monday/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-111-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-111.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Cheap Monday</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="4.00 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon"></i>
              </div>

              <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span></del> <span
                class="screen-reader-text">Original price was: &pound;35.00.</span><ins aria-hidden="true"><span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></ins><span
                class="screen-reader-text">Current price is: &pound;20.00.</span>
            </li>
            <li>

              <a href="../product/jumpsuit/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl-117-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl-117.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Jumpsuit</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="4.50 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
              </div>

              <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>33.00</bdi></span></del> <span
                class="screen-reader-text">Original price was: &pound;33.00.</span><ins aria-hidden="true"><span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>2.00</bdi></span></ins><span
                class="screen-reader-text">Current price is: &pound;2.00.</span>
            </li>
            <li>

              <a href="../product/asap-bag/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl3-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl3.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Asap Bag</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="5.00 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
              </div>

              <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>34.00</bdi></span></del> <span
                class="screen-reader-text">Original price was: &pound;34.00.</span><ins aria-hidden="true"><span
                  class="woocommerce-Price-amount amount"><bdi><span
                      class="woocommerce-Price-currencySymbol">&pound;</span>29.00</bdi></span></ins><span
                class="screen-reader-text">Current price is: &pound;29.00.</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget sidebar-entry woocommerce widget_products woocommerce_products-5">
          <h3 class="sidebar-entry-title">Đánh giá cao nhất</h3>
          <ul class="product_list_widget">
            <li>

              <a href="../product/paul-smith/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl1-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Paul Smith</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="4.67 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>45.00</bdi></span>
            </li>
            <li>

              <a href="../product/onetwos-shoes-2/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl16-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl16.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Jenga</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="4.17 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span>
            </li>
            <li>

              <a href="../product/spitfire/index.html">
                <img width="150" height="191" src="{{asset('assets/trangchu/wp-content/uploads/2014/11/image1xxl11-330x421.jpg')}} "
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                  loading="lazy"
                  srcset="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-330x421.jpg 330w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-680x868.jpg 680w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-235x300.jpg 235w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-802x1024.jpg 802w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-290x370.jpg 290w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-70x90.jpg 70w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11-555x710.jpg 555w, https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl11.jpg 870w"
                  sizes="(max-width: 150px) 100vw, 150px" /> <span class="product-title">Spitfire</span>
              </a>

              <div class="star-rating-icons" class="tooltip" data-toggle="tooltip" data-placement="right"
                title="4.50 out of 5">
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
                <i class="star-icon filled"></i>
              </div>

              <span class="woocommerce-Price-amount amount"><bdi><span
                    class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection