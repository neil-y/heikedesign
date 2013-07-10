<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['admin/signin'] = "admin/welcome/signin";
$route['admin/signin_do'] = "admin/welcome/signin_do";
$route['admin/signout'] = "admin/welcome/signout";
$route['WEB/MobileApp_android.html'] = "item/show/app_android";
$route['WEB/MobileApp_ios.html'] = "item/show/app_ios";
$route['web/pages/cpmm/Default.aspx'] = "item/show/trader_trader";

//$route['WEB/ArticleShow.aspx?ID=(:num)'] = "WEB/ArticleShow/$1";
//$route['WEB/ArticleShow.aspx?ID=11903'] = "news/xyshow/352";
//$route['WEB/ArticleShow.aspx?ID=110907'] = "news/xyshow/354";
//$route['WEB/ArticleShow.aspx?ID=714'] = "news/xyshow/345";
//$route['WEB/ArticleShow.aspx?ID=1936'] = "news/xyshow/342";
//$route['web/Deal.aspx'] = "http://www.mintai166.com/web/Deal.aspx";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
