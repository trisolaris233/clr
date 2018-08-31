<?php
/**
 * 超级简约的主题, 从https://chaoxuprime.com/blog.html扒下来的。
 *
 * @package clr
 * @author Sunshine+Ice
 * @version 1.0.0
 * @link
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 	$this->need('header.php');
?>

<article>
	<h1 id="article-title">最新文章</h1>
	<table class="postindex">
		<tbody>
		<?php while($this->next()): ?>
			<tr>
				<td><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></td>
				<td class="right"><time><?php $this->date('Y-m-d'); ?></time></td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
		<?php $this->need('sidebar.php'); ?>
</article><!-- end #main-->
</div>
</div>
</div>
</body>


