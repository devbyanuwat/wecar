<?php
if (alert()) {
    echo "t";
} else {
    echo "f";
}
$status = false;
function alert()
{

    function a()
    {
        global $status;
        if ("" == "") {
            // $status = false;
        }
        return $status;
    }
    function b()
    {
        global $status;
        if ("" == "") {
            $status = true;
        }
        return $status;
    }
    function c()
    {
        return "this c";
    }

    // if (a() * b() * c()) {
    //     $err = "pass";
    // } else {
    //     $err = "err";
    // }
    return a() * b();
}
