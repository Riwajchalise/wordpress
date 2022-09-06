<?php

add_action( 'bizberg_before_homepage_blog', 'medical_business_homepage_expertise' );
function medical_business_homepage_expertise(){ 

	$status = bizberg_get_theme_mod( 'expertise_status' ); 

	if( $status == false ){
		return;
	}

	$subtitle = bizberg_get_theme_mod( 'expertise_subtitle' );
	$title    = bizberg_get_theme_mod( 'expertise_title' );
	$data     = bizberg_get_theme_mod( 'medical_business_expertise_sections' );
	$data     = json_decode( $data, true ); ?>

	<div class="expertise_wrapper">
		
		<div class="container">
			
			<div class="title_wrapper">			
				<h4><?php echo esc_html( $subtitle ); ?></h4>
				<h2><?php echo esc_html( $title ); ?></h2>
			</div>

			<?php 
			if( !empty( $data ) ){ ?>
				<div class="item_wrapper">
					<?php 
					foreach( $data as $key => $value ){ 
						$page_id        = !empty( $value['page_id'] ) ? $value['page_id'] : ''; 
						$expertise_post = get_post( $page_id ); ?>
						<div class="item">
							<div class="number">0<?php echo absint( $key+1 ); ?></div>
							<div class="content_wrapper">
								<h3><?php echo esc_html( $expertise_post->post_title ); ?></h3>
								<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $expertise_post->post_content ), 8, null ) ); ?></p>
							</div>
						</div>
						<?php 
					} ?>
				</div>
				<?php 
			} ?>

		</div>

	</div>

	<?php
}