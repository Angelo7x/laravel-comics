@extends('layout.base')

@section('pageContent')
    <section>
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
@endsection