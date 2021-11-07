@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <h4>Showing the relationship between Domestic League table and Club table (One-to-Many)!</h4>
    <hr>
    @foreach ($leagues as $league)
    <br><br>
        <a href="{{ route('league.show', $league['code']) }}"
            class="fs-3 text-dark"><b>{{ $league['name'] }}</b></a>
        <p class="fs-4"><i>{{ $league['season'] }} Season</i></p>
        <img src="@if ($league['img_name'] == '') /images/null.png @else /images/league/{{ $league['img_name'] }} @endif" height="200px" width="200px">
        <br><br>
        <div class="d-flex justify-content-center">
                @if (count($clubs[$loop->index]) > 0)
                    @foreach ($clubs[$loop->index] as $club)
                        <div>
                            <div class="card ms-3 me-3 bg-light">
                                <div class="card-body">
                                    <p class="d-flex justify-content-center card-text">ID #{{ $club['id'] }}</p>
                                    <img src="@if ($club['img_name'] == '') /images/null.png @else /images/club/{{ $club['img_name'] }} @endif" height="200px" width="200px">
                                    <a href="{{ route('club.show', $club['id']) }}"
                                        class="fs-5 d-flex justify-content-center text-dark"><b>{{ $club['name'] }}</b></a>
                                    <p class="d-flex justify-content-center card-text">{{ $club['stadium'] }}, {{ $club['city'] }}</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach 
                @else
                    <div class="container">
                        Empty data, no clubs connected to this league. Please add a club data with <b>{{ $league['name'] }}</b> as its league attribute.
                    </div>
                @endif
            </div>
        <br><br>
        <hr>
    @endforeach
    <br><br>
@endsection
