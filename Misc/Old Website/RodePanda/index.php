<?php
// FOR LOCAL TESTING ...
//$conn = new mysqli("localhost", "root", "", "rodepanda");

// FOR DEPLOYMENT ...
$conn = new mysqli("localhost", "u4302d8117_rodepanda", "Dalionzo7!", "u4302d8117_rodepanda");
$conn->query("SET NAMES 'utf8'");

// Determine language
// If no cookie is set, determine language automatically
	// Get full language string, explode it, search for "nl" or "nl-NL"
	// If found, use Dutch. If not, always use English.
$LANG = 'en';
if(!isset($_COOKIE['site_language'])) {
	// check language settings
	$full_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$exploded_language = explode(",", $full_language);
	foreach($exploded_language as $lang) {
		if($lang == 'nl' or $lang == 'nl-NL') {
			$LANG = 'nl';
			break;
		}
	}

	// check if this is a crawling bot
	// if so, always use dutch
	$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$user_agent_list = ["googlebot", "bingbot", "slurp", "duckduckbot", "baiduspider", "yandexbot"]; // this isn't a full list, just the biggest ones

	if(in_array($user_agent, $user_agent_list)) {
		$LANG = 'nl';
	}

// If a cookie set, use that language!
} else {
	$LANG = $_COOKIE['site_language'];
}

