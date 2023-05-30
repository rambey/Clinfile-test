<?php

namespace Root\Www\Services;

class FilterGenerator
{
    public function generateFilter($data)
    {
        $filter = "";
        if (isset($data['condition']) && isset($data['rules'])) {
            $condition = $data['condition'];
            $rules = $data['rules'];

            $subFilters = array();
            foreach ($rules as $rule) {
                if (isset($rule['condition']) && isset($rule['rules'])) {
                    $subFilter = $this->generateFilter($rule);
                    if ($subFilter !== "") {
                        $subFilters[] = $subFilter;
                    }
                } else {
                    if (isset($rule['field']) && isset($rule['operator']) && isset($rule['value'])) {
                        $field = $rule['field'];
                        $operator = $rule['operator'];
                        $value = $rule['value'];

                        $subFilters[] = "$field $operator $value";
                    }
                }
            }
            $filter = implode(" $condition ", $subFilters);
        }
        return $filter;
    }
}
