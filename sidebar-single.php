	<div class="category_sidebar">
	<div class="list_header">
		<div class="list_title">
                <?php
  $category = get_the_category();
  $cat_parent = get_cat_name($category[0]->category_parent);
 if (!empty($cat_parent)) {
  echo $cat_parent;
 } else {
  echo $category[0]->cat_name;
 }
?>
        </div>
	</div>
	<div class="list_content" style="border:none;background:none;font-size:16px;">
<?php
    if(is_category() || is_single())
    {
        if(get_category_children(get_category_root_id(the_category_ID(false)))!= "" )
        {
            echo '<ul>';
            echo wp_list_categories("child_of=".get_category_root_id(the_category_ID(false)). "&depth=0&hide_empty=0&title_li=&orderby=id&order=ASC");
            echo '</ul>';
        }
    }
?>
	</div>
</div>