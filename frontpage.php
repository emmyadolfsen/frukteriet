<?php
/* 
Template Name: Startsida
*/
?>
<?php
get_header();
?>

<div class="bubble">
    <img src="<?= get_template_directory_uri(); ?>/bilder/bubble.png" alt="Bubbla">
</div>
<div class="bubble1">
    <img src="<?= get_template_directory_uri(); ?>/bilder/bubble.png" alt="Bubbla">
</div>
<div class="bubble2">
    <img src="<?= get_template_directory_uri(); ?>/bilder/bubble.png" alt="Bubbla">
</div>
<div class="absolute-text pulsate">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        } // end while
    } // end if
    ?>

</div>

    

<?php
get_footer();
?>