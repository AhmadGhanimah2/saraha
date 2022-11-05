@extends('layouts.app')

@section('content')
    {{--    navbar--}}
    <div class="home-page">
        <div class="home-page">
            <ul class="nav justify-content-center asffas">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>

    {{--    end navbar--}}

    {{--    section-1-start--}}
    <section id="section-one" class="section-one">
        <div class="container">
            <div class="split left">
                <div class="centered">
                    text left
                </div>
            </div>

            <div class="split right">
                <div class="centered">
                    <img src="img_avatar.png" alt="Avatar man">
                </div>
            </div>
        </div>
    </section>
    {{--    section-1-end--}}


    <div class="text-center what-you-can-get">
        <h1>what you can get</h1>
    </div>


    {{--    section-2-start--}}
    <section id="section-two" class="section-two">
        <div class="container">
            <div class="split left">
                border left
            </div>

            <div class="split right">
                <div class="centered">
                    <img src="img_avatar.png" alt="Avatar man">
                </div>
            </div>
        </div>
    </section>
    {{--        section-2-end--}}



    {{--    section-3-start--}}
    <section id="section-three" class="section-three">
        <div class="container">
            <div class="text-center ">
                <div class="container">
                    <div class="float-left">
                        <h1>Latest Articles</h1>
                    </div>
                    <div class="float-right">
                        see all
                    </div>
                </div>
            </div>


            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>
    </section>
    {{--    section-3-end--}}


    <div class="text-center ">
        <div class="container">
            <div class="float-left">
                <h1>Latest Videos</h1>
            </div>
            <div class="float-right">
                see all
            </div>
        </div>
    </div>
    {{--    section-4-start--}}
    <section id="section-four" class="section-four">
        <div class="container">
            <div class="split left">
                <div class="centered">
                    big 1 video
                </div>
            </div>

            <div class="split right">
                <div class="centered">
                    4 video
                </div>
            </div>
        </div>
    </section>
    {{--    section-4-end--}}


    {{--    section-5-start--}}
    <section id="section-five" class="section-five">
        <div class="container">
            <div class="split left">
                <div class="centered">
                    Meet our 250+ Netwrok of Experts

                </div>
            </div>

            <div class="split right">
                <div class="centered">
                    <img src="img_avatar.png" alt="Avatar man">
                </div>
            </div>
        </div>
    </section>
    {{--    section-5-end--}}

    {{--    section-6-start--}}
    <section id="section-six" class="section-six">
        <h1>Why Moms love us</h1>
        <div class="container">
            3 border
        </div>
    </section>
    {{--    section-6-end--}}

    {{--    section-7-start--}}
    <section id="section-sever" class="section-sever">
        <h2>Our Subscriptions Plans</h2>
        2 border box with button
    </section>
    {{--    section-7-end--}}


    {{--    section-8-start--}}
    <section id="section-eight" class="section-eight">
        <div class="text-center">
            <div class="container">
                <div>
                    col-md-8
                </div>
                <div>
                    col-md-4
                </div>
            </div>
        </div>
    </section>
    {{--    section-8-end--}}


    {{--    section-9-start--}}
    <section id="section-nine" class="section-nine">
        <div class="container">
            <div>
                blue border
            </div>
        </div>
    </section>
    {{--    section-9-end--}}
@endsection
