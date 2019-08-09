<?php
	/*
		Template Name: Modèle: Refonte Du Site
	*/
?>

<style>

	body{

		margin: 0;

	}

	article{

		height: 100vh;
		width: 100vw;

	}

	.parallaxContainer{

		height: 100vh !important;

	}

	.parallaxImg{

		width: 100vw;
		height: 100vh;
		position: relative;

	}

	.parallaxOverlay{

		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-flow: column;
		background-color: rgba(50, 65, 71, 0.5);
	
	}

	.infoContainer h1{

		color: #fff;;
		text-align: center;
		font-family: 'helvetica';

	}

	.btnContainer{

		display: flex;
		flex-flow: row nowrap;
		justify-content: center;
		align-items: center;
		margin: 2vh 0;

	}

	.btn{
	
		margin: 0;
		font-size: 16px;
		padding: 15px 30px;
		font-family: 'helvetica';
		text-transform: uppercase;
		text-decoration: none;
		width: auto;

	}

	.whiteFlatBtn{

		color: #324147;
		background-color: #fff;
		box-shadow: 0px 10px 40px rgba(27, 73, 140, 0.35), inset 0px 0px 0px rgba(24, 66, 127, 0.35);
		  
	}

	.whiteFlatBtn:hover{

		background-color: #fafafa;
		box-shadow: 0px 0px 0px rgba(26, 70, 135, 0.35), inset 0px 0px 0px rgba(24, 65, 124, 0.35);
		transition: all .2s ease-in-out;
		-webkit-transition: all .2s ease-in-out; /* Chrome Browser */
		-moz-transition: all .2s ease-in-out; /* Mozilla Firefox Browser */
		-o-transition: all .2s ease-in-out; /* Opera Browser */
		-ms-transition: all .2s ease-in-out; /* Internet Explorer Browser */

	}

</style>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<article class="article-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="parallaxImg">
		<div class="parallaxOverlay">
			<div class="infoContainer">
				<h1>Le site est en cours de développement, veuillez-vous rendre à l'adresse suivante:</h1>
				<span class="btnContainer"><a class="btn whiteFlatBtn" href="http://www.edvo-addictions.fr/">Edvo addiction</a></span>
			</div>
		</div>
		<?php img_parallax() ?>
	</header>
</article>

<?php endwhile; ?>

<?php else : ?>

<article class="container column">
	<div class="notFound">
		<h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
		<div class="searchForm"><?php get_search_form(); ?></div>
	</div>
</article>

<?php endif; ?>

