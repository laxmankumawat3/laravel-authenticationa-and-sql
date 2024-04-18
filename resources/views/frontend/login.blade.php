<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container mt-2">
            <h2>Login page</h2>
            <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="email">Enter your email id</label>
                  <input required type="text" name="email" id="" class="form-control" placeholder="email" aria-describedby="helpId">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <div class="form-group">
                  <label for="password">Enter your password</label>
                  <input required type="text" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <button class="btn btn-primary mt-2" type="submit">login</button>
            </form>
            @if (session('loginerror'))
            <div class="alert alert-danger mt-2">
                {{ session('loginerror') }}
            </div>
        @endif
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
