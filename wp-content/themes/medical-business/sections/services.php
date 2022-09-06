<?php

add_action( 'bizberg_before_homepage_blog', 'medical_business_homepage_services' );
function medical_business_homepage_services(){

	$status = bizberg_get_theme_mod( 'services_status' );

	if( $status == false ){
		return;
	} 

	$subtitle = bizberg_get_theme_mod( 'services_subtitle' );
	$title    = bizberg_get_theme_mod( 'services_title' ); 
	$services = bizberg_get_theme_mod( 'medical_business_services' );
	$services = json_decode( $services, true ); ?>

	<div class="services_wrapper">

		<div class="container">

			<div class="title_wrapper">			
				<h4><?php echo esc_html( $subtitle ); ?></h4>
				<h2><?php echo esc_html( $title ); ?></h2>
			</div>

			<div class="item_wrapper">
				
				<?php 
				if( !empty( $services ) ){ 
					foreach( $services as $value ){
						$icon         = !empty( $value['icon'] ) ? $value['icon'] : '';
						$page_id      = !empty( $value['page_id'] ) ? $value['page_id'] : '';
						$service_post = get_post( $page_id ); ?>
						<div class="item">
							<div class="icon">
								<i class="<?php echo esc_attr( $icon ); ?>"></i>
							</div>
							<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $service_post->post_content ), 10, null ) ); ?></p>
							<a href="<?php echo esc_url( get_permalink( $page_id ) ); ?>">
								<?php esc_html_e( 'View More' , 'medical-business' ) ?> <i class="fas fa-angle-right"></i>
							</a>
						</div>
						<?php
					} 
				} ?>

			</div>

		</div>
		
	</div>

	<?php
}