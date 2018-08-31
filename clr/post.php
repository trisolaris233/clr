<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article>
    <h1 id="article-title"><?php $this->title() ?></h1><br>
    <ul id="postinfo">
        <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
        <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
    </ul>
    <div id="postinfo">
        <?php $this->content(); ?>
    </div><br>
    <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    <div>
        <?php $this->need('comments.php'); ?>
    </div>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>

    <?php $this->need('footer.php'); ?>
</article>

