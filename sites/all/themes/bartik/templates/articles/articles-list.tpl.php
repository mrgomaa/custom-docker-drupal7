<h2>Create a Custom Module in Drupal 7 (Part1)</h2>
<?php
echo "hello articles";
if(count($data) > 0)
{
    echo "<table><tr><th>Id</th><th>Title</th><th>Author</th><th>Description</th></tr>";
    $count = 1;
foreach($data as $v)
{
echo "<tr>";
echo "<td>" . $count . "</td>";
echo "<td>" . $v->books_title . "</td>";
echo "</tr>";
$count++;
}
echo "</table>";    
}
else
{
    echo "No records found";
} 