<?php
/*
 * Licensed by Sergey Bukharov under MIT License. For more information, see LICENSE
 * file located in root directory.
 */

/**
 * Student
 *
 * A Student object that contains a surname, last name, an array of e-mails and an 
 * array of grades. The Student object has the ability to calculate the average 
 * of all contained grades, and to pretty-print its various data members. 
 * Additional e-mails and grades can be added via the add_grade() and add_email() 
 * methods. 
 *
 * @link https://github.com/sbukharov/comp4711lab01/blob/master/Student.php
 * @author Sergey Bukharov
 * @since 1.0.0
 */
class Student {
    
    /**
    * 
    * Default constructor method that initializes all Student fields to be empty.
    * No return value as this is a constructor.
    *
    */
    function __construct() {
        //The Student's surname
        $this->surname = '';
        
        //The Students first name
        $this->first_name = '';
        
        //An array in which the Student's various email addresses will be stored
        $this->emails = array();
        
        //AN array in which the Student's various grades will be stored
        $this->grades = array();
    }
    
    /**
    * 
    * Adds given email and email type to Student object.
    *
    * @param string $which  type of email address (e.g. home, work)
    * @param string $address  email address value (e.g. test@gmail.com)
    */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
    * 
    * Adds given grade to gradelist of this student.
    *
    * @param int $grade  grade to add to list of student grades
    */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
    * 
    * Calculates the average of all grades contained by this Student.
    * All are weighted equally.
    *
    * @return int average of all grades obtained by student
    */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
    * 
    * Converts the Student object to a string. Can be used to print the Student's
    * name, average, and all email addresses.
    *
    * @return string string representation of the Student object.
    */
    function toString() {
        $result = '<b>' . $this->first_name . ' ' . $this->surname . '</b>';
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= '   ' . $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
    
}
