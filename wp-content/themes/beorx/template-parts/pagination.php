<div class="pagination__area t-left">
    <?php

    the_posts_pagination(
        array(
            'prev_text' => __('<i class="fas fa-chevron-left"></i>', 'beorx'),
            'next_text' => __('<i class="fas fa-chevron-right"></i>', 'beorx'),
            'screen_reader_text' => '',
            'type'                => 'list'
        )
    );
    ?>
</div>