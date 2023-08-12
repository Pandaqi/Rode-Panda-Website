<?php
$conn = new mysqli("localhost", "root", "", "rodepanda");
$conn->query("SET NAMES 'utf8'");

$search_phrase = strtolower('bordspel');

// Select categories using a LIKE search on the `name` and `content` 
$cat_query = $conn->query("SELECT * FROM `categories` WHERE LOWER(`name`) LIKE '%$search_phrase%' OR LOWER(`content`) LIKE '%$search_phrase%' ");

while($row = $cat_query->fetch_assoc()) {
	echo $row['name'];
} 

echo '<hr/>';

// Select subcategories using a LIKE search on the `name` and `content` 
$subcat_query = $conn->query("SELECT sc.name, c.name FROM `subcategories` AS sc INNER JOIN `categories` AS c ON sc.parent_category = c.id WHERE (LOWER(sc.name) LIKE '%$search_phrase%' OR LOWER(sc.content) LIKE '%$search_phrase%') ") or die($conn->error);

//echo $subcat_query;
while($row = $subcat_query->fetch_assoc()) {
	echo $row['name'];
} 

echo '<hr/>';

// Select projects using a full-text search
// Don't select "hire me"-pages. (There's a lot of them, and they all look the same from here.)


// MySQL is slow with combining full-text search and other conditions (https://hackernoon.com/dont-waste-your-time-with-mysql-full-text-search-61f644a54dfa),
// if it becomes a problem, I can filter out the type==2 entries with PHP later

// AGAINST searches are "IN NATURAL LANGUAGE MODE" by default
//  => search phrases are automatically split (it checks if ANY of the words are included)
// We could switch to BOOLEAN MODE if we want to change that (+word1 -word2 etc.)

$project_query = $conn->query("SELECT p.name AS name, p.type AS type, sc.name AS subcat_name, c.name AS cat_name FROM `projects` AS p INNER JOIN (SELECT project_id, MIN(subcat_id) AS subcat_id FROM `category_links` GROUP BY `project_id`) AS cl ON p.id = cl.project_id INNER JOIN `subcategories` AS sc ON sc.id = cl.subcat_id INNER JOIN `categories` AS c ON sc.parent_category = c.id WHERE MATCH(p.content) AGAINST('$search_phrase')") or die($conn->error);

while($row = $project_query->fetch_assoc()) {
	echo $row['name'];
} 
	
