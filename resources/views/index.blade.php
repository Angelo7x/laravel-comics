@extends('layout.base')

@section('pageContent')
    <section class="fumetti">
        <div class="container">
            <ul>
                @foreach ($fumetti as $fumetto)
                    <li>
                        <a href="#">
                            <img src="{{$fumetto["thumb"]}}" alt="img">
                            <h3>{{$fumetto["series"]}}</h3>
                        </a>
                    </li>
                @endforeach
            </ul>
            <button>LOAD MORE</button>
        </div>
    </section>
    <section class="links">
        <div class="container">
            <ul>
                <li>
                    <img src="{{asset('./images/buy-comics-digital-comics.png')}}" alt="dg">
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img src="{{asset('./images/buy-comics-merchandise.png')}}" alt="merch">
                    <a href="#">DC MERCANDISE</a>
                </li>
                <li>
                    <img src="{{asset('./images/buy-comics-subscriptions.png')}}" alt="sub">
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img src="{{asset('./images/buy-comics-shop-locator.png')}}" alt="shop">
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img src="{{asset('./images/buy-dc-power-visa.svg')}}" alt="visa">
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </div>
    </section>
@endsection