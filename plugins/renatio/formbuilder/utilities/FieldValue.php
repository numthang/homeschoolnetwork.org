<?php

namespace Renatio\FormBuilder\Utilities;

use Renatio\FormBuilder\Models\Field;

/**
 * Class FieldValue
 * @package Renatio\FormBuilder\Utilities
 */
class FieldValue
{

    /**
     * @param Field $field
     * @return \Illuminate\Routing\Route|mixed|string
     */
    public function get(Field $field)
    {
        $value = post($field->name);

        if ($field->field_type->code == 'country_select' && post($field->name)) {
            $value = $this->getCountryById(post($field->name))->name;
        }

        if ($field->field_type->code == 'state_select' && post($field->name)) {
            $value = $this->getStateById(post($field->name))->name;
        }

        return is_array($value) ? implode(', ', $value) : $value;
    }

    /**
     * @param $countryId
     * @return mixed
     */
    protected function getCountryById($countryId)
    {
        if (class_exists('RainLab\Location\Models\Country')) {
            return \RainLab\Location\Models\Country::findOrFail($countryId);
        }
    }

    /**
     * @param $stateId
     * @return mixed
     */
    protected function getStateById($stateId)
    {
        if (class_exists('RainLab\Location\Models\State')) {
            return \RainLab\Location\Models\State::findOrFail($stateId);
        }
    }

}