    <?php
    
        include'dados/dados.php';
    
    ?>
        <section id="home"> <!-- Início seção home -->
            <div class="container">
                <div class="row">            
                    <div class="col-md-8 d-none d-md-block"><!-- Início carousel -->
                        <div id="carouselHome" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img style="height: 400px; width: 700px" class="d-block w-100" src="images/bannerSlider1.webp" alt="Primeiro Slide" title="Bolo pudim com caldas de ameixa">
                                </div>
                                <div class="carousel-item">
                                <img style="height: 400px; width: 700px" class="d-block w-100" src="images/bannerSlider3.jpg" alt="Segundo Slide" title="Diversos sabores de brigadeiros"> 
                                </div>
                                <div class="carousel-item">
                                <img style="height: 400px; width: 700px" class="d-block w-100" src="images/bannerSlider3.webp" alt="Terceiro Slide" title="Bolo de morango com recheio branco">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div><!--/fim corousel -->
                    </div>
                    <div class="col-md-4 d-flex"><!-- Textos da seção -->
                        <div class="align-self-center">

                            <h1><?= $textoHome["titulo"];?></h1>
                            <h4><?= $textoHome["subTitulo"];?></h4>
                            <p class="lead"><?= $textoHome["pTitulo"];?></p>
                        </div>
                    </div><!--/fim textos da seção --> 
                </div>
            </div>
        </section><!--/fim seção home -->

        <section id="promocao"><!--/Início seção promoção -->
            <div class="container">
                <h3 class="text-center" class="display-3"> Faça seus pedidos pelo whatsapp <a href=" https://wa.me/5569993882222?text=Ol%C3%A1%2C%20seja%20bem%20vindo!" 
  				target="_blank"><i style="margin-top:16px" class="fa fa-whatsapp fa-3x"></i></a></h3>
                <div class="row">
                    <div class="col-md-4">
                        <a href="?i=detalhes_promocao"><img src="<?=$secaoPromo["boloMes"];?>" class="img-fluid"></a>
                    </div>

                    <div class="col-md-4">
                        <a href="?i=detalhes_promocao"><img src="<?=$secaoPromo["fatiaDia"];?>" class="img-fluid"></a>
                    </div>

                    <div class="col-md-4">
                        <a href="?i=detalhes_promocao"><img src="<?=$secaoPromo["niverMes"];?>" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </section><!--/FIM seção promoção -->

        <section id="produtos_A">
            <div class="container">
                <h3 class="text-left" class="display-3">BOLOS</h3>
                <div class="row">

                    <?php foreach($bolos as $bolo) : ?>
                        <div class="col-md-4">
                            <a href=""><img src=" <?= $bolo["bolo"]; ?>" class="img-fluid" title="<?= $title["titleBolo"]; ?> ">
                            <h5 class="text-center"><?= $bolo["nomeBolo"]; ?> </h5></a>
                            <p class="text-center">---------------</p>
                        </div>

                    <?php endforeach ?>
                  
                </div>
            </div>
        </section>

        <section id="produtos_B">
            <div class="container">
                <h3 class="text-left" class="display-3">DOCINHOS</h3>
                <div class="row">
<<<<<<< HEAD
                    <?php foreach($docinhos as $doce) : ?>
                        <div class="col-md-4">
                            <a href=""><img src=" <?= $doce["doce"]; ?>" class="img-fluid" title="<?= $title["titleDoce"]; ?> ">
                            <h5 class="text-center"><?= $doce["nomeDoce"]; ?> </h5></a>
                            <p class="text-center">---------------</p>
                        </div>

                    <?php endforeach ?>
                 
=======
                      <?php foreach($docinhos as $doce) : ?>
                        <div class="col-md-4">
                            <a href=""><img src=" <?= $doce["doce"]; ?>" class="img-fluid" title="Brigadeiro" >
                            <h5 class="text-center"><?= $doce["tituloDoce"]; ?> </h5></a>
                            <p class="text-center">---------------</p>
                        </div>

                    <?php endforeach ?>
                    <!--
                    <div class="col-md-4">
                        <a href=""><img src="images/brigadeiro_caramelado_com_nozes.jpeg" class="img-fluid" title="Brigadeiro caramelado com nozes" >
                        <h5 class="text-center">BRIGADEIRO CARAMELADO COM NOZES</h5></a>
                        <p class="text-center">---------------</p>
                    </div>
                 
                    <div class="col-md-4">
                        <a href=""><img src="images/brigadeiro.png" class="img-fluid" title="Brigadeiro">
                        <h5 class="text-center">BRIGADEIRO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/bicho_de_pe.jpeg" class="img-fluid" title="Bicho de pé">
                        <h5 class="text-center">BICHO DE PÉ</h5></a>
                        <p class="text-center">---------------</p>
                    </div>    
                    -->
>>>>>>> 89daaf257d289bc4c775d7c233f914129f79c3d5
                </div>
            </div>
        </section>

        <section id="produtos_C">
            <div class="container">
                <h3 class="text-left" class="display-3">TORTAS E PAVÊ</h3>
                <div class="row">
<<<<<<< HEAD
                    <?php foreach($paves as $pave) : ?>
                        <div class="col-md-4">
                            <a href=""><img src="<?= $pave["pave"]; ?>" class="img-fluid" title="<?= $title["titlePave"]; ?> ">
                            <h5 class="text-center"><?= $pave["nomePave"]; ?> </h5></a>
                            <span class="text-center">---------------</span>
                        </div>

                    <?php endforeach ?>
                       
=======
                    <div class="col-md-4">

                        <?php foreach($paves as $pave) : ?>
                            <div class="col-md-4">
                                <a href=""><img src="<?= $pave["pave"]; ?>" class="img-fluid" title="Pavê de chocolate branco" >
                                <h5 class="text-center"><?= $pave["tituloPave"]; ?> </h5></a>
                                <p class="text-center">---------------</p>
                            </div>

                        <?php endforeach ?>
                        <!--
                        <a href=""><img src="images/pave_de_chocolate_branco.png" class="img-fluid" title="Pavê de chocolate branco" >
                        <h5 class="text-center">PAVÊ DE CHOCOLATE BRANCO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/pave_de_chocolate.png" class="img-fluid" title="Pavè de chocolate">
                        <h5 class="text-center">BRIGADEIRO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/pave_de_nozes.png" class="img-fluid" title="Pavê de nozes">
                        <h5 class="text-center">PAVÊ DE NOZES</h5></a>
                         <p class="text-center">---------------</p>
                    </div>   
                    --> 
>>>>>>> 89daaf257d289bc4c775d7c233f914129f79c3d5
                </div>
            </div>
        </section>

        <section id="produtos_D">
            <div class="container">
                <h3 class="text-left" class="display-3">DOCES NO POTE</h3>
                <div class="row">
                    <?php foreach ($mousses as $mousse) : ?>
                        <div class="col-md-4">
                            <a href=""><img src="<?= $mousse["mousse"]; ?>" class="img-fluid" title="<?= $title["titleMousse"]; ?> ">
                            <h5 class="text-center"><?= $mousse["nomeMousse"]; ?> </h5></a>
                            <p class="text-center">---------------</p>
                        </div>
                    <?php endforeach ?>
                  
                </div>
            </div>
        </section>



