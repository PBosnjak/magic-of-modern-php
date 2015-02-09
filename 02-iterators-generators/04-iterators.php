<?php
/**
 * ArrayAccess
 */
class MyArrayAccess implements ArrayAccess
{
    private $container = array(
        'one'   => 1,
        'two'   => 2,
        'three' => 3,
    );
    
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }
    
    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }
    
    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }    
}

$object = new MyArrayAccess();
echo $object['two'];
echo $object->offsetGet('two');

unset($object['two']);

/**
 * @reminder:
 * - show Countable, SeekableIterator
 * - is_array, is_object
 */

