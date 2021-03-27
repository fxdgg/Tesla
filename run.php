<?php
/**
 *@author fxdgg 
 */

namespace Tesla;
use Tesla\Libs\Cmd;

require __DIR__ . '/vendor/autoload.php';

try {
    $app = new Cmd();
    $app->run();
} catch (\Exception $e) {
    echo $e->getMessage()."\n";
}

exit;
