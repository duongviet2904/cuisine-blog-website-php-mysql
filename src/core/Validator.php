<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

use DateTime;

/**
 * The validator class.
 *
 * The model is used to validate parameters.
 *
 * @author Nguyen Viet Duong
 */
class Validator {

    /**
     * Dates validation.
     * 
     * @param array $dates A array of string representation of dates.
     * @param string $format The format that the passed in string. The same letters as for the date() can be used.
     *
     * @return bool  True if all dates are valid.
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public static function dates(array $dates, string $format = "Y-m-d"): bool {

        if (is_array($dates)) {

            foreach ($dates as $name => $date) {

                $d = DateTime::createFromFormat($format, $date);

                if ($d === false || $d->format($format) !== $date) {

                    return false;
                }
            }
            return true;
        }
    }

}
