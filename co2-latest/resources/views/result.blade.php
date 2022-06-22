@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Onze dummy data!</h1>
                        <p>Heb plezier met het lezen van deze onzinnige dummy data. Klik op een naam om te lezen!</p>
                    </div>
                    <div class="btn">
                        <!--<h2>Maak nieuwe data</h2>-->
                        <a href="/bedrijven/create" class="btn-warning"><div class="btn btn-warning btn-sm">Voeg bedrijf toe</div></a>
                    </div>
                </div><br>              
                @forelse($posts as $post)
                    <div class="list">
                        <a href="./bedrijven/{{ $post->id }}"><ul><li>{{ ucfirst($post->bedrijfnaam) }}</ul></li></a>
                    </div>
                @empty
                    <p class="text-warning">Geen data gevonden</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection