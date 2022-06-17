<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>STATED.</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slickcarousel@1.8.1/slick/slick.css" />
        <link href="css/styles.css" type="text/css" rel="Stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>
    </head>

    <body>
        <div id="header-hero-container">
            <header>
                <div class="flex container">
                    <a id="logo" href="#">Chaudhary & Co.</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <span class="strip"></span>
                            <span class="strip"></span>
                            <span class="strip"></span>
                        </button>
                        <ul id="nav-menu">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="http://www.google.com" target="_blank">Properties</a></li>
                            <li><a href="#">Agents</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                            <?php if(Auth::check()) {?>
                            <li><a href="{{URL::to('/')}}/logout">Logout</a></li>
                            <?php } ?>
                            <li id="close-flyout"><span class="fas fa-times"></span></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <section id="hero">
                <div class="fade"></div>
                <div class="hero-text">
                    <h1>Buy and sell real estate properties</h1>
                    <p>A well reputed and trusted real estate agency of Pakistan.</p>
                </div>
            </section>
        </div>

        <section id="properties">
            <div class="container">
                <h2>Properties</h2>
                <div id="properties-slider" class="slick">
                    <div>
                        <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
                        <div class="property-details">
                            <p class="price">Rs. 12,400,000</p>
                            <span class="beds">6 beds</span>
                            <span class="baths">4 baths</span>
                            <span class="sqft">4,250 sqft.</span>
                            <address>
                                480 12th, phase 14, Bahria town,rawalpindi
                            </address>
                        </div>
                    </div>
                    <div>
                        <img src="https://onclickwebdesign.com/wp-content/uploads/property_2.jpg" alt="Property 1" />
                        <div class="property-details">
                            <p class="price">Rs. 8,400,000</p>
                            <span class="beds">6 beds</span>
                            <span class="baths">4 baths</span>
                            <span class="sqft">4,250 sqft.</span>
                            <address>
                                480 12th, Unit 14, DHA, CA
                            </address>
                        </div>
                    </div>
                    <div>
                        <img src="https://onclickwebdesign.com/wp-content/uploads/property_3.jpg" alt="Property 1" />
                        <div class="property-details">
                            <p class="price">Rs. 6,400,000</p>
                            <span class="beds">6 beds</span>
                            <span class="baths">4 baths</span>
                            <span class="sqft">4,250 sqft.</span>
                            <address>
                                480 12th, Unit 14, New City, CA
                            </address>
                        </div>
                    </div>
                    <div>
                        <img src="https://onclickwebdesign.com/wp-content/uploads/property_4.jpg" alt="Property 1" />
                        <div class="property-details">
                            <p class="price">Rs. 9,400,000</p>
                            <span class="beds">6 beds</span>
                            <span class="baths">4 baths</span>
                            <span class="sqft">4,250 sqft.</span>
                            <address>
                                480 12th, Unit 14, Wah Model Town, CA
                            </address>
                        </div>
                    </div>
                    <div>
                        <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
                        <div class="property-details">
                            <p class="price">Rs. 5,400,000</p>
                            <span class="beds">6 beds</span>
                            <span class="baths">4 baths</span>
                            <span class="sqft">4,250 sqft.</span>
                            <address>
                                480 12th, Unit 14, Nova city, CA
                            </address>
                        </div>
                    </div>
                </div>
                <button class="rounded">View All Property Listings</button>
            </div>
        </section>

        <section id="agents">
            <div class="container">
                <h2>Agents</h2>
                <p class="large-paragraph">We have highly rated dealers and agents of Pakistan.</p>
                <div class="flex">
                    <div class="card">
                        <img
                            src="https://scontent.fisb6-2.fna.fbcdn.net/v/t1.6435-9/52851283_255434405361401_3676486576537337856_n.jpg?_nc_cat=102&ccb=1-6&_nc_sid=174925&_nc_eui2=AeHT_eY1ShKK9gy2yUcl3MogkuxKTjr-nYSS7EpOOv6dhOfYJGsdHPX8wdLKzl4Ba9p5z44L__q0AU-cNDTanKQL&_nc_ohc=nl5KgdiAyXYAX_vYq0B&_nc_ht=scontent.fisb6-2.fna&oh=00_AT-sbsO_HLMDNop2X9vZRpgR9ov2BxOCZ4XwYubUDksnyg&oe=62A93212" />
                        <h3>Hamza Siddique</h3>
                        <p>Real Estate Agent</p>
                    </div>
                    <div class="card">
                        <img
                            src="https://scontent.fisb6-1.fna.fbcdn.net/v/t39.30808-6/275454519_3285313128370452_4479946261481458907_n.jpg?_nc_cat=107&ccb=1-6&_nc_sid=09cbfe&_nc_eui2=AeEWaGmV2x-zDr6JfC67_ICmKo03nyT4o6UqjTefJPijpc_QT_PljqWax6jJh6gNBq7utaTsT0zVZa3L7iNlyW7D&_nc_ohc=CfIPoflkRmYAX9drKvD&tn=chai6v_3gWNm2HlK&_nc_ht=scontent.fisb6-1.fna&oh=00_AT95iT9Pi_D51HUHf3UJwvgYjaRvMLq2U2PmB9F2A6rBLA&oe=62896C18" />
                        <h3>Fasih Ur Rehman</h3>
                        <p>Real Estate Agent</p>
                    </div>
                    <div class="card">
                        <img
                            src="https://scontent.fisb6-2.fna.fbcdn.net/v/t39.30808-1/278690870_3829989187225700_7538446131725822027_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-6&_nc_sid=7206a8&_nc_eui2=AeHyWJ7o85HGsMFWe45ZpCcRrjheI9fDpfquOF4j18Ol-sjS6rjVVRDue4Ci2wrnbimrt7PiZZov4NxMiXcvwK9F&_nc_ohc=_W-l2q2MFCgAX-dbar_&_nc_ht=scontent.fisb6-2.fna&oh=00_AT-cYzobJ4fpl7qA6bffBkqTr3uK-qlexSi3LCUauQ9WSg&oe=628820FC" />
                        <h3>Zargham Ullah Khan</h3>
                        <p>Real Estate Agent</p>
                    </div>
                    <div class="card">
                        <img
                            src="https://scontent.fisb6-2.fna.fbcdn.net/v/t39.30808-1/277554181_5166335143433698_3361523694986897452_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-6&_nc_sid=7206a8&_nc_eui2=AeEZB9y_XrAmK81IEuJhujSb2G3-beE7qUfYbf5t4TupR_-fi_s6-0hUvurreUlJxcBON1-kmZIAAs_ZYsGAGr_a&_nc_ohc=vinNSjXOB64AX84x4Uk&_nc_oc=AQkLnrLuSpNgPJdennimJXcWs2bhhD2-nPakdCbNU6_iEooP7TX3KoPqz4XXORghGno&_nc_ht=scontent.fisb6-2.fna&oh=00_AT8fp4aRLj_4_jxxnk2rsUlWMoDVSYn5fPia19FLbZ46cg&oe=6287B28C" />
                        <h3>Ali Nadeem</h3>
                        <p>Real Estate Agent</p>
                    </div>

                </div>
            </div>
        </section>

        <section id="the-best">
            <div class="flex container">
                <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
                <div>
                    <h2>We Are the Best Real Estate Company</h2>
                    <p class="large-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi
                        voluptas impedit Quo suscipit omnis iste velit maxime.</p>
                    <ul>
                        <li>Placeat maxime animi minus</li>
                        <li>Placeat maxime animi minus</li>
                        <li>Placeat maxime animi minus</li>
                        <li>Placeat maxime animi minus</li>
                        <li>Placeat maxime animi minus</li>
                    </ul>
                    <button class="rounded">Learn More</button>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <h2>Services</h2>
                <div class="flex">
                    <div>
                        <div class="fas fa-home"></div>
                        <div class="services-card-right">
                            <h3>Search Property</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div>
                        <div class="fas fa-dollar-sign"></div>
                        <div class="services-card-right">
                            <h3>Buy Property</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div>
                        <div class="fas fa-chart-line"></div>
                        <div class="services-card-right">
                            <h3>Investing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div>
                        <div class="fas fa-building"></div>
                        <div class="services-card-right">
                            <h3>List a Property</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div>
                        <div class="fas fa-search"></div>
                        <div class="services-card-right">
                            <h3>Property Locator</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div>
                        <div class="fas fa-mobile-alt"></div>
                        <div class="services-card-right">
                            <h3>Stated Apps</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                                eligendi at.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">

        </section>

        <section id="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="flex">
                    <div id="form-container">
                        <h3>Contact Form</h3>
                        <form>
                            <label for="name">Name</label>
                            <input type="text" id="name" />
                            <label for="email">Email</label>
                            <input type="text" id="email" />
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" />
                            <label for="message">Message</label>
                            <textarea id="message">Write your message here..</textarea>
                            <button class="rounded">Send Message</button>
                        </form>
                    </div>
                    <div id="address-container">
                        <label>Address</label>
                        <address>
                            A-17, First floor, commercial hub, sector B, Phase 2, New City, Wah Cantt.
                        </address>
                        <label>Phone</label>
                        <a href="#">232-232-2323</a>
                        <label>Email Address</label>
                        <a href="#">ouremail@domain.com</a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <small>
                Copyright &copy; 2019 All rights reserved | This template is made by <span class="fa fa-heart"></span>
                Buddies
            </small>
        </footer>
    </body>

