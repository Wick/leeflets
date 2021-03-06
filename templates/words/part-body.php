<div id="words">        
    <div class="inside">
        <h2 data-lf-edit="page"><?php $this->content( 'page', 'title' ); ?></h2>
        
        <div class="intro" data-lf-edit="page">
            <?php
            if ( $image = $this->get_image( 'square@2x', 'page', 'photo' ) ) {
                echo $image;
            }
            else {
                printf( '<img src="%s" alt="" />', $this->get_template_url( 'images/samueljacksonbeer-bg.jpg' ) );
            }
            ?>
            
            <?php $this->content( 'page', 'intro-paragraph' ); ?>
        </div>

        <div data-lf-edit="movies" class="movies">
            <?php $this->part( 'movies' ); ?>
        </div>
    
        <ul data-lf-edit="left-button right-button" class="buttons">
            <li>
                <a class="small black button left" href="<?php $this->content( 'left-button', 'url' ); ?>" title="<?php $this->content( 'left-button', 'text' ); ?>"><?php $this->content( 'left-button', 'text' ); ?></a>
                <a class="small charcoal button right" href="<?php $this->content( 'right-button', 'url' ); ?>" title="<?php $this->content( 'right-button', 'text' ); ?>"><?php $this->content( 'right-button', 'text' ); ?></a>
            </li>
        </ul>
    </div>
</div>
