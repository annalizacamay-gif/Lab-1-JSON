<?php
 $jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';

 $object = json_decode($jsonString);
echo "Object: " . $object->name . "\n";

 $array = json_decode($jsonString, true);
echo "Array: " . $array['email'];