// This dictionary saves all the interface strings for different languages
$ui_strings = 
[ "nl" => 
	[
		"welcome_message" => "<p>Welkom! Ik ben Rode Panda, een freelance kunstenaar die je graag helpt mooie projecten te maken.</p><p>Klik op één van mijn diensten hieronder voor meer informatie.</p>",

		// error messages
		"error_no_text" => '<p>Error: kan tekst niet ophalen ...</p>',
		"error_no_page_title" => '<p>Error: geen pagina titel gevonden ...</p>',
		"error_nonexisting_category" => '<p>Sorry, deze categorie lijkt niet te bestaan.</p>',
		"error_nonexisting_subcategory" => '<p>Sorry, deze subcategorie lijkt niet te bestaan.</p>',
		"search_result_explanation" => '<p>Hieronder staan alle categorieën, subcategorieën en projecten waarin deze termen voorkomen.</p>',
		"error_nonexisting_project" => '<p>Sorry, dit project lijkt niet te bestaan.</p>',

		// general interface stuff
		"background" => "Achtergrond",
		"categories" => "Categorieën",
		"subcategories" => "Subcategorieën",
		"projects" => "Projecten",
		"category" => "Categorie",
		"subcategory" => "Subcategorie",
		"project" => "Project",
		"about_me" => "Over",
		"general_terms" => "Algemene Voorwaarden",
		"useful_links" => "Handige links",
		"footer_credits" => "Tiamo Pastoor sinds 2019",

		// search stuff
		"search_page_title" => 'Zoekopdracht',
		"youre_looking_for" => '<p>U zocht naar: ',
		"search_placeholder" => "uw zoekopdracht hier ...",
		"search" => "ZOEK",

		// categories
		"Schrijven" => "Schrijven",
		"Muziek" => "Muziek",
		"Ontwerpen" => "Ontwerpen",
		"Programmeren" => "Programmeren",
		"Over Mij" => "Over Mij",

		// subcategories
		"NDHU (Blog)" => "NDHU (Blog)",
		"Non-fictie" => "Non-fictie",
		"Verhalen" => "Verhalen",
		"Theater" => "Theater",
		"Prentenboeken" => "Prentenboeken",
		"Overig" => "Overig",
		"Singer-songwriter" => "Singer-songwriter",
		"Instrumentaal" => "Instrumentaal",
		"Musical" => "Musical",
		"Contact" => "Contact",
		"Mijn werkwijze" => "Mijn werkwijze",
		"Mijn filosofie" => "Mijn filosofie",
		"Algemene voorwaarden" => "Algemene voorwaarden",
		"Algemene Voorwaarden" => "Algemene Voorwaarden",
		"Websites" => "Websites",
		"Tekenen" => "Tekenen",
		"Bordspellen" => "Bordspellen",
		"Huisstijl (Logo)" => "Huisstijl (Logo)",
		"Editorial" => "Editorial",
		"Computerspellen" => "Computerspellen",
		"Zoeken" => "Zoeken",

		// huur mij in
		"Huur mij in" => "Huur mij in",

		// project types
		'project_type_0' => 'Eigen project',
		'project_type_1' => 'In opdracht',
		'project_type_2' => 'Mijn werkwijze en werkvoorwaardes',

		"change_language_nl" => "Verander taal (naar Engels)",
	],

  "en" =>
  	[
  		"welcome_message" => "<p>Welcome! I am Rode Panda (<em>Red Panda</em>), a Dutch freelance artist who loves bringing your beautiful projects to life.</p><p>Even though I'm Dutch, most of this website (and my projects) are also available in English. (The only exceptions are projects that have a distinct Dutch title or weren't translatable for other reasons.)</p><p>If you happen to be Dutch, but this website displays in English, scroll to the bottom of the page to change the language.</p><p>Take a look around, or click one of my services below for more information!</p>",

  		// error messages
  		"error_no_text" => '<p>Error: couldn\'t fetch page text ...</p>',
  		"error_no_page_title" => '<p>Error: couldn\'t fetch page title ...</p>',
  		"error_nonexisting_category" => '<p>My sincerest apologies, this category doesn\'t seem to exist!</p>',
  		"error_nonexisting_subcategory" => '<p>Oh no, this subcategory is hidden so well that I cannot find it!</p>',
  		"search_result_explanation" => '<p>Below are all categories, subcategories and projects in which these search terms occur.</p>',
  		"error_nonexisting_project" => '<p>Oopsie, this project does not exist!</p>',

  		// general interface stuff
  		"background" => "Background",
		"categories" => "Categories",
		"subcategories" => "Subcategories",
		"projects" => "Projects",
		"about_me" => "About Me",
		"general_terms" => "Terms & Conditions",
		"category" => "Category",
		"subcategory" => "Subcategory",
		"project" => "Project",
		"useful_links" => "Useful links",
		"footer_credits" => "Tiamo Pastoor since 2019",

		// search stuff
		"search_page_title" => 'Search results',
  		"youre_looking_for" => '<p>You searched for: ',
		"search_placeholder" => "your search query here ...",
		"search" => "SEARCH",

		// categories
		"Schrijven" => "Writing",
		"Muziek" => "Music",
		"Ontwerpen" => "Design",
		"Programmeren" => "Programming",
		"Over Mij" => "About Me",

		// subcategories
		"NDHU (Blog)" => "NDHU (Blog)",
		"Non-fictie" => "Non-fiction",
		"Verhalen" => "Stories & Novels",
		"Theater" => "Theatre",
		"Prentenboeken" => "Picture Books",
		"Overig" => "Miscellaneous",
		"Singer-songwriter" => "Singer-songwriter",
		"Instrumentaal" => "Instrumental",
		"Musical" => "Musical",
		"Contact" => "Contact",
		"Mijn werkwijze" => "My workflow",
		"Mijn filosofie" => "My philosophy",
		"Algemene Voorwaarden" => "Terms & Conditions",
		"Algemene voorwaarden" => "Terms & Conditions",
		"Websites" => "Websites",
		"Tekenen" => "Drawing",
		"Bordspellen" => "Boardgames",
		"Huisstijl (Logo)" => "Branding (Logo)",
		"Editorial" => "Editorial",
		"Computerspellen" => "Video games",
		"Zoeken" => "Search",

		// huur mij in
		"Huur mij in" => "Hire me",

		// project types
		'project_type_0' => 'Personal project',
		'project_type_1' => 'Assignment',
		'project_type_2' => 'My workflow and working conditions',

		"change_language_en" => "Change language (to Dutch)",
  	]

];


$top_text = tr('error_no_text');
$page_title = tr('error_no_page_title');
$base_url = '';

$page_type = 'home';
$page_exists = true;
$breadcrumbs = '';

