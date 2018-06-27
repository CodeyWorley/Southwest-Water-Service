<!DOCTYPE html>
<html lang="en">
    <head>
      <title>South West Water Service</title>
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
      </style>
    </head>
    <body>
        <section>
            <!-- Navbar -->
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
        <!-- products -->
        <section>
            <div class="products-header text-center">
                <h1 style="color:#377def">Select A Service</h1>
                <h4 style="color:#757575">Need Help? Call us at 480.497.0111</h4>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body"><a href="/salt-potassium-contracts" title=""><img src="media/salt.png" class="img-responsive" style="width300vm" alt="Image"></a></div>
                            <div class="panel-footer text-center">Salt & Potassium Delivery</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body"><a href="/light-plumbing" title=""><img src="media/sink.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
                            <div class="panel-footer text-center">Light Plumbing</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body"><a href="/reverse-osmosis-contracts" title=""><img src="media/contracts.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
                            <div class="panel-footer text-center">Reverse Osmosis Maintenance</div>
                        </div>
                    </div>

                </div>
        </section>
        <section>
            <footer class="container-fluid text-center">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-2">
                        <h3><a href="/">Southwest <span style="color:#377def">Water</span> Service</a><h3>
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
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <p>© 2017 Southwest Water Service</p>
                    </div>
                    <div class="col-sm-2">
                        <p><a href="https://itechadvanced.com">Web Design By iTech</a></p>
                    </div>
                </div>
            </footer>
        </section>
    </body>
