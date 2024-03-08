<?php

if ( block_rows( 'table-row' ) ): ?>
<div class="post-table">
    <div class="post-table-head">
        <ul>
            <li><span class="blue">Unique</span> – Unique Kodjin feature</li>
            <li><span class="orange">FHIR</span> – HL7 FHIR feature</li>
        </ul>
    </div>
    <div class="table_features">

        <?php while ( block_rows( 'table-row' ) ) :
            block_row( 'table-row' ); ?>



            <div class="row">
                <div>
                    <h4><?php block_sub_field( 'title' ); ?></h4>
                </div>
                <div class="subrow">
                    <p><?php block_sub_field( 'description' ); ?></p>
                    <div class="tag">
                        <span class="<?php if (block_sub_value( 'tag' ) == 'Unique') { ?>blue<?php } else { ?>orange<?php } ?>"><?php block_sub_field( 'tag' ); ?></span>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>


    </div>
</div>
<?php endif;
reset_block_rows( 'table-row' ); ?>