<?php  return 'if ($modx->event->name == \'OnLoadWebDocument\') {
    if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && strtolower($_SERVER[\'HTTP_X_REQUESTED_WITH\']) == \'xmlhttprequest\') {
        $modx->resource->set(\'template\', 3);
        $modx->resource->set(\'cacheable\', 0);
    }
}
return;
';