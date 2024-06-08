<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
    pageBanner();
?>
    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?> "><i class="fa fa-home" aria-hidden="true"></i> Events Home </a> <span class="metabox__main"><?php the_title(); ?></span>
            </p>
        </div>
        <div class="generic-content"><?php the_content(); ?></div>
        <?php
        $relatedPrograms = get_field('related_programs');

        if ($relatedPrograms) {
            echo '<hr class= "section-break">';
            echo '<h2 class="headline headline--medium">Related Programs</h2>';
            echo '<ul class="link-list min-list">';
            foreach ($relatedPrograms as $program) { ?>
                <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program) ?></a></li>
        <?php }
            echo "</ul>";
        }
        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'campus',
            'meta_key' => 'event_location',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'event_location',

                ),
            )
        ));
     }
    ?>

<?php
$relatedLocation = get_field('event_location');

if ($relatedLocation) {
    echo '<hr class= "section-break">';
    echo '<h2 class="headline headline--medium">Event Location</h2>';
    echo '<ul class="link-list min-list">';
    foreach ($relatedLocation as $location) { ?>
            <li><a href="<?php echo get_the_permalink($location); ?>"><?php echo get_the_title($location) ?></a></li>
            <?php }
        echo "</ul>";
    }
            ?>
        </div>
<?php get_footer(); ?>