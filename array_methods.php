<?php
$a = $b = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'lastname' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'lastname' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'lastname' => 'Doe',
  )
);

$user_info = array_column($a, 'lastname');                                        // array_column
print_r($user_info);
echo "<br>";
print_r(array_diff($a[0], $a[1]));                                                // array_diff
echo "<br>";
print_r($a);
$a = array_fill(0, 6, "anas is handsome");                                        // array_fill
print_r($a);
echo "<br>";

print_r(array_rand($user_info, 2));                                               // array_rand
echo "<br>";
$array = array(5, 12 , 1 ,2);
echo array_product($array);                                                       // array_product
echo "<br>";
array_pop($a);                                                                    // array_pop
print_r($a);
echo "<br>";  
$a =  array_pad($a, count($a) + 2, "anas is genious");                            // array_pad   
print_r($a);
echo "<br>";
array_push($a, "Anas is adorable");                                               // array_push
print_r($a);
echo "<br>";
print_r(array_rand($a, 3));
echo "<br>";
array_splice($user_info, 0, 1, ["anas", "roger"]);                                // array_splice  
print_r($user_info);
echo array_search("Smith", $user_info);                                           // array_search
echo "<br>";
$new_user_info = array_column($b, "id", "first_name");                            
array_reverse($new_user_info);                                                    // array_reverse
print_r($new_user_info);
echo "<br>";
array_shift($new_user_info);                                                      // array_shift
print_r($new_user_info);
$new_user_info = array_flip($new_user_info);                                      // array_flip
array_pop($new_user_info);
echo "<br>";
print_r($new_user_info);
echo "<br>";
$new_user_info = array_pad($new_user_info, -2-count($new_user_info), "anas");
print_r($new_user_info);
echo "<br>";
print_r(array_slice($new_user_info, 1, 1));      
echo "<br>";                                                       
$array0 = array("anas", "roger", "christina", "bob");
print_r(array_slice($array0, 1, 3));                                              // array_slice
echo "<br>";
echo current($array0);                                                            // currenct 
echo "<br>";
echo next($array0);                                                               // next
echo "<br>";
echo prev($array0);                                                               // prev
echo "<br>\n";
echo "Hello, world";
