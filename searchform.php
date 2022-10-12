<?php
/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="input-group mb-3">
  <div class="input-group">
    <input type="search" class="form-control" placeholder="Pesquisar" aria-label="pesquisar" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
    <input type="submit" class="input-pesquisar" value="">
  </div>
</form>