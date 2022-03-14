<?php
class Code
{
    static function index()
    {
        $backup = "backup/index.php";
        $file = "index.php";
        return array('backup' => $backup,'file'=>$file);
    }
}
class Run
{
    static function check($file)
    {
       if (sha1_file($file['backup']) != sha1_file($file['file']))
       {
           copy($file['backup'],$file['file']);
       }
    }
}
Run::check(Code::index())
?>
