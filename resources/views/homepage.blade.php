@extends('Layout.frontend')
@section('title')

@endsection
@section('content')

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/mypic.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Ahmad Ghanimah</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/Ahmad.Ghanemah/" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/Ahmad.Ghanemah/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.facebook.com/Ahmad.Ghanemah/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.facebook.com/Ahmad.Ghanemah/" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
                    <a href="https://www.linkedin.com/in/ahmad-ghanimah-1aa7b5211/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    @guest
                        <li><a href="{{route('home')}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Login</span></a></li>
                    @endguest

                    @auth
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <li><button type="submit" ><i class="bx bx-file-blank"></i> <span>Logout</span></button></li>

                        </form>

                    @endauth
                    <li><a href="#messages" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Messages</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center ">
        <div class="hero-container" data-aos="fade-in">
            <h1>Ahmad Ghanimah</h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append button-section-one">
                    <button class="btn btn-outline-secondary" type="button">Send</button>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= messges Section ======= -->
        <section id="messages" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>My Messages</h2>
                    <p>inbox</p>
                </div>


            </div>
        </section><!-- End Skills Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short">upp</i></a>



@endsection
