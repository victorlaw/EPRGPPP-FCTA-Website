<?php
/**
 * Custom search form
 */

?>

<div class="search-form">
	<form class="d-flex my-2 my-lg-0" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

	<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
	<input class="form-control border-0" type="search" placeholder="<?php echo esc_attr_x( 'Search post', 'placeholder', 'eprg-ppp' )?>" value="<?php echo get_search_query() ?>" name="s" aria-label="Search">
	<button class="btn .btn-main " type="submit"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
	</form>
</div>

