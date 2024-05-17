<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            background-color: #E6E2DC;

            background-image: url('bg2.png');
            background-size: cover;
            /* Adjusts the image size to cover the entire container */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
            background-position: center;
            /* Centers the image in the container */
        }

        .container {
            font-family: 'Droid Serif', serif;
            color: #2f2f2f;
            background-color: #f9f7f1;
            background-image: url('bg.png');
            background-size: cover;
            /* Adjusts the image size to cover the entire container */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
            background-position: center;
            /* Centers the image in the container */

        }


        .header-about {
            color: #f9f7f1;
            background-color: #2f2f2f89;
            padding: 5px;
            display: block;

        }


        .h13 {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 60px;
            text-align: center;
            text-transform: uppercase;
            display: inline-block;
            line-height: 72px;
            margin-bottom: 20px;

        }

        img {
            -webkit-filter: sepia(80%) contrast(1) opacity(0.8);
            filter: sepia(80%) grayscale(1) contrast(1) opacity(0.8);
            mix-blend-mode: multiply;
        }

        .headline1 {
            font-weight: 400;
            font-style: italic;
            font-size: 36px;
            box-sizing: border-box;
            padding: 10px 0 10px 0;
        }

        .headline2 {
            text-align: center;
            line-height: normal;
            font-family: 'Playfair Display', serif;
            display: block;
            margin: 0 auto;
        }

        .headline3 {
            font-weight: 700;
            font-size: 30px;
            text-transform: uppercase;
            padding: 10px 0 10px 0;
        }
    </style>
</head>

