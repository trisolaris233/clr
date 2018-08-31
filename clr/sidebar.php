<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="widget">
<h1 id="article-title"><?php _e('功能') ?></h1>
    <ul>
    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
    <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
    </ul>

</div>
<div class="widget">
<h1 id="article-title"><?php _e('友情链接'); ?></h1>
    <ul>
        <?php Links_Plugin::output(); ?>
    </ul>
</div>