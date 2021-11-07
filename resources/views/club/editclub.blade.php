@extends('../layout.layout')
@section('doc_title', $doctitle)
@section('page_title', $title)
@section('main_content')
    <hr>
    <div class="container text-start text-dark rounded">
        <form action="{{ route('club.update', $club['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div>
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control bg-light" name="name" id="name" placeholder="Hertha Berlin" value="{{ $club['name'] }}">
                @error('name')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="city" class="form-label"><b>Location</b></label>
                <input type="text" class="form-control bg-light" name="city" id="city" placeholder="Berlin" value="{{ $club['city'] }}">
                @error('city')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="stadium" class="form-label"><b>Venue</b></label>
                <input type="text" class="form-control bg-light" name="stadium" id="stadium" placeholder="Olympiastadion Berlin"  value="{{ $club['stadium'] }}">
                @error('stadium')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="apparel" class="form-label"><b>Apparel</b></label>
                <input type="text" class="form-control bg-light" name="apparel" id="apparel" placeholder="Nike" value="{{ $club['apparel'] }}">
                @error('apparel')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="sponsor" class="form-label"><b>Sponsor</b></label>
                <input type="text" class="form-control bg-light" name="sponsor" id="sponsor" placeholder="Autohero" value="{{ $club['sponsor'] }}">
                @error('sponsor')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="coach" class="form-label"><b>Coach</b></label>
                <input type="text" class="form-control bg-light" name="coach" id="coach" placeholder="Pál Dárdai" value="{{ $club['coach'] }}">
                @error('coach')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="captain" class="form-label"><b>Captain</b></label>
                <input type="text" class="form-control bg-light" name="captain" id="captain" placeholder="Dedryck Boyata" value="{{ $club['captain'] }}">
                @error('captain')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="in_league" class="form-label"><b>League</b></label>
                <br>
                <div class="form-control p-0">
                    <select class="form-control selectpicker bg-white" data-live-search="true" id="in_league" name="in_league">
                        @foreach ($leagues as $league)
                            <option 
                            @if ($league['code'] == $club['in_league'])
                                selected="selected"
                            @endif
                            value="{{ $league['code'] }}">{{ $league['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('in_league')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="img" class="form-label"><b>Logo</b></label>
                <br>
                <input class="form-control bg-light" type="file" name="img" accept="image/*">
                @error('img_name')
                    <div class="text-end text-mute">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="description" class="form-label"><b>Description</b></label>
                <textarea class="form-control bg-light" name="description" id="description" rows="4" cols="50"
                    placeholder="Put the description of the league here.">{{ $club['description'] }}</textarea>
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
