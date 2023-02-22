<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>C-Wallet</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    C-Wallet
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#" class="nav__link">About</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home">
                <div class="home__container container">
                    <div class="home__data">
                        <span class="home__subtitle">Welcome to</span>
                        <h1 class="home__title">Client Wallet</h1>
                        <p class="home__description">
                            Client Wallet is a secure & private digital wallet<br> access all your contacts <br> list.
                        </p>
                        <a href="list.php" class="home__button">
                            Contact list
                        </a>
                        <a href="search.php" class="home__button1">
                            Search
                        </a>
                    </div>

                    <div class="home__img">
                        <img src="assets/img/wallet.png" alt="">
                        <div class="home__shadow"></div>
                    </div>
                </div>

                <footer class="home__footer">
                    <span>Emanuel Jr</span>
                    <span>|</span>
                    <span>jr</span>
                </footer>
            </section>
        </main>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <!--Background effect-->
        <script src="assets/js/script.js"></script>

    </body>
</html>