if(!isset($_GET['cat'])) {
	// Homepage! List the main categories
	$result = $conn->query("SELECT * FROM `categories` ORDER BY id ASC");
	
	$top_text = tr("welcome_message");
	$page_title = 'Home';
} else {
	// The category is set. 
	$cat = rawurldecode($_GET['cat']);
	$safe_cat = addcslashes(mysqli_real_escape_string($conn, $cat), '%_');

	$page_title = tr($cat); // Make sure to translate the page title
	$base_url = rawurlencode($cat) . '/';

	$breadcrumbs .= '<a href="">Home</a> &gt; <a href="' . $base_url . '">' . $page_title . '</a>';

	if(!isset($_GET['subcat'])) {
		// Category page! Give main text, list sub categories
		$page_type = 'category';

		// First get all information for this category.
		$temp_result = $conn->query("SELECT * FROM `categories` WHERE `name` = '$safe_cat' ");
		$temp_row = $temp_result->fetch_assoc();

		$top_text = $temp_row['content'];
		$background_text = $temp_row['background'];
		if($LANG == 'en') {
			$top_text = $temp_row['content_en'];
			$background_text = $temp_row['background_en'];
		}
		
		
		$parent_cat = $temp_row['id'];
		$safe_parent_cat = addcslashes(mysqli_real_escape_string($conn, $parent_cat), '%_');

		// If there are no results, this category doesn't exist!
		if($temp_result->num_rows <= 0) {
			$page_exists = false;
			$top_text = tr("error_nonexisting_category");
		}

		// Query all subcategories
		$result = $conn->query("SELECT * FROM `subcategories` WHERE `parent_category` = '$safe_parent_cat' ORDER BY id ASC");
	} else {
		$subcat = rawurldecode($_GET['subcat']);
		$safe_subcat = addcslashes(mysqli_real_escape_string($conn, $subcat), '%_');

		$page_title = tr($subcat); // Don't forget to translate the subcategory
		$base_url = rawurlencode($cat) . '/' . rawurlencode($subcat) . '/';

		$breadcrumbs .= ' &gt; <a href="' . $base_url . '">' . $page_title . '</a>';

		// This is a oneliner to get the ID of the parent category (search table by name, extract results, get id corresponding with name)
		$parent_cat = $conn->query("SELECT * FROM `categories` WHERE `name` = '$safe_cat' ")->fetch_assoc()['id'];
		$safe_parent_cat = addcslashes(mysqli_real_escape_string($conn, $parent_cat), '%_');

		// This is a threeliner to get the ID of the parent subcategory (lines need to be separated, because they are used later for something else)
		$temp_result = $conn->query("SELECT * FROM `subcategories` WHERE `name` = '$safe_subcat' AND `parent_category` = '$safe_parent_cat' ");
		$temp_row = $temp_result->fetch_assoc();
		$parent_subcat = $temp_row['id'];
		$safe_parent_subcat = addcslashes(mysqli_real_escape_string($conn, $parent_subcat), '%_');

		if(!isset($_GET['project'])) {
			// Subcategory page! Give main text, list projects
			$page_type = 'subcategory';

			// First get all information for this subcategory
			$top_text = $temp_row['content'];

			if($LANG == 'en') {
				$top_text = $temp_row['content_en'];
			}

			// If there are no results, this subcategory doesn't exist!
			if($temp_result->num_rows <= 0) {
				$page_exists = false;
				$top_text = tr("error_nonexisting_subcategory");
			}

			// Query all projects
			// First, get all project_ids linked to this subcategory (I'm using a subquery for this one)
			// Then get those projects
			// The FIELD() function ensures that a "Huur mij in"-project - if present - is always at the top. (They always have type 2.)
			//  => All other rows are simply ordered by their id.
			//  => See this URL: https://stackoverflow.com/questions/14104055/ordering-by-specific-field-value-first
			$result = $conn->query("SELECT * FROM `projects` WHERE `id` IN (SELECT `project_id` FROM `category_links` WHERE `subcat_id` = '$safe_parent_subcat') ORDER BY FIELD(`type`, 2) DESC, id DESC");
		} else {
			// Project page! Give all details for this particular project.
			$project = rawurldecode($_GET['project']);
			$page_type = 'project';
			
			$page_title = $project;

			// Only "hire me" projects are translated to English
			if($project == 'Huur mij in') {
				$page_title = tr($project);
			}

			

			$full_url = $base_url . '' . rawurlencode($project);

			$breadcrumbs .= ' &gt; <a href="' . $full_url . '">' . $page_title . '</a>';

			// This is a search query!
			// THe page title should contain the search keywords
			if($subcat == 'Zoeken') {
				// modify the search phrase to be insensitive (maybe later we should also make the pattern more loose?)
				$search_phrase = strtolower($page_title);
				$safe_search_phrase = addcslashes(mysqli_real_escape_string($conn, $search_phrase), '%_');

				// search categories, subcategories and projects separately
				// CATEGORIES: straightforward
				$cat_query = $conn->query("SELECT name FROM `categories` WHERE LOWER(`name`) LIKE '%$safe_search_phrase%' OR LOWER(`content`) LIKE '%$safe_search_phrase%' ");
				
				// SUBCATEGORIES: I need to inner join the subcategories and categories table, so that I know the name of the parent category. 
				// Why? So I can make the correct link.
				$subcat_query = $conn->query("SELECT sc.name AS name, c.name AS cat_name FROM `subcategories` AS sc INNER JOIN `categories` AS c ON sc.parent_category = c.id WHERE (LOWER(sc.name) LIKE '%$safe_search_phrase%' OR LOWER(sc.content) LIKE '%$safe_search_phrase%') ");
				
				// PROJECTS: Even more difficult. I need to find the *a* matching subcategory, inner join that with categories, and save all of that.
				// Why? Because I need both cat and subcat to make a correct link
				// So, I basically have to do three inner joins and one subquery. It seems fast enough?
				$project_query = $conn->query("SELECT p.name AS name, p.type AS type, sc.name AS subcat_name, c.name AS cat_name FROM `projects` AS p INNER JOIN (SELECT project_id, MIN(subcat_id) AS subcat_id FROM `category_links` GROUP BY `project_id`) AS cl ON p.id = cl.project_id INNER JOIN `subcategories` AS sc ON sc.id = cl.subcat_id INNER JOIN `categories` AS c ON sc.parent_category = c.id WHERE MATCH(p.content) AGAINST('$safe_search_phrase')");

				$page_title = tr('search_page_title');
				$top_text = tr('youre_looking_for');

				$top_text .= '<strong>"' . $search_phrase . '"</strong>.</p>';
				$top_text .= tr('search_result_explanation');

				$page_type = 'search';
			} else {
				// Query this specific project
				// Because projects can have identical names, also check the subcategory
				// (Within a subcategory, projects can NOT have identical names. This wouldn't be logical anyway.)
				// Lastly, we limit the results to 1 as a fail safe. (The result should ALWAYS just be one mysql row.)
				$safe_project_name = addcslashes(mysqli_real_escape_string($conn, $project), '%_');
				$result = $conn->query("SELECT * FROM `projects` WHERE `name` = '$safe_project_name' AND `id` IN (SELECT `project_id` FROM `category_links` WHERE `subcat_id` = '$safe_parent_subcat') LIMIT 1");
				
				// for projects, the top text is simply _the whole project contents_
				$row = $result->fetch_assoc();
				$top_text = $row['content'];
				if($LANG == 'en') {
					$top_text = $row['content_en'];
				}


				// header images are not necessary and can be null/undefined
				$header_image = $row['header_image'];

				// If there are no results, this project doesn't exist!
				if($result->num_rows <= 0) {
					$page_exists = false;
					$top_text = tr('error_nonexisting_project'); 
				}
			}
		}
	}
}

