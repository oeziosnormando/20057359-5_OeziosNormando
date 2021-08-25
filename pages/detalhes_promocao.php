<?php

    include './dados/dados.php';

?>

<div id="main" class="center">
	<h1  class="text-center" class="display-3">Aproveite nossas promoções</h1>
</div>

<div id="detalhes_promocao">
	<div class="container">
		<div class="row">
			  <div class="col-md-4">
                <img src="<?=$detalhesPromo["niverMesDet"];?>" class="img-fluid">
            </div>

            <div class="col-md-4">
                <img src="<?=$detalhesPromo["boloMesDet"];?>" class="img-fluid">
            </div>

            <div class="col-md-4">
                <img src="<?=$detalhesPromo["fatiaDiaDet"];?>" class="img-fluid">
            </div>    
		</div>
	</div>
</div>
