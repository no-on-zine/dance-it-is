<?php
get_header(); ?>

<section id="page_main">
	
	<div id="main_img" class="list">
		
		<div class="score_05 list-mv08"></div>
		
	</div>
	
</section>

<div id="container">
	
	<section id="c_1" class="paragraph">
		
		
		<div class="news_w">
			
		
			<div class="news_l list">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php
			  $category = get_the_category();
			  $cat_id   = $category[0]->cat_ID;
			  $cat_name = $category[0]->cat_name;
			  $cat_slug = $category[0]->category_nicename;
			?>
		
		  <div class="post list-mv07">
		
				<div class="post_h">
					<div class="<?php echo $cat_slug; ?> label">
						<?php the_category(' '); ?>
					</div>
		
				</div>
		
				<a class="post_t" href="<?php the_permalink() ?>">
					<div class="date_f">
						<?php
						$date = get_field('date_f'); 
						if($date){ ?>
							<?php echo $date; ?>
						<?php } ?>
					</div>
			
					<div class="post_name">
						<?php the_title(); ?>
					</div>
			
					<div class="comment_f">
						<?php
						$comment = get_field('comment_f'); 
						if($comment){ ?>
							<?php echo $comment; ?>
							<?php } ?>
					</div>
				</a>
			</div>
	
	<?php endwhile; else: ?>
  <p class="no_post">記事はありません。</p>
	
	<?php endif; ?>
	
			</div>
		</div>
	
</section>


<?php get_footer(); ?>
