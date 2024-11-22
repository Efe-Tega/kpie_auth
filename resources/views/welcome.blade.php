<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" />

    <title>Investment Banking</title>
</head>

<body>
    <!-- Navbar -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Logo</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <span>Investment Services</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <span>Banking</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <span>Company</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>

                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                </div>

                <div class="nav__auth">
                    <a href="{{ route('login') }}" style="color: bisque"> Login </a>

                    <a href="{{ route('signup') }}" class="btn"> Get Started </a>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <h2>
                Invest with us. Bank with us. <br />
                <span style="color: brown">Grow with us.</span>
            </h2>
            <p>
                Explore the ultimate suite of financial services designed to simplify
                asset and cash management for businesses, intermediaries and high net
                worth individuals.
            </p>

            <div>
                <a href="{{ route('signup') }}" class="btn">Get Started</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MyBrand. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
