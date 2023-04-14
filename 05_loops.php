<?php
/* FOR LOOP */
echo 'FOR LOOP'.'<br>';
for ($i=0; $i < 10; $i++) { 
    //echo $i;
    echo 'count is : '.$i. '<br>'; //<br>  is used for line break
}
 /** WHILE LOOP */

 $a = 1;

echo 'WHILE LOOP'.'<br>';

 while ($a <= 20) {
     echo 'count for a is : '.$a.'<br>';
     $a++;
 } 
 /** DO WHILE LOOP */
 $a = 2; 
 do{
    echo 'this is a do while block'.'<br>';
    $a++;
    echo $a.'<br>';
 }
 while ($a <= 10) ;
    
 /**FOR EACH LOOP */

 $posts = ['first year','second year','third year','fourt year'];
 var_dump($posts);
 foreach ($posts as $post) {
    echo $post;
    var_dump($post);
    echo 'am here';
 }
 foreach ($posts as $index => $post) {
    echo $index. '-' . $post .'<br>';
 }

 /**FOR EACH WITH ASSOCIATE ARRAYS */

 $person = ['first_name'=> 'Adekunle',
 'last_name'=> 'Adegoke',
 'email'=>'ade@gmail.com'
];
foreach ($person as $key => $value) {
    echo "$key - $value <br>";

}