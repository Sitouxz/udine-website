<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Unklab Dine made by SE Summer 2022" />
    <meta name="author" content="SE Summer 2022" />
    <title>U Dine | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.svg" />
    <!-- CSS only -->
    <link rel="stylesheet" href="./assets/css/main.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
  </head>
  <body class="d-flex flex-column h-100 pt-5">
    @include('partials.navbar')

    <!-- Begin page content -->
    <main class="mt-4">
      <div
        class="container d-flex justify-content-between flex-lg-row flex-column"
      >
        <div class="d-flex align-items-center">
          <h3 class="fw-semibold text-primary me-3">Rating</h3>
          <p class="mt-2 fw-light" id="quotes">
          @foreach ($quotes as $quote)
            {{ $quote->quote }}
          @endforeach
          </p>
        </div>
        <div
          class="d-flex flex-row-reverse flex-lg-row justify-content-between"
        >
          <p
            class="fw-medium text-primary lh-sm me-lg-3 text-lg-end text-start"
          >
            Sunday <br />
            <span class="text-primary-dark">31 December 2022</span>
          </p>
          <div>
            <button class="btn btn-primary fw-medium px-5 btn-shadow">
              <a
                class="text-decoration-none text-white"
                href="./pages/vote/vote1.html"
                >Rate now!</a
              >
            </button>
          </div>
        </div>
      </div>
      <div>
        @if ($title != 'Home')
        <div class="container">
          <a href="/" class="text-decoration-none">Back</a>
        </div>
        @endif
        @yield('container');
      </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted">Made by SE Summer 2022 with ❤️</span>
      </div>
    </footer>
  </script>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
  <script src="./assets/js/main.js"></script>
</html>
