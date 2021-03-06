<?php
/*

      ./app/vues/template/partials/_sidebar.php

 */
?>

<div class="blog_right_sidebar">
  <aside class="single_sidebar_widget search_widget">
    <form action="#">
      <div class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Search Keyword'">
          <div class="input-group-append">
            <button class="btns" type="button"><i class="ti-search"></i></button>
          </div>
        </div>
      </div>
      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
    </form>
  </aside>

  <aside class="single_sidebar_widget post_category_widget">
    <?php  
        // Liste des catégories
        $ctrl = new \App\Controleurs\CategoriesControleur();
        $ctrl->indexAction();  
    ?>
  </aside>

  <aside class="single_sidebar_widget tag_cloud_widget">
  <?php  
        // Liste des tags
        $ctrl = new \App\Controleurs\TagsControleur();
        $ctrl->indexAction();  
  ?>
  </aside>

  <aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    <form action="newsletter/add" method='post'>
      <div class="form-group">
        <input name="email" type="email" class="form-control" onfocus="this.placeholder = ''"
          onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
      </div>
      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
    </form>
  </aside>
</div>