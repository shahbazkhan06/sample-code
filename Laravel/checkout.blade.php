@extends('layouts.web')
@section('is_display','0')
@section('css')
@endsection
@section('content')
<main>
            <!-- innerBanner -->
            <section class="innerBanner checkoutinnerBanner before-none">
                <div class="container">
                    <div class="ibCont text-center">
                        <h2 class="text-white mb-0 text-dark">Secure checkout</h2>
                    </div>
                </div>
            </section><!-- /innerBanner -->
            <!-- breadcrumb -->
            <section class="checkoutSteps">
                <div class="container">
                    <ul class="cStepList">
                        <li class="cslItem active">
                            <a href="javascript:void(0)">
                                <span class="cslCount">1</span>
                                <span class="cslName">Billing / Shipping</span>
                            </a>
                        </li>
                        <li class="cslItem">
                            <a href="checkout-step-two.html">
                                <span class="cslCount">2</span>
                                <span class="cslName">Delivery</span>
                            </a>
                        </li>
                        <li class="cslItem before-none">
                            <a href="checkout-step-three.html">
                                <span class="cslCount">3</span>
                                <span class="cslName">Payment</span>                                
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!-- /breadcrumb -->
             <!-- checkoutArea -->
             <section class="checkoutArea pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 pr-lg-4">
                            <div class="checkout-wrap">
                                <div class="cTitle d-flex justify-content-between">
                                    <h5 class="title mb-0">Contact Information</h5>
                                    <p class="mb-0">Already have an account? <a href="#" class="btn btn-link p-0 text-underline text-dark">Sign In</a></p>
                                </div>
                                <form action="#" class="checkout-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-grp mb-0">
                                                <label for="fName">Email</label>
                                                <input type="email" id="" name="">
                                            </div>
                                            <div class="different-address custom-control custom-checkbox mt-3 mb-5">
                                                <input type="checkbox" class="custom-control-input" id="stda">
                                                <label class="custom-control-label" for="stda">Subscribe to our newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cTitle d-flex justify-content-between">
                                        <h5 class="title mb-0">Billing Information</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-grp">
												
                                                <select class="custom-select">
													<option value="">Please Select Address</option>
													@foreach ($addressData as $key => $val)
                                                    <option value="{{ $val->entity_address_id }}" 
													@if ($billing_address_id == $val->entity_address_id)
														selected
													@endif 
													>{{$val->address}}</option>
													@endforeach
                                                </select>
												
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="fName">Fist Name</label>
                                                <input type="text" id="fName">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Last Name</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="">Address</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="">Address 2 <small>(Optional)</small></label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">City</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">State</label>
                                                <select class="custom-select">
                                                    <option value="Please Select Address " selected>Please Select</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Zip/Postal Code</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Country</label>
                                                <select class="custom-select">
                                                    <option value="Please Select Address " selected>Please Select</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Phone</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cTitle d-flex justify-content-between">
                                        <h5 class="title mb-0">Shipping Information</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="different-address custom-control custom-checkbox mt-0 mb-4">
                                                <input type="checkbox" class="custom-control-input" id="stda2">
                                                <label class="custom-control-label" for="stda2">Subscribe to our newsletter</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <select class="custom-select">
													<option value="">Please Select Address</option>
													@foreach ($addressData as $key => $val)
                                                    <option value="{{ $val->entity_address_id }}" 
													@if ($primary_address_id == $val->entity_address_id)
														selected
													@endif 
													>{{$val->address}}</option>
													@endforeach
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="fName">Fist Name</label>
                                                <input type="text" id="fName">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Last Name</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="">Address</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="">Address 2 <small>(Optional)</small></label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">City</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">State</label>
                                                <select class="custom-select">
                                                    <option value="Please Select Address " selected>Please Select</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Zip/Postal Code</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Country</label>
                                                <select class="custom-select">
                                                    <option value="Please Select Address " selected>Please Select</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="">Phone</label>
                                                <input type="text" id="" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary">Save and Continue</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">                            
                            <div class="widget shop-widget pb-2">
                                <div class="shop-widget-title">
                                    <h6 class="title">Order summary</h6>
                                    <div class="slider-nav"></div>
                                </div>
                                <div class="sidebar-product-active">
                                    <div class="sidebar-product-list">
                                        <ul>
                                            <li>
                                                <div class="sidebar-product-thumb">
                                                    <a href="#"><img src="assets/images/pro06.png" width="80" alt=""></a>
                                                </div>
                                                <div class="sidebar-product-content">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <h5><a href="#">Lorem Ipsum is</a></h5>
                                                    <span>$ 300.00</span>
                                                    <div class="del-icon mt-2">
                                                        <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-product-thumb">
                                                    <a href="#"><img src="assets/images/pro05.png" width="80" alt=""></a>
                                                </div>
                                                <div class="sidebar-product-content">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <h5><a href="#">Lorem Ipsum is</a></h5>
                                                    <span>$ 300.00</span>
                                                    <div class="del-icon mt-2">
                                                        <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-product-thumb">
                                                    <a href="#"><img src="assets/images/pro04.png" width="80" alt=""></a>
                                                </div>
                                                <div class="sidebar-product-content">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <h5><a href="#">Lorem Ipsum is</a></h5>
                                                    <span>$ 300.00</span>
                                                    <div class="del-icon mt-2">
                                                        <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <aside class="shop-cart-sidebar">
                                <div class="shop-cart-widget">
                                    <div class="orderBox">
                                        <form action="#">
                                            <ul>
                                                <li><span>Subtotal</span><span>$300.00</span></li>
                                                <li><span>Shipping</span><span>$4.00</span></li>
                                                <li><span>Tax</span><span>$3.00</span></li>
                                                <li><span>Discount</span><span>-$10</span></li>
                                                <li class="cart-total-amount"><span>Order total</span><span class="amount">$290.00</span></li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="cart-coupon">
                                        <h6 class="title pb-1">Apply coupon code</h6>
                                        <form action="#">
                                            <input type="text" placeholder="Enter Coupon Code...">
                                            <button class="btn apbtn">Apply Coupon</button>
                                        </form>
                                    </div>
                                    <div class="proCheckout text-center">
                                        <button class="btn btn-primary d-block w-100">PROCEED TO CHECKOUT</button>
                                        <!-- <small>*Shipping and Tax will be calculated at checkout.</small> -->
                                    </div>
                                    <div class="proNeed">
                                        <h6 class="title pb-2">Need Help?</h6>
                                        <a href="tal:00 000 0000" title="00 000 0000"><i class="fas fa-phone-alt"></i> 00 000 0000</a>
                                        <a href="mailto:loremipsum@gmail.com" title="loremipsum@gmail.com"><i class="fas fa-envelope-open-text"></i> loremipsum@gmail.com</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section><!-- checkoutArea -->
            <!-- features -->
            <section class="features bg-light pt-70 pb-40">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="featurBox mb-30">
                                <div class="fbIcon">
                                    <svg width="35" height="32" viewBox="0 0 35 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.8178 11.1363H21.7793L23.2906 3.86588L23.3384 3.3568C23.3384 2.70453 23.0679 2.09999 22.6384 1.67044L20.952 0L10.4839 10.484C9.89527 11.0567 9.54527 11.8522 9.54527 12.7272V28.6362C9.54527 30.3862 10.9771 31.818 12.7271 31.818H27.0452C28.3656 31.818 29.4951 31.0225 29.9724 29.8771L34.7769 18.6612C34.9201 18.2953 34.9996 17.9135 34.9996 17.4999V14.3181C34.9996 12.5681 33.5678 11.1363 31.8178 11.1363ZM31.8168 17.5004L27.0441 28.6366H12.726V12.7277L19.6305 5.82317L17.8646 14.3186H31.8168V17.5004ZM6.36359 12.7275H0V31.8183H6.36359V12.7275Z" fill="#1A1E22"/>
                                    </svg>                                        
                                </div>
                                <div class="fbContent">
                                    <h5>Quality Products</h5>
                                    <span>Lorem Ipsum is simply dummy text of the printing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="featurBox mb-30">
                                <div class="fbIcon">
                                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0128 0.0452073L18.0074 0C27.4858 0 35.2464 7.29345 35.9999 16.561H33.7395C33.2121 10.895 29.6859 6.11806 24.7583 3.78235L22.7541 5.78654L17.0128 0.0452073ZM12.5982 22.5429C12.3119 22.5429 12.0406 22.4977 11.8146 22.4224C11.5735 22.332 11.3776 22.2265 11.2118 22.0607C11.0461 21.91 10.9104 21.7292 10.82 21.5032C10.7296 21.2922 10.6844 21.0511 10.6844 20.7949H8.72542C8.72542 21.3374 8.8309 21.8196 9.04187 22.2265C9.25284 22.6333 9.53915 22.9799 9.88574 23.2662C10.2474 23.5375 10.6543 23.7484 11.1214 23.8841C11.5735 24.0348 12.0557 24.1101 12.568 24.1101C13.1256 24.1101 13.653 24.0348 14.1202 23.8841C14.6024 23.7334 15.0243 23.5073 15.3709 23.221C15.7175 22.9347 16.0038 22.5731 16.1997 22.1361C16.3956 21.699 16.5011 21.2168 16.5011 20.6743C16.5011 20.388 16.4709 20.1017 16.3956 19.8305C16.3203 19.5592 16.2148 19.3031 16.049 19.062C15.8983 18.8208 15.6873 18.6099 15.4462 18.414C15.1901 18.2181 14.8887 18.0674 14.527 17.9468C14.8284 17.8112 15.0846 17.6455 15.3106 17.4496C15.5367 17.2537 15.7175 17.0427 15.8682 16.8167C16.0189 16.5906 16.1244 16.3646 16.1997 16.1235C16.275 15.8824 16.3052 15.6413 16.3052 15.4002C16.3052 14.8577 16.2148 14.3755 16.0339 13.9535C15.8531 13.5316 15.5969 13.185 15.2654 12.9138C14.964 12.6274 14.5572 12.4165 14.1051 12.2658C13.6379 12.1302 13.1256 12.0548 12.568 12.0548C12.0256 12.0548 11.5283 12.1302 11.0611 12.2959C10.6091 12.4617 10.2022 12.6877 9.87067 12.974C9.55422 13.2603 9.29804 13.5919 9.10215 13.9837C8.92132 14.3755 8.8309 14.7974 8.8309 15.2645H10.7899C10.7899 15.0084 10.8351 14.7823 10.9255 14.5864C11.0159 14.3905 11.1365 14.2097 11.3022 14.0741C11.468 13.9385 11.6488 13.8179 11.8749 13.7426C12.1009 13.6672 12.3269 13.622 12.5982 13.622C13.2009 13.622 13.653 13.7727 13.9393 14.0891C14.2256 14.3905 14.3763 14.8275 14.3763 15.3851C14.3763 15.6563 14.3311 15.8974 14.2558 16.1235C14.1804 16.3495 14.0448 16.5303 13.8791 16.681C13.7133 16.8317 13.5023 16.9523 13.2612 17.0427C13.0201 17.1331 12.7187 17.1783 12.3872 17.1783H11.2269V18.7304H12.3872C12.7187 18.7304 13.0201 18.7606 13.2914 18.8359C13.5626 18.9113 13.7886 19.0318 13.9695 19.1825C14.1503 19.3483 14.301 19.5442 14.4065 19.7853C14.512 20.0264 14.5572 20.3127 14.5572 20.6442C14.5572 21.262 14.3763 21.7292 14.0297 22.0456C13.6832 22.3922 13.2009 22.5429 12.5982 22.5429ZM11.2566 32.3692C6.32903 30.0486 2.80286 25.2566 2.26037 19.5906H0C0.768525 28.8732 8.52912 36.1666 18.0076 36.1666L19.0022 36.1214L13.2608 30.3801L11.2566 32.3692ZM23.7639 12.4617C24.4269 12.7329 24.9996 13.1247 25.4818 13.622C25.964 14.1193 26.3407 14.722 26.5969 15.4303C26.8531 16.1385 26.9887 16.9221 26.9887 17.7961V18.3989C26.9887 19.2729 26.8531 20.0565 26.5969 20.7648C26.3407 21.4579 25.964 22.0607 25.4818 22.558C24.9996 23.0553 24.4119 23.432 23.7338 23.7032C23.0557 23.9745 22.2871 24.1101 21.4583 24.1101H17.9924V12.0548H21.5487C22.3625 12.0548 23.1009 12.1904 23.7639 12.4617ZM24.8928 18.3841C24.8928 19.017 24.8175 19.5745 24.6819 20.0869C24.5312 20.5842 24.3202 21.0212 24.0339 21.3678C23.7476 21.7144 23.3859 21.9856 22.964 22.1664C22.527 22.3473 22.0297 22.4377 21.4722 22.4377H20.1009V13.7428H21.5626C22.6475 13.7428 23.4763 14.0894 24.0339 14.7826C24.6065 15.4757 24.8928 16.4703 24.8928 17.7813V18.3841Z" fill="#1A1E22"/>
                                    </svg>                                        
                                </div>
                                <div class="fbContent">
                                    <h5>30 Days Free Returns</h5>
                                    <span>Lorem Ipsum is simply dummy text of the printing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="featurBox mb-30">
                                <div class="fbIcon">
                                    <svg width="28" height="25" viewBox="0 0 28 25" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7644 1.57111C24.4533 0.653333 23.5822 0 22.5556 0H5.44444C4.41778 0 3.56222 0.653333 3.23556 1.57111L0 10.8889V23.3333C0 24.1889 0.7 24.8889 1.55556 24.8889H3.11111C3.96667 24.8889 4.66667 24.1889 4.66667 23.3333V21.7778H23.3333V23.3333C23.3333 24.1889 24.0333 24.8889 24.8889 24.8889H26.4444C27.3 24.8889 28 24.1889 28 23.3333V10.8889L24.7644 1.57111ZM5.98711 3.11059H21.9938L23.6738 7.94837H4.30711L5.98711 3.11059ZM3.1087 18.6672H24.8865V10.8894H3.1087V18.6672ZM6.99686 12.4456C5.70819 12.4456 4.66352 13.4903 4.66352 14.779C4.66352 16.0676 5.70819 17.1123 6.99686 17.1123C8.28552 17.1123 9.33019 16.0676 9.33019 14.779C9.33019 13.4903 8.28552 12.4456 6.99686 12.4456ZM18.6635 14.779C18.6635 13.4903 19.7082 12.4456 20.9969 12.4456C22.2855 12.4456 23.3302 13.4903 23.3302 14.779C23.3302 16.0676 22.2855 17.1123 20.9969 17.1123C19.7082 17.1123 18.6635 16.0676 18.6635 14.779Z" fill="#1A1E22"/>
                                    </svg>
                                </div>
                                <div class="fbContent">
                                    <h5>Free Shipping</h5>
                                    <span>Lorem Ipsum is simply dummy text of the printing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="featurBox mb-30">
                                <div class="fbIcon">
                                    <svg width="26" height="32" viewBox="0 0 26 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 13C0 5.82111 5.82111 0 13 0C20.1789 0 26 5.82111 26 13V27.4445C26 29.8422 24.0644 31.7778 21.6667 31.7778H13V28.8889H23.1111V27.4445H17.3333V15.8889H23.1111V13C23.1111 7.41 18.59 2.88889 13 2.88889C7.41 2.88889 2.88889 7.41 2.88889 13V15.8889H8.66667V27.4445H4.33333C1.93556 27.4445 0 25.5089 0 23.1111V13ZM5.7759 18.7782V24.556H4.33145C3.53701 24.556 2.88701 23.906 2.88701 23.1116V18.7782H5.7759ZM23.113 18.7782V24.556H20.2241V18.7782H23.113Z" fill="black"/>
                                    </svg>                                        
                                </div>
                                <div class="fbContent">
                                    <h5>Customer Service</h5>
                                    <span>Lorem Ipsum is simply dummy text of the printing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /features -->
        </main>

@endsection
@section('js')
<script type='text/javascript'>
function deleteCartProduct(product_id,variant_id,qty){
  
  add_to_cart(product_id,variant_id,qty);
  
  applyCouponCode('addtocart')

  jQuery('#cart_box_'+variant_id).hide();
}


function checkout()
{
	window.location.href = "{{route('checkout')}}";
}

</script>
@endsection