            <?php get_header(); ?>
            <div class="content-wrapper">
                <div class="story-wrapper">
                    <img src="<?php bloginfo("template_url"); ?>/images/about.png" alt="Our Story" class="story__img">
                    <div class="article-wrapper">
                        <article class="post-content" id="sql-text">
                            <h1><?php  echo get_post_meta($post->ID, 'h1', true); ?></h1>
                            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                        </article> 
                        <div class="for-h"></div>                  
                        <div class="main-text"></div>
                        <a href="#" class="more">Learn more</a>
                    </div>
                </div>            
                <div class="testimonials-container">
                    <div class="testimonials-wrapper">
                        <div class="quots">“</div>
                        <div class="text__slider">
                            <div class="text__slide">
                                <p class="testimonial">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                <p class="person__name">JANE GALADRIEL</p>
                                <p class="person__position">CEO TENGKUREP</p>
                            </div>
                            <div class="text__slide">
                                <p class="testimonial">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                <p class="person__name">JACK RUSSEL</p>
                                <p class="person__position">PM TIPTOP</p>
                            </div>
                            <div class="text__slide">
                                <p class="testimonial">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                <p class="person__name">MIRA GALAHER</p>
                                <p class="person__position">DESIGNER LIMITcO</p>
                            </div>
                            <div class="text__slide">
                                <p class="testimonial">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                <p class="person__name">JIMMY LAMZAKY</p>
                                <p class="person__position">SEO LEAD COCONUT</p>
                            </div>
                        </div>
                        <div class="avatar__slider">
                            <div class="avatar__slide">
                                <img src="<?php bloginfo("template_url"); ?>/images/testimonials/people_1.png" alt="JANE GALADRIEL" class="avatar__photo">
                            </div>
                            <div class="avatar__slide">
                                <img src="<?php bloginfo("template_url"); ?>/images/testimonials/people_2.png" alt="JACK RUSSEL" class="avatar__photo">
                            </div><div class="avatar__slide">
                                <img src="<?php bloginfo("template_url"); ?>/images/testimonials/people_3.png" alt="MIRA GALAHER" class="avatar__photo">
                            </div><div class="avatar__slide">
                                <img src="<?php bloginfo("template_url"); ?>/images/testimonials/people_4.png" alt="JIMMY LAMZAKY" class="avatar__photo">
                            </div>
                        </div>
                    </div>
                </div>  
<?php get_footer(); ?>