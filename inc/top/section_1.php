<section class="sect_1" id="sect_1">
    <div class="sect_1__wrapper">
        <img class="bg_grey" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/bg_grey.png" alt="">
        <div class="l-wrap">
            <p class="title">イベント情報</p>
            <p class="sub">EVENT</p>

            <div class="sched_cont slider">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'category_name' => 'EVENT',
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="sched_cont__item">
                            <?php the_post_thumbnail(); ?>
                            <p class="desc"><?php echo the_title(); ?></p>
                            <?php echo the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>