// Get all HEADINGS (h1 t/m h6) from the text, and replace them with proper headings 
// This is much easier than trying to style them in such a way that they look separate
$pattern = '/<h(\w)>(.*?)<\/h(\w)>/i';
$replacement = '</div><div class="bodyText" style="background-color:transparent;"><h${1}>${2}</h${3}></div><div class="bodyText">';
$top_text = preg_replace($pattern, $replacement, $top_text);

// Get all IMAGES from the text, and replace them with proper images
// First do all EXTERNAL images
$pattern = '/<img(\s*+)src=\"http(.*?)\"(\s*+)\/>/i';
$replacement = '</div><div class="bodyText imageContainer" style="background-color:transparent;"><img replaced="true" src="http${2}" /></div><div class="bodyText">';
$top_text = preg_replace($pattern, $replacement, $top_text);

// Now all INTERNAL images (going frmo /files/ folder)
$pattern = '/<img(\s*+)src=\"(.*?)\"(\s*+)\/>/i';
$replacement = '</div><div class="bodyText imageContainer" style="background-color:transparent;"><img replaced="true" src="/files/${2}" /></div><div class="bodyText">';
$top_text = preg_replace($pattern, $replacement, $top_text);

// Get canonical URL
$temp_url = $_SERVER['REQUEST_URI'];
$temp_url = explode("/", $temp_url);
foreach($temp_url as $url_bit) {
    $url_bit = rawurlencode($url_bit);
}
$temp_url = implode("/", $temp_url);
$full_canonical_url = "http://rodepanda.com" . $temp_url;

