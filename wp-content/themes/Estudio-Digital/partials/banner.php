
<section class="pb-5">
  <div class="banner">
    <div class="main-banner">
      <div class="main-banner__content">
        <?php $args = array( 'post_type' => 'Banner');?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-banner__item">
          <div class="main-banner__text">
            <div class="main-banner__title title-general">
              <h1><?php the_title();?><?php the_content();?></h1>
            </div>
            
            <div class="boton-banner d-none d-lg-flex">
              <a class="btn btn-banner btn-secun"  href="#hacemos">Aprende más</a>
              <a class="btn btn-banner btn-general" href="#">Comienza ahora</a>
            </div>
          </div>
          <div class="main-banner__img">
            <div class="main-banner__img--content">
              <img  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
          </div>
          <div class="boton-banne d-block d-lg-none">
            <a class="btn btn-banner btn-banner-respon"  href="#">Hablemos de tu proyecto <i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
