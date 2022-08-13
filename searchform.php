

<form action="<?php echo esc_url(home_url()); ?>" method="get">
	<input type="text" name="s" id="search" value="<?php the_search_query();?>"  
	placeholder="Search something &#x1F493;" required class="searchform">
</form>