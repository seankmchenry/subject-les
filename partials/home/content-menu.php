<?php
/**
 * Template for displaying menu content on the home page
 *
 * @package _s
 */
?>

<div id="menu-area" class="section">

	<h2>Menu</h2>

	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10">

				<!-- Menu tabs -->
				<ul class="menu-tabs" role="tablist">
					<li class="active">
						<a href="#beer" role="tab" data-toggle="tab">Beer</a>
					</li>
					<li>
						<a href="#beer-shot" role="tab" data-toggle="tab">Beer+Shot</a>
					</li>
					<li>
						<a href="#wine" role="tab" data-toggle="tab">Wine</a>
					</li>
					<li>
						<a href="#food" role="tab" data-toggle="tab">Food</a>
					</li>
					<li>
						<a href="#cocktails" role="tab" data-toggle="tab">Cocktails</a>
					</li>
				</ul>

				<!-- Menu content -->
				<div class="tab-content">
					<?php /* Beer */
					if ( have_rows( 'beers' ) ) { ?>
						<div id="beer" class="tab-pane active">
							<?php while( have_rows( 'beers') ): the_row(); ?>
								<div class="item">
									<!-- Brewery -->
									<span class="brand"><?php the_sub_field( 'brewery' ); ?></span>
									<!-- Beer -->
									<span class="name"><?php the_sub_field( 'beer_name' ); ?></span>
									<!-- ABV -->
									<?php if ( get_sub_field( 'beer_abv' ) ) {
										$abv_raw = get_sub_field( 'beer_abv' ); ?>
										<span class="info"><?php echo $abv_raw; ?>%</span>
									<?php } ?>
									<!-- Price -->
									<span class="price">/<?php the_sub_field( 'beer_price' ); ?></span>
								</div>
							<?php endwhile; ?>
						</div>
					<?php } ?>

					<?php /* Beer+Shot */
					if ( have_rows( 'beer_and_shot_combos' ) ) { ?>
						<div id="beer-shot" class="tab-pane">
							<?php while( have_rows( 'beer_and_shot_combos') ): the_row(); ?>
								<div class="item">
									<!-- Combo -->
									<span class="name"><?php the_sub_field( 'combo' ); ?></span>
									<!-- Price -->
									<span class="price">/<?php the_sub_field( 'combo_price' ); ?></span>
									<!-- Description -->
									<?php if ( get_sub_field( 'combo_description' ) ) {
										the_sub_field( 'combo_description' );
									} ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php } ?>

					<?php /* Wine */
					if ( have_rows( 'wines' ) ) { ?>
						<div id="wine" class="tab-pane">
							<?php while( have_rows( 'wines') ): the_row(); ?>
								<div class="item">
									<!-- Wine -->
									<span class="name"><?php the_sub_field( 'wine_name' ); ?></span>
									<!-- Region -->
									<span class="info">/<?php the_sub_field( 'source_region' ); ?></span>
									<!-- Price -->
									<span class="price">/<?php the_sub_field( 'wine_price' ); ?></span>
								</div>
							<?php endwhile; ?>
						</div>
					<?php } ?>

					<?php /* Food */
					if ( have_rows( 'food' ) ) { ?>
						<div id="food" class="tab-pane">
							<?php while( have_rows( 'food') ): the_row(); ?>
								<div class="item">
									<!-- Item -->
									<span class="name"><?php the_sub_field( 'item_name' ); ?></span>
									<!-- Price -->
									<span class="price">/<?php the_sub_field( 'item_price' ); ?></span>
									<!-- Description -->
									<?php if ( get_sub_field( 'item_description' ) ) {
										the_sub_field( 'item_description' );
									} ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php } else { ?>
						<div id="food" class="tab-pane">
							<span>** Under Construction **</span>
						</div>
					<?php } ?>

					<?php /* Cocktails */
					if ( have_rows( 'cocktails' ) ) { ?>
						<div id="cocktails" class="tab-pane">
							<?php while( have_rows( 'cocktails') ): the_row(); ?>
								<div class="item">
									<!-- Cocktail -->
									<span class="name"><?php the_sub_field( 'cocktail_name' ); ?></span>
									<!-- Price -->
									<span class="price">/<?php the_sub_field( 'cocktail_price' ); ?></span>
									<!-- Description -->
									<?php if ( get_sub_field( 'cocktail_description' ) ) {
										the_sub_field( 'cocktail_description' );
									} ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php } ?>
				</div>

			</div><!-- .col-sm-10 -->
		</div><!-- .row -->
	</div><!-- .container -->

</div><!-- #menu-section -->
