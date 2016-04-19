<?php
/*
 * contenu.php
 *
 * Le template defaut pour afficher le contenu
 *
 */
?>

<div class="<?php post_class('post col-md-6'); ?>" id="post-<?php the_ID();?>">
    <?php if (has_post_thumbnail()):?>
        <a href="<?php the_permalink() ?>" title="<?php  the_title_attribute();?>" class="post-thumbnail">
            <?php  the_post_thumbnail('full',array('class'=>'img-responsive') )?>

        </a>
    <?php endif; ?>


    <article class="post-excerpt">
        <header>

            <?php
            echo '<a href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>';

            // Recupurer les infos meta
            wordpress_init_meta()
            ?>
        </header>
        <?php  the_content(__('Continuer','wordpress-init')); ?>
    </article>
</div>
