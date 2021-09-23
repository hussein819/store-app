@extends('layouts.store_layout')
@section('title')
    {{__('home')}}
@endsection
@section('content')
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg"
                                                                                             src="{{asset('images/slider/3.jpg')}}"
                                                                                             alt=""
                                                                                             data-bgposition="center center"
                                                                                             data-bgfit="cover"
                                                                                             data-bgrepeat="no-repeat"
                                                                                             data-bgparallax="5"
                                                                                             data-no-retina>
                    <div class="tp-caption ps-banner__header" id="layer-1" data-x="left"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']"
                         data-type="text" data-responsive_offset="on"
                         data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>March 2002 <br> Nike SB Dunk Low Pro</p>
                    </div>
                    <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p class="text-uppercase">SUBA</p>
                    </div>
                    <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically,
                            his hometown of <br/> New York City in a big way.</p>
                    </div>
                    <a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']"
                       data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                       data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on"
                       data-textAlign="['center','center','center','center']"
                       data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase
                        Now<i class="ps-icon-next"></i></a>
                </li>
                <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random"
                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img
                        class="rev-slidebg" src="{{asset('images/slider/2.jpg')}}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5"
                        data-no-retina>
                    <div class="tp-caption ps-banner__header" id="layer20" data-x="left"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']"
                         data-type="text" data-responsive_offset="on"
                         data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>BEST ITEM <br> THIS SUMMER</p>
                    </div>
                    <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p class="text-uppercase">Recovery</p>
                    </div>
                    <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically,
                            his hometown of <br/> New York City in a big way.</p>
                    </div>
                    <a class="tp-caption ps-btn" id="layer364" href="#" data-x="['left','left','left','left']"
                       data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                       data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on"
                       data-textAlign="['center','center','center','center']"
                       data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        {{__('Purchase Now')}}<i class="ps-icon-next"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="features">- {{__('Features Products')}}</h3>
                <ul class="ps-masonry__filter">
                    <li class="current"><a href="#" data-filter="*">{{__('all')}} <sup>8</sup></a></li>
                    @foreach ($categories as $cat)
                        <li><a href="#" data-filter=".{{$cat->name}}">{{$cat->name}} <sup>1</sup></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                     data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        {{--start section--}}
                        @foreach ($products as $pro)
                            <div class="grid-item {{$pro->category->name}}">
                                <div class="grid-item__content-wrapper">
                                    <div class="ps-shoe mb-30">
                                        <div class="ps-shoe__thumbnail">
                                            @if ( $pro->updated_at->format('d') == date('d'))
                                                <div class="ps-badge"><span>{{__('New')}}</span></div>
                                            @endif
                                            <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div>
                                            <a class="ps-shoe__favorite"
                                               href="{{route('store.product.show',$pro->id)}}"><i
                                                    class="ps-icon-heart"></i></a>
                                            <img src="{{asset('storage/products/'.$pro->image)}}" alt=""><a
                                                class="ps-shoe__overlay"
                                                href="{{ route('store.product.show',$pro->id) }}"></a>
                                        </div>
                                        <div class="ps-shoe__content">
                                            <div class="ps-shoe__variants">
                                                <div class="ps-shoe__variant normal">
                                                    <img src="{{asset('storage/products/'.$pro->image)}}" alt="">
                                                    @foreach ($pro->product_images as $g)
                                                        <img src="{{asset('storage/'.$g->path)}}" alt="">
                                                    @endforeach
                                                </div>

                                            </div>
                                            <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                                            href="#">{{$pro->name}}</a>
                                                <p class="ps-shoe__categories"><a href="#">{{$pro->user->name}}</a>,<a
                                                        href="#">
                                                        {{$pro->category->name}}</a>,<a href="#"> Jordan</a></p><span
                                                    class="ps-shoe__price">
                                                    <del>£220</del> £ {{$pro->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--end section--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img
                    src="{{asset('images/banner/home-banner-1.png')}}" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img
                    src="{{asset('images/banner/home-banner-2.png')}}" alt=""></a></div>
    </div>
    <div class="ps-section--sale-off ps-section pt-80 pb-40">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-hot-deal">
                            <h3>Nike DUNK Max 95 OG</h3>
                            <p class="ps-hot-deal__price">Only: <span>£155</span></p>
                            <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                                <li><span class="hours"></span>
                                    <p>Hours</p></li>
                                <li class="divider">:</li>
                                <li><span class="minutes"></span>
                                    <p>minutes</p></li>
                                <li class="divider">:</li>
                                <li><span class="seconds"></span>
                                    <p>Seconds</p></li>
                            </ul>
                            <a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i
                                    class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><img src="{{asset('images/hot-deal.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="BEST SALE">- {{__('Top Sales')}}</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i
                                    class="ps-icon-arrow-right"></i>{{__('Prev')}}</a><a
                                class="ps-next" href="#">{{__('Next')}}<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                     data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false"
                     data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3"
                     data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    {{--start section--}}

                    @foreach ($top_sales as $pro)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
                                <div class="ps-shoe__thumbnail">
                                    @if ($pro->updated_at->format('d') == date('d'))
                                        <div class="ps-badge"><span>{{__('new')}}</span></div>
                                    @endif
                                    <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div>
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                        src="{{asset('storage/products/'.$pro->image)}}" alt=""><a
                                        class="ps-shoe__overlay"
                                        href="{{ route('store.product.show',$pro->id) }}"></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__variants">
                                        <div class="ps-shoe__variant normal">
                                            @foreach ($pro->product_images as $g)
                                                <img src="{{asset('storage/'.$g->path)}}" alt="">
                                            @endforeach
                                        </div>
                                        @if(!empty($ra))
                                        <b class="p-2">( {{ $ra->rating }}<svg class="bg-outline-warning cursor-pointer block w-8 h-8 @if($rating >= 5 ) text-warning @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="15" height="15">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg> )</b>
                                        @endif
                                    </div>
                                    <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                                    href="{{route('store.product.show',$pro->id)}}">{{$pro->name}}</a>
                                        <p class="ps-shoe__categories"><a href="#">{{$pro->category->name}}</a>,<a
                                                href="#">
                                                @if ($pro->category->subcategories)
                                                    {{implode(', ',$pro->category->subcategories->pluck('name')->toArray())}}
                                                @endif
                                            </a>,<a
                                                href="#"> Jordan</a></p><span class="ps-shoe__price">
                                         <del>£220</del> £ {{$pro->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--end section--}}

                </div>
            </div>
        </div>
    </div>
    <div class="ps-home-testimonial bg--parallax pb-80" data-background="{{asset('images/background/parallax.jpg')}}">
        <div class="container">
            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0"
                 data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                 data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"
                 data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                {{--start section--}}
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img src="{{asset('images/testimonial/1.jpg')}}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img src="{{asset('images/testimonial/2.jpg')}}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img src="{{asset('images/testimonial/3.jpg')}}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
                {{--end section--}}
            </div>
        </div>
    </div>
    <div class="ps-section ps-home-blog pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h2 class="ps-section__title" data-mask="News">- {{__('Our Story')}}</h2>
                <div class="ps-section__action"><a class="ps-morelink text-uppercase" href="#">{{__('View all post')}}<i
                            class="fa fa-long-arrow-right"></i></a></div>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    {{--start section--}}
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img
                                    src="{{asset('images/blog/1.jpg')}}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">An Inside
                                    Look at the Breaking2 Kit</a>
                                <p class="ps-post__meta"><span>{{__('By')}}:<a class="mr-5"
                                                                               href="blog.html">Alena Studio</a></span>
                                    -<span
                                        class="ml-5">Jun 10, 2017</span></p>
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to
                                    further…</p><a class="ps-morelink" href="blog-detail.html">{{__('Read more')}}<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img
                                    src="{{asset('images/blog/2.jpg')}}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Unpacking
                                    the Breaking2 Race Strategy</a>
                                <p class="ps-post__meta"><span>By:<a class="mr-5"
                                                                     href="blog.html">Alena Studio</a></span> -<span
                                        class="ml-5">Jun 10, 2017</span></p>
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to
                                    further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img
                                    src="{{asset('images/blog/3.jpg')}}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Nike’s
                                    Latest Football Cleat Breaks the Mold</a>
                                <p class="ps-post__meta"><span>By:<a class="mr-5"
                                                                     href="blog.html">Alena Studio</a></span> -<span
                                        class="ml-5">Jun 10, 2017</span></p>
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to
                                    further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    {{--end section--}}
                </div>
            </div>
        </div>
    </div>
    <div class="ps-home-contact">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-home-contact__form">
            <header>
                <h3>{{__('Contact Us')}}</h3>
                <p>{{__('Learn about our company profile')}}</p>
            </header>
            <footer>
                <form action="{{--{{route('contact.store')}}--}}" method="post">
                    <div class="form-group">
                        <label for="name">{{__('name')}}<span>*</span></label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">{{__('email')}}<span>*</span></label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">{{__('Message')}}<span>*</span></label>
                        <textarea id="message" class="form-control" rows="4" name="message"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="ps-btn">{{__('Send Message')}}<i class="fa fa-angle-right"></i></button>
                    </div>
                </form>
            </footer>
        </div>
    </div>

@endsection
