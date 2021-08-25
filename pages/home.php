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
                            <a href=""><img src=" <?= $bolo["boloAfrica"]; ?>" class="img-fluid" title="Bolo africa" >
                            <h5 class="text-center"><?= $bolo["tituloBolo"]; ?> </h5></a>
                            <p class="text-center">---------------</p>
                        </div>

                    <?php endforeach ?>
                    <!--
                    <div class="col-md-4">
                        <a href=""><img src="images/bolo_bicho_de_pe.png" class="img-fluid" title="Bolo bicho de pé">
                        <h5 class="text-center">BOLO BICHO DE PÉ</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/bolo_crocante.jpeg" class="img-fluid" title="Bolo crocante">
                        <h5 class="text-center">BOLO CROCANTE</h5></a>
                        <p class="text-center">---------------</p>
                    </div>   
                    --> 
                </div>
            </div>
        </section>

        <section id="produtos_B">
            <div class="container">
                <h3 class="text-left" class="display-3">DOCINHOS</h3>
                <div class="row">
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
                </div>
            </div>
        </section>

        <section id="produtos_C">
            <div class="container">
                <h3 class="text-left" class="display-3">TORTAS E PAVÊ</h3>
                <div class="row">
                    <div class="col-md-4">
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
                </div>
            </div>
        </section>

        <section id="produtos_D">
            <div class="container">
                <h3 class="text-left" class="display-3">DOCES NO POTE</h3>
                <div class="row">
                    <div class="col-md-4">
                        <a href=""><img src="images/creme_de_coco_com_morango_sem_acucar.png" class="img-fluid" title="Creme de coco com morango" >
                        <h5 class="text-center">CREME DE COCO COM MORANGO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/mousse_chocolate_Branco_com_uvas.png" class="img-fluid" title="Mousse de chocolate branco">
                        <h5 class="text-center">MOUSSE DE CHOCOLATE BRANCO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>

                    <div class="col-md-4">
                        <a href=""><img src="images/sufle_de_chocolate_com_morango.png" class="img-fluid" title="Sufle de chocolate com morango">
                        <h5 class="text-center">SUFLE DE CHOCOLATE COM MORANGO</h5></a>
                        <p class="text-center">---------------</p>
                    </div>    
                </div>
            </div>
        </section>



