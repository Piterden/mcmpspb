id: 15
source: 1
name: isChild
properties: 'a:0:{}'

-----

$id = $modx->resource->get('id');
$array_ids = $modx->getChildIds($parent);
return in_array($id,$array_ids);