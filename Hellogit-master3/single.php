<?php get_header(); ?>

<!-- カテゴリーの有無チェック -->
<?php if(has_category() ): ?>
<?php echo get_the_category_list( ' ' ); ?>
<?php endif; ?>

<!-- 投稿日 -->
<span class="article-date">
  <time
  datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
  <?php echo get_the_date(); ?>
  </time>
</span>
<!-- タイトルの取得 -->
<h1><?php the_title(); ?></h1>

<!-- 本文 -->
<!-- ↓現バージョンでは動かない？ -->
<?php the_content(); ?>
<!-- 本文の表示 -->
<?php
$this_content= wpautop($post->post_content);
echo $this_content;
?>

<!-- サムネイル -->	
<?php if( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail( 'large' ); ?>
<?php endif; ?>

<!-- タグ -->
<?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'); ?>
<?php the_tags('',',',''); ?>

<!-- 前の記事 -->
<?php previous_post_link('%link', '%title'); ?>
<!-- 次の記事 -->
<?php next_post_link('%link', '%title'); ?>

<? get_footer(); ?>