<body>





    <div class="container animate__animated animate__fadeIn shadow-lg mt-2 p-3 mb-5">
        <div class="row" style="">
            <div class="col-8  p-2">
                <p class="headline2 float-start">THE NEGLECTED NEWS EDITION 2024</p>
            </div>
            <div class="col-4 ">
                <div class="float-end p-2">

                    <span class="fa-brands fa-telegram"></span>
                    <span class="fa-brands fa-facebook"></span>
                    <span class="fa-brands fa-x-twitter"></span>
                </div>
            </div>

        </div>


        <div class="mt-3 text-center">
            <h1 class="h13">THE NEGLECTED NEWS</h1>
            <p class=" border-3 border-dark p-2 border-top border-bottom mx-2">PRESENTED BY WASTED BLOKE</p>
        </div>




        <div class="row">
            <div class="col-sm-3 border-bottom border-dark pb-5">
                <i>NOT JUST A MEME</i>
                <h3 class="headline1 text-center">WE EXIST. JUST NEGLECTED.</h3>
                <p>WASTED isn't just a token; it's a call to action. Join us in the fight against social problems and
                    let's work together to create a better future for all. Together, we can make a difference.</p>
                <img class="img-fluid"
                    src="https://static.foxbusiness.com/foxbusiness.com/content/uploads/2023/08/PHILLY-DRUG-GETTY.jpg"
                    alt="">
            </div>
            <div class="col-sm-3 border-start border-dark   ">
                <i class="fw-bold p-2">ABOUT WASTED BLOKE</i>
                <img class="img-fluid d-none d-md-block"
                    src="https://as2.ftcdn.net/v2/jpg/03/74/66/27/1000_F_374662753_QVGD0RYNdvpfh8ocg4PgjleTX2D6gcYx.jpg"
                    alt="">
                <h3 class="headline2 mt-2">IT’S A SOCIAL PROBLEM</h3>
                <div class="text-center mb-3 mt-3">
                    <p class="border-top pt-2 border-dark border-bottom pb-2 w-50 d-inline">NOT JUST A MEME</p>
                </div>
                <p>"Welcome to WASTED Bloke's corner of the internet, where we tackle life's serious issues with a smile
                    and a side of sarcasm!</p>
            </div>
            <div class="col-sm-3 border-end border-dark border-bottom">
                <p>In a world where neglect, inequality, and misplaced priorities seem to dominate the headlines, it's
                    easy to feel overwhelmed. But here, we believe in the power of humor and humanity to spark
                    meaningful change, even in our little corner of the world.</p>
                <p>Join me as we shine a light on societal absurdities, challenge the status quo, and advocate for a
                    more compassionate and equitable society.</p>
                <p>Whether it's through raising awareness, supporting worthy causes, or simply spreading kindness one
                    meme at a time, let's show the world that laughter and empathy are powerful tools for positive
                    transformation.</p>
            </div>
            <div class="col-sm-3  border-bottom border-dark">
                <h3 class="text-center headline3">OUR VISION AND MISSION </h3>
                <p class="header-about">VISION</p>
                <p>To create a world where laughter is a catalyst for positive change, fostering
                    empathy, understanding, and meaningful action</p>
                <p class="header-about">MISSION</p>
                <p>Through humor and social commentary, we aim to shed light on societal
                    injustices, challenge the status quo, and inspire individuals to take small
                    steps towards a more compassionate and equitable society.</p>
            </div>
        </div>

        <div class="row border-bottom border-dark pb-4 mb-3  mt-3">

            <div class="col-sm-3">
                <div class=" border border-dark border-1 p-2">
                    <div class="mt-2">
                        <i class="">EDITION 2024</i>
                    </div>
                    <h3 class=" headline3 mt-0 pt-0">TOKENOMICS </h3>
                    <div class="p-2">
                        <ul>
                            <li>Name of Token: WastedBloke</li>
                            <li>Symbol: $WBloke</li>
                            <li>Decimal: 9</li>
                            <li>Total Supply: 1 Billion</li>
                            <li>Token for Presale: 500 Million</li>
                            <li>Soft Cap: 5 Sol</li>
                            <li>Network: SOLANA</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">

                <div class="p-2 border border-dark border-1 mt-2">
                    <div class="mt-2">
                        <i class="">TOKEN</i>
                    </div>
                    <h3 class=" headline3 mt-0 pt-0">DISTRIBUTION </h3>

                    <ul>
                        <li>Liquidity: 60%</li>
                        <li>Marketing : 20% Vested for 6 mos.</li>
                        <li>Charity/Airdrop: 20% Vested for 12
                            mos.
                        </li>
                    </ul>
                </div>

                <button class="btn  mt-3 border-0" style="font-color:#2f2f2f89;">
                    <i class="fa fa-share-from-square pe-2"></i>coinmarketcap.com
                </button>
                <button class="btn  mt-3 border-0" style="font-color:#2f2f2f89;">
                    <i class="fa fa-share-from-square pe-2"></i>coingecko.com
                </button>
            </div>

            <div class="col-sm-5">
                <img class="img-fluid" src="https://pbs.twimg.com/media/Fwj5PZ8aYAEy9Tg.jpg:large" alt="">
            </div>



        </div>

        <div class="row mb-3 ">

            <div class="col-sm-5">

                <h3 class="headline1" style="font-weight:800;"><span class="fa fa-globe pe-2 text-muted"></span>ROADMAP
                </h3>

                <div class="border-bottom border-dark mb-2">
                    <div class=" p-2">
                        <div class="text-center mb-3">
                            <h3>PHASE 01</h3>
                            <i class="border-top border-dark pt-2">TOKEN LAUNCH AND COMMUNITY BUILDING</i>
                        </div>
                        <ul>
                            <li>Launch $Wasted Token.</li>
                            <li>Establish a strong online presence and engage with the community on
                                social media platforms.</li>
                            <li>Begin outreach efforts to potential charity partners.</li>
                        </ul>
                    </div>
                </div>



                <div class="border-bottom border-dark mb-2">
                    <div class=" p-2">
                        <div class="text-center mb-3">
                            <h3>PHASE 02</h3>
                            <i class="border-top border-dark pt-2">FUND ALLOCATION AND PROGRAM IMPLEMENTATION</i>
                        </div>
                        <ul>
                            <li>Pour some love into initiatives that tackle the heavy stuff like
                                drugs, alcoholism, unemployment, and homelessness.</li>
                            <li>Keep the party going strong by making sure our funds are making a
                                real difference in people's lives.</li>
                        </ul>
                    </div>
                </div>



                <div class="border-bottom border-dark mb-2">
                    <div class=" p-2">
                        <div class="text-center mb-3">
                            <h3>PHASE 03</h3>
                            <i class="border-top border-dark pt-2">PARTNERSHIP WITH CHARITY INSTITUTIONS</i>
                        </div>
                        <ul>
                            <li>Solidify partnerships with charity institutions dedicated to addressing key social
                                challenges such
                                as
                                homelessness, addiction, and poverty.</li>
                            <li>Collaborate with charity partners to fund specific projects and initiatives aimed at
                                creating
                                tangible
                                impact in communities.</li>
                            <li class="">Engage the community in fundraising efforts and volunteer opportunities to
                                support
                                the work
                                of
                                charity
                                partners.</li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-sm-7 ">

                <h3 class="headline3" style="font-weight:800;"><span
                        class="fa fa-handshake pe-2 text-muted"></span>PARTNERSHIP
                </h3>
                <div class="container">
                    <!-- First row with three logos -->
                    <div class="row g-3"> <!-- g-3 class for spacing between columns -->
                        <div class="col-md-4 d-flex justify-content-center align-items-center border">
                            <img src="https://miro.medium.com/v2/resize:fit:1200/1*0Y89QCf-NciGQQXDs1CH8g.jpeg"
                                alt="PinkSale Logo" class="img-fluid">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center border">
                            <img src="https://logowik.com/content/uploads/images/raydium4949.jpg" alt="Raydium Logo"
                                class="img-fluid">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center border">
                            <img src="https://logowik.com/content/uploads/images/dextools1728.logowik.com.webp"
                                alt="DEXTools Logo" class="img-fluid">
                        </div>
                    </div>

                    <!-- Second row with two logos and text -->
                    <div class="row g-3">
                        <div class="col-md-3 d-flex justify-content-center align-items-center border">
                            <img src="https://www.digitalcryptomall.com/dexview.503d1f19.jpg" alt="DEXView Logo"
                                class="img-fluid">
                        </div>
                        <div class="col-md-9 border">
                            <div class="h-100 d-flex flex-column justify-content-center">
                                <p class="text-center mb-3 mt-3">AUDITED AND SMART CONTRACT BY:</p>
                                <div class="d-flex justify-content-center p-3">
                                    <img src="https://stakelayer.io/images/home/contributors/coinsult.webp"
                                        alt="Coinsult Logo" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="border border-dark p-2 mt-2">
                    <h3 class=" headline1 mb-0 pb-0">The Wasted Bloke Whitepaper</h3>
                    <i class="">EDITION 2022</i>


                    <div class="row">
                        <div class="col-6">
                            <img src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-4.1.0&q=45&auto=format&w=1356&h=668&fit=crop"
                                alt="" class="img-fluid">
                        </div>
                        <div class="col-6">
                            <p>Helped the client to rearrange the digital
                                content to get better engagement and traffic
                                in their social media account.</p>
                            <table class="table  bg-transparent">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="bg-transparent">Client</th>
                                        <td class="bg-transparent">Keithston and Partners (2020)</td>

                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-transparent">Service</th>
                                        <td class="bg-transparent">Social Media Planner</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>





        <div class="row mb-3 mt-5">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="h13" style="font-size:50px;margin:0;padding:0;">JOIN OUR PRESALE
                    </h3>
                    <p>Copyright 2024 WastedBloke
                        All Rights Reserved</p>
                   
                </div>

            </div>
        </div>

        <div class="row border-top border-dark" style="">
            <div class="col-8  p-2">
                <p class="headline2 float-start">THE NEGLECTED NEWS EDITION 2024</p>
            </div>
            <div class="col-4 ">
                <div class="float-end p-2">

                    <span class="fa-brands fa-telegram"></span>
                    <span class="fa-brands fa-facebook"></span>
                    <span class="fa-brands fa-x-twitter"></span>
                </div>
            </div>

        </div>


    </div>



</body>

</html>