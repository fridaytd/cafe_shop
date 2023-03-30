<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?= '/css/style.css' ?>">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/Home"><img src="/images/logo.png" alt="Logo" width="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Home' ? 'active' : '' ?>" aria-current="page"
                                    href="/Home">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Intro' ? 'active' : '' ?>" href="/Intro">Giới
                                    thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'TeaPage' ? 'active' : '' ?>"
                                    href="/TeaPage">Trà</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'CafePage' ? 'active' : '' ?>"
                                    href="/CafePage">Cà phê</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Contact' ? 'active' : '' ?>"
                                    href="/Contact">Liên hệ</a>
                            </li>
                        </ul>
                        <div>
                            <button class="btn" style="background-color: #0C713D; color: white">Sign in</button>
                            <button class="btn" style="border:2px solid #0C713D; color: #0C713D;">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?php if (file_exists('../src/Views/page/' . $data['page'] . '_page.php')) {

        include '../src/Views/page/' . $data['page'] . '_page.php';
    }
    ?>

    <footer>
        <div class="container-fluid d-flex justify-content-center align-item-center">
            <p>Copyright</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>