<?php

$Query = new WP_Query([
    'post_type' => 'agenda',
    // 'posts_per_page' => 4,
	'orderby' => ['date' => 'ASC']
]);

$index = 0;

?>

<div class="container">
	<header>
		<div>
			<span class="title_icon">
				<span>
					<span></span>
				</span>
			</span>
		</div>
		
		<div>
			<h1>Agenda</h1>
			<nav>
				<a href="#">jeune public</a>
				<a href="#">evénement</a>
				<a href="#">culture</a>
				<a href="#">association</a>
				<a href="#">vernissage</a>
			</nav>
		</div>
	</header>

	<div class="agenda-block">

		<?php if ($Query->have_posts()) : ?>
			<?php while ($Query->have_posts()) : $Query->the_post(); ?>

				<?php 
					$image	 = get_field('image');
					$date_debut = get_field('date_debut');
					$date_fin = get_field('date_fin');
					$description = get_field('description');
					$prochaine_date = get_field('prochaine_date');
					$lieu = get_field('lieu');
					$nom_musee = get_field('nom_musee');

					$hidden_class = ($index >= 4) ? ' hidden-item' : '';
				?>
				<div class="agenda-item<?php echo $hidden_class; ?>">
					<div class="image-parent">
						<?php 
						if ($image): ?>
							<img 
								src="<?php echo esc_url($image['url']); ?>" 
								alt="<?php echo esc_attr($image['alt']); ?>"
							/>
							<?php endif; 
						?>
					</div>

					<div class="content">
						<?php
							$date_debut_formatted = '';
							$date_fin_formatted = '';

							$formatter = new IntlDateFormatter(
								'fr_FR',
								IntlDateFormatter::NONE,
								IntlDateFormatter::NONE,
								null,
								null,
								'd MMM' // or 'd MMMM'
							);

							if ($date_debut) {
								$date_debut = DateTime::createFromFormat('d/m/Y', $date_debut);

								if ($date_debut)
									$date_debut_formatted = $formatter->format($date_debut);
							}

							if ($date_fin) {
								$date_fin = DateTime::createFromFormat('d/m/Y', $date_fin);

								if ($date_fin)
									$date_fin_formatted = $formatter->format($date_fin);
							}

							if ($date_debut_formatted || $date_fin_formatted) {
							?>
								<div class="dates">
									<?php
										echo $date_debut_formatted ? '<p>'.$date_debut_formatted.'</p>' : '';

										echo $date_debut_formatted && $date_fin_formatted ? '<i class="fa-solid fa-arrow-right"></i>' : '';

										echo $date_fin_formatted ? '<p>'.$date_fin_formatted.'</p>' : '';
									?>
								</div>
							<?php
							}
						?>

						<div>
							<p class="title"><?php the_title(); ?></p>
							<h3 class="description"><?php echo nl2br(esc_html($description)); ?></h3>
						</div>
						<span class="hr"></span>

						<div class="extra_info">
							<?php echo $prochaine_date ? '<p class="prochaine_date">Prochaine date : '.$prochaine_date.'</p>' : ''; ?>
							<div class="lieu">
								<p><?php echo $lieu; ?></p>
								<p><?php echo $nom_musee; ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php $index++; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<?php if ($index > 4): ?>
		<button type="button" class="display_all">
			<i class="fa-solid fa-plus"></i>
			<span>tous les événements</span>
		</button>
	<?php endif; ?>
</div>

