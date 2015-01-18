<section class="navigation-wrapper" id="main-menu-container">
	<div class="section-width">
		<div class="inner">
			<a href="#top">
				<img src="<?php bloginfo('template_directory'); ?>/img/union-o.png" class="union-logo" alt="Union">
			</a>
			
			<?php wp_nav_menu( array(
				'menu'            => 'Primary navigation', 
				'container'       => 'div',
				'container_class' => 'primary-navigation', 
				//'container_id'    => 'menuContainer',
				//'menu_id'         => 'menu',
				//'theme_location'  => 'Primary Menu',
				//'menu_class'      => 'four coloumns', 
				//'echo'            => true,
				//'fallback_cb'     => 'wp_page_menu',
				//'before'          => ,
				//'after'           => ,
				//'link_before'     => ,
				//'link_after'      => ,
				//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				//'depth'           => 0,
				//'walker'          =>  
			)); ?>

			<div id="nav-toggle">
				<a href="#projects">
					<span>
					</span>
				</a>
			</div>


			<?php wp_nav_menu( array(
				'menu'            => 'Primary navigation', 
				'container'       => 'div',
				'container_class' => 'mobile-navigation', 
				//'container_id'    => 'menuContainer',
				//'menu_id'         => 'menu',
				//'theme_location'  => 'Primary Menu',
				//'menu_class'      => 'four coloumns', 
				//'echo'            => true,
				//'fallback_cb'     => 'wp_page_menu',
				//'before'          => ,
				//'after'           => ,
				//'link_before'     => ,
				//'link_after'      => ,
				//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				//'depth'           => 0,
				//'walker'          =>  
			)); ?>

		</div>
	</div>
</section>
