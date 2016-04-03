<div id="Destaques">

	<div class="row">
    
    <div class="col-lg-6 leadPrincipal">

    	<div class="deslocaTitulo">
	    	<span class="secao"><?php the_category(); ?></span>
	    	<h1><?php the_title(); ?></h1>
        </div>
        
        <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(large);
				}
		?>
        </div>
        
    </div>
    
    <div class="col-lg-3 destaqueMenor">
    	<div class="deslocaMenor">
		    <span class="secao"><?php the_category(); ?></span>
		    <h1><?php the_title(); ?></h1>
        </div>
        
       <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
				}
		?>
        </div>        

    </div>
    
   
        <div class="col-lg-3 destaqueMenor publi">
    <p><img class="img-responsive" alt="Volkswagen Fusca - O Carro Voltou - publicidade" src="<?php bloginfo('template_directory');?>/imagens/publi.png" /></p>
    </div>
    
        <div class="col-lg-3 destaqueMenor" style="background-color:#F60;">
    	<div class="deslocaMenor">
		    <span class="secao"><?php the_category(); ?></span>
		    <h1><?php the_title(); ?></h1>
		</div>
       <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
				}
		?>
        </div>        
</div>
    
    <div class="col-lg-3 destaqueMenor">
    	<div class="deslocaMenor">
		    <span class="secao"><?php the_category(); ?></span>
		    <h1><?php the_title(); ?></h1>
   			 </div>
       <div class="miniaturaDePost">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
				}
		?>
        </div>        
    	</div>

</div>

</div>