<?php
// Block Lab Example Repeater Field

if ( block_rows( 'navigation' ) ): ?>
    <div class="post-navigation">
        <ul>
    <?php while ( block_rows( 'navigation' ) ) :
        block_row( 'navigation' ); ?>
        <li><a href="<?php block_sub_field( 'ancor' ); ?>"><?php block_sub_field( 'title' ); ?></a></li>
    <?php endwhile; ?>
        </ul>
    </div>
<?php endif;
reset_block_rows( 'navigation' );