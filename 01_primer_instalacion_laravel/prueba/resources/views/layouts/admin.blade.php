<!-- template madre -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href=" <?= url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href=" <?= url('css/styles.css') ?>">

    <title>Panel de Administración</title>
</head>

<body>
    <div id="app">
        <div class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DV Películas</a>
            </div>
        </div>

        <div class="container py-3">
            <div class="row">
                <nav class="col-3">
                    <ul>
                        <li>
                            <a class="nav-link" aria-current="page" href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" aria-current="page" href="<?= url('/quienes-somos') ?>">Quiénes
                                Somos</a>
                        </li>
                        <li>
                            <a class="nav-link" aria-current="page"
                                href="<?= url('/peliculas/listado') ?>">Películas</a>
                        </li>
                        <li>
                            <a class="nav-link" aria-current="page" href="<?= url('/admin/peliculas') ?>">Administrar de
                                Películas</a>
                        </li>
                    </ul>
                </nav>
                <div class="col-9">

                    @yield('content')
                </div>

            </div>


        </div>
        <footer class="footer">
            <p>Da Vinci &copy; 2023</p>
        </footer>
    </div>
</body>

</html>
