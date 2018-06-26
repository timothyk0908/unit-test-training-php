<?php

use Popcorn4dinner\Collection\AbstractCollection;

class EmployeesCollection extends AbstractCollection {

	 protected function isCollectableInstance($item): bool
     {
        return is_a($item,Employee::class);
     }
}