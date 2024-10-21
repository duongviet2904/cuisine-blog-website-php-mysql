<?php

namespace Core;

class EnvProvider
{
    public function getEvironmentData($filename) {
        $file = fopen($filename, "r");
        $result = [];

        if ($file) {
            // Loop through each line in the file
            while (($line = fgets($file)) !== false) {
                // Trim whitespace from the beginning and end of the line
                $line = trim($line);

                // Skip empty lines or lines that start with comment symbols (#, //, /*)
                if (empty($line) || strpos($line, '#') === 0 || strpos($line, '//') === 0 || strpos($line, '/*') === 0) {
                    continue; // Skip this line
                }

                $data = explode('=', $line);
                if (array($data) && count($data) != 2) {
                    continue;
                }

                $result[$data[0]] = $data[1];
            }
            // Close the file after reading
            fclose($file);
            return $result;
        }
        // Error handling if the file couldn't be opened
        echo "Error: Unable to open the file.";
        return $result;
    }
}