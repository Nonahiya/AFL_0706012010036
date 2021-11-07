@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <hr>
    <div class="d-flex justify-content-between">
        <div class="text-start me-4">
            <div class="text-start fs-5">
                <b>Description</b>
            </div>
            <p class="text-justify">{{ $league['description'] }}</p>
        </div>
        <div>
            <b>{{ $league['name'] }}</b>
            <div class="fs-sm">
                (<i>{{ $league['original_name'] }}</i>)
            </div>
            <table class="table table-bordered bg-light">
                <tr>
                    <td colspan="2"> 
                        <img src="@if ($league['img_name'] == '') /images/null.png @else /images/league/{{ $league['img_name'] }} @endif" height="220px" width="220px">
                        <br>
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Season </b>
                    </td>
                    <td class="bg-white">
                        {{ $league['season'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Nation </b>
                    </td>
                    <td class="bg-white">
                        {{ $league['nation'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Level on pyramid </b>
                    </td>
                    <td class="bg-white">
                        {{ $league['pyramid_level'] }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="text-start fs-5">
        <b>Clubs</b>
    </div>
    <table class="table table-bordered">
        <tr>
            <th class="bg-light text-dark">NO</th>
            <th class="bg-light text-dark">CLUB</th>
            <th class="bg-light text-dark">LOCATION</th>
            <th class="bg-light text-dark">VENUE</th>
        </tr>
        @if (count($league->clubs) > 0)
            @foreach ($league->clubs as $club)
                <tr>
                    <th class="text-end align-middle" scope="row">{{ $loop->iteration }}</th>
                    <td class="text-start">
                        <img src="@if ($club['img_name'] == '') /images/null.png @else /images/club/{{ $club['img_name'] }} @endif" height="50px" width="50px">
                        <a class="ms-2 text-dark" href="{{ route('club.show', $club['id']) }}">{{ $club['name'] }}</a>
                    </td>
                    <td class="text-start align-middle">{{ $club['city'] }}</td>
                    <td class="text-start align-middle">{{ $club['stadium'] }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Empty data, no clubs connected to this league. Please add a club data with <b>{{ $league['name'] }}</b> as its league attribute.</td>
            </tr>
        @endif
    </table>
    <br><br>
@endsection
