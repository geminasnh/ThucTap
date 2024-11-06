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

        {{-- <div class="products-archive--products">
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
                  <a href="" target="_self">Paul Smith</a>
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
          
          <nav class="woocommerce-pagination">
            <ul class="pagination pagination-center">
              <li><span aria-current="page" class="page-numbers current">1</span></li>
              <li><a class="page-numbers" href="page/2/index.html">2</a></li>
              <li><a class="page-numbers" href="page/3/index.html">3</a></li>
              <li><a class="next page-numbers" href="page/2/index.html">Next &raquo;</a></li>
            </ul>
          </nav>
        </div> --}}
        <div class="products-archive--products">
          <div class="woocommerce-notices-wrapper"></div>
          <ul class="products columns-4">
              @foreach($products as $product)
                  <li class="shop-item hover-effect-1 columns-xs-2 product type-product post-{{ $product->id }} status-publish instock product_cat-{{ $product->category->slug }} has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
                      <div class="item-image">
                          <a href="{{ route('pages.ctsp', ['product' => $product->id]) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                              <span class="image-placeholder" style="padding-bottom:127.333333%">
                                  <img width="150" height="191" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" alt="{{ $product->name }}" decoding="async" src="{{ asset('storage/' . $product->thumb_image) }}" />
                              </span>
                          </a>
                          
                      </div>
                      <div class="item-info">
                          <h3>
                              <a href="{{ route('pages.ctsp', ['product' => $product->id]) }}" target="_self">{{ $product->name }}</a>
                          </h3>
                          <span class="product-terms">
                              <a href="{{ route('admin.categories.show', ['slug' => $product->category->slug]) }}" rel="tag">{{ $product->category->name }}</a>
                          </span>
                          <span class="price">
                              <span class="woocommerce-Price-amount amount">
                                  <bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($product->price, 2) }}</bdi>
                              </span>
                          </span>
                      </div>
                  </li>
              @endforeach
          </ul>
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