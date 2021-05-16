<?php
 $string = "fdfkd";



  function returnSentence($string)
{
    if(!preg_match('/!!$/', $string) && !preg_match('/\?\?$/', $string) )
    {
        echo $string;
        exit();
    }
    $array =  str_split($string);

        array_pop($array);
        $string = implode("",$array);

    if(preg_match('/!!$/', $string) || preg_match('/\?\?$/', $string) )
    {
        returnSentence($string);
    }else{
        echo $string;
    }


};
returnSentence($string);
