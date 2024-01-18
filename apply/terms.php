
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapLending Pro4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css" type="text/css" />
        <link rel="stylesheet" href="css/custom.css" type="text/css" />
        <link rel="stylesheet" href="css/thank-you.css" type="text/css" />
        <title>Lending Pro</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wghtLending Pro400;500&display=swap" rel="stylesheet">

        
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

            Lending Prokeyframes dots {

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

            Lending Promedia (max-width: 767px) {
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
         Lending Promedia (max-width: 991px){
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
                        <a href="">
                        <img class="img-fluid logo" src="images/lendingPro.svg" alt="logo">
                        </a>
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
               <div class="terms_content_row">
                
                  <div class="right_terms_content">
                     <div class="right_inner_content">
                        <div class="right_top_area">
                           <p>Lending Pro Financial Services. Website Terms of Use</p>
                           <p>Last updated: November 5, 2022</p>
                           <p>These Website Terms of Use (including any document incorporated reference herein) for the</p>
                           <div style="color: rgba(0, 0, 0, 0.85);  font-size: 18px;">
                              <p style="margin-bottom: 31px;"><span style="color: #000000; font-family: Lato, sans-serif; font-size: 16px; font-weight: var( --e-global-typography-text-font-weight );">Lending Pro Financial Services</span>.&nbsp;<span style="color: #000000; font-family: Lato, sans-serif; font-size: 16px; font-weight: var( --e-global-typography-text-font-weight );">Website Terms of Use</span></p>
                              <p style="margin-bottom: 31px;"><span style="color: #000000; font-family: Lato, sans-serif; font-size: 16px;">Last updated: November 5, 2022</span></p>
                              <p style="margin-bottom: 31px;">These Website Terms of Use (including any document incorporated reference herein) for the Lending Pro Financial Services&nbsp;and any and all of its subsidiaries and affiliates&nbsp; websites and covers all aspects of your use of the websites and, to the extent not superseded by the terms and conditions of any contract we may sign with you, of any product or service that we may supply to you.</p>
                              <p><span style="font-weight: bold;">PLEASE READ THESE TERMS OF USE CAREFULLY. BY REGISTERING FOR, ACCESSING, BROWSING OR OTHERWISE USING THE WEBSITES YOU ACKNOWLEDGE THAT YOU HAVE READ, UNDERSTOOD AND AGREE TO BE BOUND BY THESE TERMS OF USE. IF AT ANY TIME YOU DISAGREE WITH ANY OF THESE TERMS AND CONDITIONS, YOU SHOULD IMMEDIATELY CEASE YOUR USE OF THE WEBSITES.</span></p>
                           </div>
                           <ol style="margin-bottom: 1em; padding-left: 60px; counter-reset: first-level-counter 0; position: relative;  font-size: 18px; background-color: #ffffff;">
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px;">
                                 <span id="elementor-toc__heading-anchor-0" class="elementor-menu-anchor "></span>
                                 <h3 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Eligibility &amp; Privacy</h3>
                                 <div style="line-height: 31px; color: #000000; ">
                                    <p style="margin-bottom: 31px;">The products and services offered through the websites are not available to persons under the age of 18 or to persons who are not legal residents of the United States, by visa or otherwise. BY CLICKING ANY “SUBMIT” OR OTHER BUTTON OR BY ACCESSING, BROWSING OR OTHERWISE USING THE WEBSITES YOU REPRESENT AND WARRANT TO US THAT YOU ARE AT LEAST 18 YEARS OF AGE AND ARE A LEGAL RESIDENT OF THE UNITED STATES.</p>
                                    <p style="margin-bottom: 31px;">Some of the products and services offered through the websites may be subject to additional terms and conditions, including those products and services offered by or through third-party providers. To the extent not inconsistent with these Terms of Use, these additional terms and conditions are hereby incorporated herein by reference; however, in the case of any inconsistency between these Terms of Use and any other document that is incorporated by reference herein, these Terms of Use shall control.</p>
                                    <p style="margin-bottom: 31px;">Lending Pro has made a commitment to protecting the privacy of those who visit our websites and access the products and services available therein.&nbsp; Privacy Policy is hereby incorporated herein by reference.</p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px;">
                                 <span id="elementor-toc__heading-anchor-1" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Products and Services</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <p>Certain of the websites function as an online marketplace where visitors can research and submit requests for debt resolution services and research different types of home and consumer loans, as well as other products and services. You understand and agree that if you submit a request for a product or service or for further information relating to a product or service offered through any of the websites, Lending Pro will share such of your information as may be required in order to match you with selected providers of the products and/or services that you request.</p>
                                    <p>By submitting your contact information to us, you are expressly consenting to be contacted by us or by one or more providers of products and services by telephone, email or postal mail even if you have opted into the national Do Not Call List administered by the Federal Trade Commission, any state equivalent Do Not Call List or the Do Not Call List of any specific institution.</p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-2" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Modification of These Terms of Use</h2>
                                 <div style="line-height: 31px; color: #000000;">Lending Pro reserves the right to change, modify, add or remove portions of these Terms of Use at any time by posting amended Terms of Use. Please check these Terms of Use periodically for changes. Your continued use of any of the websites after the posting of changes constitutes your binding acceptance of such changes. Except as stated elsewhere, such amended Terms of Use will be effective immediately and without further notice.</div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-3" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">License Grants</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <p style="margin-bottom: 31px;">Subject to your compliance with these Terms of Use,</p>
                                    <p style="margin-bottom: 31px;">Lending Pro expressly reserves all rights not specifically granted herein, including but not limited to the right to exercise whatever lawful means it deems necessary or appropriate to prevent unauthorized use of the websites.</p>
                                    <p style="margin-bottom: 31px;">By using the websites, you hereby grant to&nbsp; a worldwide, non-exclusive, perpetual, irrevocable, transferable, sublicensable (through multiple tiers), assignable, royalty-free license to transfer, display, reproduce, distribute, modify and otherwise use your personal and other information, subject to the restrictions set forth herein (including Privacy Policy).</p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <p style="margin-bottom: 31px;">Lending Pro hereby grants you a personal, limited, non-exclusive, non-transferable revocable license to use the websites for purposes of accessing the information and contacting the providers of the products and services contained therein.</p>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-4" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Prohibited Conduct</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <p style="margin-bottom: 31px;">By using the websites, you agree not to:</p>
                                    <p style="margin-bottom: 31px;">Use the websites for any purpose other than to access the information and contact the providers of the products and services advertised therein;&nbsp;<span style="background-color: transparent; font-weight: var( --e-global-typography-text-font-weight );">submit, transmit or facilitate the distribution of information or content that is illegal, harmful, abusive, racially or ethnically offensive, vulgar, sexually explicit, defamatory, infringing, invasive of personal privacy or publicity rights, or in a reasonable person’s view, objectionable; attempt to interfere with, compromise the system integrity or security or decipher any transmissions to or from the servers running the websites or bypass the measures we may use to prevent or restrict access to the websites; take any action that imposes, or may impose at our sole discretion an unreasonable or disproportionately large load on our infrastructure;&nbsp;</span><span style="background-color: transparent; font-weight: var( --e-global-typography-text-font-weight );">use any robot, spider, scraper or other similar system to access the websites; impersonate another person or otherwise misrepresent your affiliation with a person or entity, conduct fraud, hide or attempt to hide your identity; or submit, upload, post, email, transmit or otherwise make available any information or content that you do not have a right to make available under any law or under contractual or fiduciary relationships.</span></p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-5" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Ownership &amp; Proprietary Rights</h2>
                                 <div style="line-height: 31px; color: #000000; ">The websites are owned and operated by Lending Pro. All content displayed on the websites, as well as all visual interfaces, graphics, designs, information, computer code (including source code or object code), software and all other elements of the websites are protected by United States copyright, trade dress, patent and trade/service mark laws, international conventions, where applicable, and all other relevant intellectual property and proprietary rights and laws. Except as otherwise specified on the websites, all content contained on the websites is the property of Lending Pro and/or its third-party licensors. Except as expressly authorized by Lending Pro, you may not sell, license, distribute, copy, modify, publicly perform or display, transmit, publish, edit, adapt, create derivative works from or otherwise make any unauthorized use of such content.</div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-6" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Links to Third-Party Sites; Dealings with Third Parties</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <p style="margin-bottom: 31px;">The websites may include links or references to other web sites owned or operated by third parties with which Lending Pro&nbsp;may have a relationship. Lending Pro&nbsp;has no control over such third party web sites and, thus, is not responsible for their availability, content or advertising, or any products or services available from such third parties. Your correspondence or business dealings with such third parties are solely between you and such third party. Access and use of such web sites is solely at your own risk.</p>
                                    <p style="margin-bottom: 31px;">Your correspondence or business dealings with any third parties, including, but not limited to, business dealings with credit counseling services, debt settlement services, mortgage brokers or lenders, insurance agents or carriers or any other product or service provider are solely between you and such third party. Lending Pro&nbsp;is not responsible for any terms, conditions, warranties or representations associated with such dealings or liable for any loss or damage of any sort incurred as the result of such dealings.</p>
                                    <p style="margin-bottom: 31px;">By using the websites as directed, you are acknowledging that Lending Pro&nbsp;does not make credit decisions in connection with any product or service offered to you, does not recommend, endorse, warrant or guarantee the products or services of any third party and is not party to any discussions that you may have or agreement that you may make with any third party. Lending Pro&nbsp;does not charge anyone a fee to use the websites.</p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-7" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Termination; Exclusive Remedy</h2>
                                 <div style="line-height: 31px; color: #000000;"><span style="background-color: transparent; font-weight: var( --e-global-typography-text-font-weight );">Lending Pro</span>&nbsp;at any time, in its sole discretion, for any or no reason, and without penalty or liability, may terminate your use of the websites and terminate any session. Lending Pro&nbsp;may also in its sole discretion and at any time discontinue providing access to one or more websites. Any termination of access to the websites may be effected with or without prior notice, and Lending Pro will not be liable to you or to any third party for any such termination. Any suspected fraudulent, abusive or illegal activity may be referred to appropriate law enforcement authorities. Your sole and exclusive remedy with respect to any dissatisfaction with (i) the websites, (ii) any term or condition of these Terms of Use or (iii) any policy or practice of Lending Pro in operating any website is to terminate your access to and discontinuing use of the websites.</div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-8" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Indemnification</h2>
                                 <div style="line-height: 31px; color: #000000;">You agree to indemnify, save and hold Lending Pro&nbsp;and its contractors, employees, agents and its third party suppliers and business partners harmless from any claims, losses, damages and liabilities, including legal fees and expenses, arising out of your use or misuse of the websites, any violation by you of these Terms of Use or any breach of the representations, warranties and covenants made by you herein. Lending Pro&nbsp;reserves the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us and you agree to cooperate with Lending Pro’s defense of any such claims. Lending Pro&nbsp;will use reasonable efforts to notify you of any such claim, action or proceeding upon becoming aware of it.</div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-9" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">No Warranty; Disclaimers</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <div>
                                       <p style="margin-bottom: 31px;">TO THE FULLEST EXTENT PERMISSIBLE PURSUANT TO APPLICABLE LAW, Lending Pro AND ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS DISCLAIM ALL WARRANTIES, STATUTORY, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT OF PROPRIETARY RIGHTS. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM Lending Pro&nbsp;OR THROUGH THE WEBSITES WILL CREATE ANY WARRANTY NOT EXPRESSLY PROVIDED IN THESE TERMS OF USE.</p>
                                       <p style="margin-bottom: 31px;">THE USE OF THE WEBSITES IS AT YOUR SOLE RISK. THE WEBSITES AND ANY DATA, INFORMATION, COMMERCIAL CONTENT, THIRD-PARTY WEB SITES, PRODUCTS OR SERVICES MADE AVAILABLE THROUGH THE WEBSITES ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE,” “WITH ALL FAULTS” BASIS AND WITHOUT WARRANTIES OR REPRESENTATIONS OF ANY KIND EITHER EXPRESS OR IMPLIED.</p>
                                       <p style="margin-bottom: 31px;">NONE OF Lending Pro OR ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS WARRANT THAT ANY DATA, INFORMATION, COMMERCIAL CONTENT, THIRD-PARTY WEB SITES, PRODUCTS OR SERVICES OFFERED ON OR THROUGH THE WEBSITES OR ANY THIRD PARTY WEB SITES WILL BE UNINTERRUPTED OR FREE OF ERRORS, VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT ANY OF THE FOREGOING, IF PRESENT, WILL BE CURED OR STOPPED. YOUR USE OF THE WEBSITES OR ANY THIRD PARTY WEB SITES IS AT YOUR OWN RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR PROPERTY (INCLUDING YOUR COMPUTER SYSTEM) OR LOSS OF DATA THAT RESULTS FROM THE USE OF SUCH WEBSITES.</p>
                                    </div>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-10" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Limitation of Liability</h2>
                                 <div style="line-height: 31px; color: #000000;"><span style="font-weight: bold;">UNDER NO CIRCUMSTANCES, INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE, WILL Lending Pro OR ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS BE LIABLE FOR ANY SPECIAL, INDIRECT, INCIDENTAL, CONSEQUENTIAL, PUNITIVE, RELIANCE OR EXEMPLARY DAMAGES (INCLUDING WITHOUT LIMITATION DAMAGES ARISING FROM ANY UNSUCCESSFUL COURT ACTION OR LEGAL DISPUTE, LOST BUSINESS, LOST REVENUES OR LOSS OF ANTICIPATED PROFITS OR ANY OTHER PECUNIARY OR NON-PECUNIARY LOSS OR DAMAGE OF ANY NATURE WHATSOEVER) ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR THAT RESULT FROM YOUR USE OR YOUR INABILITY TO USE THE WEBSITES OR ANY THIRD-PARTY WEB SITE OR ANY OTHER INTERACTIONS WITH Lending Pro, EVEN IF Lending Pro HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. APPLICABLE LAW MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN SUCH CASES, Lending Pro LIABILITY WILL BE LIMITED TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW.</span></div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-11" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Release</h2>
                                 <div style="line-height: 31px; color: #000000;"><span style="font-weight: bold;">BY YOUR USE OF ANY Lending Pro WEBSITE, YOU ARE AGREEING TO RELEASE AND DISCHARGE Lending Pro AND ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS AND EACH OF THEIR RESPECTIVE AGENTS, DIRECTORS, OFFICERS, EMPLOYEES AND ALL OTHER RELATED PERSONS OR ENTITIES FROM ANY AND ALL CLAIMS, DEMANDS, CAUSES OF ACTION, PROCEEDINGS, LIABILITIES, OBLIGATIONS, LEGAL FEES, COSTS AND EXPENSES OF ANY KIND OR NATURE, WHETHER KNOWN OR UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF THE WEBSITES. IF YOU ARE A CALIFORNIA RESIDENT, YOU WAIVE CALIFORNIA CIVIL CODE SECTION 1542, WHICH SAYS, “A GENERAL RELEASE DOES NOT EXTEND TO CLAIMS WHICH THE CREDITOR DOES NOT KNOW OR SUSPECT TO EXIST IN HIS FAVOR AT THE TIME OF EXECUTING THE RELEASE, WHICH IF KNOWN BY HIM MUST HAVE MATERIALLY AFFECTED HIS SETTLEMENT WITH THE DEBTOR.”</span></div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-12" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Dispute Resolution</h2>
                                 <div style="line-height: 31px; color: #000000;">
                                    <p style="margin-bottom: 31px;">In the event of a dispute between you and Lending Pro&nbsp;that arises out of these Terms of Use or any product or service you obtain through the websites (“Claim”), you and Lending Pro agree to resolve that Claim in accordance with the procedures set forth below or as we may otherwise agree in writing. Before resorting to these dispute resolution mechanisms, you must first contact us directly to seek a resolution. If, however, we are unable to resolve our differences informally, Lending Pro will consider reasonable requests to resolve the dispute through alternative dispute resolution procedures, such as mediation or arbitration, as alternatives to litigation.</p>
                                    <p style="margin-bottom: 31px;">For any Claim (excluding claims for injunctive or other equitable relief) where the total amount of the award sought is less than $10,000, either party may elect to resolve the dispute in a cost effective manner through binding non-appearance-based arbitration. In the event a party elects arbitration, they shall initiate such arbitration through an established alternative dispute resolution (“ADR”) provider chosen by the party seeking arbitration. The ADR provider and the parties must comply with the following rules:</p>
                                    <ul>
                                       <li style="list-style-type: disc;">the arbitration shall be conducted by telephone or online and be solely based on written submissions, the specific manner to be chosen by the party initiating the arbitration;</li>
                                       <li style="list-style-type: disc;">the arbitration shall not involve any personal appearance by the parties or witnesses unless otherwise mutually agreed by the parties; and</li>
                                       <li style="list-style-type: disc;">any judgment on the award rendered by the arbitrator may be entered in any court of competent jurisdiction.</li>
                                    </ul>
                                 </div>
                              </li>
                              <li style="margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-13" class="elementor-menu-anchor "></span>
                                 <h2 style="color: #264779; margin-top: 0px; margin-bottom: 28px; display: inline-block; font-size: 40px; line-height: 50.8px;">Miscellaneous</h2>
                                 <div style="line-height: 31px;">
                                    <p style="color: #000000;">14.1 Notice<br>Lending Pro&nbsp;may provide you with notices by e-mail, regular mail or postings on any website. Notice will be deemed given twenty-four hours after e-mail is sent, unless Lending Pro is notified that the e-mail address used is invalid. Alternatively, Lending Pro&nbsp;may give you legal notice by mail to a postal address, if provided by you through any website. In such case, notice will be deemed given three (3) calendar days after the date of mailing.&nbsp;</p>
                               
                                    <p style="color: #000000; margin-bottom: 31px;">14.2 Waiver and Severability of Terms<br>The failure of Lending Pro&nbsp;to exercise or enforce any right or provision of these Terms of Use shall not constitute a waiver of such right or provision. Any waiver of any provision of these Terms of Use will be effective only if in writing and signed by Lending Pro. If any provision of these Terms of Use is found by a court of competent jurisdiction to be invalid, the other provisions of these Terms of Use shall remain in full force and effect and the parties agree that such court should endeavor to give effect to the parties’ intentions.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">14.3 Choice of Law; Forum<br>These Terms of Use shall be governed in all respects by the laws of the State of New York as they apply to agreements entered into and to be performed entirely within New York between New York residents, without regard to conflict of law provisions.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">Any claim or dispute you may have against Lending Pro must be resolved by a court located in New York County, New York, except as otherwise agreed by the parties or as described in Paragraph 13. You agree to submit to the personal jurisdiction of the courts located within New York, New York for the purpose of litigating all such claims or disputes.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">All claims filed or brought contrary to either Section 13 or this Section 14.3 shall be considered improperly filed. Should you file a claim improperly, Lending Pro may recover reasonable attorneys’ fees and costs, provided that Lending Pro&nbsp;has notified you in writing of the improperly filed claim and you have failed to withdraw the claim promptly.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">14.4 Assignment<br>You may not transfer or assign any of your rights and obligations under these Terms of Use without the express prior written consent of Lending Pro, give in its sole discretion. However, you acknowledge and agree that Lending Pro&nbsp;may freely and without restriction or limitation assign or transfer any of its rights and obligations under these Terms of Use.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">14.5 Entire Agreement<br>These Terms of Use and any document incorporated by reference herein constitute the entire agreement between you and Lending Pro and govern your use of the websites, superseding any prior agreements between you and Lending Pro. Notwithstanding the foregoing, you also may be subject to additional terms and conditions that may apply when you use or purchase certain products and/or services provided by Lending Pro or one of Lending Pro’s third party business partners.</p>
                                    <p style="color: #000000; margin-bottom: 31px;">14.6 Survival<br>The following paragraphs shall survive termination or your refusal to continue to use the Service: 4, 6, 7, 8, 9, 10, 11, 12, 13 and 14.</p>
                                    <p style="color: #000000; margin-bottom: 31px;"><span style="font-weight: bold;">PLEASE PRINT AND RETAIN A COPY OF THESE TERMS OF USE FOR YOUR RECORDS.</span></p>
                                    <p style="margin-bottom: 31px;">For additional information, Contact us at <span style="color: #264779;"><b>@lendingpro.com</b></span></p>
                                    <p style="color: #000000; margin-bottom: 31px;">Carriers are not responsible for delayed or undelivered messages.</p>
                                 </div>
                              </li>
                              <li style="color: rgba(0, 0, 0, 0.85); margin-top: 36px; ">
                                 <span id="elementor-toc__heading-anchor-14" class="elementor-menu-anchor "></span>
                                 <h2 style="margin-top: 0px; margin-bottom: 28px; color: #264779; display: inline-block; font-size: 40px; line-height: 50.8px;">Privacy</h2>
                                 <div style="line-height: 31px; color: #000000;">Lending Pro respects your privacy. We will not share or use your mobile number for any other purpose. We will only use information you provide to transmit your text message. Nonetheless, we reserve the right at all times to disclose any information as necessary to satisfy any law, regulation or governmental request, to avoid liability, or to protect our rights or property. When you complete forms online or otherwise provide us information in connection with the Service, you agree to provide accurate, complete and true information. You agree not to use a false or misleading name or a name that you are not authorized to use. If we, in our sole discretion, believe that any such information is untrue, inaccurate or incomplete, we may refuse you access to the Service and pursue any appropriate legal remedies.</div>
                              </li>
                           </ol>
                           <p>. Website Terms of Use</p>
                           <p>Last updated: November 5, 2020</p>
                           <p>These Website Terms of Use (including any document incorporated reference herein) for the Lending Pro Financial Services, LLC and any and all of its subsidiaries and affiliates (“Lending Pro”) websites and covers all aspects of your use of the websites and, to the extent not superseded by the terms and conditions of any contract we may sign with you, of any product or service that we may supply to you.</p>
                           <p><b>PLEASE READ THESE TERMS OF USE CAREFULLY. BY REGISTERING FOR, ACCESSING, BROWSING OR OTHERWISE USING THE WEBSITES YOU ACKNOWLEDGE THAT YOU HAVE READ, UNDERSTOOD AND AGREE TO BE BOUND BY THESE TERMS OF USE. IF AT ANY TIME YOU DISAGREE WITH ANY OF THESE TERMS AND CONDITIONS, YOU SHOULD IMMEDIATELY CEASE YOUR USE OF THE WEBSITES.</b></p>

                        </div>
                        <ol>
<li>
<h2><span id="elementor-toc__heading-anchor-15" class="elementor-menu-anchor ">1.</span> Eligibility; Privacy</h2>
<div>
<div>
<p>The products and services offered through the websites are not available to persons under the age of 18 or to persons who are not legal residents of the United States, by visa or otherwise. BY CLICKING ANY “SUBMIT” OR OTHER BUTTON OR BY ACCESSING, BROWSING OR OTHERWISE USING THE WEBSITES YOU REPRESENT AND WARRANT TO US THAT YOU ARE AT LEAST 18 YEARS OF AGE AND ARE A LEGAL RESIDENT OF THE UNITED STATES.</p>
<p>Some of the products and services offered through the websites may be subject to additional terms and conditions, including those products and services offered by or through third-party providers. To the extent not inconsistent with these Terms of Use, these additional terms and conditions are hereby incorporated herein by reference; however, in the case of any inconsistency between these Terms of Use and any other document that is incorporated by reference herein, these Terms of Use shall control.</p>
<p>Lending Pro has made a commitment to protecting the privacy of those who visit our websites and access the products and services available therein. Lending Pro’s Privacy Policy is hereby incorporated herein by reference.</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-16" class="elementor-menu-anchor "></span><h2>Products and Services</h2>
<div>
<div>
<p>Certain of the websites function as an online marketplace where visitors can research and submit requests for debt resolution services and research different types of home and consumer loans, as well as other products and services. You understand and agree that if you submit a request for a product or service or for further information relating to a product or service offered through any of the websites, Lending Pro will share such of your information as may be required in order to match you with selected providers of the products and/or services that you request.</p>
<p>By submitting your contact information to us, you are expressly consenting to be contacted by us or by one or more providers of products and services by telephone, email or postal mail even if you have opted into the national Do Not Call List administered by the Federal Trade Commission, any state equivalent Do Not Call List or the Do Not Call List of any specific institution.</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-17" class="elementor-menu-anchor "></span><h2>Modification of These Terms of Use</h2>
<div>
<div>Lending Pro reserves the right to change, modify, add or remove portions of these Terms of Use at any time by posting amended Terms of Use. Please check these Terms of Use periodically for changes. Your continued use of any of the websites after the posting of changes constitutes your binding acceptance of such changes. Except as stated elsewhere, such amended Terms of Use will be effective immediately and without further notice.</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-18" class="elementor-menu-anchor "></span><h3>License Grants</h3>
<div>
<div>
<p>Subject to your compliance with these Terms of Use, Lending Pro hereby grants you a personal, limited, non-exclusive, non-transferable revocable license to use the websites for purposes of accessing the information and contacting the providers of the products and services contained therein.</p>
<p>Lending Pro expressly reserves all rights not specifically granted herein, including but not limited to the right to exercise whatever lawful means it deems necessary or appropriate to prevent unauthorized use of the websites.</p>
<p>By using the websites, you hereby grant to Lending Pro a worldwide, non-exclusive, perpetual, irrevocable, transferable, sublicensable (through multiple tiers), assignable, royalty-free license to transfer, display, reproduce, distribute, modify and otherwise use your personal and other information, subject to the restrictions set forth herein (including Lending Pro’s Privacy Policy).</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-19" class="elementor-menu-anchor "></span><h2>Prohibited Conduct</h2>
<div>
<div>
<p>By using the websites, you agree not to:</p>
<p>Use the websites for any purpose other than to access the information and contact the providers of the products and services advertised therein;</p>
<p>submit, transmit or facilitate the distribution of information or content that is illegal, harmful, abusive, racially or ethnically offensive, vulgar, sexually explicit, defamatory, infringing, invasive of personal privacy or publicity rights, or in a reasonable person’s view, objectionable; attempt to interfere with, compromise the system integrity or security or decipher any transmissions to or from the servers running the websites or bypass the measures we may use to prevent or restrict access to the websites; take any action that imposes, or may impose at our sole discretion an unreasonable or disproportionately large load on our infrastructure;</p>
<p>use any robot, spider, scraper or other similar system to access the websites; impersonate another person or otherwise misrepresent your affiliation with a person or entity, conduct fraud, hide or attempt to hide your identity; or submit, upload, post, email, transmit or otherwise make available any information or content that you do not have a right to make available under any law or under contractual or fiduciary relationships.</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-20" class="elementor-menu-anchor "></span><h2>Ownership &amp; Proprietary Rights</h2>
<div>
<div>The websites are owned and operated by Lending Pro. All content displayed on the websites, as well as all visual interfaces, graphics, designs, information, computer code (including source code or object code), software and all other elements of the websites are protected by United States copyright, trade dress, patent and trade/service mark laws, international conventions, where applicable, and all other relevant intellectual property and proprietary rights and laws. Except as otherwise specified on the websites, all content contained on the websites is the property of Lending Pro and/or its third-party licensors. Except as expressly authorized by Lending Pro, you may not sell, license, distribute, copy, modify, publicly perform or display, transmit, publish, edit, adapt, create derivative works from or otherwise make any unauthorized use of such content.</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-21" class="elementor-menu-anchor "></span><h2>Links to Third-Party Sites; Dealings with Third Parties</h2>
<div>
<div>
<p>The websites may include links or references to other web sites owned or operated by third parties with which Lending Pro may have a relationship. Lending Pro has no control over such third party web sites and, thus, is not responsible for their availability, content or advertising, or any products or services available from such third parties. Your correspondence or business dealings with such third parties are solely between you and such third party. Access and use of such web sites is solely at your own risk.</p>
<p>Your correspondence or business dealings with any third parties, including, but not limited to, business dealings with credit counseling services, debt settlement services, mortgage brokers or lenders, insurance agents or carriers or any other product or service provider are solely between you and such third party. Lending Pro is not responsible for any terms, conditions, warranties or representations associated with such dealings or liable for any loss or damage of any sort incurred as the result of such dealings.</p>
<p>By using the websites as directed, you are acknowledging that Lending Pro does not make credit decisions in connection with any product or service offered to you, does not recommend, endorse, warrant or guarantee the products or services of any third party and is not party to any discussions that you may have or agreement that you may make with any third party. Lending Pro does not charge anyone a fee to use the websites.</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-22" class="elementor-menu-anchor "></span><h2>Termination; Exclusive Remedy</h2>
<div>
<div>Lending Pro at any time, in its sole discretion, for any or no reason, and without penalty or liability, may terminate your use of the websites and terminate any session. Lending Pro may also in its sole discretion and at any time discontinue providing access to one or more websites. Any termination of access to the websites may be effected with or without prior notice, and Lending Pro will not be liable to you or to any third party for any such termination. Any suspected fraudulent, abusive or illegal activity may be referred to appropriate law enforcement authorities. Your sole and exclusive remedy with respect to any dissatisfaction with (i) the websites, (ii) any term or condition of these Terms of Use or (iii) any policy or practice of Lending Pro in operating any website is to terminate your access to and discontinuing use of the websites.</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-23" class="elementor-menu-anchor "></span><h2>Indemnification</h2>
<div>
<div>You agree to indemnify, save and hold Lending Pro and its contractors, employees, agents and its third party suppliers and business partners harmless from any claims, losses, damages and liabilities, including legal fees and expenses, arising out of your use or misuse of the websites, any violation by you of these Terms of Use or any breach of the representations, warranties and covenants made by you herein. Lending Pro reserves the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us and you agree to cooperate with Lending Pro’s defense of any such claims. Lending Pro will use reasonable efforts to notify you of any such claim, action or proceeding upon becoming aware of it.</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-24" class="elementor-menu-anchor "></span><h2>No Warranty; Disclaimers</h2>
<div>
<div>
<p>TO THE FULLEST EXTENT PERMISSIBLE PURSUANT TO APPLICABLE LAW, Lending Pro AND ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS DISCLAIM ALL WARRANTIES, STATUTORY, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT OF PROPRIETARY RIGHTS. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM Lending Pro OR THROUGH THE WEBSITES WILL CREATE ANY WARRANTY NOT EXPRESSLY PROVIDED IN THESE TERMS OF USE.</p>
<p>THE USE OF THE WEBSITES IS AT YOUR SOLE RISK. THE WEBSITES AND ANY DATA, INFORMATION, COMMERCIAL CONTENT, THIRD-PARTY WEB SITES, PRODUCTS OR SERVICES MADE AVAILABLE THROUGH THE WEBSITES ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE,” “WITH ALL FAULTS” BASIS AND WITHOUT WARRANTIES OR REPRESENTATIONS OF ANY KIND EITHER EXPRESS OR IMPLIED.</p>
<p>NONE OF Lending Pro OR ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS WARRANT THAT ANY DATA, INFORMATION, COMMERCIAL CONTENT, THIRD-PARTY WEB SITES, PRODUCTS OR SERVICES OFFERED ON OR THROUGH THE WEBSITES OR ANY THIRD PARTY WEB SITES WILL BE UNINTERRUPTED OR FREE OF ERRORS, VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT ANY OF THE FOREGOING, IF PRESENT, WILL BE CURED OR STOPPED. YOUR USE OF THE WEBSITES OR ANY THIRD PARTY WEB SITES IS AT YOUR OWN RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR PROPERTY (INCLUDING YOUR COMPUTER SYSTEM) OR LOSS OF DATA THAT RESULTS FROM THE USE OF SUCH WEBSITES.</p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-25" class="elementor-menu-anchor "></span><h2>Limitation of Liability</h2>
<div>
<div><b>UNDER NO CIRCUMSTANCES, INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE, WILL Lending Pro OR ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS BE LIABLE FOR ANY SPECIAL, INDIRECT, INCIDENTAL, CONSEQUENTIAL, PUNITIVE, RELIANCE OR EXEMPLARY DAMAGES (INCLUDING WITHOUT LIMITATION DAMAGES ARISING FROM ANY UNSUCCESSFUL COURT ACTION OR LEGAL DISPUTE, LOST BUSINESS, LOST REVENUES OR LOSS OF ANTICIPATED PROFITS OR ANY OTHER PECUNIARY OR NON-PECUNIARY LOSS OR DAMAGE OF ANY NATURE WHATSOEVER) ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR THAT RESULT FROM YOUR USE OR YOUR INABILITY TO USE THE WEBSITES OR ANY THIRD-PARTY WEB SITE OR ANY OTHER INTERACTIONS WITH Lending Pro, EVEN IF Lending Pro HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. APPLICABLE LAW MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN SUCH CASES, Lending Pro’S LIABILITY WILL BE LIMITED TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW.</b></div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-26" class="elementor-menu-anchor "></span><h2>Release</h2>
<div>
<div><b>BY YOUR USE OF ANY Lending Pro WEBSITE, YOU ARE AGREEING TO RELEASE AND DISCHARGE Lending Pro AND ITS THIRD PARTY SUPPLIERS AND BUSINESS PARTNERS AND EACH OF THEIR RESPECTIVE AGENTS, DIRECTORS, OFFICERS, EMPLOYEES AND ALL OTHER RELATED PERSONS OR ENTITIES FROM ANY AND ALL CLAIMS, DEMANDS, CAUSES OF ACTION, PROCEEDINGS, LIABILITIES, OBLIGATIONS, LEGAL FEES, COSTS AND EXPENSES OF ANY KIND OR NATURE, WHETHER KNOWN OR UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF THE WEBSITES. IF YOU ARE A CALIFORNIA RESIDENT, YOU WAIVE CALIFORNIA CIVIL CODE SECTION 1542, WHICH SAYS, “A GENERAL RELEASE DOES NOT EXTEND TO CLAIMS WHICH THE CREDITOR DOES NOT KNOW OR SUSPECT TO EXIST IN HIS FAVOR AT THE TIME OF EXECUTING THE RELEASE, WHICH IF KNOWN BY HIM MUST HAVE MATERIALLY AFFECTED HIS SETTLEMENT WITH THE DEBTOR.”</b></div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-27" class="elementor-menu-anchor "></span><h2>Dispute Resolution</h2>
<div>
<div>
<p>In the event of a dispute between you and Lending Pro that arises out of these Terms of Use or any product or service you obtain through the websites (“Claim”), you and Lending Pro agree to resolve that Claim in accordance with the procedures set forth below or as we may otherwise agree in writing. Before resorting to these dispute resolution mechanisms, you must first contact us directly to seek a resolution. If, however, we are unable to resolve our differences informally, Lending Pro will consider reasonable requests to resolve the dispute through alternative dispute resolution procedures, such as mediation or arbitration, as alternatives to litigation.</p>
<p>For any Claim (excluding claims for injunctive or other equitable relief) where the total amount of the award sought is less than $10,000, either party may elect to resolve the dispute in a cost effective manner through binding non-appearance-based arbitration. In the event a party elects arbitration, they shall initiate such arbitration through an established alternative dispute resolution (“ADR”) provider chosen by the party seeking arbitration. The ADR provider and the parties must comply with the following rules:</p>
<ul>
<li style="list-style-type: disc;">the arbitration shall be conducted by telephone or online and be solely based on written submissions, the specific manner to be chosen by the party initiating the arbitration;</li>
<li style="list-style-type: disc;">the arbitration shall not involve any personal appearance by the parties or witnesses unless otherwise mutually agreed by the parties; and</li>
<li style="list-style-type: disc;">any judgment on the award rendered by the arbitrator may be entered in any court of competent jurisdiction.</li>
</ul>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-28" class="elementor-menu-anchor "></span><h2>Miscellaneous</h2>
<div>
<div>
<p>14.1 Notice<br>Lending Pro may provide you with notices by e-mail, regular mail or postings on any website. Notice will be deemed given twenty-four hours after e-mail is sent, unless Lending Pro is notified that the e-mail address used is invalid. Alternatively, Lending Pro may give you legal notice by mail to a postal address, if provided by you through any website. In such case, notice will be deemed given three (3) calendar days after the date of mailing.</p>
<p>14.2 Waiver and Severability of Terms<br>The failure of Lending Pro to exercise or enforce any right or provision of these Terms of Use shall not constitute a waiver of such right or provision. Any waiver of any provision of these Terms of Use will be effective only if in writing and signed by Lending Pro. If any provision of these Terms of Use is found by a court of competent jurisdiction to be invalid, the other provisions of these Terms of Use shall remain in full force and effect and the parties agree that such court should endeavor to give effect to the parties’ intentions.</p>
<p>14.3 Choice of Law; Forum<br>These Terms of Use shall be governed in all respects by the laws of the State of New York as they apply to agreements entered into and to be performed entirely within New York between New York residents, without regard to conflict of law provisions.</p>
<p>Any claim or dispute you may have against Lending Pro must be resolved by a court located in New York County, New York, except as otherwise agreed by the parties or as described in Paragraph 13. You agree to submit to the personal jurisdiction of the courts located within New York County, New York for the purpose of litigating all such claims or disputes.</p>
<p>All claims filed or brought contrary to either Section 13 or this Section 14.3 shall be considered improperly filed. Should you file a claim improperly, Lending Pro may recover reasonable attorneys’ fees and costs, provided that Lending Pro has notified you in writing of the improperly filed claim and you have failed to withdraw the claim promptly.</p>
<p>14.4 Assignment<br>You may not transfer or assign any of your rights and obligations under these Terms of Use without the express prior written consent of Lending Pro, give in its sole discretion. However, you acknowledge and agree that Lending Pro may freely and without restriction or limitation assign or transfer any of its rights and obligations under these Terms of Use.</p>
<p>14.5 Entire Agreement<br>These Terms of Use and any document incorporated by reference herein constitute the entire agreement between you and Lending Pro and govern your use of the websites, superseding any prior agreements between you and Lending Pro. Notwithstanding the foregoing, you also may be subject to additional terms and conditions that may apply when you use or purchase certain products and/or services provided by Lending Pro or one of Lending Pro’s third party business partners.</p>
<p>14.6 Survival<br>The following paragraphs shall survive termination or your refusal to continue to use the Service: 4, 6, 7, 8, 9, 10, 11, 12, 13 and 14.</p>
<p><b>PLEASE PRINT AND RETAIN A COPY OF THESE TERMS OF USE FOR YOUR RECORDS.</b></p>
<p><span style="background-color: transparent; color: var( --e-global-color-secondary ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight );">Contact us at &nbsp;support@lendingpro.com.</span></p>
<p></p>
</div>
</div>
</li>
<li>
<span id="elementor-toc__heading-anchor-29" class="elementor-menu-anchor "></span><h2>Privacy</h2>
<div>
<div>Lending Pro respects your privacy. We will not share or use your mobile number for any other purpose. We will only use information you provide to transmit your text message. Nonetheless, we reserve the right at all times to disclose any information as necessary to satisfy any law, regulation or governmental request, to avoid liability, or to protect our rights or property. When you complete forms online or otherwise provide us information in connection with the Service, you agree to provide accurate, complete and true information. You agree not to use a false or misleading name or a name that you are not authorized to use. If we, in our sole discretion, believe that any such information is untrue, inaccurate or incomplete, we may refuse you access to the Service and pursue any appropriate legal remedies.&nbsp;and any and all of its subsidiaries and affiliates (“Lending Pro”) websites and covers all aspects of your use of the websites and, to the extent not superseded by the terms and conditions of any contract we may sign with you, of any product or service that we may supply to you.</div></div></li></ol>
                     </div>
                  </div>
               </div>
           
        </div>


    </body>
</html>