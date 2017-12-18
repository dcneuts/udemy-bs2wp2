<!-- TESTIMONIALS -->
<section id="kudos">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>What People Are Saying About Brad</h2>

                <!-- Loop using WP query using custom feature post type -->
                <?php $loop = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' =>
                    'ASC')); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>


                    <!-- Grab the thumbnail for this column dynamically -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(200, 200)); // resize in case user uploads too large image
                            }
                            ?>
                        </div><!-- end col -->

                              <!-- Grab the content for this column dynamically -->
                        <div class="col-sm-8">
                            <blockquote>
                                <?php the_content(); ?> <!-- Because text is in comment box in custom styles -->
                                <cite>&mdash; <?php the_title(); ?></cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->
                <?php endwhile; wp_reset_query(); ?>

            </div><!-- end column -->
        </div><!-- row -->
    </div><!-- container -->

</section><!-- kudos -->