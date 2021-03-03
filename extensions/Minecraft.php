<?php

namespace Extensions;

class Minecraft
{
    /**
     * This name is shown on the server softwares page
     */
    public static $display_name = 'Minecraft';

    /**
     * Set up the server software installer (Usually not necessary)
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the software names and available versions that can be installed
     */
    public static function getSoftwares()
    {
        return array(
            'Vanilla' => ['1.16.4', '1.16.3', '1.16.2', '1.16.1', '1.16.0'],
            'PaperMC' => ['1.16.4', '1.15.2', '1.14.4'],
            'Bungeecord' => ['1.16', '1.15', '1.14']
        );
    }

    /**
     * Upload the software to the server. **Only the file name** is needed to be
     * returned as our system will automatically search for the file inside the
     * '`/path/to/pterobilling`/extensions/software' directory, so please **DON'T
     * provide any directory names or trailing slashes!**
     * 
     * @param string $software_name
     * The chosen software original name, same as the values in `getSoftwares()`
     * 
     * @param string $software_version
     * The chosen software original version, same as the values in `getSoftwares()`
     * 
     * @param string $lowercase_name
     * A lowercase version of `$software_name`, useful when specifying file name
     * 
     * @param string $underscore_version
     * Replaced the dots in `$software_version` with underscores, useful when specifying file name
     * 
     * @return string
     * A file name without any directory names and trailing slashes
     */
    public static function installSoftwares($software_name, $software_version, $lowercase_name, $underscore_version)
    {
        return $lowercase_name . '_' . $underscore_version . '.jar';
    }
}
