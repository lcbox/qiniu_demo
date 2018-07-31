<?php
function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/src/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');
require_once  __DIR__ . '/src/Qiniu/functions.php';

/**   
 * 实现七牛云获取token
 * 文档： https://developer.qiniu.com/kodo/sdk/php
 * 日期： 2018.06.05
 **/
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
$auth = new Auth('自己的Access_Key','自己的Secret_Key');
echo $auth->uploadToken('自己的Bucket_Name');

