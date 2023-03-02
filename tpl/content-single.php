<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<?php if (iro_opt('article_auto_toc', 'true')): ?>
<div class="has-toc have-toc"></div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(should_show_title()) { ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="entry-census">
			<i class="fa-solid fa-pen-nib"></i><?php echo poi_time_since(strtotime($post->post_date)); ?>&nbsp;&nbsp;
			<i class="fa-sharp fa-regular fa-eye"></i><?php echo get_post_views(get_the_ID()).' '. _n('View','Views',get_post_views(get_the_ID()),'sakurairo')/*次阅读*/?>&nbsp;&nbsp;
			<i class="fa-sharp fa-solid fa-location-dot"></i><?php echo GetPostGeoLocation()?>
		</p>
		<hr>
	</header><!-- .entry-header -->
	<?php } ?>
	<!--<div class="toc-entry-content"><!-- 套嵌目录使用（主要为了支援评论）-->
	<div class="entry-content">
	<?php content_expiration_warning($content); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ondemand' ),
				'after'  => '</div>',
			) );
		?>
		<!--<div class="oshimai"></div>-->
		<!--<h2 style="opacity:0;max-height:0;margin:0">Comments</h2>--><!-- 评论跳转标记 -->
	</div><!-- .entry-content -->
	<?php the_reward(); ?>
	<footer class="post-footer">
	<?php $author_id=$post->post_author; ?>
	<div class="post-copyright"><div class="post-copyright__title"><span class="post-copyright-info"><h>  <?php the_title(); ?></h></span></div>
	<div class="post-copyright__type"><span class="post-copyright-info"><a href="<?php echo get_permalink()?>"><?php echo get_permalink()?></a></span></div>
	<div class="post-copyright-m"><div class="post-copyright-m-info"><div class="post-copyright-a"><h>作者</h><div class="post-copyright-cc-info"><h><?php the_author_meta( 'user_nicename' , $author_id ); ?> </h></div></div>
	<div class="post-copyright-c"><h>发布于</h><div class="post-copyright-cc-info"><h><?php the_time('Y-n-d'); ?></h></div></div>
	<div class="post-copyright-u"><h>更新于</h><div class="post-copyright-cc-info"><h><?php the_modified_time('Y-n-d'); ?></h></div></div>
	<div class="post-copyright-c"><h>许可协议</h><div class="post-copyright-cc-info"><a class="icon" rel="noopener" target="_blank" title="Creative Commons" href="https://creativecommons.org/"><i class="fa fa-creative-commons" aria-hidden="true"></i> </a><a rel="noopener" target="_blank" title="CC BY-NC-SA 4.0" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a></div></div></div>

	<div class="post-tags">
		<?php if ( has_tag() ) { echo '<i class="iconfont icon-tags"></i> '; the_tags('', ' ', ' ');}?>
	</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
