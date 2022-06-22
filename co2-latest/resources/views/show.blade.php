@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <br>
                <h1 class="display-one">{{ ucfirst($post->bedrijfnaam) }}</h1>
                <?php
                $array = (array) $post;
                $array = array_values($array);
                $array = array_values($array[12]);
                $dump = ['id','bedrijfnaam', 'postcode', 'branche','werknemers','gebouwen','grondoppervlak','bouwoppervlak','gemaakt op','bewerkt op'];
                //print_r($array);
                $j=count($array);
                echo '<table class="table"><tr><th>Kolom</th><th>Waarde</th></tr>';
                for ($i=0; $i < $j-1; $i++) {
                echo '<tr><td>'.$dump[$i].'</td><td>'.$array[$i];
                if($i==6 || $i==7){echo '<span> m<sup>2</sup></span>';}
                echo '</td></tr>';
                }
                echo '<tr><td>'.$dump[$i].'</td><td>'.$array[$i];
                echo '</td></tr>';
                
                $array2=$array2 = array ('Advies en consultancy','Agrosector Bouw, installatie en infrastructuur','Cultuur en sport','Delfstoffen','Energie','Financiele dienstverlening','Gezondheidszorg en maatschappelijke dienstverlening','Groothandel en detailhandel','Horeca','ICT, media en communicatie','Industrie','Onderwijs en training','Onroerend goed','Persoonlijke dienstverlening en not-for-profit','Vervoer, post en opslag','Water en afval','Zakelijke dienstverlening','Overige');
                $branche2 = $post->branche;
                $key = array_search($branche2, $array2)+1;
                /*echo 'item '.$key.' selected';*/
                /*if ($key==0) {echo 'selected';}*/
                $multiplier=1;
                $factor=9.8;
                $co2=0;
                //echo('('.$key.')');
                //echo('['.$multiplier.']');
                if($key==4||$key==5||$key==11||$key==15||$key==16){
                    $multiplier=$multiplier+5.5;
                }
                //echo('['.$multiplier.']');
                if($array[6]/$array[7]>10){
                    $multiplier=$multiplier+floor(($array[6]/$array[7])-10);
                }
                //echo('['.$multiplier.']');
                $multiplier=$multiplier+($array[4]/5000);
                //echo('['.$multiplier.']');
                if($array[2]<4000){
                    $multiplier=$multiplier+2.5;
                } else {
                    $multiplier=$multiplier+1.2;
                }
                //echo('['.$multiplier.']');
                $multiplier=$multiplier*$array[5]*0.1;
                //echo('['.$multiplier.']');
                $e=$array[7]/10000;
                //echo '{'.$e.'}';
                $co2=round($multiplier*$factor*$e, 3);
                $yes='';
                $f='';
                if($co2>200){
                    //$y=255-round(((255/1.58)*atan($co2/100)),0);
                    $y=127-0.1*$co2;
                    if($y<0){
                        $y=0;
                        $f='font-weight: bold;';
                    }
                    $y=dechex($y);
                    if(strlen($y)<2){
                        $y='0'.$y;
                    }
                    $x='#ff'.$y.'00';
                    $yes='color:'.$x.'!important;'.$f;
                }
                echo '<tr><td>';
                echo 'aantal CO<sub>2</sub></td><td style="'.$yes.'">'.$co2.'<span> ton CO<sub>2</sub></span>';
                echo '</td></tr>';
                echo '</table>';
                ?>
                <p></p> 
                <a href="/bedrijven/{{ $post->id }}/edit" class="btn btn-outline-primary btn-success">Bewerk Data</a>
                <br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Verwijder Data</button>
                </form>
                <br>
                <!--<a href="/bedrijven" class="btn btn-outline-primary btn-info">Ga terug</a>-->
            </div>
        </div>
    </div>
@endsection