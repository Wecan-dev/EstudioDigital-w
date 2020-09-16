<section>
  <div class="hacemos">
    <div class="main-hacemos">
      <div class="main-hacemos__content">
        <div class="subtitle-general">
          <p>¿Qué hacemos?</p>
        </div>
        <div class="hacemos-content__text">
          <p>Ponemos al alcance de su negocio la misma tecnología y la inteligencia digital que usan las grandes empresas para triunfar en Internet.</p>
        </div>
        <div class="hacemos-content__cards">
          <?php $args = array( 'post_type' => 'Hacemos');?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-hacemos__content">
            <div class="card-hacemos__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="card-hacemos__text">
              <div class="card-hacemos__text--title">
                <?php the_title();?>
              </div>
              <div class="card-hacemos__text--text">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
    
        </div>
      </div>
    </div>
  </div>
</section>