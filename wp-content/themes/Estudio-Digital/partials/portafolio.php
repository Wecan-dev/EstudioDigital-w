<section>
  <div class="portafolio">
    <div class="main-portafolio padding-rl">
      <div class="subtitle-general">
        <p>Portafolio Web</p>
      </div>
      <div class="subtitle-text__clientes">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </div>
      <div class="main-portafolio__content d-none d-lg-flex">
        <?php $args = array( 'post_type' => 'Portafolio');?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="content-portafolio__items">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          <a href="#" class="btn btn-portafolio"><?php the_title(); ?></a>
          <a href="#" class="btn btn-portafolio-s">Ver más</a>
        </div>
        <?php endwhile; ?>
        
      </div>
    </div>
  </div>
</section>