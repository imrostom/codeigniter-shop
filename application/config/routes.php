<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Front End Route
$route['default_controller']   = 'web';
$route['404_override']         = 'web/error';
$route['translate_uri_dashes'] = false;

//Web Route

$route['product']             = 'web/product';
$route['single/(:num)']       = 'web/single/$1';
$route['contact']             = 'web/contact';
$route['cart']                = 'web/cart';
$route['save/cart']           = 'web/save_cart';
$route['update/cart']         = 'web/update_cart';
$route['remove/cart']         = 'web/remove_cart';
$route['user_form']           = 'web/user_form';
$route['get/category/(:num)'] = 'web/category_post/$1';

$route['search']              = 'web/search';
$route['customer/register']   = 'web/customer_register';
$route['customer/login']      = 'web/customer_login';
$route['customer/logout']     = 'web/logout';
$route['customer/logincheck'] = 'web/customer_logincheck';
$route['customer/save']       = 'web/customer_save';
$route['register/success']    = 'web/register_success';

$route['customer/shipping/login']    = 'web/customer_shipping_login';
$route['customer/shipping/register'] = 'web/customer_shipping_register';

$route['customer/shipping']              = 'web/customer_shipping';
$route['customer/save/shipping/address'] = 'web/save_shipping_address';
$route['checkout']                       = 'web/checkout';
$route['payment']                        = 'web/payment';
$route['save/order']                     = 'web/save_order';
$route['check_email']                    = 'web/check_email';

//Admin Panel Route
$route['dashboard']            = 'admin/index';
$route['manage/order']         = 'manageorder/manage_order';
$route['order/details/(:num)'] = 'manageorder/order_details/$1';

//Category  Route List
$route['add/category']                = 'category/add_category';
$route['manage/category']             = 'category/manage_category';
$route['save/category']               = 'category/save_category';
$route['delete/category/(:num)']      = 'category/delete_category/$1';
$route['edit/category/(:num)']        = 'category/edit_category/$1';
$route['update/category/(:num)']      = 'category/update_category/$1';
$route['published/category/(:num)']   = 'category/published_category/$1';
$route['unpublished/category/(:num)'] = 'category/unpublished_category/$1';

//Brand  Route List
$route['add/brand']                = 'brand/add_brand';
$route['manage/brand']             = 'brand/manage_brand';
$route['save/brand']               = 'brand/save_brand';
$route['delete/brand/(:num)']      = 'brand/delete_brand/$1';
$route['edit/brand/(:num)']        = 'brand/edit_brand/$1';
$route['update/brand/(:num)']      = 'brand/update_brand/$1';
$route['published/brand/(:num)']   = 'brand/published_brand/$1';
$route['unpublished/brand/(:num)'] = 'brand/unpublished_brand/$1';

//Post Route List
$route['add/product']                = 'product/add_product';
$route['manage/product']             = 'product/manage_product';
$route['save/product']               = 'product/save_product';
$route['delete/product/(:num)']      = 'product/delete_product/$1';
$route['edit/product/(:num)']        = 'product/edit_product/$1';
$route['update/product/(:num)']      = 'product/update_product/$1';
$route['published/product/(:num)']   = 'product/published_product/$1';
$route['unpublished/product/(:num)'] = 'product/unpublished_product/$1';

//Admin login
$route['admin']             = 'adminlogin';
$route['admin_login_check'] = 'adminlogin/admin_login_check';
$route['logout']            = 'admin/logout';

//Slider  Route List
$route['add/slider']                = 'slider/add_slider';
$route['manage/slider']             = 'slider/manage_slider';
$route['save/slider']               = 'slider/save_slider';
$route['delete/slider/(:num)']      = 'slider/delete_slider/$1';
$route['edit/slider/(:num)']        = 'slider/edit_slider/$1';
$route['update/slider/(:num)']      = 'slider/update_slider/$1';
$route['published/slider/(:num)']   = 'slider/published_slider/$1';
$route['unpublished/slider/(:num)'] = 'slider/unpublished_slider/$1';

//Theme Option  Route List
$route['theme/option'] = 'themeoption';
$route['save/option']  = 'themeoption/save_option';
