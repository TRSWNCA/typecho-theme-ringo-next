<?php
/**
* AI
* @package custom  
*/

$this->need('header.php'); ?>
<div class="col-12">
	<?php $this->widget('Widget_Archive@index','type=category', 'mid=1')->to($categorylist); ?>
        <?php while($categorylist->next()): ?>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $categorylist->permalink() ?>"><?php $categorylist->title() ?></a></h2>
<ul class="post-meta">
				<li><time datetime="<?php $categorylist->date('c'); ?>" itemprop="datePublished"><?php $categorylist->date(); ?></time></li>
				<li><?php $categorylist->category(','); ?></li>
				<li itemprop="interactionCount"><a href="<?php $categorylist->permalink() ?>#comments"><?php $categorylist->commentsNum('0 comment', '1 comment', '%d comments'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
				<?php $categorylist->content('READ MORE'); ?>
            </div>
    </article>
                    <?php endwhile; ?>
<div>
<?php $this->need('footer.php'); ?>
