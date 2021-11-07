@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <hr>
    <div class="container text-start text-dark rounded">
        <form action="{{ route('league.update', $league['code']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div>
                <label for="code" class="form-label"><b>Code</b></label>
                <input type="text" class="form-control" name="code" id="code" placeholder="bundesliga" value="{{ $league['code'] }}">
                @error('code')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Bundesliga" value="{{ $league['name'] }}">
                @error('name')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="original_name" class="form-label"><b>Original Name</b></label>
                <input type="text" class="form-control" name="original_name" id="original_name"
                    placeholder="Fußball-Bundesliga" value="{{ $league['original_name'] }}">
                @error('original_name')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="nation" class="form-label"><b>Nation</b></label>
                <input type="text" class="form-control" name="nation" id="nation" placeholder="Germany" value="{{ $league['nation'] }}">
                @error('nation')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="pyramid_level" class="form-label"><b>Level on Pyramid</b></label>
                <input type="number" class="form-control bg-light" name="pyramid_level" id="pyramid_level" placeholder="1" value="{{ $league['pyramid_level'] }}">
                @error('pyramid_level')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="season" class="form-label"><b>Season</b></label>
                <input type="text" class="form-control" name="season" id="season" placeholder="2021/22" value="{{ $league['season'] }}">
                @error('season')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="img" class="form-label"><b>Logo</b></label>
                <br>
                <input class="form-control" type="file" name="img" accept="image/*">
                @error('img_name')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="description" class="form-label"><b>Description</b></label>
                <textarea class="form-control" name="description" id="description" rows="4" cols="50"
                    placeholder="Put the description of the league here.">{{ $league['description'] }}</textarea>
                 @error('description')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-dark">Submit</button>
            </div>
    </div>
    <br>
    <br>
    <br>
@endsection
