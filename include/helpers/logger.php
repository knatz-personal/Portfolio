<?php
class Logger
{
    function log_action($action, $message="")
    {
        $logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
        $new = file_exists($logfile) ? false : true;
        if($handle = fopen($logfile, 'a'))
        { // append
            $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
            $content = "{$timestamp} | {$action}: {$message}\n";
            fwrite($handle, $content);
            fclose($handle);
            if($new) { chmod($logfile, 0755); }
        }
        else
        {
            echo "Could not open log file for writing.";
        }
    }


    function debug($message="")
    {
        if (empty($message))
        {
            //throw exception
            throw new Exception($message." is an empty string.");
        }
    }

    function info($message="")
    {
        if (empty($message))
        {
            //throw exception
            throw new Exception($message." is an empty string.");
        }
    }


    function error($message="")
    {
        if (empty($message))
        {
            //throw exception
            throw new Exception($message." is an empty string.");
        }
    }


    function warning($message="")
    {
        if (empty($message))
        {
            //throw exception
            throw new Exception($message." is an empty string.");
        }
    }

    function print($message="")
    {
        if (empty($message))
        {
            //throw exception
            throw new Exception($message." is an empty string.");
        }

        return "<p class=\"message\">{$message}</p>";

    }

}
?>
