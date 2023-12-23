<?php
// <Internal Doc Start>
/*
*
* @description: Use with matching Html snippet
* @tags: overlays
* @group: overlays
* @name: CSS-background screened and overlayed with bright text
* @type: css
* @status: draft
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-23 03:55:09
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
body {
	overflow: hidden;
}

hero {
	#inner_hero_post_thumb {
		//padding: 20px 0;
		background-position: center;
		background-size: cover;
		position: relative;
		background-image: url(http://livecanvas-prod.local/wp-content/uploads/2023/12/map-dfw.webp);
		height: 100vh;

		.dark_overlay {
			position: relative;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.65);
			height: 100vh;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;

			.container {
				.header-txt {
					color: white;

					h1 {
						font-size: 40px;
						color: $white;
						text-transform: uppercase;
					}

					h3 {
						font-size: 24px;
						color: $white;
						font-weight: 300;
					}

					p {
						font-size: 1rem;
						font-weight: 300;

						strong {
							font-weight: 700;
						}
					}
				}
			}
		}
	}
}