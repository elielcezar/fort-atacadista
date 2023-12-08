<form method="get" role="search" class="search-form" action="<?php echo home_url(); ?>" title="<?php echo esc_attr_x( 'Type and press Enter to search.', 'Search form mouse hover title.', 'fl-automator' ); ?>">
  <input type="text" class="search-field" name="s" class="form-control" placeholder="">
  <button type="submit" class="search-submit" value="<?php _e( 'Submit', 'fl-automator'); ?>">Buscar</button>
</form>