<?php
get_header(); ?>

<section id="page_main">
	
	<div id="main_img" class="list">
		
		<div class="score_05 list-mv08"></div>
		
	</div>
	
</section>

<div id="container">
	
	<section id="c_1" class="paragraph">
		
		<h1>
			<img src="<?php bloginfo('template_url'); ?>/images/common/news_h.png?<?php echo date("YmdHis");?>" alt="News" title="News">
		</h1>
		
		<div class="news_w">
			
			<div class="archives">
				
				<div class="sticky">
					
					<div class="cat_l">
	
						<?php $children = get_category_children($cat); ?>
						<?php if($children) : ?>
 
						<?php
						$cats_id = get_category_by_slug($category_name)->term_id;
						$args = array('orderby' => 'name', 'order' => 'ASC','child_of' => $cats_id,'hide_empty'=>'0' );
						$categories = get_categories($args); ?>
 
						<h3>
							<img src="<?php bloginfo('template_url'); ?>/images/common/category_h.png?<?php echo date("YmdHis");?>" alt="Category" title="Category">
						</h3>
						<ul>
						<?php foreach($categories as $category){
						   echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . $category->name . '" ' . '>' . $category->name . '</a></li>';
						} ?>
						</ul>
 
						<?php endif; ?>
					
					</div><!--cat_l-->
			
			
					<div class="years_l">
				
						<h3>
							<img src="<?php bloginfo('template_url'); ?>/images/common/byyears_h.png?<?php echo date("YmdHis");?>" alt="By Years" title="By Years">
						</h3>
			
						<?php // 年別アーカイブリストを表示
						  $year=NULL; // 年の初期化
						  $args = array( // クエリの作成
						    'post_type' => 'post', // 投稿タイプの指定
						    'orderby' => 'date', // 日付順で表示
						    'posts_per_page' => -1 // すべての投稿を表示
						  );
						  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
						    echo '<ul>';
						    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
						      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
						        $year = get_the_date('Y'); // 年の取得
						        echo '<li><a href="'.home_url( '/', 'http' ).'date/'.$year.'?cat=14">'.$year.'</a></li>'; // 年別アーカイブリストの表示
						      }
						    endwhile; // ループの終了
						    echo '</ul>';
						    wp_reset_postdata(); // クエリのリセット
						  }
						?>
				
					</div><!--years_l-->
					
				</div><!--sticky-->
				
			</div><!--archives-->
		
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

<div id="pagenavi" class="width_1060">
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>

<?php get_footer(); ?>
