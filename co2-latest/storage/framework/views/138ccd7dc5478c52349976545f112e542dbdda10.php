<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="a">
                <h1 class="display-4">Bewerk Data</h1>
                <p>Bewerk en verstuur dit formulier om data aan te passen</p>
                <hr>

                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">

                        <div class="control-group col-12">
                            <div><label for="bedrijfnaam">Bedrijfsnaam</label></div>
                            <input type="text" id="bedrijfnaam" class="form-control" name="bedrijfnaam"
                                placeholder="bedrijfnaam hier" value="<?php echo e($post->bedrijfnaam); ?>" required maxlength="254">
                        </div>

                        <div class="control-group col-12 mt-2">
                            <label for="postcode">Postcode</label>
                            <input type="number" id="postcode" class="form-control" name="postcode"
                                placeholder="postcode hier" min="1000" max="9999" required value="<?php echo e($post->postcode); ?>">
                        </div>

                        <?php
                        $array=$array = array ('Advies en consultancy','Agrosector Bouw, installatie en infrastructuur','Cultuur en sport','Delfstoffen','Energie','Financiele dienstverlening','Gezondheidszorg en maatschappelijke dienstverlening','Groothandel en detailhandel','Horeca','ICT, media en communicatie','Industrie','Onderwijs en training','Onroerend goed','Persoonlijke dienstverlening en not-for-profit','Vervoer, post en opslag','Water en afval','Zakelijke dienstverlening','Overige');
                        $branche = $post->branche;
                        $key = array_search($branche, $array);
                        /*echo 'item '.$key.' selected';*/
                        /*if ($key==0) {echo 'selected';}*/
                        ?>
                        
                        <div class="control-group col-12">
                            <label for="branche">Branche</label>
                            <select id="branche" name="branche" required value="<?php echo e($post->branche); ?>">
                                <option value="Advies en consultancy" <?php if ($key==0) {echo 'selected';} ?> >Advies en consultancy
                                </option>
                                <option value="Agrosector Bouw, installatie en infrastructuur" <?php if ($key==1) {echo 'selected';} ?> >Agrosector Bouw,
                                    installatie en infrastructuur
                                </option>
                                <option value="Cultuur en sport" <?php if ($key==2) {echo 'selected';} ?> >Cultuur en sport
                                </option>
                                <option value="Delfstoffen" <?php if ($key==3) {echo 'selected';} ?> >Delfstoffen
                                </option>
                                <option value="Energie" <?php if ($key==4) {echo 'selected';} ?> >Energie
                                </option>
                                <option value="Financiele dienstverlening" <?php if ($key==5) {echo 'selected';} ?> >Financiele dienstverlening
                                </option>
                                <option value="Gezondheidszorg en maatschappelijke dienstverlening" <?php if ($key==6) {echo 'selected';} ?> >Gezondheidszorg en
                                    maatschappelijke dienstverlening
                                </option>
                                <option value="Groothandel en detailhandel" <?php if ($key==7) {echo 'selected';} ?> >Groothandel en detailhandel
                                </option>
                                <option value="Horeca" <?php if ($key==8) {echo 'selected';} ?> >Horeca
                                </option>
                                <option value="ICT, media en communicatie" <?php if ($key==9) {echo 'selected';} ?> >ICT, media en communicatie
                                </option>
                                <option value="Industrie" <?php if ($key==10) {echo 'selected';} ?> >Industrie
                                </option>
                                <option value="Onderwijs en training" <?php if ($key==11) {echo 'selected';} ?> >Onderwijs en training
                                </option>
                                <option value="Onroerend goed" <?php if ($key==12) {echo 'selected';} ?> >Onroerend goed
                                </option>
                                <option value="Persoonlijke dienstverlening en not-for-profit" <?php if ($key==13) {echo 'selected';} ?> >Persoonlijke
                                    dienstverlening en not-for-profit
                                </option>
                                <option value="Vervoer, post en opslag" <?php if ($key==14) {echo 'selected';} ?> >Vervoer, post en opslag
                                </option>
                                <option value="Water en afval" <?php if ($key==15) {echo 'selected';} ?> >Water en afval
                                </option>
                                <option value="Zakelijke dienstverlening" <?php if ($key==16) {echo 'selected';} ?> >Zakelijke dienstverlening
                                </option>
                                <option value="Overige" <?php if ($key==17) {echo 'selected';} ?> >Overige
                                </option>
                            </select>
                        </div>

                        <div class="control-group col-12 mt-2">
                            <label for="werknemers">Aantal werknemers</label>
                            <input type="number" id="werknemers" class="form-control" name="werknemers"
                                placeholder="werknemers hier" required min="1" max="100000000" maxlength="11" value="<?php echo e($post->werknemers); ?>">
                        </div>

                        <div class="control-group col-12">
                            <label for="gebouwen">Aantal gebouwen</label>
                            <input type="number" id="gebouwen" class="form-control" name="gebouwen"
                                placeholder="gebouwen hier" required min="1" max="100000000" maxlength="11" value="<?php echo e($post->gebouwen); ?>">
                        </div>

                        <div class="control-group col-12 mt-2">
                            <label for="grondoppervlak">Grondoppervlak</label>
                            <input type="number" id="grondoppervlak" class="form-control" name="grondoppervlak"
                                placeholder="grondoppervlak hier" required min="1" max="100000000" maxlength="11" value="<?php echo e($post->grondoppervlak); ?>">
                            <span> m<sup>2</sup></span>
                        </div>

                        <div class="control-group col-12">
                            <label for="bouwoppervlak">Bouwoppervlak</label>
                            <input type="number" id="bouwoppervlak" class="form-control" name="bouwoppervlak"
                                placeholder="bouwoppervlak hier" required min="1" max="100000000" maxlength="11" value="<?php echo e($post->bouwoppervlak); ?>">
                            <span> m<sup>2</sup></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-success btn-primary">
                                Update data
                            </button>
                            <a href="/bedrijven/<?php echo e($post->id); ?>" class="btn btn-outline-primary btn-danger">Ga terug</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/bedrijven" class="btn btn-outline-primary btn-sm">Ga terug</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Bewerk Data</h1>
                    <p>Bewerk en verstuur dit formulier om de data up te daten</p>

                    <hr>
                    <form action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">

                            <div class="control-group col-12">
                                <label for="bedrijfnaam">Bedrijfsnaam</label>
                                <input type="text" id="bedrijfnaam" class="form-control" name="bedrijfnaam"
                                    placeholder="bedrijfnaam hier" required value="<?php echo e($post->bedrijfnaam); ?>">
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="postcode">Postcode</label>
                                <input type="number" id="postcode" class="form-control" name="postcode"
                                    placeholder="postcode hier" min="1000" max="9999" required value="<?php echo e($post->postcode); ?>">
                            </div>

                            <?php
                            $array=$array = array ('Advies en consultancy','Agrosector Bouw, installatie en infrastructuur','Cultuur en sport','Delfstoffen','Energie','Financiele dienstverlening','Gezondheidszorg en maatschappelijke dienstverlening','Groothandel en detailhandel','Horeca','ICT, media en communicatie','Industrie','Onderwijs en training','Onroerend goed','Persoonlijke dienstverlening en not-for-profit','Vervoer, post en opslag','Water en afval','Zakelijke dienstverlening','Overige');
                            $branche = $post->branche;
                            $key = array_search($branche, $array);
                            /*echo 'item '.$key.' selected';*/
                            /*if ($key==0) {echo 'selected';}*/
                            ?>
                            
                            <div class="control-group col-12">
                                <label for="branche">Branche</label>
                                <select id="branche" name="branche" required value="<?php echo e($post->branche); ?>">
                                    <option value="Advies en consultancy" <?php if ($key==0) {echo 'selected';} ?> >Advies en consultancy
                                    </option>
                                    <option value="Agrosector Bouw, installatie en infrastructuur" <?php if ($key==1) {echo 'selected';} ?> >Agrosector Bouw,
                                        installatie en infrastructuur
                                    </option>
                                    <option value="Cultuur en sport" <?php if ($key==2) {echo 'selected';} ?> >Cultuur en sport
                                    </option>
                                    <option value="Delfstoffen" <?php if ($key==3) {echo 'selected';} ?> >Delfstoffen
                                    </option>
                                    <option value="Energie" <?php if ($key==4) {echo 'selected';} ?> >Energie
                                    </option>
                                    <option value="Financiele dienstverlening" <?php if ($key==5) {echo 'selected';} ?> >Financiele dienstverlening
                                    </option>
                                    <option value="Gezondheidszorg en maatschappelijke dienstverlening" <?php if ($key==6) {echo 'selected';} ?> >Gezondheidszorg en
                                        maatschappelijke dienstverlening
                                    </option>
                                    <option value="Groothandel en detailhandel" <?php if ($key==7) {echo 'selected';} ?> >Groothandel en detailhandel
                                    </option>
                                    <option value="Horeca" <?php if ($key==8) {echo 'selected';} ?> >Horeca
                                    </option>
                                    <option value="ICT, media en communicatie" <?php if ($key==9) {echo 'selected';} ?> >ICT, media en communicatie
                                    </option>
                                    <option value="Industrie" <?php if ($key==10) {echo 'selected';} ?> >Industrie
                                    </option>
                                    <option value="Onderwijs en training" <?php if ($key==11) {echo 'selected';} ?> >Onderwijs en training
                                    </option>
                                    <option value="Onroerend goed" <?php if ($key==12) {echo 'selected';} ?> >Onroerend goed
                                    </option>
                                    <option value="Persoonlijke dienstverlening en not-for-profit" <?php if ($key==13) {echo 'selected';} ?> >Persoonlijke
                                        dienstverlening en not-for-profit
                                    </option>
                                    <option value="Vervoer, post en opslag" <?php if ($key==14) {echo 'selected';} ?> >Vervoer, post en opslag
                                    </option>
                                    <option value="Water en afval" <?php if ($key==15) {echo 'selected';} ?> >Water en afval
                                    </option>
                                    <option value="Zakelijke dienstverlening" <?php if ($key==16) {echo 'selected';} ?> >Zakelijke dienstverlening
                                    </option>
                                    <option value="Overige" <?php if ($key==17) {echo 'selected';} ?> >Overige
                                    </option>
                                </select>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="werknemers">Aantal werknemers</label>
                                <input type="number" id="werknemers" class="form-control" name="werknemers"
                                    placeholder="werknemers hier" required min="1" value="<?php echo e($post->werknemers); ?>">
                            </div>

                            <div class="control-group col-12">
                                <label for="gebouwen">Aantal gebouwen</label>
                                <input type="number" id="gebouwen" class="form-control" name="gebouwen"
                                    placeholder="gebouwen hier" required min="1" value="<?php echo e($post->gebouwen); ?>">
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="grondoppervlak">Grondoppervlak</label>
                                <input type="number" id="grondoppervlak" class="form-control" name="grondoppervlak"
                                    placeholder="grondoppervlak hier" required min="1" value="<?php echo e($post->grondoppervlak); ?>">
                                <span> m<sup>2</sup></span>
                            </div>

                            <div class="control-group col-12">
                                <label for="bouwoppervlak">Bouwoppervlak</label>
                                <input type="number" id="bouwoppervlak" class="form-control" name="bouwoppervlak"
                                    placeholder="bouwoppervlak hier" required min="1" value="<?php echo e($post->bouwoppervlak); ?>">
                                <span> m<sup>2</sup></span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-blog\resources\views/edit.blade.php ENDPATH**/ ?>