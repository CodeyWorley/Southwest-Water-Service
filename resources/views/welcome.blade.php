<!doctype html>
<head>
    <title>Southwest Water Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
    <style>
        /* JUMBOTRON */
        #bg-video {
            position: center;
            width: 100%;
        }
        .jumbotron{
            position: relative;
            overflow: visible;
            padding: 0px;
        }
        .video-background {
            position: relative;
            background: #fff;
            width:100%;
            z-index:5;
        }
        .cover-text{
            position:absolute;
            width:100%;
            text-align: center;
            z-index:9999;
            bottom:10vw;
            color:#fff;
        }
        .cover-text h1 span {
            display: inline-block;
            padding-left: 10px;
            padding-right: 15px;
            padding-bottom: 5px;
            padding-top: 2vw;
            margin-bottom: 2vw;
            background: #377def;
            opacity: .7;
        }
        .h1, h1 {
            font-size: 20px;
        }

        /* Carousel */
        .container {
            width: 100%;
            padding-left: 0px;
            padding-right: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 40px;
        }
        .carousel-inner>.item>img {
            width: 100%;
        }
        .pitch-text {
            font-size: 1.8vmax;
            background-color: #377def;
            padding: 10px;
            opacity: .8;
        }
        .pitch-heading {
            font-size: 2.8vmax;
        }

        /* SECTION */
        .section-head {
            font-size: 3.8vmax;
            font-weight: 300;
        }
        .sub-head {
            margin-bottom: 20px;
            font-size: 1.8vmax;
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
    <section>
    <!-- JUMBOTRON -->
    <div class="jumbotron">
        <div class="video-background">
          <video id="bg-video" autoplay="true" loop="loop" preload="metadata" muted="muted">
            <source src="{{URL::asset('media/waterdrop.mp4')}}" type="video/mp4">
          </video>
        </div>
        <div class="textbox cover-text">
            <div class="bg-color">
                <h1 class="txtjumbo text-center"><span>Water at its Finest</span></h1>
            </div>
        </div>
    </div>
    </section>

    <!-- Info -->
    <section>
        
    </section>

    <!-- Contact -->
    <section>
        <div class="page-head text-center">
            <h1 style="font-size:50px">Contact Us</h1>
            <h4 style="color: #757575; font-size:18">Have a question or comment? Let us know!</h4>
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
