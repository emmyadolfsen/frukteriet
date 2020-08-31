
<?php
get_header();
?>

<section class="sidebar">
    <div class="insta_max_width">
    <h2>Följ oss på instagram</h2>
    <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); 
        the_content();

	} // end while
} // end if
?>
    </div>
</section>

<?php
get_footer();
?>
