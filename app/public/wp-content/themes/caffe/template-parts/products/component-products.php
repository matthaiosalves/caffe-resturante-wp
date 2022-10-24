<?php
  $args = array(
    'post_type'              => array( 'products' ), //Nome do Slug
    'post_status'            => array( 'publish' ), //Status da postagem
    'posts_per_page'         => '-1', // Posts por página
    'post__not_in'           => array($post->ID), 
  );

  $query = new WP_Query( $args );
?>

<section class="section--products">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 boxTitle mb-5">
        <div class="title">Nossos cafés</div>
      </div>
    </div>

    <div class="row">
      <?php if ( $query->have_posts() ): ?>
        <?php while ($query->have_posts() ) : $query->the_post(); ?>
          <?php $getCategories = get_the_category($query->ID); ?>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-5">
            <a href="<?php the_permalink(); ?>" class="card">
              <div class="boxImage">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              </div>
              <div class="content">
                <div class="boxTag">
                  <?php foreach ($getCategories as $category): ?>
                    <div class="tag">
                      <?php echo $category->name; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="title"><?php echo the_title(); ?></div>
                <div class="description"><?php echo the_content(); ?></div>

                <?php $price = get_field('price'); ?>
                  <?php if($price): ?>
                    <div class="price">
                      <span>R$</span> <?php echo $price; ?>
                    </div>
                    <?php else: ?>
                      <div class="price">
                        Sem preço
                      </div>
                  <?php endif; ?>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>