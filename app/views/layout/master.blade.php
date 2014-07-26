@include('templates.website.header')
<!-- Start Header -->
<div class="header-wrapper">

    <div class="container"><!-- Start Header Container -->

        <header id="header" class="clearfix">

            <div id="header-top" class="clearfix">

                <h2 id="contact-email">
                    <i class="email"></i> Email us at : <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
                </h2>

                <!-- Social Navigation -->
                <ul class="social_networks clearfix">
                    <li class="facebook">
                        <a target="_blank" href="https://www.facebook.com/"><i class="icon-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a target="_blank" href="https://twitter.com/"><i class="icon-twitter"></i></a>
                    </li>
                    <li class="gplus">
                        <a target="_blank" href="https://plus.google.com/"><i class="icon-google-plus"></i></a>
                    </li>
                    <li class="rss">
                        <a target="_blank" href="#"> <i class="icon-rss"></i></a>
                    </li>
                </ul>

            </div>


            <!-- Logo -->
            <div id="logo">

                <a title="Real Homes" href="index-2.html">
                    <img src="images/logo.png" alt="Real Homes">
                </a>

                <div class="tag-line">
                    <span>Just another HTML template</span>
                </div>
            </div>


            <div class="menu-and-contact-wrap">

                <h2  class="contact-number"><i class="icon-phone"></i>1-800-555-1234 <span class="outer-strip"></span></h2>
                <!-- Start Main Menu-->
                <nav class="main-menu">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="clearfix">
                            <li class="current-menu-item current_page_item"><a href="index-2.html">Home</a></li>
                            <li><a href="simple-listing.html">Listing</a>
                                <ul>
                                    <li><a href="simple-listing.html">Simple Listing</a></li>
                                    <li><a href="grid-listing.html">Grid Listing</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">News</a>
                                <ul>
                                    <li><a href="post-image.html">Image Post</a> </li>
                                    <li><a href="post-gallery.html">Gallery Post</a> </li>
                                    <li><a href="post-video.html">Video Post</a> </li>
                                </ul>
                            </li>
                            <li><a href="two-columns-gallery.html">Gallery</a>
                                <ul>
                                    <li><a href="two-columns-gallery.html">2 Columns Gallery</a></li>
                                    <li><a href="three-columns-gallery.html">3 Columns Gallery</a></li>
                                    <li><a href="four-columns-gallery.html">4 Columns Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="property.html">Property Details</a></li>
                                    <li><a href="on-rent.html">On Rent</a></li>
                                    <li><a href="on-sale.html">On Sale</a></li>
                                    <li><a href="miami-city.html">Miami City</a></li>
                                    <li><a href="agents.html">Agents</a></li>
                                    <li><a href="agent-properties.html">Agent Properties</a></li>
                                    <li><a href="full-width-page.html">Columns</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Types</a>
                                <ul class="sub-menu">
                                    <li><a href="villa.html">Villa</a></li>
                                    <li><a href="single-family.html">Single Family Home</a></li>
                                    <li><a href="condomium.html">Condominium</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>


                    </div>
                </nav><!-- End Main Menu -->

            </div><!-- End .menu-and-contact-wrap -->

        </header>

    </div> <!-- End Header Container -->

</div><!-- End Header -->

<div id="home-flexslider" class="clearfix">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="desc-wrap">
                    <div class="slide-description">
                        <h3><a href="#">15421 Southwest 39th Terrace</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut&hellip;</p>
                        <span>$3,850 Per Month</span>
                        <a href="#" class="know-more">Know More</a>
                    </div>
                </div>
                <a href="#"><img src="images/temp-images/slider-image.jpg" alt="15421 Southwest 39th Terrace"></a>
            </li>
            <li>
                <div class="desc-wrap">
                    <div class="slide-description">
                        <h3><a href="#">1200 Anastasia Avenue, Coral Gables</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut&hellip;</p>
                        <span>$625,000 </span>
                        <a href="#" class="know-more">Know More</a>
                    </div>
                </div>
                <a href="#"><img src="images/temp-images/slider-image2.jpg" alt="1200 Anastasia Avenue, Coral Gables"></a>
            </li>

        </ul>
    </div>
