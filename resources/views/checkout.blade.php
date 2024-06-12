
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Laravel 10 How To Integrate Stripe Payment Gateway</title> -->
    <link rel="stylesheet" href="{{ asset('css\checkout.css') }}">
</head>

<body>
    <div class="container">
        @include('components.navigation')

        <div class='row'>
            <h1>Checkout</h1>
            <div class='col-md-12'>
                <div class="card">
                    <!-- <div class="card-header">
                    test
                    </div> -->
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:30%">Products you ordered</th>
                            <th style="width:20%">Unit Price</th>
                            <th style="width:8%">Amount</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:1%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $cart)
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ asset('assets/products')}}/{{ $cart->product_pic }}" alt="Product1" class="product-img"></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">Asus Vivobook 17 Laptop - Intel Core 10th</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$6</td>
                            <td data-th="Quantity">
                                <input type="number" value="1" class="form-control quantity cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" class="text-center">$6</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                
                        <tr>
                            <td colspan="5" style="text-align:right;">
                            <div class="garis-horizontal">
                            </div>
                            <h3><strong>Total $6</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="/transaction" method="POST">
                                <!-- <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a> -->
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type='hidden' name="total" value="6">
                                <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>

        
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