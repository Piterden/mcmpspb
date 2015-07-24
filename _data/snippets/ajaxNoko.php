id: 13
source: 1
name: ajaxNoko
properties: 'a:0:{}'

-----

/* ***************************************** */
/*          NOKOGIRI PARSER HANDLER          */
/* ***************************************** */

require "/home/admin/web/mcmpspb.yellowmarker.ru/public_html/assets/components/nokogiri/nokogiri.php";

// Answer ONLY ajax requests
if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {return;}

// Receiving form params
$params = array();
$params['action'] = filter_input(INPUT_POST,'action');
$params['url'] = filter_input(INPUT_POST,'url');
$params['selectors'] = filter_input(INPUT_POST,'selectors');

$html = gzdecode(file_get_contents($params['url']));

//echo $html;

$saw = new nokogiri($html);

return var_dump($saw->get('html')->toArray());