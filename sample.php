class hashsum
{
    static function calculate($path)
    {
       sha1_file($path); 
    }
    static function compare($path,$hash)
    {
        if(sha1_file($path) != $hash)
        {
            //do precess here
        }
    }
}
