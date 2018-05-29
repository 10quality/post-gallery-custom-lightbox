/**
 * Script that will initialize the custom lightbox.
 *
 * @author Cami Mostajo
 * @license MIT
 * @version 1.0.0
 */

(function($) { $(document).ready(function() {

    /**
     * Initialize for every .post-gallery found.
     * @since 1.0.0
     */
    $('.lightgallery').each(function() {

        /**
         * Init lightGallery with thumbnail option set to true.
         * @since 1.0.0
         *
         * @link http://sachinchoolur.github.io/lightGallery/demos/index.html
         */
        $(this).lightGallery({
            thumbnail:true
        }); 

    });

}) })(jQuery);