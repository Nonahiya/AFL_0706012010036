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
            <p class="text-justify">{{ $club['description'] }}</p>
        </div>
        <div>
            <b>{{ $club['name'] }}</b>
            <table class="table table-bordered bg-light">
                <tr>
                    <td colspan="2"> 
                        <img src="@if ($club['img_name'] == '') /images/null.png @else /images/club/{{ $club['img_name'] }} @endif" height="220px" width="220px">
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Town/City </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['city'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Stadium </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['stadium'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Apparel </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['apparel'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Sponsor </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['sponsor'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Coach </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['coach'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Captain </b>
                    </td>
                    <td class="bg-white">
                        {{ $club['captain'] }}
                    </td>
                </tr>
                <tr class="text-start align-top">
                    <td>
                        <b>Domestic League </b>
                    </td>
                    <td class="bg-white">
                        <a class="text-dark" href="{{ route('league.show', $club->league->code) }}">{{ $club->league->name }}</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
@endsection
