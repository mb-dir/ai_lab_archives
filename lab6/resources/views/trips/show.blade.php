<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div id="wycieczka" class="container mt-5 mb-5">
        <div class="row">
            <h1>Wycieczka</h1>
        </div>
        <div class="row">
            {{-- Miejsce na wykonanie zadania --}}
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{asset('storage/img/' .$trip->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$trip->name}}</h5>
                        <p class="card-text">{{$trip->description}}</p>
                        <a href="{{" /trips/".$trip->id}}" class="btn btn-primary">Więcej szczegółów...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('shared.footer')

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
