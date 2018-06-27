<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Reverse Osmosis | Southwest Water Service</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
      <script src="js/bootstrap-dropdownhover.min.js"></script>
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="js/scripts.js">
	  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
      <style>
        div.products-header {
            padding: 20px;
            margin-bottom: 10px;
        }
        .h1, h1 {
            font-size: 50px;
            color: #377def;
        }
        div.panel:hover {
            border: 1px solid #bdbdbd;
            box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            cursor: pointer;
        }
        div.panel-footer {
            background-color: white;
            border-color: white;
            font-size: 20px;
        }
        .row {
            margin-left: -15px;
            margin-right: 0px;
            margin-bottom: 15px;
        }
        .form-control {
            width: 55%;
        }
        hr {
            border-top: 1px solid #377def;
        }
      </style>
    </head>
    <body>
        <!-- Scripts -->
        <section>
            <script>
                function changeProductImage() {
                    var image = document.getElementById("modelSelect").value;
                    document.getElementById("productImage").innerHTML = image;

                    //image
                    if (image == '<img src="media/hp-econo.png" class="img-responsive" alt="Health Point Econo">'){
                        document.getElementById("productDescription").innerHTML = "Our most economical system. For those who want high quality water treatment but do not need the extra filtration and large amounts of water pumped by our upgraded systems.";
                    }
                    if (image == '<img src="media/hp-25.png" class="img-responsive" alt="Health Point Plus 25">'){
                        document.getElementById("productDescription").innerHTML = "Our standard household system. For those who want high quality water treatment but do not need the extra filtration and large amounts of water pumped by our upgraded systems.";
                    }
                    if (image == '<img src="media/hp-50.png" class="img-responsive" alt="Health Point Plus 50">'){
                        document.getElementById("productDescription").innerHTML = "Our upgraded household system. For those who want the highest quality water treatment possible but do not need the large amounts of water pumped by our plus 100 system.";
                    }
                    if (image == '<img src="media/hp-100.png" class="img-responsive" alt="Health Point Plus 100">'){
                        document.getElementById("productDescription").innerHTML = "Our VIP system. For those who want the highest quality water treatment on the market with more than enough water pumped for large household needs.";
                    }
                }
            </script>
        </section>

        <!-- Navbar -->
        <section>
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">Southwest <span style="color:#377def">Water</span> Service</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="./products">PRODUCTS</a></li>
                            <li><a href="./services">SERVICES</a></li>
                            <li><a href="./faq">FAQ</a></li>
                            <li><a href="./about">ABOUT</a></li>
                            <li><a href="./contact">CONTACT</a></li>
                    </ul>
                </div>
              </div>
            </nav>
        </section>
        <!-- Content -->
        <section>
            <div class="products-header text-center">
                <h1>Reverse Osmosis</h1>
                <h4 style="color:#757575">Need Help? Call us at 480.497.0111</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <div class="product-image">
                            <p id="productImage"><img src="media/hp-25.png" class="img-responsive" alt="Health Point Plus 25"></p>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-6">
                        <div class="product-name">
                            <select id="modelSelect" class="form-control" onchange="changeProductImage()">
                                <option value='<img src="media/hp-25.png" class="img-responsive" alt="Health Point Plus 25">'>Health Point Plus 25
                                <option value='<img src="media/hp-econo.png" class="img-responsive" alt="Health Point Econo">'>Health Point Econo
                                <option value='<img src="media/hp-50.png" class="img-responsive" alt="Health Point Plus 50">'>Health Point Plus 50
                                <option value='<img src="media/hp-100.png" class="img-responsive" alt="Health Point Plus 100">'>Health Point Plus 100
                            </select>

                            <p id="productDescription" style="margin-top:15px">Our standard household system. For those who want high quality water treatment but do not need the extra filtration and large amounts of water pumped by our upgraded systems.</p>

                        </div>
                        <hr>
                        <div class="product-info">
                            <ul>
                                <li>Supreme quality - designed, and assembled in USA to guarantee your health & safety.</li>
                                <li>Removes up to 99% of contaminants including arsenic, chlorine, lead, fluoride, heavy metals, bacteria, and 1000+ other harmful materials.</li>
                                <li>Premium long-lasting filters used to treat tap water & well/municipal water, providing clean, refreshing crisp tasting water superior to bottled water for many uses.</li>
                                <li>Certified manufacturer guaranteeing trouble free, noise-free, and long lasting pure drinking water.</li>
                                <li>System comes with 100% Lead-Free chrome faucet, plus FDA Certified JG Food grade tubing. Custom faucet optional.</li>
                                <li>Proffesional installation with parts and labor warranty gauranteed.</li>
                            </ul>
                            <hr>
                            <p id="pText">
                                The Health Point water filtration system provides you with water that exceeds the quality of most bottled water, at a fraction of the price and eliminates the inconvenience of heavy bottles and containers.
                            </p>
                            <p>
                                Because of our location, AZ is known for using many chemicals to treat public water, most times even using dangerous amounts to keep the bacteria caused from the desert heat at bay. Many things can affect the quality and purity of well and municipal water such as water usage, temperature, and even weather. Household plumbing can also introduce contaminants such as rust and lead into your tap water. However the Health Point water filtration system takes care of all those contaminants right when you access your water.
                            </p>
                            <p>
                                The Health Point water filtration system is a must have for all households in the valley. Don't wait, get healthy water now!
                            </p>
                        </div>
                        <hr>
                        <div class="product-buttons">
                            <div class="col-md-5 col-lg-4 move-down">
                                <a class="btn btn-primary btn-block gtm-appt-btn" href="./contact">Get Quote</a>
                            </div>
                            <div class="col-md-4 col-lg-4 visible-xs move-down">
                                <a itemprop="telephone" id="telephone" class="btn btn-default btn-block btn-outline" href="tel:+4804970111"><span class="fa fa-phone"></span> &nbsp; 480.497.0111</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section>
            <footer class="container-fluid text-center">
                <div class="row">
                    <h3><a href="/">Southwest <span style="color:#377def">Water</span> Service</a><h3>
                </div>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-2">
                            <ul style="list-style-type: none;">
                                <li><a style="font-size: 18px;" href="./products">Products</a></li>
                                <li><a href="./reverse-osmosis">Reverse Osmosis</a></li>
                                <li><a href="./water-heaters">Water Heaters</a></li>
                                <li><a href="./water-softeners">Water Softeners</a></li>
                                <li><a href="./whole-house-carbon">Whole House Carbon</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul style="list-style-type: none">
                                <li><a style="font-size: 18px;" href="./services">Services</a></li>
                                <li><a href="./salt-potassium-contracts">Salt Contracts</a></li>
                                <li><a href="./light-plumbing">Light Plumbing</a></li>
                                <li><a href="./reverse-osmosis-contracts">RO Contracts</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul style="list-style-type: none">
                                <li><a style="font-size: 18px;" href="./contact">Contact</a></li>
                                <li><a href="./faq">FAQ</a></li>
                                <li><a href="./about">About</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul style="list-style-type: none">
                                <li><a href="https://goo.gl/maps/xFmQCS7SrGq">Google</a></li>
                                <li><a href="https://www.facebook.com/swwaterservice">Facebook</a></li>
                                <li><a href="https://www.yelp.com/biz/southwest-water-service-mesa">Yelp</a></li>
                                <li><a href="https://www.angieslist.com/companylist/us/az/gilbert/southwest-water-service-reviews-7827379.htm">Angies</a></li>
                                <li><a href="https://www.alignable.com/gilbert-az/southwest-water-services">Alignable</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>


                <div class="row">
                    <div class="col-sm-4">
                        <p>© 2017 Southwest Water Service</p>
                    </div>
                    <div class="col-sm-4">
                        <p>LICENSED PLUMBER ROC 199376 - BONDED - INSURED</p>
                    </div>
                    <div class="col-sm-4">
                        <p><a href="https://itechadvanced.com">Web Design By iTech</a></p>
                    </div>
                </div>
            </footer>
        </section>
    </body>
