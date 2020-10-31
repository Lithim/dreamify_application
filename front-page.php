<?php 
/* Template Name: Dreamify_Application_Template */
$link = get_field('button');

get_header();?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />


<div class="container">
<div class="headerposition">
<h1 class="maintext"><?php the_field('page_title');?></h1>
<h2 class="subtext"><?php the_field('page_subtitle');?></h2>

<div class="align-button">
<div class="stylelink">
<?php if($link):?>
    <a href="<?php echo $link['url'];?>"target="<?php echo $link['target'];?>" class="buttonclass"><?php echo $link['title'];?></a>

<?php endif;?>
</div>
</div>



<h1 class="header"><?php get_footer();?></h1>