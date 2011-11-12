<div id="content-right">
		


<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
        
        <div class="box-right" id="searchform">

			<h4>Search</h4>
		
		    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>
		
		<div class="box-right">
		
			<h4>Categories</h4>
		
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		
		</div>

		<div class="box-right">

			<h4>Archive</h4>
		
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		
		</div>

		<div class="box-right">
			
			<h4>Links</h4>
			
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		
		</div>

		<div class="box-right">

			<h4>Meta</h4>
		
			<ul>
            	<?php wp_register(); ?>
			    <li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		
		</div>

<?php endif; // endif widgets ?>
	  
</div><!-- end content-right -->