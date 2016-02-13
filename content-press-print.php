<?php if( get_field( 'external_link') ): ?>
	<h4 class="press-title press-print"><a target="_blank"  class="press-pdf" href="<?php the_field('external_link'); ?>"><?php  the_title();  ?></a></h4>
<?php else: ?>
	<h4 class="press-title press-print"><?php  the_title();  ?></h4>
<?php endif; ?>

<?php if( get_field( 'download_pdf_file_url') ): ?>
	<a target="_blank"  class="press-pdf press-print" href="<?php the_field('download_pdf_file_url'); ?>">Download PDF</a>
<?php else: ?>
<?php endif; ?>