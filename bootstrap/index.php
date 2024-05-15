<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Droid Serif', serif;
            font-size: 14px;
            color: #2f2f2f;
            background-color: #f9f7f1;





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


    </style>
</head>

<body>

    <div class="mt-3 text-center">
        <h1 class="h13">THE NEGLECTED NEWS</h1>
        <p class=" border-3 border-dark p-2 border-top border-bottom mx-2">PRESENTED BY WASTED BLOKE</p>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-3 mb-3">
                <i>NOT JUST A MEME</i>
                <h3 class="headline1 text-center">WE EXIST. JUST NEGLECTED.</h3>
                <p>WASTED isn't just a token; it's a call to action. Join us in the fight against social problems and
                    let's work together to create a better future for all. Together, we can make a difference.</p>
                <img class="img-fluid"
                    src="https://static.foxbusiness.com/foxbusiness.com/content/uploads/2023/08/PHILLY-DRUG-GETTY.jpg"
                    alt="">
            </div>
            <div class="col-sm-3">
                <i>ABOUT WASTED BLOKE</i>
                <img class="img-fluid d-none d-md-block"
                    src="https://as2.ftcdn.net/v2/jpg/03/74/66/27/1000_F_374662753_QVGD0RYNdvpfh8ocg4PgjleTX2D6gcYx.jpg"
                    alt="">
                <h3 class="headline2 mt-2">IT’S A SOCIAL PROBLEM</h3>
                <span class="">NOT JUST A
                    MEME</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-3">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-3">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>

</body>

</html>