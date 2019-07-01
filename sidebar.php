<?php 
if (is_single()) {
    get_sidebar('single');
}
elseif (is_category()) {
    get_sidebar('category');
}
else {
    get_sidebar();
}
 ?>