				<div id="sidebar1" class="sidebar threecol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert help">
							<p>Please activate some Widgets.</p>
						</div>

					<?php endif; ?>

					<div>
						<a href="http://affiliates.mozilla.org/link/banner/27550"><img width="125" height="125" src="http://affiliates.mozilla.org/media/uploads/banners/f5eeeddc214ed8ef15e48bc80e1f53b0da4f0574.png" alt="Download: Fast, Fun, Awesome" /></a>
					</div>

				</div>