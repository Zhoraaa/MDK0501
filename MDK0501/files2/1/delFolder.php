<?php
function recurseDelFolder($dir)
{
    $includes = glob($dir . '/*');
    foreach ($includes as $include) {
        if (is_dir($include)) {
            recurseDelFolder($include);
        } else {
            unlink($include);
        }
    }
    rmdir($dir);
}

recurseDelFolder("./www");

?>
<p>Папка удалена</p>
<a href="./index.php"><button>Oбратно</button></a>