<?php get_header(); ?>
            <div class="content-wrapper">
                <div class="front__reg-block">
                    <span data-link="cG0tcmVn" class="front__reg-button">Регистрация</span>
                    <div class="prise">
                        <span class="prise__link">К ПЕРВОМУ ДЕПОЗИТУ</span>
                        <span class="prise__percent">+100%</span>
                        <span class="prise__text">БОНУС</span>
                        <span data-link="cG0tcmVn" class="prise__button">ПОЛУЧИТЬ БОНУС</span>
                    </div>
                    <div class="prise">
                        <span class="prise__link">К ПЕРВОЙ СТАВКЕ</span>
                        <span class="prise__percent">+1000₽</span>
                        <span class="prise__text">БОНУС</span>
                        <span data-link="cG0tcmVn" class="prise__button">ПОЛУЧИТЬ БОНУС</span>
                    </div>
                </div>
                <div class="front__text-wrapper">
                    <div class="front-page">             
                        <article class="post-content" id="sql-text">
                        <h1><?php  echo get_post_meta($post->ID, 'h1', true); ?></h1>
                            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                        </article> 
                        <div class="for-h"></div>                  
                        <div class="main-text"></div>
                    </div>
                </div>
                
            </div>
<?php get_footer(); ?>