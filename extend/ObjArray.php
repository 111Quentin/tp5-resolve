<?php 
class ObjArray implements \ArrayAccess
{
    private $testData = [
        'title' => 'quentin'
    ];
 
    public function offsetExists($key)
    {
        return isset($this->testData[$key]);
    }
 
    public function offsetGet($key)
    {
        echo "offsetGet".$key.'<br>';
        return $this->testData[$key];
    }
 
    public function offsetSet($key, $value)
    {
        echo "offsetSet".$key.'<br>';
        $this->testData[$key] = $value;
    }
 
    public function offsetUnset($key)
    {
        echo "offsetUnset".$key;
        unset($this->testData[$key]);
    }

}
