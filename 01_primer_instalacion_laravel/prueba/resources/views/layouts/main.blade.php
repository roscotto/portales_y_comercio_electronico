<!-- template madre -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href=" <?= url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href=" <?= url('css/styles.css') ?>">

    <title> @yield('title') :: Proyecto DV</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DV Películas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= url('/') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= url('/quienes-somos') ?>">Quiénes
                                Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="<?= url('/peliculas/listado') ?>">Películas</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="<?= url('/admin/peliculas') ?>">Administrar de Películas</a>
                        </li> -->

                    </ul>
                </div>
            </div>
        </nav>
        <main class="container py-3">
            @if (\Session::has('status.message'))
            <div class="alert alert-{{ \Session::get('status.type') }}">

                <div class="alert alert-success">
                    <p class="h6">{!! \Session::get('status.message') !!}</p>
                </div>

            </div>
        @endif
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer class="footer">
            <p>Da Vinci &copy; 2023</p>
        </footer>
    </div>
</body>

</html>
