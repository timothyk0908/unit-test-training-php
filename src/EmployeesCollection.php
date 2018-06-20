<?php

class EmployeesCollection extends \ArrayObject {
    public function offsetSet($key, $val) {
        if ($val instanceof Employee) {
            return parent::offsetSet($key, $val);
        }
        throw new \InvalidArgumentException('Value must be a Foo');
    }
}