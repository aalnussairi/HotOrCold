<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
        />
        <meta name="generator" content="Jekyll v4.1.1" />
        <title>Hot or Cold | Homepage</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/4.5/examples/starter-template/"
        />

        <!-- Bootstrap core CSS -->
        <link
            href="https://getbootstrap.com//docs/4.5/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        />
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset("favicon.ico") }}">

        <meta name="theme-color" content="#563d7c" />

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link
            href="https://getbootstrap.com/docs/4.5/examples/starter-template/starter-template.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Hot Or Cold</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="#"
                            >Home <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('contact') }}">Sign Up</a>
                    </li>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link btn btn-primary" style="color:white" href="{{ route('login') }}">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="container">
            <div class="starter-template">
                <h1>My  <span class="txt-type" data-wait="3000" data-words='["Conference Room is Too Cold!", "Teaching Room is Too Hot!", "Theatre is Too Chilly!"]'></span></h1>
                <p class="lead">
                    Hot or Cold is the webapp for you!<br />
                    We give managers the ability to track how cold, hot or perfect their room is.
                </p>
            </div>
        </main>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6 p-2">
              <div class="card p-2">
                <!-- <div class="img-fluid"> -->
                  <img src="./snowman_snow_cold_winter-32070.jpg" style="width:100%;" alt="Snowman">
                  <h3 class="text-center">Too Cold?</h3>
                  <p>That's no good</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam soluta numquam eum quia minima facilis nesciunt. Sunt modi eveniet earum voluptate perferendis, quos architecto accusamus itaque repudiandae harum amet.</p>
                <!-- </div> -->
              </div>
            </div>
            <div class="col-xs-12 col-md-6 p-2">
              <div class="card p-2">
                <img src="./dry_arid_yellow_nature_landscape_desert_drought_environment-709388.jpg" style="width:100%;" alt="Desert">
                <h3 class="text-center">Too Hot?</h3>
                <p>That's no good either</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laboriosam soluta numquam eum quia minima facilis nesciunt. Sunt modi eveniet earum voluptate perferendis, quos architecto accusamus itaque repudiandae harum amet.</p>
              </div>
            </div>
          </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script>
            window.jQuery ||
                document.write(
                    '<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>'
                );
        </script>
        <script
            src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf"
            crossorigin="anonymous"
        ></script>
        <script src="./main.js"></script>
    </body>
</html>