</html>

<style>
    body {
        font-family: "Roboto", "Helvetica", "Sans-serif";
        margin: 0;
        padding: 0;
        font-size: 1rem;
        font-weight: 400;
        color: #777;
        line-height: 1.7;
    }

    * {
        outline: none;
    }

    *:not(.slick-track):not(.slick-list) {
        transition: 0.4s;
    }

    .container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .flex {
        display: flex;
        justify-content: space-between;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        margin: 0;
        padding: 0;
    }

    h1,
    h2 {
        font-family: "Playfair Display", serif;
        font-weight: 800;
    }

    h1 {
        font-size: 3rem;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    h2 {
        font-size: 2.5rem;
        color: #f69314;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    h3 {
        font-size: 1.4rem;
        font-weight: 300;
    }

    h4 {
        font-size: 1.2rem;
        font-weight: 300;
    }

    h5 {
        font-size: 1rem;
        font-family: "Playfair Display", serif;
    }

    p {
        margin: 0 0 1rem;
    }

    button.rounded {
        background: #f69314;
        border: none;
        color: #fff;
        font-size: 16px;
        border-radius: 30px;
        padding: 10px 30px;
        line-height: 1.5;
        cursor: pointer;
    }

    p.large-paragraph {
        font-size: 1.25rem;
        font-weight: 300;
    }

    /* end: global styles */
    /* start: header styles */
    #header-hero-container {
        min-height: 600px;
        height: calc(100vh);
        position: relative;
    }

    header {
        background: transparent;
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: fixed;
        width: 100%;
        z-index: 3;
    }

    #logo {
        font-family: "Roboto", "Helvetica", "Sans-serif";
        font-size: 1.7rem;
        font-weight: 800;
        color: #fff;
        text-decoration: none;
        position: relative;
        top: 4px;
    }

    .hamburger-menu {
        background-color: transparent;
        border: 1px solid #fff;
        padding: 3px 5px;
        width: 30px;
        cursor: pointer;
        margin-top: 10px;
        display: none;
    }

    .hamburger-menu .strip {
        display: block;
        height: 1px;
        background-color: #fff;
        margin: 4px 0;
    }

    header ul {
        list-style-type: none;
    }

    header ul li {
        display: inline-block;
        margin: 0 15px;
    }

    #close-flyout {
        display: none;
    }

    header ul li a {
        color: #999;
        font-size: 16px;
        text-decoration: none;
    }

    header ul.is-sticky li a {
        color: #000;
    }

    header ul li a:hover,
    header ul li a.active {
        color: #fff;
    }

    header ul.is-sticky li a:hover,
    header ul.is-sticky li a.active {
        color: #f69314;
    }

    /* end: header styles */
    /* start: hero section styles */
    #hero {
        background: url('https://onclickwebdesign.com/wp-content/uploads/hero_1.jpg') center center no-repeat;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        height: 100%;
        width: 100%;
    }

    #hero .fade {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(52, 58, 64, 0.9);
        z-index: 1;
    }

    #hero .hero-text {
        position: absolute;
        top: 50%;
        margin: -75px auto 0;
        left: 0;
        right: 0;
        z-index: 2;
        color: #fff;
        width: 500px;
        text-align: center;
    }

    #hero .hero-text p {
        line-height: 1.5em;
        font-weight: 300;
        font-size: 1rem;
    }

    /* end: hero section styles */
    /* start: how it works styles */
    #how-it-works {
        padding: 3rem 0;
        background: #f8f9fa;
        text-align: center;
    }

    #how-it-works h2 {
        margin-bottom: 3rem;
    }

    #how-it-works .flex>div {
        width: 30%;
    }

    #how-it-works h4 {
        color: #343a40;
        margin-top: 1rem;
    }

    #how-it-works span.fas {
        color: #f69314;
        font-size: 35px;
    }

    /* end: how it works styles */
    /* start: properties styles */
    #properties {
        margin: 4rem 0 8rem;
        position: relative;
    }

    #properties h2 {
        margin-bottom: 3rem;
    }

    #properties .container {
        position: relative;
    }

    #properties .container:before {
        content: "/";
        position: absolute;
        right: 80px;
        top: 18px;
        color: #999;
    }

    #properties-slider a.slick-arrow {
        color: #000;
        position: absolute;
        top: -78px;
        right: 0;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        text-decoration: none;
    }

    #properties-slider a.slick-prev {
        right: 80px;
    }

    #properties-slider .slick-slide {
        padding: 0 15px;
    }

    #properties-slider img {
        width: 100%;
        display: block;
    }

    #properties-slider .property-details {
        padding: 1rem;
    }

    #properties-slider .price {
        font-size: 1.2rem;
        color: #343a40;
        font-weight: 800;
        margin: 0 0 0.5rem 0;
    }

    #properties-slider .property-details span {
        font-size: 0.8rem;
        padding-right: 15px;
    }

    #properties-slider .property-details span.baths {
        padding-left: 10px;
    }

    #properties-slider .property-details span.sqft {
        padding-right: 0;
        padding-left: 10px;
    }

    #properties-slider .property-details span.beds,
    #properties-slider .property-details span.baths {
        border-right: 1px solid #888;
    }

    #properties-slider .property-details address {
        font-size: 0.8rem;
        font-style: normal;
        margin-top: 0.5rem;
    }

    #properties button.rounded {
        display: block;
        margin: 2rem auto 0;
        width: 350px;
    }

    /* end: properties styles */
    /* start: agents styles */
    #agents {
        margin: 4rem 0 6rem;
        padding: 0 0 6rem;
        border-bottom: 1px solid #ccc;
    }

    #agents p.large-paragraph {
        width: 50%;
        margin-bottom: 4rem;
    }

    #agents .flex {
        flex-wrap: wrap;
        padding: 0;
    }

    #agents .card {
        width: 32%;
        background: #f0f0f0;
        margin-bottom: 2rem;
    }

    #agents .card img {
        width: 100%;
    }

    #agents .card h3 {
        font-family: "Playfair Display", serif;
        color: #000;
    }

    #agents .card h3,
    #agents .card p {
        padding-left: 1rem;
    }

    /* end: agents styles */
    /* start: best real estate company styles */
    #the-best {
        margin: 2rem 0;
    }

    #the-best .flex>img {
        width: 47%;
    }

    #the-best .flex>div {
        width: 40%;
    }

    #the-best ul {
        padding-left: 20px;
        margin-bottom: 4rem;
    }

    #the-best ul li {
        margin: 10px 0;
    }

    /* end: best real estate company styles */
    /* start: services styles */
    #services {
        background: #f8f9fa;
        padding: 6rem 0;
        margin: 8rem 0;
        border-bottom: 1px solid #dee2e6;
    }

    #services h2 {
        text-align: center;
        margin-bottom: 3rem;
    }

    #services .flex {
        flex-wrap: wrap;
    }

    #services .flex>div {
        width: 30%;
        margin-bottom: 2rem;
    }

    #services .flex>div .fas {
        color: #f69314;
        font-size: 40px;
        float: left;
        margin-top: 15px;
        width: 20%;
        text-align: center;
    }

    #services .flex>div .services-card-right {
        float: right;
        width: 75%;
    }

    #services .flex>div a {
        color: #f69314;
        text-decoration: none;
    }

    #services .flex>div a:hover {
        text-decoration: underline;
    }

    /* end: services styles */
    /* start: testimonials styles */
    #testimonials {
        margin-bottom: 8rem;
    }

    #testimonials h2 {
        text-align: center;
    }

    #testimonials-slider .slick-slide {
        text-align: center;
    }

    #testimonials-slider blockquote {
        font-size: 1.5rem;
        font-style: italic;
        margin: 1rem auto 3rem;
        max-width: 740px;
    }

    #testimonials-slider .testimonials-caption {
        width: 200px;
        margin: 0 auto;
    }

    #testimonials-slider .testimonials-caption img {
        float: left;
        border-radius: 30px;
        width: 60px;
    }

    .testimonials-caption p {
        position: relative;
        top: 13px;
        font-size: 1.2rem;
    }

    #testimonials-slider .slick-arrow {
        text-decoration: none;
        position: absolute;
        font-size: 40px;
        color: #222;
        top: 50%;
        margin-top: -35px;
        z-index: 1;
    }

    #testimonials-slider .slick-next {
        right: 0;
    }

    /* end: testimonials styles */
    /* start: contact us styles */
    #contact {
        background: #f8f9fa;
        padding: 4rem 0 8rem;
    }

    #contact h2 {
        text-align: center;
        margin-bottom: 4rem;
    }

    #form-container {
        width: 58%;
        background: #fff;
        padding: 3rem;
        box-sizing: border-box;
        height: 0%;
    }

    #form-container h3 {
        color: #000;
        font-family: "Playfair Display", serif;
        margin-bottom: 2rem;
    }

    #form-container label {
        display: block;
        color: #000;
        margin-top: 1rem;
    }

    #form-container input,
    #form-container textarea {
        display: block;
        border-radius: 20px;
        padding: 10px;
        border: 1px solid #ced4da;
        width: 100%;
        box-sizing: border-box;
        height: 43px;
        font-family: "Roboto", "Helvetica", "Sans-serif";
        font-size: 1rem;
        color: #495057;
    }

    #form-container textarea {
        height: 170px;
        margin-bottom: 2rem;
        resize: none;
    }

    #address-container {
        width: 38%;
        background: #fff;
        padding: 1.5rem;
        box-sizing: border-box;
        height: 0%;
    }

    #address-container label {
        font-weight: 700;
        display: block;
        margin-top: 2rem;
    }

    #address-container label:first-child {
        margin-top: 0;
    }

    #address-container address {
        margin-bottom: 1.5rem;
        font-style: normal;
    }

    #address-container a {
        text-decoration: none;
        color: #f69314;
    }

    #address-container a:hover {
        text-decoration: underline;
    }

    /* end: contact us styles */
    /* start: footer styles */
    footer {
        background: #333;
        padding: 8rem 0;
    }

    footer .flex {
        padding-bottom: 6rem;
        border-bottom: 1px solid #777;
    }

    footer h5 {
        color: #fff;
        margin-bottom: 1rem;
        font-weight: 300;
    }

    footer h5.follow-us {
        margin-top: 1rem;
    }

    footer .footer-about {
        width: 47%;
    }

    footer .footer-about p {
        width: 65%;
    }

    footer .footer-quick-links {
        width: 16%;
    }

    footer .footer-quick-links ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    footer .footer-quick-links ul li {
        margin: 10px 0;
    }

    footer .footer-quick-links ul li a {
        color: #777;
        text-decoration: none;
    }

    footer .footer-quick-links ul li a:hover {
        color: #fff;
    }

    footer .footer-subscribe {
        width: 35%;
    }

    #subscribe-container {
        position: relative;
    }

    footer .footer-subscribe input {
        border-radius: 30px;
        height: 43px;
        font-family: "Roboto", "Helvetica", "Sans-serif";
        border: 1px solid #6c757d;
        background-color: transparent;
        font-size: 1rem;
        padding: 10px;
        color: #fff;
        box-sizing: border-box;
        width: 80%;
    }

    footer button.right-rounded {
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        background: #f69314;
        font-size: 16px;
        color: #000;
        padding: 10px 30px 9px;
        line-height: 1.5;
        cursor: pointer;
        border: none;
        position: absolute;
        right: 0;
    }

    footer button.right-rounded:hover {
        background: #fff;
    }

    footer .footer-subscribe ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    footer .footer-subscribe ul li {
        display: inline-block;
        margin: 0 16px;
    }

    footer .footer-subscribe ul li:first-child {
        margin-left: 0;
    }

    footer .footer-subscribe ul li a {
        text-decoration: none;
        color: #777;
    }

    footer .footer-subscribe ul li a:hover {
        color: #fff;
    }

    footer small {
        margin-top: 3rem;
        font-size: 1rem;
        display: block;
        text-align: center;
    }

    footer small a {
        color: #777;
        text-decoration: none;
    }

    footer small a:hover {
        color: #fff;
    }

    /* end: footer styles */
    /* start: media queries */
    @media (max-width: 991px) {
        #logo {
            top: 1px;
        }

        #nav-toggle {
            display: block;
        }

        nav ul {
            position: fixed;
            background: #fff;
            right: -100%;
            top: 0;
            margin: 0;
            padding: 2rem;
            height: 100%;
            width: 300px;
            box-sizing: border-box;
            box-shadow: 5px 0 10px 3px #999;
        }

        #close-flyout {
            position: absolute;
            right: 2rem;
            top: 1.5rem;
            font-size: 30px;
            color: #777;
            cursor: pointer;
            display: block;
            line-height: 1;
            margin: 0;
        }

        nav ul li {
            display: block;
            margin: 20px 0;
        }

        nav ul li:first-child {
            margin-top: 50px;
        }

        nav ul li a {
            font-size: 20px;
            color: #212529;
        }

        nav ul li a.active,
        nav ul li a:hover {
            color: #f69314;
        }
    }

    @media (max-width: 767px) {
        h1 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.75rem;
        }

        h3 {
            font-size: 1.2rem;
        }

        .large-paragraph {
            font-size: 1rem;
        }

        p {
            font-size: 0.8rem;
        }

        .container {
            max-width: 540px;
        }

        #hero .hero-text {
            width: 400px;
        }

        #agents .card {
            width: 49%;
        }

        #the-best .flex>img {
            display: none;
        }

        #the-best .flex>div {
            width: 100%;
        }

        #testimonials-slider p {
            font-size: 1.2rem;
        }

        #properties .container:before {
            top: 2px;
            font-size: 0.85rem;
        }

        #properties-slider a.slick-arrow {
            font-size: 0.85rem;
        }

        #properties button.rounded {
            width: 300px;
        }

        #services .flex>div {
            width: 48%;
        }

        #contact .flex {
            flex-wrap: wrap;
        }

        #form-container {
            width: 100%;
            padding: 2rem;
        }

        #address-container {
            width: 100%;
            margin-top: 2rem;
        }

        footer {
            padding: 6rem 0;
        }

        footer .flex {
            flex-wrap: wrap;
        }

        footer .flex>div {
            width: 100%;
            margin-top: 1rem;
        }

        footer .flex>div:first-child {
            margin-top: 0;
        }

        footer .footer-about p {
            font-size: 1rem;
            width: 100%;
        }

        footer .footer-subscribe input {
            width: 90%;
        }

        footer h5.follow-us {
            margin-top: 2rem;
        }
    }

    @media (max-width: 500px) {
        #hero .hero-text {
            width: 330px;
        }

        #agents {
            margin: 4rem 0 3rem;
            padding: 0 0 3rem;
        }

        #agents .card {
            width: 100%;
        }

        #agents p.large-paragraph {
            width: 100%;
        }

        #how-it-works .flex {
            display: block;
        }

        #how-it-works .flex>div {
            width: 100%;
            margin-top: 2rem;
        }

        #properties button.rounded {
            width: 250px;
        }

        #services {
            padding: 4rem 0 3rem;
            margin: 4rem 0;
        }

        #services .flex>div {
            width: 100%;
        }

        #testimonials {
            margin-bottom: 4rem;
        }

        #testimonials-slider p {
            font-size: 1rem;
        }

        #testimonials-slider .slick-arrow {
            display: none !important;
        }

        #contact {
            padding: 4rem 0;
        }

        #contact h2 {
            margin-bottom: 2rem;
        }

        #form-container {
            padding: 1.5rem;
        }

        footer {
            padding: 4rem 0;
        }
    }

    @media (max-width: 400px) {
        #hero .hero-text {
            max-width: 275px;
            width: 100%;
        }

        #properties button.rounded {
            max-width: 250px;
            width: 100%;
        }

        nav ul {
            width: 200px;
        }
    }
</style>