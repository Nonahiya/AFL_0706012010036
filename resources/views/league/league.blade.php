@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <hr>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="bg-dark text-light">NO</th>
            <th class="bg-dark text-light">LEAGUE</th>
            <th class="bg-dark text-light">NATION</th>
            <th class="bg-dark text-light">SEASON</th>
            <th class="bg-dark text-light">DATA</th>
            <th class="bg-dark text-light">ACTIONS</th>
        </tr>
        @if (count($leagues) > 0)
            @foreach ($leagues as $league)
                <tr>
                    <th class="text-end align-middle" scope="row">{{ $loop->iteration }}</th>
                    <td class="text-start align-middle">{{ $league['name'] }}</td>
                    <td class="text-start align-middle">{{ $league['nation'] }}</td>
                    <td class="text-center align-middle">{{ $league['season'] }}</td>
                    <td class="text-center align-middle">{{ count($league->clubs) }}</td>
                    <td class="text-start align-middle">
                        <div class="container d-flex justify-content-center">
                            <form action="{{ route('league.destroy', $league['code']) }}" method="POST">
                                <a href="{{ route('league.show', $league['code']) }}" class="btn btn-dark">Show</a>
                                <a href="{{ route('league.edit', $league['code']) }}" class="btn btn-dark">Edit</a>
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
                <td class="text-center align-middle" colspan="6">Empty data, no leagues in the database.</td>
            </tr>
        @endif
        <tr>
            <td colspan="6">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('league.create') }}" class="btn btn-dark">+ Create</a>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <br>
@endsection
