<?php

/**
 * A student object
 *
 * @author A00861391
 */
class Student {

    //construtor
    function __construct() {
        $this->surname = '';
        $this->firstname = '';
        $this->emails = array();
        $this->grades = array();
    }

    //adds an email address to the student object
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //adds a grade 
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //calculates and returns the average of the grades. 
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    //creates a formatted string describing the student
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= '(' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what) {
            $result.=$which . ':' . $what . "\n";
        }
        $result.="\n";

        return '<pre>' . $result . '</pre>';
    }

}
