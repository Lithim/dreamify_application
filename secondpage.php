<?php /* Template Name: Dreamify_Application_Template 2 */

get_header();?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

<div class="headerparent">
<header class="header-align">
<h3 class="thetitle"><?php the_field('section_title');?></h3>
<h4 class="content_styling"><?php the_field('section_content');?></h4>
<div class="align-image">
<?php if(have_rows('image_text')):
while ( have_rows('image_text')) : the_row();

$section_button_link = get_sub_field('section_button_link');
$section_image = get_sub_field('section_image');


echo "<a href='" . $section_button_link['url']."' target='". $section_button_link['target'] . "' class='buttonclass2'>". $section_button_link['title']."</a>";
echo "<img src='" . $section_image['url'] . "' class='image'>";



endwhile;
endif;
?>

   
  

</header>
</div>
</div>


<h1 class="header"><?php get_footer();?></h1>