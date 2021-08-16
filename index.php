<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crypto Project</title>

    <!-- Imports (CSS, fonts, icons, etc.) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light container-fluid">
        <a class="navbar-brand logo" href="#"><img src="assets/img/logo.svg" class="img-fluid" alt="CLP Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cryptocurrencies
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-chart-line font-for-dropdown"></i>
                            <a href="#">Ranking</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-arrows-alt-v font-for-dropdown"></i>
                            <a href="#">Gainers & Losers</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-plus font-for-dropdown"></i>
                            <a href="#">Recently added</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Exchanges
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="drpm-pair dropdown-item">
                            <i class="far fa-circle font-for-dropdown"></i>
                            <a href="#">Spot</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-shapes font-for-dropdown"></i>
                            <a href="#">Derivatives</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-vector-square font-for-dropdown"></i>
                            <a href="#">DEX</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">NFT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Calendars
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-parachute-box font-for-dropdown"></i>
                            <a href="#">Free airdrops</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-tasks font-for-dropdown"></i>
                            <a href="#">ICO Calendar</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-calendar-alt font-for-dropdown"></i>
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Learn</a>
                </li>
            </ul>

            <div class="login-register-ul">
                <div class="navbar-nav me-auto mb-2 mb-lg-0 login-register" style="align-items: center;">
                    <div class="nav-item">
                        <a class="nav-link login " href="#" data-bs-toggle="modal" data-bs-target="#login-register-modal"><i class="far fa-user"></i> Sign In</a>
                    </div>
                    <div class="modal fade" id="login-register-modal" tabindex="-1" aria-labelledby="login-register-modal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="border: none; padding-bottom: 0px;">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/logo.svg" alt="" style="width: 90px; padding-bottom: 2rem;">
                                    <form style="width: 25rem;" id="log-in-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="user-modal-log-username" placeholder="User name">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="user-modal-log-password" placeholder="Password">
                                        </div>
                                        <br>
                                        <div class="modal-text-fpw-reg">
                                            <a class="fpw-reg" href="#">Forgot password?</a>
                                        </div>
                                        <br>
                                        <div style="display: flex; justify-content: center;">
                                            <button type="submit" class="btn btn-primary btn-clp" style="width: 100%;">Log
                                                In</button>
                                        </div>
                                    </form>

                                    <form style="width: 25rem;" id="sign-up-form">
                                        <div class="form-row align-items-center">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="user-modal-reg-name" placeholder="Full Name">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="user-modal-reg-email" placeholder="Email address">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="user-modal-reg-username" placeholder="User name">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="user-modal-reg-password" placeholder="Password">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="user-modal-reg-password2" placeholder="Repeat password">
                                            </div>
                                            <br>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="agreeCheck">
                                                <label class="form-check-label" for="agreeCheck">By clicking on this box you agree with our <a href="#" style="text-decoration: none; color: #ff6a3d;">Terms & Conditions</a></label>
                                            </div>
                                            <br>
                                            <div style="display: flex; justify-content: center;">
                                                <button type="submit" class="btn btn-primary btn-clp form-control" style="width: 100%;">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="sign-up-text" class="modal-footer-text">
                                        <p>Not a member yet?</p>&nbsp;<a id="sign-up" class="orange-link" href="#"><strong>Sign
                                                up!</strong></a>
                                    </div>
                                    <div id="log-in-text" class="modal-footer-text">
                                        <p>Have an account?</p>&nbsp;<a id="log-in" class="orange-link" href="#"><strong>Log in!</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--Hero section-->
    <div class="hero">
        <div class="hero-content inline-container">
            <div class="hero-content-noimg">
                <div class="hero-text">
                    <h1 class="hero-text1">Newest crypto trends</h1>
                    <h1 class="hero-text2">at your reach!</h1>
                </div>
                <p class="hero-par">We focus on delivering flash crypto news, biggest trends and most importantly -
                    information of where and how to trade crypto!
                </p>
                <br>
                <div class="lrn-btn">
                    <a class="btn-clp" href="#" id="lrnbtn">Learn more</a>
                </div>
            </div>
            <div class="hero-image"><img src="assets/img/cube.png" alt="hero-image"></div>
        </div>
    </div>

    <!-- Crypto Live Preview Widget (Short - CLPW)-->
    <div class="clpw" style="height: 150px;">
        <div class="clpw-wrapper container-fluid crypto-pairs row">
            <div class="col-md-4 col-6 col-xxl-2 pair pair1">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair2">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair3">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair4">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair5">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair6">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair7">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair8">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair9">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair10">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair11">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            <div class="col-md-4 col-6 col-xxl-2 pair pair12">
                <div class="percentage-pair">
                    <div class="percentage-pair-name"></div> &nbsp;
                    <div class="clpw-percent"></div>
                </div>
                <div class="price-big"></div>
                <div class="price-small"></div>
            </div>
            
        </div>
    </div>

    <div class="section-divider-fromblack" style="height: 0px;"><img src="assets/img/triangle-main.svg" alt="section-divider-black" style="width: 100%; height: 6rem;"></div>

    <!--Main sections (Short - MS)-->
    <!--About section"-->
    <div class="ms-about inline-container">
        <div class="ms-about-text">
            <h2 class="font-weight-normal">We made it <strong class="font-weight-bold" style="color: #ff6a3d;">for
                    you!</strong></h2>
            <p class="ms-about-par">This platform was created for people to quickly access news and information
                about any changes in the crypto market.</p>
            <div class="ms-about-quote">
                <i>"This started out as a bootcamp project and look at it now! As the creator - I couldn't be more
                    proud." </i><b> - Aurimas</b>
            </div>
        </div>
        <div class="ms-about-image">
            <img src="assets/img/hand-you.png" alt="ms-about-image">
        </div>
    </div>

    <!--Perks section-->
    <div class="ms-perks inline-container">
        <div class="perk-mobile" style="padding-bottom: 3rem;">
            <div class="perk">
                <i class="fas fa-history font-for-perks"></i>
                <h1>History analysis</h1>
                <div style="text-align: center;">Our AI checks all available history of any given coin and can
                    provide the most accurate data which will help you in analysing, investing and knowing more
                    about your favourite crypto currency!</div>
            </div>
        </div>
        <div class="perk-mobile" style="padding-bottom: 3rem;">
            <div class="perk">
                <i class="fas fa-star font-for-perks"></i>
                <h1>Be our star!</h1>
                <div style="text-align: center;">Register an account and subscribe to our newsletter to be the first
                    to get any crypto updates and news.</div>
            </div>
        </div>
        <div class="perk-mobile" style="padding-bottom: 3rem;">
            <div class="perk">
                <i class="fas fa-user-graduate font-for-perks"></i>
                <h1>High-end education module</h1>
                <div style="text-align: center;">We've reinvented learning. With our new learning module and
                    sleep-learning you'll be an investing expert in no time!</div>
            </div>
        </div>
    </div>

    <div class="section-divider-fromblack" style="background-color: #0a0a0a;"><img src="assets/img/tilt-main-small.svg" alt="section-divider-black-alternate" style="width: 100%; height: 5rem;">
    </div>

    <!--Newsletter section-->
    <div class="section-newsletter">
        <div class="newsletter-content">
            <div class="newsletter-text">
                <h1 class="newsletter-text1">Be the first to get the crypto feed!</h1>
                <h1 class="newsletter-text2">Sign up for our newsletter</h1>
            </div>
            <form class="newsletter-action" action="">
                <input class="form-control form-control-lg newsletter-input" type="email" placeholder="Drop us your email...">
                <input class="btn btn-clp form-control-lg newsletter-button" type="submit" value="Get it!" style="border-left: hidden; font-size: 1.1rem;">
            </form>
        </div>
    </div>

    <!--Platform updates section-->
    <div class="ms-updates">
        <div class="updates-item">
            <div class="updates-item-shape">
                <div class="shape-triangle"></div>
                <i class="fas fa-exclamation shape-symbol" style="padding: 1rem;"></i>
            </div>
            <div class="updates-item-txtbtn">
                <div style="align-self: center;">
                    <h2>AMA w/Vitalik Buterin live at r/cryptoNews. <br>2021.08.02</h2>
                </div>
                <button class="btn btn-clp newsletter-button updates-button" type="submit" style="border: hidden; font-size: 1.1rem;">
                    <span>40:00</span>
                </button>
            </div>
        </div>

        <div class="updates-item">
            <div class="updates-item-shape">
                <div class="shape-triangle"></div>
                <i class="fas fa-parachute-box shape-symbol" style="padding: 1rem;"></i>
            </div>
            <div class="updates-item-txtbtn">
                <div style="align-self: center;">
                    <h2>Upcoming QNFT air-drops. Watch out!</h2>
                </div>
                <button class="btn btn-clp newsletter-button updates-button" type="submit" style="border: hidden; font-size: 1.1rem;">
                    <span>soon</span>
                </button>
            </div>
        </div>

        <div class="section-divider-fromblack" style="height: 0px;"><img src="assets/img/tilt-main-small-inverse.svg" alt="section-divider-black" style="width: 100%; height: 4rem;"></div>

        <!--Partners section-->
        <div class="ms-partners">
            <h2 class="font-weight-bold" style="color: #ff6a3d; padding: 5rem 0 3rem 55px;">Our partners</h2>
            <div class="partner-pairs">
                <div class="partner-pair"><a href="https://www.vilniuscoding.lt/" class="orange-link" target="_blank">
                        <img src="assets/img/vcs-logo.jpg" alt="vcs-logo">
                        <br>
                        <br>
                        <p>Vilnius Coding School</p>
                    </a>
                </div>
                <div class="partner-pair"><a href="https://www.binance.com/en" class="orange-link" target="_blank">
                        <img src="assets/img/binance-logo.jpg" alt="binance-logo">
                        <br>
                        <br>
                        <p>Binance</p>
                    </a>
                </div>
                <div class="partner-pair"><a href="https://coinmarketcap.com/" class="orange-link" target="_blank">
                        <img src="assets/img/coin-market-cap-logo.jpg" alt="cmc-logo">
                        <br>
                        <br>
                        <p>Coin Market Cap</p>
                    </a>
                </div>
                <div class="partner-pair"><a href="http://www.kaunas.lt/" class="orange-link" target="_blank">
                        <img src="assets/img/kaunas-logo.jpg" alt="kaunas-logo">
                        <br>
                        <br>
                        <p>Kaunas City</p>
                    </a>
                </div>
                <div class="partner-pair"> <a href="https://vilnius.lt/en/" class="orange-link" target="_blank">
                        <img src="assets/img/vilnius-logo.png" alt="vilnius-logo">
                        <br>
                        <br>
                        <p>Vilnius City</p>
                    </a>
                </div>
                <div class="partner-pair"><a href="https://creativecoda.com/" class="orange-link" target="_blank">
                        <img src="assets/img/coda-logo.png" alt="coda-logo">
                        <br>
                        <br>
                        <p>CODA</p>
                    </a>
                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="footer">
            <footer class="text-center text-lg-start " style="background-color: #0a0a0a">
                <!-- Social media -->
                <div class="d-flex justify-content-between p-4" style="background-color: #ff6a3d">
                    <div class="me-5">
                        <span style="color: #fff;">Find us on social medias</span>
                    </div>
                    <div style="display: flex;justify-content: center;align-items: center;">
                        <a href="" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="text-white me-4"><i class="fab fa-instagram"></i></a>
                        <a href="" class="text-white me-4"><i class="fab fa-linkedin"></i></a>
                        <a href="" class="text-white me-4"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="">
                    <div class="container text-center text-md-start mt-5">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">About us</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto footer-divider" style="width: 60px; background-color: #ff6a3d; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white orange-link">Career</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">About</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">Privacy</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">Terms</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">Business contacts</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">News</a>
                                </p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Support</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto footer-divider" style="width: 60px; background-color: #ff6a3d; height: 2px" />
                                <p>
                                    <a href="#" class="text-white orange-link">Give us feedback</a>
                                </p>
                                <p>
                                    <a href="#" class="text-white orange-link">Support center</a>
                                </p>
                                <p>
                                    <a href="#" class="text-white orange-link">Submit a request</a>
                                </p>
                                <p>
                                    <a href="#" class="text-white orange-link">For press</a>
                                </p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Trending coins</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto footer-divider" style="width: 60px; background-color: #ff6a3d; height: 2px" />
                                <p>
                                    <a href="#" class="text-white orange-link">BNB</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">BTC</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">AXS</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">DOGE</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold">Upcoming events</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto footer-divider" style="width: 60px; background-color: #ff6a3d; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white orange-link">AMA w/Vitalik Buterin live at
                                        r/cryptoNews.</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white orange-link">Upcoming QNFT air-drops. Watch
                                        out!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="text-center p-3" style="font-size: 0.8rem; background-color: rgba(0, 0, 0, 0.2)">
                    <a class="text-white" href="#">CLP</a>
                    © 2020
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/script/main.js"></script>

</body>

</html>