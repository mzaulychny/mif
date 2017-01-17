<?php
$debug=$_GET['debug'];

$navmenu_main=[
		'Name' => 'Головна сторінка',
		'Link' => '/',
		'Side' => 'Left'
];

$navmenu_catalog=[
		'Name' => 'Загальні відомості',
		'Link' => '?url=./generic_info.view.php',
		'Side' => 'Left'
];


$navmenu_president=[
		'Name' => 'Президент інституту',
		'Link' => '?url=./president.view.php',
		'Side' => 'Left'
];

$navmenu_vrada=[
		'Name' => 'Вчена рада інституту',
		'Link' => '?url=./vrada.view.php',
		'Side' => 'Left'
];

$navmenu_management=[
		'Name' => 'Менеджмент інституту',
		'Link' => '?url=./management.view.php',
		'Side' => 'Left'
];

$navmenu_experts=[
		'Name' => 'Наші експерти',
		'Link' => '?url=./experts.view.php',
		'Side' => 'Left'
];

 
$navmenu_conference=[
		'Name' => 'Конференції',
		'Link' => '?url=./conference.view.php',
		'Side' => 'Left'
];

$navmenu_photogalery=[
		'Name' => 'Фотогаларея',
		'Link' => '?url=./photogalery.view.php',
		'Side' => 'Left'
];

$navmenu_epublish=[
		'Name' => 'Електроне видання',
		'Link' => '?url=./epublish.view.php',
		'Side' => 'Left'
];

$navmenu_associations=[
		'Name' => 'Участь у асоціаціях та об\'єднання',
		'Link' => '?url=./associations.view.php',
		'Side' => 'Left'
];
 
$navmenu_publications=[
		'Name' => 'Публікації',
		'Link' => '?url=./publications.view.php',
		'Side' => 'Left'
];

$navmenu_publish=[
		'Name' => 'Видання',
		'Link' => '?url=./publish.view.php',
		'Side' => 'Left'
];

$navmenu_partners=[
		'Name' => 'Партнери',
		'Link' => '?url=./partners.view.php',
		'Side' => 'Left'
];


$navmenu_news=[
		'Name' => 'Новини',
		'Link' => '?url=./news.view.php',
		'Side' => 'Top'
];

$navmenu_advertisement=[
		'Name' => 'Оголошення',
		'Link' => '?url=./advertisement.view.php',
		'Side' => 'Top'
];

$navmenu_contacts=[
		'Name' => 'Контакти',
		'Link' => '?url=./contacts.view.php',
		'Side' => 'Top'
];

$navmenu_sitemap=[
		'Name' => 'Карта сайту',
		'Link' => '?url=./sitemap.view.php',
		'Side' => 'Top'
];

$navmenu_email=[
		'Name' => 'Електрона пошта',
		'Link' => '?url=./email.view.php',
		'Side' => 'Right'
];

$navmenu_greeteings=[
		'Name' => 'Привітання',
		'Link' => '?url=./greeteings.view.php',
		'Side' => 'Right'
];

$navmenu_expertviews=[
		'Name' => 'Думки експертів',
		'Link' => '?url=./expertviews.view.php',
		'Side' => 'Right'
];

$navmenu_anounses=[
		'Name' => 'Анонси',
		'Link' => '?url=./anounses.view.php',
		'Side' => 'Right'
];

$navmenu=[$navmenu_main, $navmenu_catalog, $navmenu_president, $navmenu_vrada, $navmenu_management, $navmenu_experts, 
		 $navmenu_conference, $navmenu_photogalery,$navmenu_epublish, $navmenu_associations, $navmenu_publications,
		$navmenu_publish, $navmenu_partners,
		$navmenu_news, $navmenu_advertisement, $navmenu_contacts, $navmenu_sitemap, 
		$navmenu_email, $navmenu_greeteings, $navmenu_expertviews, $navmenu_anounses];

?>