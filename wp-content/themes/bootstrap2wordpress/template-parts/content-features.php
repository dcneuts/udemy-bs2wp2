<?php
// Advanced Custom Fields

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');
?>

<!-- COURSE FEATURES -->
<section id="course-features">
    <div class="container">
        <div class="section-header">

            <! -- If user uploaded image that's not required -->
            <?php if (!empty($features_section_image)) : ?>

                <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo
                $features_section_image['alt']; ?>">

            <?php endif; ?>

            <h2><?php echo $features_section_title; ?></h2>
            <!-- If user added body text in custom fields -->
            <?php if (!empty($features_section_body)) : ?>
                <p class="lead"><?php echo $features_section_body; ?></p>
            <?php endif; ?>
        </div><!-- section-header -->

        <div class="row">

            <!-- Loop using WP query using custom feature post type -->
            <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC')
            ); ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <!-- Look to grab all icons and titles corresponding to post_type => course_feature above -->

                <div class="col-sm-2">
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>

        </div><!-- row -->

    </div><!-- container -->
</section><!-- course-features -->