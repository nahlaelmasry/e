<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
</head>
<body>
    <style>
        .main-section{
    background-color: #F8F8F8;
}
.dropdown{
    float:right;
    padding-right: 30px;
}
.btn{
    border:0px;
    margin:10px 0px;
    box-shadow:none !important;
}
.dropdown .dropdown-menu{
    padding:20px;
    top:30px !important;
    width:350px !important;
    left:-110px !important;
    box-shadow:0px 5px 30px black;
}
.total-header-section{
    border-bottom:1px solid #d2d2d2;
}
.total-section p{
    margin-bottom:20px;
}
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail-product p{
    margin:0px;
    color:#000;
    font-weight:500;
}
.cart-detail .price{
    font-size:12px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#C22DC;
}
.checkout{
    border-top:1px solid #d2d2d2;
    padding-top: 15px;
}
.checkout .btn-primary{
    border-radius:50px;
    height:50px;
}
.dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
 
.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
 
.thumbnail img {
    width: 100%;
}
 
.thumbnail .caption{
    margin: 7px;
}
 
.page {
    margin-top: 50px;
}
 
.btn-holder{
    text-align: center;
}
 
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
        width:20%;
        display: inline !important;
    }
    .actions .btn{
        width:36%;
        margin:1.5em 0;
    }
 
    .actions .btn-info{
        float:left;
    }
    .actions .btn-danger{
        float:right;
    }
 
    table#cart thead { display: none; }
    table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
    table#cart tbody tr td:first-child { background: #333; color: #fff; }
    table#cart tbody td:before {
        content: attr(data-th); font-weight: bold;
        display: inline-block; width: 8rem;
    }
 
 
 
    table#cart tfoot td{display:block; }
    table#cart tfoot td .btn{display:block;}
 
}

/*------------------------------------*\
	FOOTER
\*------------------------------------*/

.footer {
	width: 100%;
	padding-top: 50px;
	padding-bottom: calc(100px - 30px);
	text-align: center;
	color: $gallery;
	background-color: $cod-gray;
}

.logo--footer,
.footer__subheading {
	display: block;
}

.logo--footer {
	padding-top: 5px;
	padding-bottom: 5px;
	margin-top: -5px;
	margin-bottom: -5px;
}

.footer__subheading {
	margin-top: 10px;
	font-size: 18px;
	font-weight: 800;
	line-height: 1.2;
	text-transform: uppercase;
	color: $silver-chalice;
}

.footer .footer__subheading:first-of-type { margin-top: 30px; }

.footer__subheading a:hover { text-decoration: underline; }

.footer__subheading a,
.footer__subheading a:link,
.footer__subheading a:hover,
.footer__subheading a:visited {
	color: $silver-chalice;
}

.footer__links {
	margin-top: 60px;
	text-align: left;
}

.links__item { margin-bottom: 30px; }

.links__title {
	font-size: 18px;
	font-weight: 900;
	text-transform: uppercase;
}

.quick-link,
.social-group {
	margin-top: 25px;
}

.quick-link ul li:nth-child(n+2) { margin-top: 10px; }

.quick-link a {
	font-size: 18px;
	line-height: 1.2;
	text-transform: uppercase;
}

.quick-link a,
.quick-link a:link,
.quick-link a:hover,
.quick-link a:visited {
	color: $gallery;
}

.quick-link a:hover,
.social:hover {
	opacity: .7;
}

.social-group { white-space: nowrap; }

.social {
	display: inline-block;
	width: 30px;
	height: 30px;
}

.social:nth-child(n+2) { margin-left: calc(10px - 4px); }

.social--facebook { background: url("http://www.jamesarc.com/work/wheelz/assets/img/sprites-social.png") 0 0; }

.social--linkedin { background: url("http://www.jamesarc.com/work/wheelz/assets/img/sprites-social.png") -30px 0; }

.social--instagram { background: url("http://www.jamesarc.com/work/wheelz/assets/img/sprites-social.png") -60px 0; }

.social--twitter { background: url("http://www.jamesarc.com/work/wheelz/assets/img/sprites-social.png") -90px 0; }

.map {
	width: 100%;
	opacity: .7;
}

.map:hover { opacity: .5; }




 
    </style>
 


<div class="container">
 
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="/">The One</a>
                    <a class="navbar-brand" href="/about">About</a>
                    <a class="navbar-brand" href="/statistics">Statistics</a>
                    <a class="navbar-brand" href="/ourteam">Our Team</a>
                   
            
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                        </div>
 
                        <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        @endif
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
          </nav>
        </div>
    </div> 
</div>
   

<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')
 
</body>
</html>
 