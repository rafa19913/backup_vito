<?php
/**
 * The template part for displaying services
 *
 * @package digihigh-lite
 * @subpackage digihigh-lite
 * @since digihigh-lite 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article class="page-box grid">
    <div class="box-image"> 
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>        
    </div>
    <div class="new-text">          
      <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( digihigh_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('digihigh_lite_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('digihigh_lite_post_suffix_option','...') ); ?></p></div>
      <?php if( get_theme_mod('digihigh_lite_button_text','Read More') != ''){ ?>
        <div class="content-bttn">
          <div class="second-border">
            <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'digihigh-lite' ); ?>"><?php echo esc_html(get_theme_mod('digihigh_lite_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digihigh_lite_button_text','Read More'));?></span></a>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="clearfix"></div>
  </article>
</div>