<?php

/**
 * 
 *   Tempo - a simple PHP class for rendering PHP templates
 * 
 *   Developed by Hesham Jabr
 *   email: info@jabr.dev
 *   website: www.jabr.dev
 * 
 */

class Tempo {

        private $tempform;
        private $otemp;
        private $temp;

        /**
         *      Method for updating the base folder where templates are located.
         *      @param $path
         *      @param $name
         * 
         */

        function  __construct($path, $name){

                $this->temp = trim($path) . "/" . trim($name) . ".tempo";
                $this->otemp = @fopen ($this->temp, "r");

                // Error: Tempo file not existing
                if (!$this->otemp) {
                        throw new Exception('Error [1001]: Tempo file not existing.');
                }

                $tempsize = filesize($this->temp);
                $this->tempform = fread($this->otemp, $tempsize);
                fclose ($this->otemp);
                
                return $this->tempform;
        }

        /**
         * 
         * Find and attempt to set a template with variables
         * @param $variableDisplay
         * @param $setVariable
         * 
         */

        public function set($variableDisplay, $setVariable){
                $this->tempform = @str_replace("{[::" . trim($variableDisplay) . "::]}", $setVariable, $this->tempform);   
        }

        /**
         * 
         * Return the final result
         * @param $return
         * 
         */

        public function end($return = true){
                if($return == true){
                        echo $this->tempform;
                } else {
                        return $this->tempform;
                }
        } 

        

}