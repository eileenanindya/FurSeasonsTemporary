<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $products->product_name }} | Product Details</title>
    <link rel="stylesheet" href="{{ asset('css/detailproduct.css') }}">

</head>
<body>
    <div class="main-container">    
        <nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href="/"><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                </div>
                <div class="nav-icon">
                    <a href="#"><img src="{{ URL('assets\search.svg')}}" alt="search-icon"></a>
                    <a href="Cart"><img src="{{ URL('assets\shopping-cart.svg')}}" alt="cart-icon"><span class="badge bg-danger"> {{ count((array) session('cart')) }}</span></a>
                    <a href="Profile"><img src="{{ URL('assets\user.svg')}}" alt="user-icon"></a>
                </div>
            </div>
        </nav>

        <!--  main content  -->
        <section class="dproduct">
            <div class="section-container">
                <div class="details-container">
                    <div class="image-row">
                    <img class="img-fluid w-100" src="{{ asset('product/' . $products->product_pic) }}" alt="info-image" width="280" height="320">
                    </div>
                    <div class="desc-container">
                        <h3>{{$products->product_name}}</h3>
                        <h2>{{$products->product_price}}</h2>
                        <p>{{$products->product_desc}}</p>
                        <hr class="divider">
                        <span> Pick the size</span>
                        <select class="select-size">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <form action="{{ URL('add_cart', $products->id) }}" method="Post">
                        @csrf
                        <div class="add-cart">
                            <input type="number" name="product_quantity" value="1" min="1" required>
                        <button type="submit">Add to Cart</button>
                        </div>
                    </form>

                    </div>
                </div>
                
            </div>
        </section>

        <!--  end main content  -->
        
        @include('components.footer')
        <!-- <footer>
            <div class="content">
                <div class="info-footer">
                    <div class="info-img">
                        <img src="assets/logoimg.png" alt="LogoImg" width="45">
                        <img src="assets/logolight.png" alt="Logo-light" width="125"><br>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum nobis obcaecati perferendis mollitia ullam fugiat sit! Unde eligendi aliquid suscipit sapiente</p>
                    <div class="icon-footer">
                        <a href="https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0"><img src="assets/whatsappicon.svg" alt="WhatsApp"></a>
                        <a href="https://www.instagram.com/furseasons.id/"><img src="assets/igicon.svg" alt="Instagram"></a>
                        <a href="https://shopee.co.id/furseasons.id"><img src="assets/shopeeicon.svg" alt="Shopee"></a>
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav-footer">
                    <ul class="nav-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="posts.html">Posts</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </nav>  

            <div id="horizontal-line"></div>
            <div class="copyright">
                <p>Copyright &#169; 2024 Fur Seasons. All Rights Reserved.</p>
            </div>
        </footer> -->
    </div>

    <script src="js/script.js"></script>
</body>
</html>