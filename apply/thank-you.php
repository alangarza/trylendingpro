<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css" type="text/css" />
        <link rel="stylesheet" href="css/custom.css" type="text/css" />
        <link rel="stylesheet" href="css/thank-you.css" type="text/css" />
        <title>Lending Pro</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <style type="text/css">
            .loading-wrapper {
                align-items: center;
                background: rgba(0, 0, 0, 0.9);
                display: none;
                justify-content: center;
                min-height: 100vh;
                overflow: hidden;
                position: fixed;
                top: 0px;
                left: 0px;
                width: 100vw;
                z-index: 999;
            }

            .loading-wrapper.show {
                display: flex;
            }

            .loading-wrapper.hide {
                display: none;
            }

            .loading {
                font-size: 34px;
                color: #fff;
                font-weight: 500;
            }

            .loading-inner {
                display: flex;
                display: -webkit-flex;
                align-items: center;
                -webkit-align-items: center;
                height: 100vh;
                justify-content: center;
                -webkit-justify-content: center;
            }

            .loading:after {
                content: ' .';
                animation: dots 1s steps(5, end) infinite;
                font-size: 48px;
            }

            label[for="chk1"] {
                display: flex;
                display: -webkit-flex;
                align-items: center;
                -webkit-align-items: center;
                margin-top: 15px;
                font-size: 16px;
                font-weight: 500;
                color: #012a68;
                max-width: 120px;
                cursor: pointer;
            }

            #chk1 {
                width: 18px;
                height: 18px;
                margin-right: 10px;
                accent-color: green;
            }

            @keyframes dots {

                0%,
                20% {
                    color: rgba(252, 179, 8, 0);
                    text-shadow:
                        .25em 0 0 rgba(252, 179, 8, 0),
                        .5em 0 0 rgba(252, 179, 8, 0);
                }

                40% {
                    color: #FCB308;
                    text-shadow:
                        .25em 0 0 rgba(252, 179, 8, 0),
                        .5em 0 0 rgba(252, 179, 8, 0);
                }

                60% {
                    text-shadow:
                        .25em 0 0 #FCB308,
                        .5em 0 0 rgba(252, 179, 8, 0);
                }

                80%,
                100% {
                    text-shadow:
                        .25em 0 0 #FCB308,
                        .5em 0 0 #FCB308;
                }
            }

            .banner_img_area {
                min-height: 480px;
            }

            .banner_img_area img {
                margin-top: 30px;
                max-width: 520px;
                width: 100%;
            }

            .blckBx {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding: 40px;
                border-radius: 12px;
                background: #70aaf2;
                -webkit-box-shadow: 0px 20px 48px rgb(0 0 0 / 20%);
                box-shadow: 0px 20px 48px rgb(0 0 0 / 20%);
                text-align: center;
                color: #fff;
            }

            .blckBx h2 {
                color: #fff;
                font-weight: 600;
                margin-bottom: 15px;
            }

            .mainContent {
                display: flex;
                align-items: center;
                height: 500px;
            }

            .blckBxBtn {
                font-size: 18px;
                font-weight: 500;
                line-height: 1em;
                fill: #ffffff;
                color: #70aaf2;
                background-color: #ffffff;
                border-style: solid;
                border-width: 2px 2px 2px 2px;
                border-color: #ffffff;
                border-radius: 30px 30px 30px 30px;
                padding: 15px 30px;
                display: table;
                margin: 30px auto 0px;
            }

            .blckBxBtn:hover {
                text-decoration: none !important;
                color: #FEB103 !important;
            }

            @media (max-width: 767px) {
                .banner_img_area {
                    min-height: auto;
                }

                .blckBx {
                    padding: 20px;
                }

                .blckBx h2 {
                    font-size: 26px;
                }

                .progress-bar-wrapper {
                    font-size: 11px;
                }

                .progress-bar-label {
                    position: relative;
                    top: 0px;
                }

                .progressbarMain .progress-bar-wrapper {
                    justify-content: center !important;
                }

                .circled-number {
                    width: 15px;
                    height: 15px;
                    line-height: 13px;
                }
            }
        </style>
    </head>
    <body>
        <header class="custmHd">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <img class="img-fluid logo" src="images/lendingPro.svg" alt="logo">
                    </div>
                    <div class="progressbarMain">
                        <div class="progress-bar-wrapper">
                            <div class="progress-bar-section-wrapper progress-bar-inactive">
                                <div class="circled-number">1</div>
                                <div class="progress-bar-label">Eligibility</div>
                                <div class="progress-bar-spacer"></div>
                            </div>
                            <div class="progress-bar-section-wrapper progress-bar-inactive">
                                <div class="circled-number">2</div>
                                <div class="progress-bar-label">Personal Information</div>
                                <div class="progress-bar-spacer"></div>
                            </div>
                            <div class="progress-bar-section-wrapper progress-bar-current">
                                <div class="circled-number">3</div>
                                <div class="progress-bar-label">Submit</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-10 d-flex align-items-center justify-content-center justify-content-md-end"><div id="nav-user-loggedout"><a id="nav-login" class="nav-auth-button hide-mobile" href="#">Login</a><a id="nav-signup" class="nav-auth-button hide-mobile" href="#">Sign Up</a></div></div> -->
                    <!-- <button type="button" class="cd-dropdown-trigger show-mobile" aria-label="Navigation"><span class="sr-only">Toggle navigation</span><div class="nav-drawer-trigger"></div></button> -->
                </div>
            </div>
            <!-- <div class="slidemenu show-mobile"><div class="slideMenuinr"><ul><li><a id="nav-login" class="nav-auth-button" href="#">Login</a></li><li><a id="nav-signup" class="nav-auth-button" href="#">Sign Up</a></li></ul></div></div> -->
        </header>
        <div class="mainContent">
            <div class="col-md-6 m-auto d-flex align-items-center hghtmng">
                <div class="blckBx">
                    <h2>Congratulations!</h2>
                    <!-- <p style="font-size: 15px;">You’ve just taken the first step towards consolidating your debt and becoming debt free. One of our certified debt specialists will be contacting you shortly to complete your free quote and answer any questions you may have. For immediate assistance, please call us at <a href="tel:8002890531" style="border: none;text-align: center;font-weight: 500;font-size: 15px;padding: 0; color:#fff;">(800) 289-0531</a></p> -->
                    <p style="font-size: 15px;">You’ve just taken the first step towards consolidating your debt and becoming debt free. One of our certified debt specialists will be contacting you shortly to complete your free quote and answer any questions you may have. Our hours are M-F 9am to 9pm EST.</p>
                    <a href="/apply" class="blckBxBtn">Back To Home</a>
                </div>
            </div>
        </div>
    </body>
</html>