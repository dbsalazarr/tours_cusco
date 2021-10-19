<aside class="sidebar">
	<?php
		if(is_active_sidebar('sidebar_widget')){

			dynamic_sidebar('sidebar_widget');
		}
	?>

	<?php
		if( is_home('') ) :
			echo "nos la debiamos papa";
		else :
			echo "No es home";
		endif;
	?>
</aside>