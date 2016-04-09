<?php
		if (is_category( )):
		  $cat = get_query_var('cat');
		  $yourcat = get_category ($cat);
		  if("articulos-publicados" == $yourcat->slug):
		?>
<div class="row">
	<div class="col-md-12">						
		<div class="entry-content category-note jumbotron"> 
			<h1 class="text-center">Artículos publicados</h1>
			<p>
				Entre los años 2004 y 2008, escribí quincenalmente algunos artículos para el periódico El Sol de Oaxaca, que se publicaron en la columna editorial que se llamó Reflexiones Educativas con Aroma de Café. En ellos escribo de mis recuerdos, del trabajo que le dio sustento a mi vida y de algunas ideas educativas que me inquietaban mucho y que deseaba compartir con aquellos que fueran mis lectores. Ya han pasado los años pero esos artículos aún tienen un significado para quien tenga el interés de leerlos
			</p>
		</div>		
	</div>
</div>

<?php
		//End if is category articulos-publicados
		endif;
	//End if page is category
	endif;

?>