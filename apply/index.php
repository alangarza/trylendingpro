<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link rel="manifest" href="/images/site.webmanifest">
        <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/images/favicon.ico">

        <link rel="shortcut icon" href="https://radialmx-assets.s3.amazonaws.com/uniclick/lendingpro-favicon.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/images/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css?v=1.10" type="text/css" />
        <link rel="stylesheet" href="css/custom.css" type="text/css" />
        <title>Lending Pro</title>
        <meta content="Take control of your debt today. Simplify your finances and lower your interest rate." name="description">
        <meta content="https://radialmx-assets.s3.amazonaws.com/uniclick/lendingproog.png" property="og:image">
        <meta content="https://radialmx-assets.s3.amazonaws.com/uniclick/lendingproog.png" property="twitter:image">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

            @media (max-width: 767px) {
                .banner_img_area {
                    min-height: auto;
                }


                
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

<script type="text/javascript" src="https://www.undkjs4str.com/scripts/sdk/everflow.js"></script>

<script type="text/javascript">
EF.click({
    offer_id: EF.urlParameter('oid'),
    affiliate_id: EF.urlParameter('affid'),
    sub1: EF.urlParameter('sub1'),
    sub2: EF.urlParameter('sub2'),
    sub3: EF.urlParameter('sub3'),
    sub4: EF.urlParameter('sub4'),
    sub5: EF.urlParameter('sub5'),
    uid: EF.urlParameter('uid'),
    source_id: EF.urlParameter('source_id'),
    transaction_id: EF.urlParameter('_ef_transaction_id'),
});
</script>
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
                            <div class="progress-bar-section-wrapper progress-bar-current">
                                <div class="circled-number">1</div>
                                <div class="progress-bar-label">Eligibility</div>
                                <div class="progress-bar-spacer"></div>
                            </div>
                            <div class="progress-bar-section-wrapper progress-bar-inactive">
                                <div class="circled-number">2</div>
                                <div class="progress-bar-label">Personal Information</div>
                                <div class="progress-bar-spacer"></div>
                            </div>
                            <div class="progress-bar-section-wrapper progress-bar-inactive">
                                <div class="circled-number">3</div>
                                <div class="progress-bar-label">Submit</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-10 d-flex align-items-center justify-content-center justify-content-md-end"><div id="nav-user-loggedout"><a id="nav-login" class="nav-auth-button hide-mobile" href="#">Login</a><a id="nav-signup" class="nav-auth-button hide-mobile" href="#">Sign Up</a></div></div> -->
                    <button type="button" class="cd-dropdown-trigger show-mobile" aria-label="Navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <div class="nav-drawer-trigger"></div>
                    </button>
                </div>
            </div>
            <!-- <div class="slidemenu show-mobile"><div class="slideMenuinr"><ul><li><a id="nav-login" class="nav-auth-button" href="#">Login</a></li><li><a id="nav-signup" class="nav-auth-button" href="#">Sign Up</a></li></ul></div></div> -->
        </header>
        <div class="mainContent">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-6"><div class="busiWoman banner_img_area"><img src="images/banner_img.png" class="img-fluid"></div></div> -->
                    <div class="col-md-8 mx-auto">
                        <div class="form-sec">
                            <!--PEN CONTENT     -->
                            <div class="content">
                                <!--content inner-->
                                <div class="content__inner">
                                    <div class="nrml">
                                        <!--multisteps-form-->
                                        <div class="multisteps-form">
                                            <!--progress bar-->
                                            <!-- <div class="multisteps-form__progress d-none"><button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button><button class="multisteps-form__progress-btn" type="button" title="Address">Address</button><button class="multisteps-form__progress-btn" type="button" title="Order Info">Order Info</button><button class="multisteps-form__progress-btn" type="button" title="Comments">Comments</button></div> -->
                                            <form class="multisteps-form__form" method="post">
                                                <input type="hidden" name="utm-params" value="">
                                                <!--single form panel-->
                                                <div class="multisteps-form__panel    js-active" data-animation="slideHorz" id="step-1">
                                                    <h3 class="multisteps-form__title">Do You Qualify For Debt Consolidation?</h3>
                                                    <ul>
                                                        <li style="font-weight: 600;">
                                                            <i class="fas fa-chevron-right"></i>Must have <span style="color: #0c5e98;">$25,000+ in credit card debt</span> to apply
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-chevron-right"></i>One Low Monthly Payment
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-chevron-right"></i>Be Debt Free In 18 To 36 Months
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-chevron-right"></i>No Upfront Fees and No Obligation
                                                        </li>
                                                        <li style="color: #ff0000;">
                                                            <i class="fas fa-chevron-right"></i>Does Not Apply For Car Loans &amp; Student Loans
                                                        </li>
                                                    </ul>
                                                    <div class="multisteps-form__content">
                                                        <div class="form-row mt-4">
                                                            <div class="col-12">
                                                                <label for="sel1" class="lablTg">Please Confirm Your Current Debt Amount <span>*</span>
                                                                </label>
                                                                <div class="price_design">
                                                                    <div class="price_design2">$15,000</div>
                                                                    <div class="price_design3">$100,000+</div>
                                                                </div>
                                                                <div class="range-slider">
                                                                    <span class="dollor_sign">$</span>
                                                                    <div id="tooltip" style="left: 50% !important; width: 100px;"></div>
                                                                    <input id="range" type="range" class="form-control" step="1000" value="$15000" min="15000" name="debtAmount" max="100000">
                                                                </div>
                                                                <!-- <select class="multisteps-form__input form-control" name="debtAmount" id="sel1" required="required"><option value = "">Select Your Amount</option><option value = "15000">Less than $15,000</option><option value = "30000">$15,000 to $30,000</option><option value = "50000">$30,000 to $50,000</option><option value = "55000">$50,000 +</option></select><span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span> -->
                                                                <span class="lght">This information helps use personalized the lowest payment schedule</span>
                                                            </div>
                                                        </div>
                                                        <div class="button-row d-block">
                                                            <button class="btn btn-primary ml-auto stponebtn w-100 btn1" type="button" title="Next">Get a Free Quote</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--single form panel-->
                                                <!-- COPIA LAS 3 PRIMERAS LINEAS, EL STEP-2 REPRESENTA CUAL PASO ES, Y LO IMPORTANTE ACA ES QUE CAMBIES EL NUMERO, POR EJEMPLO, DIGAMOS QUE QUIERES AGREGAR EL STEP 7, ENTONCES COPIAS ESAS 3 LINEAS Y MODIFICAS EL STEP PARA QUE SEA STEP-7
                                                EN LA LINEA 490 ESTA EL SIGUIENTE CODIGO -> "if (idDiv < 7) {" , LO PUSE ENTRE COMILLAS DOBLES, CUANDO AGREGUES O QUITES UN STEP, TIENES QUE MODIFICARLO ACA, EN EL EJEMPLO DE AGREGAR EL STEP-6, ESE IF SERIA -> "if (idDiv < 8) {" , FIJATE QUE PUSE 8 EN LUGAR DE 7, PARA QUE RECONOZCA LOS 7 STEP AGREGADOS
                                                TAMBIEN ES IMPORTANTE ES CAMBIAR EL TIPO DE BOTON DEL NEXT, CUANDO QUIERES FINALIZAR EL FORMULARIO, TIENES QUE USAR -> "type='submit'" Y SI QUISIERAS CONTINUAR CON OTRO STEP, TENDRÍA QUE SER -> "type='button'" -->
                                                <div class="multisteps-form__panel" data-animation="slideHorz" id="step-2">
                                                    <h2 class="multisteps-form__title">Consolidate Your Debt And Stress In Less Than 30 Seconds</h2>
                                                    <div class="multisteps-form__content">
                                                        <div class="form mt-4">
                                                            <p>Please confirm you have over <span style="font-weight: 700;">$25,000 in credit card debt</span>. This program is <span style="font-weight: 700; color: red;">NOT ELIGIBLE for debts less than $25,000.</span> Please don't waste your time completing this form if you don't meet the requirements. Student/Car Loans and Medical Bills are not applicable and do not work for this program </p>
                                                            <label for="chk1" class="lablTg">
                                                                <input type="checkbox" class="form-control" value="Yes" id="chk1" name="agreeDebt"> Yes, I have! </label>
                                                            <span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span>
                                                        </div>
                                                        <div class="button-row d-flex mt-4">
                                                            <div class=" w-100">
                                                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Previous</button>
                                                                <button class="btn btn-primary ml-auto js-btn-next" id="radioValid1" type="button" title="Next">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__panel" data-animation="slideHorz" id="step-3">
                                                    <h2 class="multisteps-form__title">Consolidate Your Debt And Stress In Less Than 30 Seconds</h2>
                                                    <div class="multisteps-form__content">
                                                        <div class="form mt-4">
                                                            <label class="lablTg">Are You Behind On Your Payments <span>*</span>
                                                            </label>
                                                            <label class="container1">Yes, More Than 60 Days <input type="radio" value="Yes More Than 60 Days" name="radio">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="container1">Yes, 30 Days <input type="radio" value="Yes 30 Days" name="radio">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="container1">No <input type="radio" value="No" name="radio">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span>
                                                        </div>
                                                        <div class="button-row d-flex mt-4">
                                                            <div class=" w-100">
                                                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Previous</button>
                                                                <button class="btn btn-primary ml-auto js-btn-next" id="radioValid" type="button" title="Next">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--single form panel-->
                                                <div class="multisteps-form__panel" data-animation="slideHorz" id="step-4">
                                                    <h2 class="multisteps-form__title">Consolidate Your Debt And Stress In Less Than 30 Seconds</h2>
                                                    <div class="multisteps-form__content">
                                                        <div class="form-row mt-4">
                                                            <div class="col-12">
                                                                <label for="sel2" class="lablTg">What State Do You Live In? <span>*</span>
                                                                </label>
                                                                <select name="state" class="multisteps-form__input form-control" id="sel2" required="required">
                                                                    <!-- <option value="" selected="selected">Select State</option> -->
                                                                    <option value="Alabama">Alabama</option>
                                                                    <option value="Alaska">Alaska</option>
                                                                    <option value="Arizona">Arizona</option>
                                                                    <option value="Arkansas">Arkansas</option>
                                                                    <option value="California">California</option>
                                                                    <option value="Colorado">Colorado</option>
                                                                    <option value="Connecticut">Connecticut</option>
                                                                    <option value="Connecticut">Delaware</option>
                                                                    <option value="District of Columbia">District of Columbia</option>
                                                                    <option value="Florida">Florida</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Hawaii">Hawaii</option>
                                                                    <option value="Idaho">Idaho</option>
                                                                    <option value="Illinois">Illinois</option>
                                                                    <option value="Indiana">Indiana</option>
                                                                    <option value="Iowa">Iowa</option>
                                                                    <option value="Kansas">Kansas</option>
                                                                    <option value="Kentucky">Kentucky</option>
                                                                    <option value="Louisiana">Louisiana</option>
                                                                    <option value="Maine">Maine</option>
                                                                    <option value="Maryland">Maryland</option>
                                                                    <option value="Massachusetts">Massachusetts</option>
                                                                    <option value="Michigan">Michigan</option>
                                                                    <option value="Minnesota">Minnesota</option>
                                                                    <option value="Mississippi">Mississippi</option>
                                                                    <option value="Missouri">Missouri</option>
                                                                    <option value="Montana">Montana</option>
                                                                    <option value="Nebraska">Nebraska</option>
                                                                    <option value="Nevada">Nevada</option>
                                                                    <option value="New Hampshire">New Hampshire</option>
                                                                    <option value="New Jersey">New Jersey</option>
                                                                    <option value="New Mexico">New Mexico</option>
                                                                    <option value="New York">New York</option>
                                                                    <option value="North Carolina">North Carolina</option>
                                                                    <option value="North Dakota">North Dakota</option>
                                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                    <option value="Ohio">Ohio</option>
                                                                    <option value="Oklahoma">Oklahoma</option>
                                                                    <option value="Oregon">Oregon</option>
                                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                                    <option value="Rhode Island">Rhode Island</option>
                                                                    <option value="South Carolina">South Carolina</option>
                                                                    <option value="South Dakota">South Dakota</option>
                                                                    <option value="Tennessee">Tennessee</option>
                                                                    <option value="Texas">Texas</option>
                                                                    <option value="Utah">Utah</option>
                                                                    <option value="Vermont">Vermont</option>
                                                                    <option value="Virginia">Virginia</option>
                                                                    <option value="Washington">Washington</option>
                                                                    <option value="West Virginia">West Virginia</option>
                                                                    <option value="Wisconsin">Wisconsin</option>
                                                                    <option value="Wyoming">Wyoming</option>
                                                                </select>
                                                                <span class="lght">Essential due to debt refinance restrictions in certain states</span>
                                                            </div>
                                                            <div class="col-12 mt-4">
                                                                <label for="usr" class="lablTg">Street Address <span>*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="address" name="address" required="require">
                                                                <span class="lght">Essential due to debt refinance restrictions in certain states</span>
                                                            </div>
                                                            <div class="col-12 mt-4">
                                                                <label for="usr" class="lablTg">City <span>*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="city" name="city" required="require">
                                                                <span class="lght">Essential due to debt refinance restrictions in certain states</span>
                                                            </div>
                                                            <div class="col-12 mt-4">
                                                                <label for="usr" class="lablTg">Zip Code <span>*</span>
                                                                </label>
                                                                <input type="tel" class="form-control" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" maxlength="5" name="zip" id="zip" required="require">
                                                                <span class="lght">Essential due to debt refinance restrictions in certain states</span>
                                                                <span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span>
                                                            </div>
                                                        </div>
                                                        <div class=" w-100 mt-4">
                                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Previous</button>
                                                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__panel" data-animation="slideHorz" id="step-5">
                                                    <h2 class="multisteps-form__title">Consolidate Your Debt And Stress In Less Than 30 Seconds</h2>
                                                    <div class="multisteps-form__content">
                                                        <div class="form-row mt-4">
                                                            <div class="col-12 col-sm-6">
                                                                <label class="lablTg">First Name <span>*</span>
                                                                </label>
                                                                <input class="form-control" name="firstName" type="text" placeholder="First Name" />
                                                            </div>
                                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                                <label class="lablTg">Last Name <span>*</span>
                                                                </label>
                                                                <input class="form-control" name="lastName" type="text" placeholder="Last Name" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-row mt-4"><div class="col-12 "><label  class="lablTg">Date of Birth  <span>*</span></label><input class="multisteps-form__input form-control" type="date"/></div></div> -->
                                                        <span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span>
                                                        <div class="w-100 mt-4">
                                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Previous</button>
                                                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--single form panel-->
                                                <div class="multisteps-form__panel" data-animation="slideHorz" id="step-6">
                                                    <h2 class="multisteps-form__title">Consolidate Your Debt And Stress In Less Than 30 Seconds</h2>
                                                    <div class="multisteps-form__content">
                                                        <div class="form mt-4">
                                                            <label class="lablTg">Your Phone Number <span>*</span>
                                                            </label>
                                                            <input class="form-control" type="tel" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" maxlength="16" name="phone" id="phoneNumber" placeholder="Phone" />
                                                            <span class="lght">This is how we will contact you immediately after this pre-qualification is approved</span>
                                                        </div>
                                                        <div class="form mt-5">
                                                            <label class="lablTg">Your Email Address <span>*</span>
                                                            </label>
                                                            <input class="form-control" type="email" name="email" placeholder="Email" />
                                                            <span class="lght">This is how we will contact you after this pre-qualification for an e-signature</span>
                                                            <span class="warning stp1-warn" style="color:red; margin-top: 5px;"></span>
                                                        </div>
                                                        <div class=" w-100 mt-4">
                                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Previous</button>
                                                            <button class="btn btn-primary ml-auto js-btn-next" type="submit" title="Next">Get a Free Quote</button>
                                                        </div>
                                                        <div>
                                                            <p class="disclaimerCta" style="margin-top: 30px;">By clicking "Get a Free Quote" above, you consent to our Terms & Conditions and Privacy Policy and consent to receive email and automated calls/texts (standard cellular rates may apply) from Lending Pro and its service providers, including offers and discounts. Consent to such communications is not a condition of any purchase. Data/Msg rates apply. You may unsubscribe any time.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bckLink">
                <a href="/">
                    <i aria-hidden="true" class="fa fa-angle-left"></i> Back </a>
            </div>
        </div>
        <!-- <div class="advert">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 m-auto">
                        <h2>THIS IS AN ADVERTORIAL AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE</h2>
                        <h3>This is a paid promotion.</h3>
                        <p>Our estimates are based on prior results, which will vary depending on your specific enrolled creditors and your individual program terms. Not all clients are able to complete their program for various reasons, including their ability to save sufficient funds. We do not guarantee that your debts will be resolved for a specific amount or percentage or within a specific period of time. We do not assume your debts, make monthly payments to creditors or provide tax, bankruptcy, accounting or legal advice or credit repair services. Our service is not available in all states, including New Jersey, and our fees may vary from state to state. Please contact a tax professional to discuss potential tax consequences of less than full balance debt resolution. Read and understand all program materials prior to enrollment. The use of debt settlement services will likely adversely affect your creditworthiness, may result in you being subject to collections or being sued by creditors or collectors and may increase the outstanding balances of your enrolled accounts due to the accrual of fees and interest. However, negotiated settlements we obtain on your behalf resolve the entire account, including all accrued fees and interest. C.P.D. Reg. No. T.S.12-03825.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <style>

.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.bg-regal-blue {
    color: #fff;
}
.bg-regal-blue {
    background: #003b71;
}
.pt-4 {
    padding-top: 1.5rem!important;
}
.pt-4, .py-4 {
    padding-top: 1.5rem!important;
}
        </style>

<div class="bg-regal-blue pt-4" data-id="trustpilot-local">
   <div class="container py-md-3">
      <div class="row">
         <div class="col-10 col-md-5 offset-1 offset-md-0 text-center text-md-start">
            <a class="small text-underline text-white" target="_blank" href="#">
               <img alt="Excellent - Trustpilot" class="w-100" src="images/tp1.svg">
               <!-- <div class="d-none d-md-block my-2">See Our Reviews</div> -->
            </a>
         </div>
      </div>
      <div class="row d-none d-md-flex mt-2 mb-3">
         <div class="col-6">
            <div class="bg-white d-flex flex-column h-100 justify-content-between p-4 text-body trustpilot-card">
               <div class="mb-2 trustpilot-review">
                  <img alt="5 stars" class="mb-3" src="images/fivestars.svg">
                  <div class="h5">Best Customer Service Experience Ever!</div>
                  <p class="caption me-5">I am beyond blown away with the AMAZING experience I was given today. If any company ever needs an example of PERFECT customer service, it should come from this company.</p>
                  <!-- <a class="d-block text-body text-underline" target="_blank" href="#">See Client’s Review</a> -->
               </div>
            </div>
         </div>
         <div class="col-6">
            <div class="bg-white d-flex flex-column h-100 justify-content-between p-4 text-body trustpilot-card">
               <div class="mb-2 trustpilot-review">
                  <img alt="5 stars" class="mb-3" src="images/fivestars.svg">
                  <div class="h5">Glad I Made That Call</div>
                  <p class="caption me-5">I'm glad I made that call to Lending Pro today. I feel like I can finally breathe again knowing I have my finances under control.</p>
                  <!-- <a class="d-block text-body text-underline" target="_blank" href="#">See Client’s Review</a> -->
               </div>
            </div>
         </div>
      </div>
      <div class="caption d-none d-md-block my-3 text-white">Individual experience may vary.</div>
      <div class="row pt-4 pt-md-0 pb-4">
         <div class="col-5 col-md-2 mx-auto mx-md-0"><img alt="BBB Accredited Business A+" class="mw-100" src="images/bbb.png"></div>
      </div>
   </div>
</div>
<!-- <section class="sec2">
   <div class="container">
      <div class="col-lg-9 col-md-12 mx-auto">
         <div class="row">
            <div class="col-md-4">
               <div class="nos">1</div>
               <p c>Take our quiz to check your eligibility</p>
            </div>
            <div class="col-md-4">
               <div class="nos">2</div>
               <p>Claim your <b>Free Debt Savings Estimate</b> with a Debt Specialist</p>
            </div>
            <div class="col-md-4">
               <div class="nos">3</div>
               <p>One step closer to living your life <b>debt-free!</b></p>
            </div>
         </div>
      </div>
   </div>
</section> -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2023 Lending Pro © All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="loading-wrapper">
            <div class="loading-inner">
                <p class="loading">Submitting</p>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                function nextElement() {
                    $(".stp1-warn").hide();
                    var par = $(".js-active").attr("id")
                    var tr = par.split('-');
                    var idDiv = parseInt(tr[1]) + 1;
                    // var newId = (`${tr[0]}-${idDiv}`);
                    if (idDiv < 7) {
                        $("#" + par).removeClass("js-active");
                        $("#step-" + idDiv).addClass("js-active");
                    }
                }

                function checkValidation() {
                    if ($(".js-active").find('.form-control').length == 1) { //checking for select element
                        if ($(".js-active").find('.form-control')[0].name == "debtAmount" && $(".js-active").find('.form-control').val() == "") {
                            $(".stp1-warn").show();
                            $(".warning").html("The Field is required")
                            return false
                        }
                        if ($(".js-active").find('.form-control')[0].name == "agreeDebt" && !$(".js-active").find('.form-control').prop('checked')) {
                            $(".stp1-warn").show();
                            $(".warning").html("The Field is required")
                            return false
                        }
                        nextElement()
                    } else if ($(".js-active").find('.form-control').length == 0) {
                        let findValue = $(".js-active").filter(function() {
                            return $(this).find(':input[type="radio"]:checked').val() != undefined
                        })
                        if (findValue.length > 0) {
                            nextElement()
                        } else {
                            $(".stp1-warn").show();
                            $(".warning").html("The Field is required")
                        }
                    } else if ($(".js-active").find('.form-control').length == 2) {
                        let findValue = $(".js-active").filter(function() {
                            console.log($(this).find(':input[class="form-control"]').val())
                            return $(this).find(':input[class="form-control"]').val() != ""
                        })
                        /*$(".js-active").find(':input[class="form-control"]').filter(function(el){
                         return this.value !=""
                        })*/
                        console.log(findValue)
                        if (findValue.length == 0) {
                            $(".stp1-warn").show();
                            $(".warning").html("The Field is required")
                        } else {
                            // console.log("hello")
                            nextElement()
                        }
                    } else if ($(".js-active").find('.form-control').length == 4) {
                        let flag = 0;
                        $(".js-active").find('.form-control').each(function(el, index) {
                            if ($(index).val() == "") {
                                flag++
                            }
                        })
                        console.log(flag)
                        if (flag > 0) {
                            $(".stp1-warn").show();
                            $(".warning").html("All address fields are required")
                        } else {
                            nextElement()
                        }
                    }
                }
                $(".btn1").click(function() {
                    checkValidation()
                });
                /* $("#sel1").change(function(){
                    if($("#sel1").val() != 0) {
                          $(".stp1-warn").hide();
                              
                            
                      }

                 })*/
                // next button js
                $(".js-btn-next").click(function() {
                    checkValidation()
                });
                // prev button js
                $(".js-btn-prev").click(function() {
                    var par = $(this).closest(".multisteps-form__panel").attr("id");
                    var tr = par.split('-');
                    var idDiv = parseInt(tr[1]) - 1;
                    // var newId = (`${tr[0]}-${idDiv}`);
                    if (idDiv >= 1) {
                        $(".multisteps-form__panel").removeClass("js-active");
                        $("#step-" + idDiv).addClass("js-active");
                    }
                })
            })

            // function checkPhoneValidation(phone) {
            //     var isNumberValid = 0;
            //     $.ajax({
            //         url: 'checkPhone.php',
            //         method: 'POST',
            //         data: {
            //             phone
            //         },
            //         async: false,
            //         success: function(data) {
            //             console.log(data)
            //             var parseData = JSON.parse(data)
            //             console.log(parseData)
            //             if (parseData.message == 'Phone is valid.') {
            //                 isNumberValid = 1
            //             }
            //         }
            //     })
            //     return isNumberValid
            // }
            $(".multisteps-form__form").submit(function(e) {
                e.preventDefault()
                var formData = $(".multisteps-form__form").serialize();
                let rawPhone = $("input[name='phone']").val()
                let email = $("input[name='email']").val()
                let phone = rawPhone.replace(/[^0-9]/g, '')
                console.log(phone)
                if (phone.length == 10 && email != "") {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    // var checkPhone = checkPhoneValidation(phone)
                    // if (!checkPhone) {
                    //     $(".warning").css("display", "block")
                    //     $(".warning").html("Please Enter a Valid Phone Number")
                    //     return false
                    // }
                    if (emailReg.test(email)) {
                        $(".loading-wrapper").css("display", "flex")
                        formData = formData.replace(/(phone=)[^&]*/, '$1' + phone);
                        $.ajax({
                            url: "https://services.leadconnectorhq.com/hooks/2G3QLQioAYgTzyM4xonb/webhook-trigger/740e38e6-9116-4e81-b144-d8836c28cc4b",
                            method: "GET",
                            data: formData,
                            success: function(data) {
                                console.log(data)
                                $(".loading-wrapper").css("display", "none")
                                window.location.href = "thank-you.php";
                            }
                        })
                    } else {
                        $(".stp1-warn").show();
                        $(".warning").html("Enter a valid Email")
                    }
                } else {
                    console.log("please enter valid data")
                    $(".stp1-warn").show();
                    $(".warning").html("The Field is required")
                }
            })
            $(".cd-dropdown-trigger").click(function() {
                $(".slidemenu").addClass("dropdown-is-active");
            });
            $(".slidemenu").click(function() {
                $(".slidemenu").removeClass("dropdown-is-active");
            });
            const isNumericInput = (event) => {
                const key = event.keyCode;
                return ((key >= 48 && key <= 57) || // Allow number line
                    (key >= 96 && key <= 105) // Allow number pad
                );
            };
            const isModifierKey = (event) => {
                const key = event.keyCode;
                return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
                    (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
                    (key > 36 && key < 41) || // Allow left, up, right, down
                    (
                        // Allow Ctrl/Command + A,C,V,X,Z
                        (event.ctrlKey === true || event.metaKey === true) && (key === 65 || key === 67 || key === 86 || key === 88 || key === 90))
            };
            const enforceFormat = (event) => {
                // Input must be of a valid number format or a modifier key, and not longer than ten digits
                if (!isNumericInput(event) && !isModifierKey(event)) {
                    event.preventDefault();
                }
            };
            const formatToPhone = (event) => {
                if (isModifierKey(event)) {
                    return;
                }
                const input = event.target.value.replace(/\D/g, '').substring(0, 10); // First ten digits of input only
                const areaCode = input.substring(0, 3);
                const middle = input.substring(3, 6);
                const last = input.substring(6, 10);
                if (input.length > 6) {
                    event.target.value = `(${areaCode}) ${middle} - ${last}`;
                } else if (input.length > 3) {
                    event.target.value = `(${areaCode}) ${middle}`;
                } else if (input.length > 0) {
                    event.target.value = `(${areaCode}`;
                }
            };
            const inputElement = document.getElementById('phoneNumber');
            inputElement.addEventListener('keydown', enforceFormat);
            inputElement.addEventListener('keyup', formatToPhone);
        </script>
        <script>
            const range = document.getElementById('range'),
                tooltip = document.getElementById('tooltip'),
                setValue = () => {
                    const newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                        newPosition = 16 - (newValue * 0.32);
                    tooltip.innerHTML = `
																	<span>${range.value}</span>`;
                    tooltip.style.left = `calc(${newValue}% + (${newPosition}px))`;
                    document.documentElement.style.setProperty("--range-progress", `calc(${newValue}% + (${newPosition}px))`);
                };
            document.addEventListener("DOMContentLoaded", setValue);
            range.addEventListener('input', setValue);
        </script>
    </body>
</html>