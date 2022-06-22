@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="a">
                    <h1 class="display-4">Maak nieuwe data</h1>
                    <p>Bewerk en verstuur dit formulier om data toe te voegen</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">

                            <div class="control-group col-12">
                                <div><label for="bedrijfnaam">Bedrijfsnaam</label></div>
                                <input type="text" id="bedrijfnaam" class="form-control" name="bedrijfnaam"
                                    placeholder="bedrijfnaam hier" required maxlength="254">
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="postcode">Postcode</label>
                                <input type="number" id="postcode" class="form-control" name="postcode"
                                    placeholder="postcode hier" min="1000" max="9999" required>
                            </div>

                            <div class="control-group col-12">
                                <label for="branche">Branche</label>
                                <select id="branche" name="branche" required>
                                    <option value="Advies en consultancy">Advies en consultancy
                                    </option>
                                    <option value="Agrosector Bouw, installatie en infrastructuur">Agrosector Bouw,
                                        installatie en infrastructuur
                                    </option>
                                    <option value="Cultuur en sport">Cultuur en sport
                                    </option>
                                    <option value="Delfstoffen">Delfstoffen
                                    </option>
                                    <option value="Energie">Energie
                                    </option>
                                    <option value="Financiele dienstverlening">Financiele dienstverlening
                                    </option>
                                    <option value="Gezondheidszorg en maatschappelijke dienstverlening">Gezondheidszorg en
                                        maatschappelijke dienstverlening
                                    </option>
                                    <option value="Groothandel en detailhandel">Groothandel en detailhandel
                                    </option>
                                    <option value="Horeca">Horeca
                                    </option>
                                    <option value="ICT, media en communicatie">ICT, media en communicatie
                                    </option>
                                    <option value="Industrie">Industrie
                                    </option>
                                    <option value="Onderwijs en training">Onderwijs en training
                                    </option>
                                    <option value="Onroerend goed">Onroerend goed
                                    </option>
                                    <option value="Persoonlijke dienstverlening en not-for-profit">Persoonlijke
                                        dienstverlening en not-for-profit
                                    </option>
                                    <option value="Vervoer, post en opslag">Vervoer, post en opslag
                                    </option>
                                    <option value="Water en afval">Water en afval
                                    </option>
                                    <option value="Zakelijke dienstverlening">Zakelijke dienstverlening
                                    </option>
                                    <option value="Overige" selected>Overige
                                    </option>
                                </select>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="werknemers">Aantal werknemers</label>
                                <input type="number" id="werknemers" class="form-control" name="werknemers"
                                    placeholder="werknemers hier" required min="1" max="100000000" maxlength="11">
                            </div>

                            <div class="control-group col-12">
                                <label for="gebouwen">Aantal gebouwen</label>
                                <input type="number" id="gebouwen" class="form-control" name="gebouwen"
                                    placeholder="gebouwen hier" required min="1" max="100000000" maxlength="11">
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="grondoppervlak">Grondoppervlak</label>
                                <input type="number" id="grondoppervlak" class="form-control" name="grondoppervlak"
                                    placeholder="grondoppervlak hier" required min="1" max="100000000" maxlength="11">
                                <span> m<sup>2</sup></span>
                            </div>

                            <div class="control-group col-12">
                                <label for="bouwoppervlak">Bouwoppervlak</label>
                                <input type="number" id="bouwoppervlak" class="form-control" name="bouwoppervlak"
                                    placeholder="bouwoppervlak hier" required min="1" max="100000000" maxlength="11">
                                <span> m<sup>2</sup></span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-success btn-primary">
                                    Maak data
                                </button>
                                <a href="/" class="btn btn-outline-primary btn-danger">Ga terug</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
