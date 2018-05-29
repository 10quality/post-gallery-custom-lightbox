<?php
/**
 * Gallery view/template.
 * Customization.
 *
 * @link http://sachinchoolur.github.io/lightGallery/demos/videos.html
 *
 * @author Cami Mostajo
 * @license MIT
 * @version 1.0.0
 */ 
?>
<style type="text/css">
.post-gallery a {position: relative; display: inline-flex;}
.post-gallery .is-video:before {
    content: "\f236"; position: absolute; font-family: Dashicons; font-size: 50px;
    color: #fff; align-self: center; left: calc(50% - 25px); text-shadow: 0 0 4px #000;
}
.post-gallery .is-video:hover:before {color: rgba(255,255,255,0.8); text-shadow: none;}
</style>
<div class="lightgallery">
    <?php foreach ( $post->gallery as $attachment ) : ?>
        <a href="<?php echo $attachment->is_video ? $attachment->video_url : $attachment->url ?>"
            class="<?php if ( $attachment->is_video ) : ?>is-video<?php endif ?>"
            title="<?php echo $attachment->caption ?>"
            <?php if ( $attachment->is_video ) : ?>
                data-poster="<?= $attachment->url ?>"
            <?php endif ?>
        >
            <img src="<?php echo $attachment->thumb_url ? $attachment->thumb_url : $attachment->no_thumb_url ?>"
                alt="<?php echo $attachment->alt ?>"
            />
        </a>
    <?php endforeach ?>
</div>