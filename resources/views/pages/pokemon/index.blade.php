@extends('template.index')
@section('content')

    <div class="row row-cols-3 g-3 mt-5">
        @foreach ($pokemons as $pokemon)
            <div class="col m-0 d-flex" id="{{ 'pokemon-' . $pokemon['id'] }}">
                <a href="/pokemon/{{ $pokemon['id'] }}" class="text-white text-decoration-none d-flex">
                    <div class="d-flex flex-column align-items-start">
                        <img style="width: 100px" src="{{ $pokemon['sprite'] }}" alt="">
                    </div>
                    <div class="ml-3 d-flex justify-content-center flex-column align-items-start">
                        <p class="my-1" style="color: #faa4a4"><strong>Name: </strong>{{ $pokemon['name']['french'] }}</p>
                        @foreach ($pokemon['type'] as $type)
                            <p class="my-1" style="color: #faa4a4"><strong>Type: </strong>{{ $type }}</p>
                        @endforeach
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
