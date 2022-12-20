<?php 

	/**
	 * Top Features virsion 2
     * Saurce: https://github.com/gudh/ihover
	 */

    $exhibition = iro_opt('exhibition');

?>

<div class="top-text">
    <i class="fa fa-folder-open" aria-hidden="true"></i><font style="color:#F00; font-weight:bold;">文章</font>:<?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish; ?>篇&nbsp;&nbsp;
    <i class="fa fa-eye" aria-hidden="true"></i><font style="color:#F00; font-weight:bold;">阅读</font>:<?php echo total_views(); ?>次&nbsp;&nbsp;
    <i class="fa fa-comments" aria-hidden="true"></i><font style="color:#F00; font-weight:bold;">评论</font>:<?php echo comment_users($postid, 1); ?>次&nbsp;&nbsp;
    <i class="fa fa-check" aria-hidden="true"></i><font style="color:#F00; font-weight:bold;">最后更新</font>:<?php the_modified_time('Y年n月j日'); ?>&nbsp;&nbsp;
    <i class="fa fa-power-off" aria-hidden="true"></i><font style="color:#F00; font-weight:bold;">运行</font>:<?php echo floor((time()-strtotime("2022-10-20"))/86400);?>天
</div>

<div class="top-feature-row">
    <h1 class="fes-title"> <i class="<?php echo iro_opt('exhibition_area_icon', 'fa fa-laptop'); ?>" aria-hidden="true"></i> <br> <?php echo iro_opt('exhibition_area_title', '展示'); ?> </h1>
    <div class="top-feature-v2">
        <div class="the-feature square from_left_and_right">
            <a href="<?php echo $exhibition['link1']; ?>" target="_blank">
                <div class="img"><img src="<?php echo $exhibition['img1']; ?>"></div>
                <div class="info">
                    <h3><?php echo $exhibition['title1']; ?></h3>
                    <p><?php echo $exhibition['description1']; ?></p>
                </div>
            </a>
        </div>
    </div>
    <div class="top-feature-v2">
        <div class="the-feature square from_left_and_right">
            <a href="<?php echo $exhibition['link2']; ?>" target="_blank">
                <div class="img"><img src="<?php echo $exhibition['img2']; ?>"></div>
                <div class="info">
                    <h3><?php echo $exhibition['title2']; ?></h3>
                    <p><?php echo $exhibition['description2']; ?></p>
                </div>
            </a>
        </div>
    </div>
    <div class="top-feature-v2">
        <div class="the-feature square from_left_and_right">
            <a href="<?php echo $exhibition['link3']; ?>" target="_blank">
                <div class="img"><img src="<?php echo $exhibition['img3']; ?>"></div>
                <div class="info">
                    <h3><?php echo $exhibition['title3']; ?></h3>
                    <p><?php echo $exhibition['description3']; ?></p>
                </div>
            </a>
        </div>
    </div>
</div>
