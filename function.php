<?php

add_action('wp_dashboard_setup', 'cwp_allpay_dashboard_widget');
 
function cwp_allpay_dashboard_widget() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'All Pay 歐付寶', 'cwp_allpay_widget');
}

function cwp_allpay_widget() {
echo '官方網站: <a href="http://www.allpay.com.tw/" target="_blank">www.allpay.com.tw</a><br>
廠商後台: <a href="https://vendor.allpay.com.tw/" target="_blank">vendor.allpay.com.tw</a>';
}

?>
