
<div id="Destaques">

<div class="row">
<?php

// argumentos para o Loop irão para a variável $args
$args = array (
	'order' => 'ASC',
);

// Faça a Query com os argumentos de $args

$query = new WP_Query( $args );


//Loop

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
        $contagem++;
		 
		 if ($contagem == 1) {  // Post principal
			 ?>
         <div class="col-lg-6 col-md-6 col-sm-12 leadPrincipal">
  	    	<div class="deslocaTitulo">
		    	<span class="secao"><?php the_category(); ?></span>
	    		<h1><?php the_title(); ?></h1>
        	</div>
        
        <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(650,650));
				}
		?>
        	</div>
        
    	</div>
    
   		 <?php
		 // bloco de publicidade
		  } elseif ($contagem ==3){
			?>
			<div class="col-lg-3 col-md-3 col-sm-6 destaqueMenor publi">
    			<p><img class="img-responsive" alt="Volkswagen Fusca - O Carro Voltou - publicidade" src="<?php bloginfo('template_directory');?>/imagens/publi.png" /></p>
    		</div>
          
            <div class="col-lg-3 col-md-3 col-sm-6 destaqueMenor">
    		<div class="deslocaMenor">
		    	<span class="secao"><?php the_category(); ?></span>
		    	<h1><?php the_title(); ?></h1>
        	</div>
        
       		<div class="miniaturaDePost">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(294,294));
				}		?>
        	</div>        

    		</div>  
	
	
	
		<?php
		// posts menores		 
		 } else { ?>
        <div class="col-lg-3 col-md-3 col-sm-6 destaqueMenor">
    		<div class="deslocaMenor">
		    	<span class="secao"><?php the_category(); ?></span>
		    	<h1><?php the_title(); ?></h1>
        	</div>
        
       <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(294,294));
				}		?>
        </div>        

    </div>   
    
<?php
			 
		 }
	} // end while
} // end if

wp_reset_postdata();

?>







</div>

       
    <div class="row Posts">
    	<div class="col-lg-3 semPadEsq padDirDez">
        	<div class="miniatura">
            	<div class="secaoMini"><div class="bolete"></div>Comparativos</div>
            </div>
            <div class="Titulo">Audi S3
            </div>
            <div class="Linha">Pista livre para o embate entre os dois cometas de cauda curta
            </div>
            <div class="mais">+ Troller X4 Jeep Renegade</div>
        </div>

    	<div class="col-lg-3 semPadEsq padDirDez">
        	<div class="miniatura">
            	<div class="secaoMini"><div class="bolete"></div>Comparativos</div>
            </div>
            <div class="Titulo">Título
            </div>
            <div class="Linha">Pista livre para o embate entre os dois cometas de cauda curta
            </div>
            <div class="mais">+ Troller X4 Jeep Renegade</div>
        </div>

    	<div class="col-lg-3 semPadEsq padDirDez">
        	<div class="miniatura">
            	<div class="secaoMini"><div class="bolete"></div>Comparativos</div>
            </div>
            <div class="Titulo">Título
            </div>
            <div class="Linha">Pista livre para o embate entre os dois cometas de cauda curta
            </div>
            <div class="mais">+ Troller X4 Jeep Renegade</div>
        </div>
 
    	<div class="col-lg-3 semPadDir semPadEsq">
        	<div class="miniatura">
	           	<div class="secaoMini"><div class="bolete"></div>Comparativos</div>
            </div>
            <div class="Titulo">Título
            </div>
            <div class="Linha">Pista livre para o embate entre os dois cometas de cauda curta
            </div>
            <div class="mais">+ Troller X4 Jeep Renegade</div>
        </div>                
    </div>

</div>


