        </div><!-- **Container - End** -->

        </div><!-- **Main - End** --><?php

        do_action( 'vigil_hook_content_after' );

        $footer = (int) get_theme_mod( 'show-footer', vigil_defaults('show-footer') );
		$activefooter = vigil_is_active_sidebar_footer();
        $show_copyright_section = (int) get_theme_mod( 'show-copyright-text', vigil_defaults('show-copyright-text') );?>
        <!-- **Footer** -->
        <footer id="footer">
            <?php if( !empty( $footer ) && $activefooter ) :
                $darkbg =(int) get_theme_mod( 'enable-footer-darkbg', vigil_defaults('enable-footer-darkbg') );
                $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
                $columns = (int) get_theme_mod( 'footer-columns', vigil_defaults('footer-columns') );?>
                <div class="footer-widgets <?php echo esc_attr( $class ); ?>">
                    <div class="container"><?php
                        vigil_show_footer_widgetarea( $columns );?>
                    </div>
                </div>
            <?php endif;

            $copyright = get_theme_mod( 'copyright-text', vigil_defaults('copyright-text') );
            $copyright = stripslashes ( $copyright );
            $copyright = do_shortcode( $copyright );

            $copyright_next = get_theme_mod( 'copyright-next', vigil_defaults('copyright-next') );

            $darkbg = get_theme_mod( 'enable-copyright-darkbg', vigil_defaults('enable-copyright-darkbg') );
            $class  = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
			$center = ( $copyright_next == 'disable' ) ? 'align-center' : ''; ?>
            <div class="footer-copyright <?php echo esc_attr( $class ); ?>">
                <div class="container">
                    <div class="column dt-sc-one-half first <?php echo esc_attr( $center ); ?>"><?php
                        if( !empty( $show_copyright_section ) ) :
                            echo vigil_wp_kses( $copyright );
                        endif; ?>
                    </div>
                    <div class="column dt-sc-one-half <?php echo esc_attr( $copyright_next ); ?>"><?php
                        if( $copyright_next == 'sociable' ) :
                            $sociables = get_theme_mod( 'footer-sociables', vigil_defaults( 'footer-sociables' ) );

                            echo '<ul class="dt-sc-sociable">';
								
								function vigil_social_assign($value, $key, $sociables) {									
									$stype = $value['sociable_fields_type'];
									$surl  = $value['sociable_fields_url'];

								  if( isset($stype) && !empty($sociables) ){	
									if( in_array($stype, $sociables ) ) {
										echo '<li class="'.esc_attr( $stype ).'"><a target="_blank" href="'.esc_attr( $surl ).'"></a></li>';
									}
								  }
								}

								$sociable_flds = cs_get_option( 'sociable_fields' );
								if(isset($sociable_flds)){
									array_walk( $sociable_flds, 'vigil_social_assign', $sociables );
								}
							echo '</ul>';

                        elseif( $copyright_next == 'footer-menu' ):
                            wp_nav_menu( array(
                                'container' => false,
                                'menu_id' => 'menu-footer-menu',
                                'menu_class' => 'menu-links',
                                'theme_location' => 'footer-menu',
                                'depth' => 1
                            ) );
                        endif;?>
                    </div>
                </div>
            </div>
           </footer><!-- **Footer - End** -->
    </div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php do_action( 'vigil_hook_bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>