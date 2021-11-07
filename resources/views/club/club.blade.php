@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <hr>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="bg-dark text-light">NO</th>
            <th class="bg-dark text-light">CLUB</th>
            <th class="bg-dark text-light">LOCATION</th>
            <th class="bg-dark text-light">VENUE</th>
            <th class="bg-dark text-light">DOMESTIC LEAGUE</th>
            <th class="bg-dark text-light">ACTIONS</th>
        </tr>
        @if (count($clubs) > 0)
            @foreach ($clubs as $club)
                <tr>
                    <th class="text-end align-middle" scope="row">{{ $loop->iteration }}</th>
                    <td class="text-start align-middle">
                        <img src="@if ($club['img_name'] == '') /images/null.png @else /images/club/{{ $club['img_name'] }} @endif" height="50px" width="50px">
                        <a class="ms-2 text-dark" href="{{ route('club.show', $club['id']) }}">{{ $club['name'] }}</a>
                    </td>
                    <td class="text-start align-middle">{{ $club['city'] }}</td>
                    <td class="text-start align-middle">{{ $club['stadium'] }}</td>
                    <td class="text-start align-middle"><a class="text-dark" 
                            href="{{ route('league.show', $club->league->code) }}">{{ $club->league->name }}</a>
                        ({{ $club->league->nation }})</td>
                    <td class="text-start align-middle">
                        <div class="container d-flex justify-content-center">
                            <form action="{{ route('club.destroy', $club['id']) }}" method="POST">
                                <a href="{{ route('club.show', $club['id']) }}" class="btn btn-dark">Show</a>
                                <a href="{{ route('club.edit', $club['id']) }}" class="btn btn-dark">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center align-middle" colspan="6">Empty data, no clubs in the database.</td>
            </tr>
        @endif
        <tr>
            <td colspan="6">
                @if (count($leagues) > 0)
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('club.create') }}" class="btn btn-dark">+ Create</a>
                    </div>
                @else
                    No league detected.
                @endif
            </td>
        </tr>
    </table>
    <br>
    <br>
@endsection