// Function for getting the proper string (translating)
function tr($string_key) {
	global $ui_strings, $LANG;

	// If we somehow have an undefined language, default to English
	if(!array_key_exists($LANG, $ui_strings)) {
		$LANG = 'en';
	}

	// If we have an undefined key, throw an error
	if(!array_key_exists($string_key, $ui_strings[$LANG])) {
		return "Error! This string can't be translated!";
	}

	return $ui_strings[$LANG][$string_key];
}


?>

<!DOCTYPE html>
<html lang="<?php echo $LANG; ?>">

<head>
	<!-- FOR LOCAL TESTING... -->
	<!-- <base href="/RodePanda/"> -->

	<!-- FOR DEPLOYMENT -->
	<base href="/" />

	<meta charset="utf-8" />
	<title><?php echo $page_title . '&mdash;Rode Panda&mdash;Freelance Kunstenaar'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="<?php echo $full_canonical_url; ?>" />

	<!-- FOR LOCAL TESTING -->
	<!-- <link rel="stylesheet" type="text/css" href="theme/style.css?<?php //echo date('l jS \of F Y h:i:s A'); ?>" /> -->

	<!-- FOR DEPLOYMENT -->
	<link rel="stylesheet" type="text/css" href="theme/style.css" /> 

	<link rel="icon" type="image/png" href="theme/favicon.png" />

	<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet"> 
	<!-- <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet"> -->
</head>

