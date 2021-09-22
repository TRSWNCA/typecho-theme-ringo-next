<?php
/**
* 归档模板
*
* @package custom
*/
$this->need('header.php'); ?>
    <div class="content">
            <div class="entry archive_list">
                <h1 class="entry-title">
                    <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h1>
                <div class="post-content pl18" itemprop="articleBody">
<?php $this->widget('Widget_Metas_Category_List')->to($categorylist); ?>
                    <?php while($categorylist->next()): ?>
                        <li><a href="<?php $categorylist->permalink(); ?>" title="<?php $categorylist->name(); ?>"><?php $categorylist->name(); ?>(<?php $categorylist->count(); ?>)</a></li>
                    <?php endwhile; ?>
                </div>
            </div>    
    </div>
<?php $this->need('footer.php'); ?>
