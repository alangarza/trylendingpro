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

            .modal-body {
    position: relative;
    padding: 15px;
}
.modal-body {
    flex: 1;
}
.container-xl {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.modal-content {
    position: relative;
}
.modal-content {
    display: flex;
    flex-direction: column;
}
.modal-content {
    min-height: 100vh;
    border: none;
    border-radius: 0;
}
.modal-content {
    position: relative;
    background-color: #fff;
    border: 1px solid rgba(13, 11, 45, .2);
    border-radius: 6px;
    box-shadow: 0 3px 9px rgba(13, 11, 45, .5);
    background-clip: padding-box;
    outline: 0;
}

.panel-default {
    border-color: #ddd;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}
.panel-default {
    border-color: #ddd;
}
.panel-default {
    border-color: var(--sm-light-gray);
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
}

.panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}
.panel-default>.panel-heading {
    color: var(--sm-black);
    border-color: var(--sm-light-gray);
    padding: 0;
    background: 0 0;
    border: 0;
}
.panel-heading {
    padding: 10px 15px !important;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}

.panel-default {
    border-color: #ddd;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}
.panel-default {
    border-color: #ddd;
}
.panel-default {
    border-color: var(--sm-light-gray);
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
}
.panel-body {
    padding: 15px;
}
.table-responsive {
    overflow-x: auto;
    min-height: .01%;
}
        </style>

<style type="text/css">
         :root {
         --sm-blue: #06A9DB;
         --sm-blue-alpha5: rgba(6,169,219,0.05);
         --sm-blue-alpha25: rgba(6,169,219,0.25);
         --sm-blue-alpha50: rgba(6,169,219,0.5);
         --sm-monetize-navy: #144572;
         --sm-monetize-navy-alpha50: rgba(20,69,114,0.5);
         --sm-amber: #FE7750;
         --sm-gold: #FFA515;
         --sm-gold-alpha5: rgba(255,165,21,0.05);
         --sm-black: #0D0B2D;
         --sm-dark-gray: #504f54;
         --sm-med-gray: #95919b;
         --sm-gray: #AAAAB2;
         --sm-light-gray: #C9C9C9;
         --sm-light-gray-alpha50: rgba(201,201,201,0.50);
         --sm-light-gray-alpha15: rgba(201,201,201,0.15);
         --sm-positive: #00b290;
         --sm-positive-alpha5: rgba(0,178,144,0.05);
         --sm-positive-alpha10: rgba(0,178,144,0.10);
         --sm-negative-rating: #FF6489;
         --sm-negative-alpha5: rgba(255,100,137,0.05);
         --sm-neutral-rating: #AAAAB2;
         --sm-neutral-rating-alpha5: rgba(170,170,178,0.05);
         --sm-warning: #FF910D;
         --sm-warning-alpha5: rgba(255,145,13,0.05);
         --sm-error: #FF1C51;
         --sm-error-alpha5: rgba(255,28,81,0.05);
         --bg-gray: #F9F9F9;
         --bg-sky: #F4FBFD;
         --bg-blue: #EEF8FF;
         --bg-white: #FFFFFF;
         --sm-footer-black: #2F3740;
         /* High Contrast Colors */
         --sm-blue-hc: #04607C;
         --sm-blue-hc-alpha5: rgba(4,96,124,0.05);
         --sm-amber-hc: #A03012;
         --sm-positive-hc: #00614E;
         --sm-positive-hc-alpha5: rgba(0,97,78,0.05);
         --sm-negative-rating-hc: #B8002B;
         --sm-negative-rating-hc-alpha5: rgba(184,0,43,0.05);
         --sm-neutral-rating-hc: #504F56;
         --sm-neutral-rating-hc-alpha5: rgba(80,79,76,0.05);
         --sm-warning-hc: #854900;
         --sm-warning-hc-alpha5: rgba(133,73,0,0.05);
         --sm-error-hc: #B8002B;
         --sm-error-hc-alpha5: rgba(184,0,43,0.05);
         }
         .terms_content_row {
             overflow: hidden;
         }
         .terms_content_row .left_terms_content {
             width: 25%;
             float: left;
             padding: 10px;
         }
         .terms_content_row .right_terms_content {
            width: 75%;
            float: right;
            padding: 20px;
         }
         .terms_content_row .left_inner_content a {
             font-size: 15px;
             color: #000000;
             font-weight: 700;
         }
         .terms_content_row .left_inner_content li {
             margin: 0 0 5px;
             list-style: none;
         }
         .terms_content_row .left_inner_content ol {
             padding-left: 0;
         }
         html{
            scroll-behavior: smooth;
         }
         .right_inner_content li {
             list-style: none;
         }
         @media (max-width: 991px){
            .right_inner_content li h3 {
                font-size: 25px!important;
            }
            .right_inner_content li h2 {
                font-size: 25px!important;
            }
            .terms_content_row .right_terms_content {
                width: 100%;
                float: none;
                padding: 0px;
            }
            .terms_content_row .left_terms_content {
                display: none;
            }
            .right_inner_content ol {
                padding: 0!important;
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
                    <!-- <div class="progressbarMain">
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
                    </div> -->
                    <!-- <div class="col-md-10 d-flex align-items-center justify-content-center justify-content-md-end"><div id="nav-user-loggedout"><a id="nav-login" class="nav-auth-button hide-mobile" href="#">Login</a><a id="nav-signup" class="nav-auth-button hide-mobile" href="#">Sign Up</a></div></div> -->
                    <!-- <button type="button" class="cd-dropdown-trigger show-mobile" aria-label="Navigation"><span class="sr-only">Toggle navigation</span><div class="nav-drawer-trigger"></div></button> -->
                </div>
            </div>
            <!-- <div class="slidemenu show-mobile"><div class="slideMenuinr"><ul><li><a id="nav-login" class="nav-auth-button" href="#">Login</a></li><li><a id="nav-signup" class="nav-auth-button" href="#">Sign Up</a></li></ul></div></div> -->
        </header>
        <!-- <div class="mainContent">
            <div class="col-md-6 m-auto d-flex align-items-center hghtmng">
                <div class="blckBx">
                    <h2>Congratulations!</h2>
                  
                    <p style="font-size: 15px;">You’ve just taken the first step towards consolidating your debt and becoming debt free. One of our certified debt specialists will be contacting you shortly to complete your free quote and answer any questions you may have. Our hours are M-F 9am to 9pm EST.</p>
                    <a href="/apply" class="blckBxBtn">Back To Home</a>
                </div>
            </div>
        </div> -->

        <div class="modal-body container-xl">
                <h2>What does Lending Pro do with your information?</h2>

                <br><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Why?</h3>
                    </div>
                    <div class="panel-body">
                        <p>Financial companies choose how they share your personal information. Federal law gives consumers the right to limit some but not all sharing. Federal law also requires us to tell you how we collect, share, and protect your personal information. Please read this notice carefully to understand what we do.</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>What?</h3>
                    </div>
                    <div class="panel-body">
                        <p>The types of personal information we collect and share depend on the product or service you have with us. This information can include:</p>
                        <ul>
                            <li><p>Social Security number and Credit Score</p></li>
                            <li><p>Name and contact information</p></li>
                            <li><p>Account balances and Transaction history, Income and Employment History</p></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>How?</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            All financial companies need to share Customers' personal information to run their everyday business. In the section below, we list the reasons financial companies can share their Customers'  personal information; the reasons Lending Pro chooses to share; and whether you can limit this sharing.
                        </p>
                    </div>
                </div>

                <br><br>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><h4>Reasons we can share your personal information</h4></th>
                                <th><h4>Does Lending Pro Share?</h4></th>
                                <th><h4>Can you limit this sharing?</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For our everyday business purposes—</strong><br>
                                        Such as to process your transactions, maintain your account(s), respond to court orders and legal investigations, or report to credit bureaus
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>No</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For our marketing purposes—</strong><br>
                                        To offer our products and services to you
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>No</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For joint marketing with other financial companies</strong>
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>No</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For our affiliates' everyday business purposes—</strong><br>
                                        Information about your transactions and experiences
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>Yes</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For our affiliates' everyday business purposes—</strong><br>
                                        Information about your creditworthiness
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>Yes</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For our affiliates to market to you</strong>
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>Yes</p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>For nonaffiliates to market to you</strong>
                                    </p>
                                </td>
                                <td><p>Yes</p></td>
                                <td><p>Yes</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br><br>

                <div class="input-group">
                    <span class="input-group-addon"><h4>To limit our sharing</h4></span>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                 
                                Email us: <strong>support@lendingpro.com</strong><br>
                                Please note:<br>
                                If you are a new customer, we can begin sharing your information 30 days from the date we sent this notice. When you are no longer our customer, we continue to share your information  as described in this notice.<br>
                                However, you can contact us at any time to limit our sharing.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><h4>Questions?</h4></span>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                            
                                Email us: support@lendingpro.com<br>
                            </p>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Who we are</h3>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Who is providing this notice?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    Lending Pro                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>What we do</h3>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>How does Lending Pro protect my personal information?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    To protect your personal information from unauthorized access and use, we use security measures that comply with federal law. These measures include computer safeguards and secured files and buildings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>How does Lending Pro collect my personal information?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    We collect your personal information, for example, when you:
                                </p>
                                <ol>
                                    <li><p>Open an account</p><p></p></li>
                                    <li><p>Provide income information</p><p></p></li>
                                    <li><p>Provide account information</p><p></p></li>
                                    <li><p>Provide employment information</p><p></p></li>
                                    <li><p>Give us your contact information</p><p></p></li>
                                </ol>

                                <br>
                                <p>
                                    We also collect your personal information from others, such as credit bureaus, affiliates or other companies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Why can't I limit all sharing?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Federal law gives you the right to limit only:</p>

                                <ol>
                                    <li><p>Sharing for affiliates' everyday business purposes—information about your creditworthiness</p></li>
                                    <li><p>affiliates from using your information to market to you</p></li>
                                    <li><p>sharing for nonaffiliates to market to you</p></li>
                                </ol>

                                <br>
                                <p>State laws and individual companies may give you additional rights to limit sharing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>What happens when I limit sharing for an account I hold jointly with someone else?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    Lending Pro will limit sharing for joint account holders
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Definitions</h3>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Affiliates</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    Companies related by common ownership or control. They can be financial and nonfinancial companies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Nonaffiliates</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    Companies not related by common ownership or control. They can be financial and nonfinancial companies.
                                    <br><br>
                                    Nonaffiliates we can share with include direct marketing companies, service providers, insurance companies and broker/dealers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Joint marketing</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    A formal agreement between nonaffiliated financial companies that together market financial products or services to you.

                                    <br><br>

                                    Lending Pro joint marketing partners include Financial Institutions, Lead Generators, and Marketing and Sales organizations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Other important information</h3>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><h4>Questions?</h4></span>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    See below for specific state information
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <p>
                        <strong>For California Residents</strong>
                        <br>
                        In accordance with California law, we will not share information we collect about you with nonaffiliates, except as allowed by law. For example, we may share information with your consent or to service your accounts. See below for your right to limit our sharing among our affiliates and with non-affiliated third parties.

                        <br><br>

                        <strong>For Nevada Residents</strong>
                        <br>
                        We are providing you this notice pursuant to state law.  Nevada law requires that we also provide you with the following contact information: Bureau of Consumer Protection, Office of the Nevada Attorney General, 555 E. Washington St. – Suite 3900, Las Vegas, NV
                        89101; 702- 486-3132 – BCPINFO@ag.state.nv.us.

                        <br><br>

                        <strong>For Vermont Residents</strong>
                        <br>
                        In accordance with Vermont law, we will not share information we collect about Vermont residents with companies who are not affiliates, except as permitted by law, such as with your consent or to service your accounts. We will not share information about your creditworthiness with our affiliates without your authorization or consent but we may share information about our transactions or experiences with you with our affiliates without your consent.

                        <br><br>

                        <strong>Additional Rights for California Residents – Important Privacy Choices for Consumers</strong>
                        <br>
                        You have the right to control whether we share some of your personal information. Please read the following information carefully before you make your choices below.

                        <br><br>

                        <strong>1. Your Rights</strong>
                        <br>
                        You have the following rights to restrict the sharing of personal and financial information with our affiliates (companies we own or control) and outside companies that we do business with. Nothing in this form prohibits the sharing of information necessary for us to follow the law, as permitted by law, or to give you the best service on your accounts with us. This includes sending you information about some other products or services.
                        <br><br>
                        <strong>2. Your Choices</strong>
                        <br>
                    </p>
                    <ul>
                        <li><p>Restrict Information Sharing With Companies We Own or Control (Affiliates): Unless you say “No,” we may share personal and financial information about you with our affiliated companies.</p></li>
                        <li><p>Restrict Information Sharing With Other Companies We Do Business With To Provide Financial Products And Services: Unless you say “No,” we may share personal and financial information about you with outside companies we contract with to provide financial products and services to you.</p></li>
                    </ul>
                    <p>
                        <strong>3. Time Sensitive Reply</strong>
                        <br>
                        You may make your privacy choice(s) at any time. Your choice(s) will remain unless you state otherwise. However, if we do not hear from you we may share some of your information with affiliated companies and other companies with whom we have contracts to provide products and services. To exercise your choices do one of the following:
                        <br>
                        <strong>Option 1:</strong>
                        <br>
                        Reply electronically by contacting us through the Internet at support@lendingpro.com
                        <br>
           
                    </p>
                </div>
            </div>


    </body>
</html>