@extends('layouts.index')

@section('content')
    <div class="container page-container">

        <div class="post-formatting">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="woocommerce-notices-wrapper"></div>
                <div class="page-heading woocommerce-page-title columns-2">

                    <div class="col">

                        <h1>
                          Thanh toán <small>Thông tin cá nhân và thanh toán</small>
                        </h1>

                    </div>

                    <div class="col content-right">

                        <div class="login-form"><a class="icon-button show-login-form" href="#"><i></i><span
                                    class="title">Đăng nhập tại đây<small>Khách hàng quay lại</small></span></a></div>
                        <div class="coupon-form">

                            <a href="#" class="icon-button icon-coupon">
                                <i></i>
                                <span class="title">
                                  Nhập phiếu giảm giá <small>Để được giảm giá</small>
                                </span>
                            </a>

                            <div class="coupon">

                                <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
                                    <a href="#" class="close-coupon">&times;</a>

                                    <p class="form-row form-row-first">
                                        <label for="coupon_code" class="screen-reader-text">Phiếu giảm giá:</label>
                                        <input type="text" name="coupon_code" class="input-text"
                                            placeholder="Coupon code" id="coupon_code" value="" />
                                    </p>

                                    <p class="form-row form-row-last">
                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Áp dụng phiếu giảm giá</button>
                                    </p>

                                    <div class="clear"></div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <form class="woocommerce-form woocommerce-form-login login" method="post" style="display:none;">

                    <div class="bordered-block">
                        <h2>Đăng nhập</h2>
                        <p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn bên dưới. Nếu bạn là khách hàng mới, vui lòng chuyển đến phần Thanh toán.</p>

                        <p class="form-row form-row-first">
                            <input type="text" class="input-text" name="username" id="username" autocomplete="username"
                                placeholder="Họ tên và địa chỉ email *" required aria-required="true" />
                        </p>
                        <p class="form-row form-row-last">
                            <input class="input-text woocommerce-Input" type="password" name="password" id="password"
                                autocomplete="current-password" placeholder="Mật khẩu *" required aria-required="true" />
                        </p>
                        <div class="clear"></div>


                        <p class="form-row">
                            <label
                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
                                    type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
                            </label>
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                value="01093a8192" /><input type="hidden" name="_wp_http_referer"
                                value="/aurum/fashion/checkout/" /> <input type="hidden" name="redirect"
                                value="https://themes.laborator.co/aurum/fashion/checkout/" />
                        </p>
                        <p class="lost_password pull-right-sm">
                            <a href="https://themes.laborator.co/aurum/fashion/my-account/lost-password/">Quên mật khẩu ?</a>
                        </p>

                        <p class="form-row">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit"
                                name="login" value="Login">Đăng nhập</button>
                        </p>

                        <div class="clear"></div>

                    </div>
                </form>

                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                    action="https://themes.laborator.co/aurum/fashion/checkout/" enctype="multipart/form-data">



                    <div class="col2-set" id="customer_details">
                        <div class="col-1">
                            <wc-order-attribution-inputs></wc-order-attribution-inputs>
                            <div class="woocommerce-billing-fields">

                                <h3>Chi tiết thanh toán</h3>



                                <div class="woocommerce-billing-fields__field-wrapper">
                                    <p class="form-row form-row-first form-group validate-required"
                                        id="billing_first_name_field" data-priority="10"><label for="billing_first_name"
                                            class="hidden">First name&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                name="billing_first_name" id="billing_first_name"
                                                placeholder="Họ và Tên *" value="" aria-required="true"
                                                autocomplete="given-name" /></span></p>
                                    <p class="form-row form-row-last form-group validate-required"
                                        id="billing_last_name_field" data-priority="20"><label for="billing_last_name"
                                            class="hidden">Last name&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                name="billing_last_name" id="billing_last_name" placeholder="Last name *"
                                                value="" aria-required="true" autocomplete="family-name" /></span>
                                    </p>
                                   
                                    <p class="form-row form-row-wide address-field update_totals_on_change form-group validate-required"
                                        id="billing_country_field" data-priority="40"><label for="billing_country"
                                            class="hidden">Quốc gia / Vùng đất&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><select name="billing_country"
                                                id="billing_country" class="country_to_state country_select "
                                                aria-required="true" autocomplete="country"
                                                data-placeholder="Quốc gia / Vùng đất *" data-label="Country / Region">
                                                <option value="">Chọn một quốc gia / vùng đất&hellip;</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Cura&ccedil;ao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="SZ">Eswatini</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MK">North Macedonia</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB" selected='selected'>United Kingdom (UK)</option>
                                                <option value="US">United States (US)</option>
                                                <option value="UM">United States (US) Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (US)</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select><noscript><button type="submit"
                                                    name="woocommerce_checkout_update_totals"
                                                    value="Update country / region">Cập nhật quốc gia /
                                                    vùng đất</button></noscript></span></p>
                                    <p class="form-row form-row-wide address-field form-group validate-required"
                                        id="billing_address_1_field" data-priority="50"><label for="billing_address_1"
                                            class="hidden">Địa chỉ nhà&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                name="billing_address_1" id="billing_address_1"
                                                placeholder="Địa chỉ nhà *" value="" aria-required="true"
                                                autocomplete="address-line1" /></span></p>
                              
                                
                             
                                    <p class="form-row form-row-wide form-group validate-required validate-phone"
                                        id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                            class="hidden">Phone&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="tel" class="input-text "
                                                name="billing_phone" id="billing_phone" placeholder="Số điện thoại *"
                                                value="" aria-required="true" autocomplete="tel" /></span></p>
                                    <p class="form-row form-row-wide form-group validate-required validate-email"
                                        id="billing_email_field" data-priority="110"><label for="billing_email"
                                            class="hidden">Email address&nbsp;<abbr class="required"
                                                title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="email" class="input-text "
                                                name="billing_email" id="billing_email" placeholder="Địa chỉ email *"
                                                value="" aria-required="true"
                                                autocomplete="email username" /></span></p>
                                </div>

                            </div>

                            <div class="woocommerce-account-fields">

                                <p class="form-row form-row-wide create-account">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input
                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                            id="createaccount" type="checkbox" name="createaccount" value="1" />
                                        <span>Tạo tài khoản ?</span>
                                    </label>
                                </p>




                                <div class="create-account">
                                    <p class="form-row form-group validate-required" id="account_password_field"
                                        data-priority=""><label for="account_password" class="hidden">Tạo mật khẩu tài khoản&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="password" class="input-text "
                                                name="account_password" id="account_password"
                                                placeholder="Tạo mật khẩu tài khoản *" value=""
                                                aria-required="true" autocomplete="new-password" /></span></p>
                                    <div class="clear"></div>
                                </div>


                            </div>
                        </div>

                        <div class="col-2">
                            <div class="woocommerce-shipping-fields">

                                <h3 id="ship-to-different-address">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input id="ship-to-different-address-checkbox"
                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                            checked='checked' type="checkbox" name="ship_to_different_address"
                                            value="1" /> <span>Gửi đến một địa chỉ khác ?</span>
                                    </label>
                                </h3>

                                <div class="shipping_address">


                                    <div class="woocommerce-shipping-fields__field-wrapper">
                                        <p class="form-row form-row-first form-group validate-required"
                                            id="shipping_first_name_field" data-priority="10"><label
                                                for="shipping_first_name" class="hidden">First name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " name="shipping_first_name"
                                                    id="shipping_first_name" placeholder="Họ và tên *" value=""
                                                    aria-required="true" autocomplete="given-name" /></span></p>
                                        <p class="form-row form-row-last form-group validate-required"
                                            id="shipping_last_name_field" data-priority="20"><label
                                                for="shipping_last_name" class="hidden">Last name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " name="shipping_last_name" id="shipping_last_name"
                                                    placeholder="Last name *" value="" aria-required="true"
                                                    autocomplete="family-name" /></span></p>
                                  
                                        <p class="form-row form-row-wide address-field update_totals_on_change form-group validate-required"
                                            id="shipping_country_field" data-priority="40"><label for="shipping_country"
                                                class="hidden">Country / Region&nbsp;<abbr class="required"
                                                    title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><select name="shipping_country"
                                                    id="shipping_country" class="country_to_state country_select "
                                                    aria-required="true" autocomplete="country"
                                                    data-placeholder="Quốc gia / Khu vực *" data-label="Country / Region">
                                                    <option value="">Chọn một quốc gia / Khu vực&hellip;</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="PW">Belau</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo (Brazzaville)</option>
                                                    <option value="CD">Congo (Kinshasa)</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Cura&ccedil;ao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="SZ">Eswatini</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="CI">Ivory Coast</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="MK">North Macedonia</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PS">Palestinian Territory</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe
                                                    </option>
                                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="SX">Saint Martin (Dutch part)</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB" selected='selected'>United Kingdom (UK)
                                                    </option>
                                                    <option value="US">United States (US)</option>
                                                    <option value="UM">United States (US) Minor Outlying Islands
                                                    </option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VG">Virgin Islands (British)</option>
                                                    <option value="VI">Virgin Islands (US)</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select><noscript><button type="submit"
                                                        name="woocommerce_checkout_update_totals"
                                                        value="Update country / region">Update country /
                                                        region</button></noscript></span></p>
                                        <p class="form-row form-row-wide address-field form-group validate-required"
                                            id="shipping_address_1_field" data-priority="50"><label
                                                for="shipping_address_1" class="hidden">Street address&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " name="shipping_address_1" id="shipping_address_1"
                                                    placeholder="Địa chỉ giao hàng *" value="" aria-required="true"
                                                    autocomplete="address-line1" /></span></p>
                                     
                                        <p class="form-row form-row-wide address-field form-group validate-required"
                                            id="shipping_city_field" data-priority="70"><label for="shipping_city"
                                                class="hidden">Town / City&nbsp;<abbr class="required"
                                                    title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " name="shipping_city" id="shipping_city"
                                                    placeholder="Thị trấn / Thành phố *" value="" aria-required="true"
                                                    autocomplete="address-level2" /></span></p>
                                        <p class="form-row form-row-wide address-field form-group validate-state"
                                            id="shipping_state_field" data-priority="80"><label for="shipping_state"
                                                class="hidden">County&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " value="" placeholder="Huyện"
                                                    name="shipping_state" id="shipping_state"
                                                    autocomplete="address-level1" data-input-classes="" /></span></p>
                                        <p class="form-row form-row-wide address-field form-group validate-required validate-postcode"
                                            id="shipping_postcode_field" data-priority="90"><label
                                                for="shipping_postcode" class="hidden">Postcode&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                    class="input-text " name="shipping_postcode" id="shipping_postcode"
                                                    placeholder="Mã bưu chính *" value="" aria-required="true"
                                                    autocomplete="postal-code" /></span></p>
                                    </div>


                                </div>

                            </div>
                            <div class="woocommerce-additional-fields">



                                <div class="woocommerce-additional-fields__field-wrapper">
                                    <p class="form-row notes form-group" id="order_comments_field" data-priority="">
                                        <label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span
                                                class="optional">(không bắt buộc)</span></label><span
                                            class="woocommerce-input-wrapper">
                                            <textarea name="order_comments" class="input-text autogrow" id="order_comments"
                                                placeholder="Bao gồm các yêu cầu tùy chỉnh cho đơn hàng này tại đây" rows="2" cols="5"></textarea>
                                        </span></p>
                                </div>


                            </div>
                        </div>
                    </div>



                    <div class="order-totals-column">

                        <h3 id="order_review_heading">Đơn hàng của bạn</h3>


                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-total">Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <span class="name">Paul Smith</span>&nbsp; <strong
                                                class="product-quantity">&times;&nbsp;1</strong>
                                        </td>
                                        <td class="product-total">
                                            <div class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&pound;</span>45.00</bdi></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>

                                    <tr class="cart-subtotal">
                                        <th>Tổng cộng</th>
                                        <td><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&pound;</span>45.00</bdi></span>
                                        </td>
                                    </tr>




                                    <tr class="woocommerce-shipping-totals shipping">
                                        <th>Vận chuyển</th>
                                        <td data-title="Shipping">
                                            <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                <li>
                                                    <input type="hidden" name="shipping_method[0]" data-index="0"
                                                        id="shipping_method_0_flat_rate1" value="flat_rate:1"
                                                        class="shipping_method" /><label
                                                        for="shipping_method_0_flat_rate1">Tỷ lệ cố định: <span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&pound;</span>2.00</bdi></span></label>
                                                </li>
                                            </ul>

                                        </td>
                                    </tr>




                                    <tr class="tax-rate tax-rate-gb-vat-1">
                                        <th>Thuế GTGT</th>
                                        <td><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&pound;</span>9.40</span></td>
                                    </tr>


                                    <tr class="order-total">
                                        <th>Tổng cộng</th>
                                        <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&pound;</span>56.40</bdi></span></strong>
                                        </td>
                                    </tr>


                                </tfoot>
                            </table>
                            <div class="vspacer"></div>
                            <h2 id="payment_method_heading">Phương thức thanh toán</h2>
                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                            name="payment_method" value="bacs" checked='checked'
                                            data-order_button_text="" />

                                        <label for="payment_method_bacs">
                                          Chuyển khoản ngân hàng trực tiếp </label>
                                        <div class="payment_box payment_method_bacs">

                                            <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn làm tham chiếu thanh toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được chuyển vào tài khoản của chúng tôi.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio"
                                            name="payment_method" value="cheque" data-order_button_text="" />

                                        <label for="payment_method_cheque">
                                          Kiểm tra thanh toán </label>
                                        <div class="payment_box payment_method_cheque" style="display:none;">

                                            <p>Vui lòng gửi séc đến Tên cửa hàng, Đường phố của cửa hàng, Thị trấn của cửa hàng, Tiểu bang/Quận của cửa hàng, Mã bưu chính của cửa hàng.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                            name="payment_method" value="cod" data-order_button_text="" />

                                        <label for="payment_method_cod">
                                          Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_cod" style="display:none;">

                                            <p>Thanh toán bằng tiền mặt khi nhận hàng.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio"
                                            name="payment_method" value="paypal"
                                            data-order_button_text="Proceed to PayPal" />

                                        <label for="payment_method_paypal">
                                            PayPal </label>
                                        <div class="payment_box payment_method_paypal" style="display:none;">

                                            <img decoding="async"
                                                src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
                                                alt="PayPal acceptance mark" /><a
                                                href="https://www.paypal.com/gb/webapps/mpp/paypal-popup"
                                                class="about_paypal"
                                                onclick="javascript:window.open(&#039;https://www.paypal.com/gb/webapps/mpp/paypal-popup&#039;,&#039;WIPaypal&#039;,&#039;toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700&#039;); return false;"
                                                target="_blank" rel="noopener">PayPal là gì?</a>
                                            <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có tài khoản PayPal. ĐÃ BẬT SANDBOX. Bạn chỉ có thể sử dụng tài khoản thử nghiệm sandbox. Xem <a
                                                    href="https://developer.paypal.com/docs/classic/lifecycle/ug_sandbox/"
                                                    target="_blank" rel="noopener">Hướng dẫn kiểm tra PayPal Sandbox</a> để biết thêm chi tiết.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_stripe">
                                        <input id="payment_method_stripe" type="radio" class="input-radio"
                                            name="payment_method" value="stripe" data-order_button_text="" />

                                        <label for="payment_method_stripe">
                                          Thẻ tín dụng (Sọc) </label>
                                        <div class="payment_box payment_method_stripe" style="display:none;">

                                            <div id="stripe-payment-data" data-email="" data-full-name=" "
                                                data-currency="gbp">
                                                <p>Thanh toán bằng thẻ tín dụng của bạn qua Stripe. ĐÃ BẬT CHẾ ĐỘ KIỂM TRA. Ở chế độ kiểm tra, bạn có thể sử dụng số thẻ 4242424242424242 với bất kỳ CVC nào và ngày hết hạn hợp lệ hoặc kiểm tra<a href="https://stripe.com/docs/testing"
                                                        target="_blank" rel="noopener">Kiểm tra tài liệu Stripe</a>
                                                        để biết thêm số thẻ.</p>
                                                <ul class="woocommerce-SavedPaymentMethods wc-saved-payment-methods"
                                                    data-count="0">
                                                    <li class="woocommerce-SavedPaymentMethods-new">
                                                        <input id="wc-stripe-payment-token-new" type="radio"
                                                            name="wc-stripe-payment-token" value="new"
                                                            style="width:auto;"
                                                            class="woocommerce-SavedPaymentMethods-tokenInput" />
                                                        <label for="wc-stripe-payment-token-new">Sử dụng phương thức thanh toán mới</label>
                                                    </li>
                                                </ul>
                                                <fieldset id="wc-stripe-cc-form"
                                                    class="wc-credit-card-form wc-payment-form"
                                                    style="background:transparent;">

                                                    <label for="card-element">
                                                      Thẻ tín dụng hoặc thẻ ghi nợ </label>

                                                    <div id="stripe-card-element" class="wc-stripe-elements-field">
                                                        <!-- a Stripe Element will be inserted here. -->
                                                    </div>

                                                    <!-- Used to display form errors -->
                                                    <div class="stripe-source-errors" role="alert"></div>
                                                    <div class="clear"></div>
                                                </fieldset>
                                                <fieldset>
                                                    <p class="form-row woocommerce-SavedPaymentMethods-saveNew">
                                                        <input id="wc-stripe-new-payment-method"
                                                            name="wc-stripe-new-payment-method" type="checkbox"
                                                            value="true" style="width:auto;" />
                                                        <label for="wc-stripe-new-payment-method"
                                                            style="display:inline;">
                                                            Lưu thông tin thanh toán vào tài khoản của tôi cho những lần mua hàng sau.
                                                        </label>
                                                    </p>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <noscript>
                                      Vì trình duyệt của bạn không hỗ trợ JavaScript hoặc JavaScript đã bị vô hiệu hóa, vui lòng đảm bảo bạn nhấp vào <em>Cập nhật Tổng số</em> trước khi đặt hàng. Bạn có thể bị tính phí nhiều hơn số tiền nêu trên nếu bạn không làm như vậy. <br /><button
                                            type="submit" class="button alt"
                                            name="woocommerce_checkout_update_totals" value="Update totals">Cập nhật tổng số</button>
                                    </noscript>

                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                        <div class="woocommerce-privacy-policy-text"></div>
                                        <div class="woocommerce-terms-and-conditions"
                                            style="display: none; max-height: 200px; overflow: auto;">
                                            <ol>
                                                <li style="text-align: left"><strong>Giới thiệu</strong></li>
                                            </ol>
                                            <p>Các Điều khoản và Điều kiện Chuẩn của Trang web được viết trên trang web này sẽ quản lý việc bạn sử dụng trang web này. Các Điều khoản này sẽ được áp dụng đầy đủ và ảnh hưởng đến việc bạn sử dụng Trang web này. Bằng cách sử dụng Trang web này, bạn đã đồng ý chấp nhận tất cả các điều khoản và điều kiện được viết ở đây. Bạn không được sử dụng Trang web này nếu bạn không đồng ý với bất kỳ Điều khoản và Điều kiện Chuẩn nào của Trang web này. Để biết ví dụ về các điều khoản và điều kiện chất lượng cao, hãy truy cập <a
                                                    href="http://ironlinkdirectory.com/" target="_blank"
                                                    rel="noopener">ironlinkdirectory.com</a>.</p>
                                            <p>Người dưới tuổi vị thành niên hoặc người dưới 18 tuổi không được phép sử dụng Trang web này.</p>
                                            <p>&nbsp;</p>
                                            <ol start="2">
                                                <li><strong>Quyền sở hữu trí tuệ</strong></li>
                                            </ol>
                                            <p>Ngoài nội dung bạn sở hữu, theo các Điều khoản này, Tên công ty và/hoặc bên cấp phép sở hữu mọi quyền sở hữu trí tuệ và tài liệu có trong Trang web này.</p>
                                            <p>Bạn chỉ được cấp giấy phép có giới hạn cho mục đích xem tài liệu có trên Trang web này.</p>
                                            <p>&nbsp;</p>
                                            <ol start="3">
                                                <li><strong>Hạn chế</strong></li>
                                            </ol>
                                            <p>You are specifically restricted from all of the following</p>
                                            <ul>
                                                <li>publishing any Website material in any other media;</li>
                                                <li>selling, sublicensing and/or otherwise commercializing any Website
                                                    material;</li>
                                                <li>publicly performing and/or showing any Website material;</li>
                                                <li>using this Website in any way that is or may be damaging to this
                                                    Website;</li>
                                                <li>using this Website in any way that impacts user access to this Website;
                                                </li>
                                                <li>using this Website contrary to applicable laws and regulations, or in
                                                    any way may cause harm to the Website, or to any person or business
                                                    entity;</li>
                                                <li>engaging in any data mining, data harvesting, data extracting or any
                                                    other similar activity in relation to this Website;</li>
                                                <li>using this Website to engage in any advertising or marketing.</li>
                                            </ul>
                                            <p>Certain areas of this Website are restricted from being access by you and
                                                Company Name may further restrict access by you to any areas of this
                                                Website, at any time, in absolute discretion. Any user ID and password you
                                                may have for this Website are confidential and you must maintain
                                                confidentiality as well.</p>
                                            <p>&nbsp;</p>
                                            <ol start="4">
                                                <li><strong>Your Content</strong></li>
                                            </ol>
                                            <p>In these Website Standard Terms and Conditions, “Your Content” shall mean any
                                                audio, video text, images or other material you choose to display on this
                                                Website. By displaying Your Content, you grant Company Name a non-exclusive,
                                                worldwide irrevocable, sub licensable license to use, reproduce, adapt,
                                                publish, translate and distribute it in any and all media.</p>
                                            <p>Your Content must be your own and must not be invading any third-party’s
                                                rights. Company Name reserves the right to remove any of Your Content from
                                                this Website at any time without notice.</p>
                                            <p>&nbsp;</p>
                                            <ol start="5">
                                                <li><strong>No warranties</strong></li>
                                            </ol>
                                            <p>This Website is provided “as is,” with all faults, and Company Name express
                                                no representations or warranties, of any kind related to this Website or the
                                                materials contained on this Website. Also, nothing contained on this Website
                                                shall be interpreted as advising you.</p>
                                            <p>&nbsp;</p>
                                            <ol start="6">
                                                <li><strong>Limitation of liability</strong></li>
                                            </ol>
                                            <p>In no event shall Company Name, nor any of its officers, directors and
                                                employees, shall be held liable for anything arising out of or in any way
                                                connected with your use of this Website whether such liability is under
                                                contract. Company Name, including its officers, directors and employees
                                                shall not be held liable for any indirect, consequential or special
                                                liability arising out of or in any way related to your use of this Website.
                                            </p>
                                            <p>&nbsp;</p>
                                            <ol start="7">
                                                <li><strong>Indemnification</strong></li>
                                            </ol>
                                            <p>You hereby indemnify to the fullest extent Company Name from and against any
                                                and/or all liabilities, costs, demands, causes of action, damages and
                                                expenses arising in any way related to your breach of any of the provisions
                                                of these Terms.</p>
                                            <p>&nbsp;</p>
                                            <ol start="8">
                                                <li><strong>Severability</strong></li>
                                            </ol>
                                            <p>If any provision of these Terms is found to be invalid under any applicable
                                                law, such provisions shall be deleted without affecting the remaining
                                                provisions herein.</p>
                                            <p>&nbsp;</p>
                                            <ol start="9">
                                                <li><strong>Variation of Terms</strong></li>
                                            </ol>
                                            <p>Company Name is permitted to revise these Terms at any time as it sees fit,
                                                and by using this Website you are expected to review these Terms on a
                                                regular basis.</p>
                                            <p>&nbsp;</p>
                                            <ol start="10">
                                                <li><strong>Assignment</strong></li>
                                            </ol>
                                            <p>The Company Name is allowed to assign, transfer, and subcontract its rights
                                                and/or obligations under these Terms without any notification. However, you
                                                are not allowed to assign, transfer, or subcontract any of your rights
                                                and/or obligations under these Terms.</p>
                                            <p>&nbsp;</p>
                                            <ol start="11">
                                                <li><strong>Entire Agreement</strong></li>
                                            </ol>
                                            <p>These Terms constitute the entire agreement between Company Name and you in
                                                relation to your use of this Website, and supersede all prior agreements and
                                                understandings.</p>
                                            <p>&nbsp;</p>
                                            <ol start="12">
                                                <li><strong>Governing Law &amp; Jurisdiction</strong></li>
                                            </ol>
                                            <p>These Terms will be governed by and interpreted in accordance with the laws
                                                of the State of State, and you submit to the non-exclusive jurisdiction of
                                                the state and federal courts located in State for the resolution of any
                                                disputes.</p>
                                            <p>These terms and conditions have been generated at <a
                                                    href="https://termsandcondiitionssample.com/" target="_blank"
                                                    rel="noopener">termsandcondiitionssample.com</a>.</p>
                                        </div>
                                        <p class="form-row validate-required">
                                            <label
                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                <input type="checkbox"
                                                    class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                    name="terms" id="terms" />
                                                <span class="woocommerce-terms-and-conditions-checkbox-text">I have read
                                                    and agree to the website <a
                                                        href="https://themes.laborator.co/aurum/fashion/terms-and-conditions/"
                                                        class="woocommerce-terms-and-conditions-link"
                                                        target="_blank">terms and conditions</a></span>&nbsp;<abbr
                                                    class="required" title="required">*</abbr>
                                            </label>
                                            <input type="hidden" name="terms-field" value="1" />
                                        </p>
                                    </div>


                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order"
                                        id="place_order" value="Place order" data-value="Place order">Place
                                        order</button>

                                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                                        name="woocommerce-process-checkout-nonce" value="6dff0d7c07" /><input
                                        type="hidden" name="_wp_http_referer" value="/aurum/fashion/checkout/" />
                                </div>
                            </div>
                        </div>

                    </div>


                </form>

            </div>
        </div>

    </div>
@endsection