</div><!-- End Slider -->


    <div class="container contents">
        <div class="row">
            <div class="span12">
                <div class="main">

                <section class="advance-search ">
                    <h3 class="search-heading"><i class="icon-search"></i>Find your Home</h3>
                    <div class="as-form-wrap">
                        <form class="advance-search-form clearfix" action="#" method="get">

                            <div class="option-bar large">
                                <label>Location</label>
                                    <span class="selectwrap">
                                        <select name="location" id="select-location" class="search-select">
                                            <option value="miami">Miami</option>
                                            <option value="newyork">New York</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar large">
                                <label>Status</label>
                                    <span class="selectwrap">
                                        <select name="status" id="select-status" class="search-select">
                                            <option value="on-rent">On Rent</option>
                                            <option value="on-sale">On Sale</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar large last">
                                <label>Property Type</label>
                                    <span class="selectwrap">
                                        <select name="type" id="select-property-type" class="search-select">
                                            <option value="condominium">Condominium</option>
                                            <option value="single-family-home">Single Family Home</option>
                                            <option value="villa">Villa</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small">
                                <label>Bedrooms</label>
                                    <span class="selectwrap">
                                        <select name="bedrooms" id="select-bedrooms" class="search-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small">
                                <label>Bathrooms</label>
                                    <span class="selectwrap">
                                        <select name="bathrooms" id="select-bathrooms" class="search-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small second-last">
                                <label>Minimum Price</label>
                                    <span class="selectwrap">
                                        <select name="min-price" id="select-min-price" class="search-select">
                                            <option value="1000">$1,000</option>
                                            <option value="5000">$5,000</option>
                                            <option value="10000">$10,000</option>
                                            <option value="50000">$50,000</option>
                                            <option value="100000">$100,000</option>
                                            <option value="200000">$200,000</option>
                                            <option value="300000">$300,000</option>
                                            <option value="400000">$400,000</option>
                                            <option value="500000">$500,000</option>
                                            <option value="600000">$600,000</option>
                                            <option value="700000">$700,000</option>
                                            <option value="800000">$800,000</option>
                                            <option value="900000">$900,000</option>
                                            <option value="1000000">$1,000,000</option>
                                            <option value="1500000">$1,500,000</option>
                                            <option value="2000000">$2,000,000</option>
                                            <option value="2500000">$2,500,000</option>
                                            <option value="5000000">$5,000,000</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small last">
                                <label>Maximum Price</label>
                                    <span class="selectwrap">
                                        <select name="max-price" id="select-max-price" class="search-select">
                                            <option value="5000">$5,000</option>
                                            <option value="10000">$10,000</option>
                                            <option value="50000">$50,000</option>
                                            <option value="100000">$100,000</option>
                                            <option value="200000">$200,000</option>
                                            <option value="300000">$300,000</option>
                                            <option value="400000">$400,000</option>
                                            <option value="500000">$500,000</option>
                                            <option value="600000">$600,000</option>
                                            <option value="700000">$700,000</option>
                                            <option value="800000">$800,000</option>
                                            <option value="900000">$900,000</option>
                                            <option value="1000000">$1,000,000</option>
                                            <option value="1500000">$1,500,000</option>
                                            <option value="2000000">$2,000,000</option>
                                            <option value="2500000">$2,500,000</option>
                                            <option value="5000000">$5,000,000</option>
                                            <option value="10000000">$10,000,000</option>
                                            <option value="any" selected="selected">Any</option>
                                        </select>
                                    </span>
                            </div>

                            <input type="submit" value="Search" class=" real-btn btn">
                        </form>
                    </div>
                </section><!-- End .advance-search -->


                <section class="property-items">

                        <div class="narrative">
                            <h2>We are Offering the Best Real Estate Deals</h2>
                            <p>Look at our Latest listed properties and check out the facilities on them, We have already sold more than 5,000 Homes and we are still going at very good pace. We would love you to look into these properties and we hope that you will find something match-able to your needs.</p>
                        </div>

                        <div class="property-items-container clearfix">
                            <div class="span6 ">
                                <article class="property-item clearfix">
                                    <h4><a href="#" title="15421 Southwest 39th Terrace">15421 Southwest 39th Terrace</a></h4>

                                    <figure>
                                        <a href="#" title="15421 Southwest 39th Terrace">
                                            <img  src="images/temp-images/property1.jpg"  alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace">
                                        </a>
                                        <figcaption>On Rent</figcaption>
                                    </figure>

                                    <div class="detail">
                                        <h5 class="price">$3,850 Per Month<small> - Villa</small></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt…</p>
                                        <a class="more-details" href="#">More Details <i class="icon-caret-right"></i></a>
                                    </div>

                                    <div class="property-meta">
                                        <span><i class="icon-area"></i>280 sq ft&nbsp;</span><span><i class="icon-bed"></i>3&nbsp;Bedrooms</span><span><i class="icon-bath"></i>3&nbsp;Bathrooms</span><span><i class="icon-garage"></i>3&nbsp;Garages</span>
                                    </div>
                                </article>
                            </div><!-- End .span6 -->

                            <div class="span6 ">
                                <article class="property-item clearfix">
                                    <h4><a href="#" title="700 Front Street, Key West, FL">700 Front Street, Key West, FL</a></h4>

                                    <figure>
                                        <a href="#" title="700 Front Street, Key West, FL">
                                            <img  src="images/temp-images/property4.jpg" class="attachment-property-thumb-image wp-post-image" alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL">
                                        </a>
                                        <figcaption>On Sale</figcaption>
                                    </figure>

                                    <div class="detail">
                                        <h5 class="price">$850,000 <small> - Single Family</small></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt…</p>
                                        <a class="more-details" href="#">More Details <i class="icon-caret-right"></i></a>
                                    </div>

                                    <div class="property-meta">
                                        <span><i class="icon-area"></i>380 sq ft&nbsp;</span><span><i class="icon-bed"></i>4&nbsp;Bedrooms</span><span><i class="icon-bath"></i>3&nbsp;Bathrooms</span><span><i class="icon-garage"></i>2&nbsp;Garages</span>
                                    </div>
                                </article>
                            </div><!-- End .span6 -->


                            <div class="span6 ">
                                <article class="property-item clearfix">
                                    <h4><a href="#" title="1903 Hollywood Boulevard">1903 Hollywood Boulevard</a></h4>

                                    <figure>
                                        <a href="#" title="1903 Hollywood Boulevard">
                                            <img src="images/temp-images/property5.jpg"  alt="1903 Hollywood Boulevard" title="1903 Hollywood Boulevard">
                                        </a>
                                        <figcaption>On Sale </figcaption>
                                    </figure>

                                    <div class="detail">
                                        <h5 class="price">$778,000 <small> - Villa</small> </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt…</p>
                                        <a class="more-details" href="#">More Details <i class="icon-caret-right"></i></a>
                                    </div>

                                    <div class="property-meta">
                                        <span><i class="icon-area"></i>500 sq ft&nbsp;</span><span><i class="icon-bed"></i>3&nbsp;Bedrooms</span><span><i class="icon-bath"></i>3&nbsp;Bathrooms</span><span><i class="icon-garage"></i>2&nbsp;Garages</span>
                                    </div>
                                </article>
                            </div><!-- End .span6 -->

                            <div class="span6 ">
                                <article class="property-item clearfix">
                                    <h4><a href="#" title="401 Biscayne Boulevard, Miami">401 Biscayne Boulevard, Miami</a></h4>

                                    <figure>
                                        <a href="#" title="401 Biscayne Boulevard, Miami">
                                            <img src="images/temp-images/property2.jpg"  alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami">
                                        </a>
                                        <figcaption>On Rent</figcaption>
                                    </figure>

                                    <div class="detail">
                                        <h5 class="price">$3,250<small> - Condominium</small></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt…</p>
                                        <a class="more-details" href="#">More Details <i class="icon-caret-right"></i></a>
                                    </div>

                                    <div class="property-meta">
                                        <span><i class="icon-area"></i>1500 sq ft&nbsp;</span><span><i class="icon-bed"></i>2&nbsp;Bedrooms</span><span><i class="icon-bath"></i>2&nbsp;Bathrooms</span><span><i class="icon-garage"></i>1&nbsp;Garage</span>
                                    </div>
                                </article>
                            </div><!-- End .span6 -->


                        </div><!-- End .property-items-container -->

                        <div class="pagination">
                            <a href="#" class="real-btn current">1</a> <a href="#" class="real-btn">2</a>
                        </div>


                    </section><!-- End .property-items -->


                    <section class="featured-properties-carousel clearfix">
                        <div class="narrative">
                            <h3>Featured Properties</h3>
                            <p>View a list of Featured Properties.</p>
                        </div>
                        <div class="carousel es-carousel-wrapper">
                            <div class="es-carousel">
                                <ul class="clearfix">
                                    <li>
                                        <figure>
                                            <a href="#" title="15421 Southwest 39th Terrace">
                                                <img  src="images/temp-images/property1.jpg"  alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="15421 Southwest 39th Terrace">15421 Southwest 39th Terrace</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,… <a href="#"> Know More </a> </p>
                                        <span class="price">$3,850 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="700 Front Street, Key West, FL">
                                                <img src="images/temp-images/property4.jpg"  alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="700 Front Street, Key West, FL">700 Front Street, Key West, FL</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,… <a href="#"> Know More </a> </p>
                                        <span class="price">$850,000 </span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="401 Biscayne Boulevard, Miami">
                                                <img src="images/temp-images/property5.jpg"  alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="401 Biscayne Boulevard, Miami">401 Biscayne Boulevard, Miami</a></h4>
                                        <p>Nam liber tempor cum soluta nobis eleifend option… <a href="#"> Know More </a> </p>
                                        <span class="price">$3,250 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="3015 Grand Avenue, CocoWalk">
                                                <img  src="images/temp-images/property2.jpg"  alt="3015 Grand Avenue, CocoWalk" title="3015 Grand Avenue, CocoWalk">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="3015 Grand Avenue, CocoWalk">3015 Grand Avenue, CocoWalk</a></h4>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud… <a href="#"> Know More </a> </p>
                                        <span class="price">$4,350 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="1200 Anastasia Avenue, Coral Gables">
                                                <img src="images/temp-images/property1.jpg"  alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="1200 Anastasia Avenue, Coral Gables">1200 Anastasia Avenue, Coral Gables</a></h4>
                                        <p> <a href="#"> Know More </a> </p>
                                        <span class="price">$625,000 </span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="60 Merrick Way, Miami">
                                                <img src="images/temp-images/property4.jpg" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="60 Merrick Way, Miami">60 Merrick Way, Miami</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,… <a href="#"> Know More </a> </p>
                                        <span class="price">$440,000 </span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#" title="Florida 5, Pinecrest, FL">
                                                <img src="images/temp-images/property5.jpg"  alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL">
                                            </a>
                                        </figure>
                                        <h4><a href="#" title="Florida 5, Pinecrest, FL">Florida 5, Pinecrest, FL</a></h4>
                                        <p>Nam liber tempor cum soluta nobis eleifend option… <a href="#"> Know More </a> </p>
                                        <span class="price">$480,000 </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="es-nav"><span class="es-nav-prev"></span><span class="es-nav-next"></span></div></div>
                    </section><!-- End .eatured-properties-carousel -->

                </div><!-- End .main -->
            </div><!-- End span12 -->
        </div><!-- End .row -->
    </div><!-- End .contents -->

@include('templates.website.footer')