<body>

	<header>
		<img src="theme/svg/greenBackground.svg" style="position:absolute;left:0;top:0;z-index:-10;"/>
		<img src="theme/svg/bigLogo.svg" style="position:relative;z-index:20;pointer-events:none;">
	</header>

	<main>

	<!-- This makes sure the branch extends along the righthand side -->
	<div id="rightSideBranch">
	</div>

	<!-- This displays an image, if one is available -->
	<?php
	if($page_type == 'project' && $header_image != null) {
	?>
		<div class="bodyText headerImage">
			<img src="files/<?php echo $header_image; ?>" />
		</div>
	<?php
	}	
	?>

	<!-- This displays the main title of the page -->
	<div class="bodyText" style="background-color:transparent;">
		<?php echo '<h1>' . $page_title . '</h1>'; ?>
	</div>

	<!-- This displays the breadcrumbs (if there are any to display) -->
	<?php
	if(strlen($breadcrumbs) > 0) {
	?>
		<div class="bodyText breadcrumbs">
			<?php echo $breadcrumbs; ?>
		</div>
	<?php
	}
	?>

	<!-- This displays the main text/description/content of the page -->
	<div class="bodyText">
		<?php echo $top_text; ?>
	</div>

	<!-- This displays the right header (and maybe some other stuff) depending on the page type -->
	<?php 
	if($page_exists) {
		if($page_type == 'category') {
	?>
		<div class="bodyText" style="background-color:transparent;">
			<h2><?php echo tr("background"); ?></h2>
		</div>
		<div class="bodyText backgroundText">
			<?php echo $background_text; ?>
		</div>

		<?php
			// only display heading if there is something there
			if($result->num_rows > 0) {
		?>
			<div class="bodyText" style="background-color:transparent;">
				<h2><?php echo tr("subcategories"); ?></h2>
			</div>
		<?php
			}
		?>
	<?php
		} else if($page_type == 'subcategory') {
			// only display heading if there is something there
			if($result->num_rows > 0) {
	?>
			<div class="bodyText" style="background-color:transparent;">
				<h2><?php echo tr("projects"); ?></h2>
			</div>
	<?php
			}
		} else if($page_type == 'project') {
			$project_footer = 'Project type > ';
			$the_project_type = $row['type'];
			if($the_project_type == 0) {
				$project_footer .= tr('project_type_0'); 
			} else if($the_project_type == 1) {
				$project_footer .= tr('project_type_1');
			} else if($the_project_type == 2) {
				$project_footer .= tr('project_type_2'); 
			}
	?>
		<div class="bodyText" style="font-size:10pt;opacity:0.5;"/>
			<?php echo $project_footer; ?>
		</div>
	<?php
		}
	}
	?>

	<!-- This lists all subitems. This is only disabled on project pages, as there are no subitems -->
	<!-- The only exception are "hire me"-pages: they display useful links, such as "contact" -->
	<?php 
	if($page_exists) {
		// if this is a project page, and it is a "huur mij in"-page ...
		// display the most important links underneath the page (contact, werkwijze, algemene voorwaarden)
		if($page_type == 'project' && $row['type'] == 2) {
			$link_array = ['Contact', 'Mijn werkwijze', 'Algemene voorwaarden'];
			?>
			<div class="bodyText" style="background-color:transparent;">
				<h2><?php echo tr("useful_links"); ?></h2>
			</div>
			<?php
			foreach($link_array as $name) {
				$full_url = 'Over Mij/' . rawurlencode($name);
				?>
				<div class="bigLink">
					<img src="theme/svg/branch.svg" class="branchImage" />
					<a class="bigLinkContent type0" href="<?php echo $full_url; ?>">
						<img src="theme/svg/leaf.svg" class="bigLinkImage" />
						<span><?php echo tr($name); ?></span>
					</a>
				</div>
				<?php
			}
		} else if($page_type == 'home' || $page_type == 'category' || $page_type == 'subcategory') {
			while($row = $result->fetch_assoc()) {
				// style of the link depends on what kind of link/subitem/project it is ("eigen project", "in opdracht", "huur mij in")
				$project_type = ' type0';
				$hire_me_page = false;
				$project_main_type = tr('category');
				if($page_type == 'category') {
					$project_main_type = tr('subcategory');
				} else if($page_type == 'subcategory') {
					$project_type = ' type' . $row['type'];

					if($row['type'] == 2) {
						$hire_me_page = true;
					}

					$project_main_type = tr('project');
				}
				$full_url = $base_url . rawurlencode($row['name']);
				$header_image = null;

				if(isset($row['header_image']) && $row['header_image'] != null) {
					$header_image = $row['header_image'];
				}

				$project_name = $row['name'];
				if($page_type != 'subcategory') {
					$project_name = tr($row['name']);
				}

				if($project_name == 'Huur mij in') {
					$project_name = tr($project_name);
				}
				

				?>
				<div class="bigLink">
					<img src="theme/svg/branch.svg" class="branchImage" />
					<a class="bigLinkContent<?php echo $project_type; ?>" href="<?php echo $full_url; ?>">
						<?php if($header_image != null) { ?>
						<div style="position:absolute;margin:0px;padding:0px;left:10px;top:0;right:10px;height:100%;opacity:0.18;background-image:url(files/<?php echo $header_image; ?>);box-sizing:border-box;background-size:100%;background-position:center;background-repeat:no-repeat;z-index:2;">
						</div>
						<?php } ?>

						<?php if(!$hire_me_page) { ?>
						<span class="projectMainType"><?php echo $project_main_type; ?></span>
						<?php } ?>
						
						<img src="theme/svg/leaf.svg" class="bigLinkImage" style="z-index:10;"/>
						<span style="z-index:10;"><?php echo $project_name; ?></span>
					</a>
				</div>
				<?php
			}
		} else if($page_type == 'search') {
			// categories
			echo '<div class="bodyText" style="background-color:transparent;"><h2>' . tr("categories") . '</h2></div>';
			while($row = $cat_query->fetch_assoc()) {
				$project_type = ' type0';
				$full_url = rawurlencode($row['name']);
				?>
				<div class="bigLink">
					<img src="theme/svg/branch.svg" class="branchImage" />
					<a class="bigLinkContent<?php echo $project_type; ?>" href="<?php echo $full_url; ?>">
						<img src="theme/svg/leaf.svg" class="bigLinkImage" />
						<span><?php echo tr($row['name']); ?></span>
					</a>
				</div>
				<?php
			}

			// subcategories
			// BIG PROBLEM: How do we get the link to each project? We need to get the cat and subcat for this link (not the current page)!
			//  => same is true for the projects below
			//  => I really don't want to add another mysql query
			//  => can I JOIN the subcat query with the category table, so that each row has the name of its parent (instead of the id)?
			//  => (If so, I can also join projects with the first subcat we find in category_links, and then join that with the parent again)
			echo '<div class="bodyText" style="background-color:transparent;"><h2>' . tr("subcategories") . '</h2></div>';
			while($row = $subcat_query->fetch_assoc()) {
				$project_type = ' type0';
				$full_url = rawurlencode($row['cat_name']) . '/' . rawurlencode($row['name']);
				?>
				<div class="bigLink">
					<img src="theme/svg/branch.svg" class="branchImage" />
					<a class="bigLinkContent<?php echo $project_type; ?>" href="<?php echo $full_url; ?>">
						<img src="theme/svg/leaf.svg" class="bigLinkImage" />
						<span><?php echo tr($row['name']); ?></span>
					</a>
				</div>
				<?php
			}

			// projects
			echo '<div class="bodyText" style="background-color:transparent;"><h2>' . tr("projects") . '</h2></div>';
			while($row = $project_query->fetch_assoc()) {
				// we don't want "hire me" pages
				if($row['type'] == 2) {
					continue;
				}

				// determine style based on project type
				$project_type = ' type' . $row['type'];
				$full_url = rawurlencode($row['cat_name']) . '/' . rawurlencode($row['subcat_name']) . '/' . rawurlencode($row['name']);
				?>
				<div class="bigLink">
					<img src="theme/svg/branch.svg" class="branchImage" />
					<a class="bigLinkContent<?php echo $project_type; ?>" href="<?php echo $full_url; ?>">
						<img src="theme/svg/leaf.svg" class="bigLinkImage" />
						<span><?php echo $row['name'] ?></span>
					</a>
				</div>
				<?php
			}
		}
	}
	?>

	</main>

	<footer>
		<div id="footer">
			<p style="margin-bottom:3px;"><?php echo tr("footer_credits"); ?></p>
			<span style="display:flex;margin-bottom:3px;">
				<input type="text" placeholder="<?php echo tr("search_placeholder"); ?>" id="footerSearch"/> 
				<button onclick="searchWebsite('footerSearch')"><?php echo tr("search"); ?></button>
			</span>
			<a href="" id="languageChangeLink"><?php echo tr("change_language_" . $LANG); ?></a>
			<a href="Over Mij/Algemene Voorwaarden/" id="generalTermsLink"><?php echo tr("general_terms"); ?></a>
			<a href="">Home</a>
			<a href="Over Mij"><?php echo tr("about_me"); ?></a>
		</div>
		<img src="theme/svg/greenBackground.svg" style="position:absolute;z-index:-10;transform:scaleY(-1);bottom:30px;" />
		<img src="theme/svg/bigFooter.svg" style="position:relative;z-index:20;margin-bottom:-5px;pointer-events:none;">
	</footer>

	<script>
		function searchWebsite(textField) {
			window.location.href = 'Over Mij/Zoeken/' + encodeURI(document.getElementById(textField).value);
		}

		document.getElementById("languageChangeLink").addEventListener("click", function(event) {
		  event.preventDefault()

		  setLanguage(<?php echo "'" . $LANG . "'"; ?>);
		});

		function setCookie(name, value, days) {
		    var expires = "";
		    if (days) {
		        var date = new Date();
		        date.setTime(date.getTime() + (days*24*60*60*1000));
		        expires = "; expires=" + date.toUTCString();
		    }
		    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
		}

		function setLanguage(cur_lang) {
			var new_lang = 'en';
			if(cur_lang == 'en') {
				new_lang = 'nl';
			}

			setCookie('site_language', new_lang, 14);
			location.reload(true);

			return false;
		}
	</script>
</body>

</html>