<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css\service.css') }}">
</head>

<body>
    <div class="container">
        @include('components.navigation')
        <section id="about">
            <div class="section-container">
                <div class="about-details-container">
                    <div class="about-container">
                        <div class="details-container">
                        <div class="section__pic-container">
                            <img src="{{ URL('assets\services.png')}}" alt="AboutPicture" class="illustration" width="500">
                        </div>
                    </div>
                   
                    <div class="text-container">
                    <div class ="our"> 
                        <p>Our Services</p>
                        <h1>Hotel Services</h1>
                    </div>
                        <div class="desc-container">
                            <p><span>FUKU SUITE</span><br>
                            Rp00.000/night <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>

                    <!-- <div class="section__pic-container">
                            <img src="{{ URL('assets\greycat.png')}}" alt="AboutPicture" class="illustration" width="500">
                    </div>
                    <div class="text-container">
                        <div class="desc-container">
                            <p><span>FUKU SUITE</span><br>
                            Rp00.000/night <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div> -->

                </div>
            </div>
            <!-- <div class="abt-wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div> -->
        </section>

        <section id="yuki">
            <div class="yuki-desc-container">
                <div class="yuki-details-container">
                    <div class="yuki-container">
                        <div class="yuki-text-container ">
                        <div class="yuki-desc-container ">
                        <p><span>YUKI SUITE</span><br>
                            Rp00.000/night <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            
                        </div>
                    </div>
                    <div class="yuki-details-container">
                        <div class="yuki-section__pic-container">
                            <img src="{{ URL('assets\services.png')}}" alt="AboutPicture" class="illustration" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="facilities">
            <div class="facilities-section-container">
                <div class="facilities-details-container">
                    <div class="facilities-about-container">
                        <div class="facilities-desc-container">
                            <h1>Facilities</h1>
                            <p>Full AC | Air Purifier | Feeding Supplies | Cat Litter | Mineral<br>Water | Playtime under supervisor | Daily Report for Pawrents </p>
                                <!-- <p><span>Operational hours</span> </p>  -->
                                <div class="logo-footer">
                                  <div class="logo-img">
                            <!-- <img src="{{ URL('assets\logoimg.png')}}" alt="LogoImg" width="45">
                            <img src="{{ URL('assets\logolight.png')}}" alt="Logo-light" width="125"><br> -->
                        </div>
                        <div class="icon-footer">
                            <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}"><img src="{{ URL('assets/darkwhastsappicon.svg')}}" alt=""></a>
                            <p>Book now!</p>
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
        </section>

        <section id="grooming">
            <div class="grooming-section-container">
                <div class="grooming-details-container">
                    <div class="grooming-container">
                        <div class="grooming-details-container">
                            <div class="grooming-section__pic-container">
                                <img src="{{ URL('assets\services.png')}}" alt="AboutPicture" class="illustration" width="500">
                            </div>
                        </div>
                    </div>
                   
                    <div class="grooming-text-container">
                        <div class ="ourg"> 
                            <p>Our Services</p>
                            <h1>Grooming Services</h1>
                        </div>
                        <div class="grooming-desc-container">
                            <p><span>Lorem ipsum dolor</span><br>
                            Rp00.000/night <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="bawah">
            <div class="bawah-desc-container">
                <div class="bawah-details-container">
                    <div class="bawah-container">
                        <div class="bawah-text-container ">
                        <div class="bawah-desc-container ">
                        <p><span>YUKI SUITE</span><br>
                            Rp00.000/night <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            
                        </div>
                    </div>
                    <div class="bawah-details-container">
                        <div class="bawah-section__pic-container">
                            <img src="{{ URL('assets\services.png')}}" alt="AboutPicture" class="illustration" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
                <div class="content">
                    <div class="logo-footer">
                        <div class="logo-img">
                            <img src="{{ URL('assets\logoimg.png')}}" alt="LogoImg" width="45">
                            <img src="{{ URL('assets\logolight.png')}}" alt="Logo-light" width="125"><br>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum nobis obcaecati perferendis mollitia ullam fugiat sit! Unde eligendi aliquid suscipit sapiente</p>
                        <div class="icon-footer">
                            <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}"><img src="{{ URL('assets\whatsappicon.svg')}}" alt=""></a>
                            <a href="{{ URL('https://www.instagram.com/furseasons.id/') }}"><img src="{{ URL('assets\igicon.svg')}}" alt=""></a>
                            <a href="{{ URL('https://shopee.co.id/furseasons.id') }}"><img src="{{ URL('assets\shopeeicon.svg')}}" alt=""></a>
                        </div>
                    </div>
                    
                    <nav>
                        <div class="nav-footer">
                            <ul class="nav-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Catalog</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Posts</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div>
                    </nav>  
                    
                </div>
                <div id="horizontal-line"></div>
                <div class="copyright">
                    <p>Copyright &#169; 2024 Fur Seasons. All Rights Reserved.</p>
                </div>    
        </footer>

        
    </div>
</body>
</html>