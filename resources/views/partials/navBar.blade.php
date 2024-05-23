<nav class="container text-center p-3">
    <div class="row gap-3 justify-content-evenly">
        <div class="col-4">
            <a href="{{route('movie')}}">
                <img class="logo" src="/img/popcorn.png" alt="popcorn">
            </a>
        </div>
        <ul class="col-4 m-0 d-flex align-items-center gap-3 list-unstyled justify-content-evenly">
            <li>
                <a class="text-decoration-none text-danger" href="{{route('joke')}}">
                    <img class="icons" src="/img/ghost.png" alt="">
                </a>
            </li>
            <li>
                <a class="text-decoration-none text-danger" href="{{route('cat')}}">
                    <img class="icons" src="/img/whip.png" alt="">
                </a>
            </li>
            <li>
                <a class="text-decoration-none text-danger" href="{{route('secret')}}">
                    <img class="icons" src="/img/adults-only.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</nav>