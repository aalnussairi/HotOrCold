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

        <!-- Favicons -->
        <link
            rel="apple-touch-icon"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/apple-touch-icon.png"
            sizes="180x180"
        />
        <link
            rel="icon"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/favicon-32x32.png"
            sizes="32x32"
            type="image/png"
        />
        <link
            rel="icon"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/favicon-16x16.png"
            sizes="16x16"
            type="image/png"
        />
        <link
            rel="manifest"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/manifest.json"
        />
        <link
            rel="mask-icon"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/safari-pinned-tab.svg"
            color="#563d7c"
        />
        <link
            rel="icon"
            href="https://getbootstrap.com//docs/4.5/assets/img/favicons/favicon.ico"
        />
        <meta
            name="msapplication-config"
            content="https://getbootstrap.com//docs/4.5/assets/img/favicons/browserconfig.xml"
        />
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
            <a class="navbar-brand" href="{{ route('home') }}">Hot Or Cold</a>
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
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('home') }}"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item mr-3 active">
                        <a class="nav-link" href="#">Sign Up<span class="sr-only">(current)</span></a>
                    </li>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link btn btn-primary" style="color:white" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container p-5">
          <div class="row">
            <div class="col-12">
              <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <h1 class="text-center">Tell us who you are</h1>
                <h3 class="text-center">and we'll get back to you in no time</h3>
                <div class="form-group mt-4">
                  <label for="full_name">Full Name</label>
                  <input type="text" class="form-control" name="full_name" id="full_name" placeholder="John Doe">
                </div>
                <div class="form-group">
                  <label for="preferred_name ">Preferred Name (optional)</label>
                  <input type="text " class="form-control" name="preferred_name" id="preferred_name " placeholder="John">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name= "message" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
              </form>
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
