<?php
// Advanced Custom Fields

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');
?>

<!-- PROJECT FEATURES -->
<section id="project-features">
    <div class="container">

        <h2><?php echo $project_feature_title; ?></h2>
        <p class="lead"><?php echo $project_feature_body; ?></p>

        <div class="row">

            <!-- Loop using WP query using custom feature post type -->
            <?php $loop = new WP_Query(array('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' =>
                    'ASC')
            ); ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <!-- Look to grab all icons and titles corresponding to post_type => course_feature above -->

                <div class="col-sm-4">

                    <!-- If user inserts image in backend custom fields, then display that here -->
                    <!-- Pulls from project_feature defined on line 206 -->
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>

                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>

        </div><!-- row -->

    </div><!-- container -->
</section><!-- project-features -->