<?php
require __DIR__ . '/../vendor/autoload.php';

use \Src\config\DB;
use \Src\Modules\Identity\Fixture\IdentityFixture;
use \Src\Modules\Language\Fixture\LanguageFixture;
use \Src\Modules\Name\Fixture\NameFixture;
use \Src\Modules\Surname\Fixture\SurnameFixture;
use \Src\Modules\Tariff\Fixture\TariffFixture;
use \Src\Modules\User\Fixture\UserFixture;

$db = new \Src\config\DB('identity', 'root', '');

//$identityFixture = new IdentityFixture();
//$identityFixture->generate(100);

//$languageFixture = new LanguageFixture();
//$languageFixture->generate();

//$nameFixture = new NameFixture();
//$nameFixture->generate(100);

//$urnameFixture = new SurnameFixture();
//$urnameFixture->generate(100);

//$tariffFixture = new TariffFixture();
//$tariffFixture->generate(6);

$userFixture = new UserFixture();
$userFixture->generate(countItems: 100);

?>

