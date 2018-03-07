<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('Animal Farm');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('animalFarm152@gmail.com');
$fgmembersite->SetFromAddress('animalFarm152@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'id2929022_150students',
                      /*password*/'csci150',
                      /*database name*/'id2929022_pigpens',
                      /*table name*/'login');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('7Ef5fFpZTnbBVNf');

?>