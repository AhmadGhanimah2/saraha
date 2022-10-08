@extends('Layout.frontend')
@section('title')

@endsection
@section('content')

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<div class="user-profile">


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center ">
        <div class="hero-container" data-aos="fade-in">

            <h1></h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
            <div class="input-group mb-3">
                <form method="post" action="{{route('home.send-messeges')}}">
                    @csrf
                    <div class="form-group">
                        <h1 for="usr">Send Messages to {{$user->name}} :</h1>
                        <textarea class="form-control" rows="5" name="send" id="comment"></textarea>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                    <button class="btn btn-outline-secondary" type="submit">Send</button>

                </form>



            </div>

        </div>
    </section><!-- End Hero -->

</div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short">upp</i></a>



@endsection
