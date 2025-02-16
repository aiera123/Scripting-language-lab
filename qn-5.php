<?php
$student=array(
array(
'first_name'=>'Anu',
'last_name'=>'Dulal',
'email'=>'anuiem45@gmail.com',
'date_of_birth'=>"2020-8-4"
),
array(
    'first_name'=>'kri',
'last_name'=>'sharma',
'email'=>'krii1@gmail.com',
'date_of_birth'=>"2000-11-4"
),
array(
    'first_name'=>'krish',
'last_name'=>'thapa',
'email'=>'krish67@gmail.com',
'date_of_birth'=>"2006-8-6"
)
);
echo '<table>';
echo '<tr><th>first_name</th><th>last_name</th><th>Email</th><th>DOB</th>';
echo '</tr>';
foreach ($student as $std){
echo '<tr>';
echo '<td>' . $std['first_name'].'</td>';
echo '<td>'.  $std['last_name'].'</td>';
echo '<td> '. $std['email'].'</td>';
echo '<td>' . $std['date_of_birth'].'</td>';
echo '</tr>';
}
echo '</table>';
?>

