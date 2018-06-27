<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Southwest Water Service</title>
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
        div.page-head {
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
        .content h3 {
            color: #377def;
        }
        .info-container {
            margin-bottom: 40px;
        }
        .move-down-20 {
            margin-bottom: 20px!important;
        }
        /* Contact */
        .contact-container {
            margin-left: 15px;
            margin-right: 15px;
        }
        .btn-primary {
            background-color: #377def;
            border-color: #377def;
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
        <!-- Alerts -->
        @if (Session::has('message'))
           <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
        @endif
        <!-- Contact -->
        <section>
            <div class="page-head text-center">
                <h1>Contact Us</h1>
                <h4 style="color: #757575">Have a question or comment? Let us know!</h4>
            </div>
            <div class="content">
                <div class="info-container text-center">
                    <h3>Contact Channels:</h3>
                    <p><i class="fa fa-phone"></i>  Office: 1.480.497.0111</p>
                    <p><i class="fa fa-envelope-o"></i>  support@southwestwater.com</p>
                    <p><i class="fa fa-phone"></i>  Emergency: 1.602.292.6414</p>
                    <h3>Hours of Operation:</h3>
                    <p>Monday - Friday: 7:30am - 4:30pm MT</p>
                    <p>Saturday - Sunday: Emergencies Only
                </div>
                <div class="contact-container text-center move-down-20">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">First Name *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name" required="required" data-error="First name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Last Name *</label>
                                                <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Last Name" required="required" data-error="Last name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Email Address *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_phone">Phone Number</label>
                                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Message *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Enter your message" rows="4" required="required" data-error="Message is require."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="form-group">
                                                {!! Form::submit('Send Message',
                                                  array('class'=>'btn btn-primary')) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
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
