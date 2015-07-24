<?php
$id = $modx->resource->get('id');
$array_ids = $modx->getChildIds($parent);
return in_array($id,$array_ids);
return;
