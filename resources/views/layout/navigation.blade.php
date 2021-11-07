<div class="container fixed-top bg-white justify-content-between nav border-bottom">
    <div>
        <ul class="nav d-flex mt-1">
            <li class="nav-item">
                <div class="d-flex flex-row bd-highlight">

                    <div class="mt-2 ms-2"><img src="/images/logo.jpg" height="27px" width="27px"></div>
                    <div>
                        <h4 class="nav-link text-black link-disabled fw-bold">MYSOCCER</h4>
                    </div>
                </div>
            </li>
        <ul>
    </div>
    <div>
        <ul class="nav d-flex mt-1">
            <li class="nav-item">
                <a class="nav-link text-black @if ($doctitle == 'Home') {{ 'active disabled fw-bold' }} @endif" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black @if ($doctitle == 'League') {{ 'active fw-bold' }} @endif" href="{{ route('league.index') }}">Domestic
                    Leagues</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black @if ($doctitle == 'Club') {{ 'active fw-bold' }} @endif" href="{{ route('club.index') }}">Clubs</a>
            </li>
        </ul>
    </div>
</div>
<br>
<br>
