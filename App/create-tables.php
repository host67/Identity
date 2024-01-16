<?php
require '../vendor/autoload.php';
$faker = Faker\Factory::create();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "identity";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
dd($pdo);
/*
try {


    // Массив с SQL запросами для создания таблиц
    $tables = array(
        "CREATE TABLE User (
           id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           email VARCHAR(190) NOT NULL UNIQUE,
           password VARCHAR(255) NOT NULL,
           tariff_id INT(6) UNSIGNED,
           tariff_date_end TIMESTAMP,
           token VARCHAR(255),
           created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
           updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
           deleted_at TIMESTAMP 
        );",
        "CREATE TABLE Tariff (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            count_requests_day INT(4) UNSIGNED NOT NULL,
            price INT(10) NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            deleted_at TIMESTAMP
        )",
        "CREATE TABLE Identity (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             name_id INT(6) UNSIGNED,
             surname_id INT(6) UNSIGNED,
             language_id INT(6) UNSIGNED,
             age INT(2) UNSIGNED,
             gender TINYINT(1),
             email VARCHAR(190) NOT NULL UNIQUE
        )",
        "CREATE TABLE IdentityUsed (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             user_id INT(6) UNSIGNED,
             identity_id INT(6) UNSIGNED,
             created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        )",
        "CREATE TABLE Language (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             value VARCHAR(255) NOT NULL
        )",
        "CREATE TABLE Name (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             language_id INT(6) UNSIGNED,
             value VARCHAR(255) NOT NULL,
             gender TINYINT(1)
        )",
        "CREATE TABLE Surname (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             language_id INT(6) UNSIGNED,
             value VARCHAR(255) NOT NULL,
             gender TINYINT(1)
        )"
    );

    foreach ($tables as $table) {
        // Выполнение каждого запроса
        $pdo->exec($table);
    }

    echo "Tables created successfully";
} catch(PDOException $e) {
    echo "Error creating tables: " . $e->getMessage();
}
*/

/*
// Заполнение таблицы User
for ($i = 0; $i < 20; $i++) {
    $email = $faker->unique()->safeEmail;
    $password = $faker->password;
    $tariff_id = $faker->randomNumber(2);
    $tariff_date_end = $faker->dateTimeBetween('now', '+3 months')->format('Y-m-d H:i:s');
    $token = bin2hex(random_bytes(16));
    $created_at = $faker->dateTime()->format('Y-m-d H:i:s');
    $updated_at = $faker->dateTime()->format('Y-m-d H:i:s');
    $stmt = $pdo->prepare("INSERT INTO User (email, password, tariff_id, tariff_date_end, token, created_at, updated_at) VALUES (:email, :password, :tariff_id, :tariff_date_end, :token, :created_at, :updated_at)");
    $stmt->execute([
        'email' => $email,
        'password' => $password,
        'tariff_id' => $tariff_id,
        'tariff_date_end' => $tariff_date_end,
        'token' => $token,
        'created_at' => $created_at,
        'updated_at' => $updated_at
    ]);
}

// Заполнение таблицы Tariff
for ($i = 0; $i < 5; $i++) {
    $name = $faker->word;
    $count_requests_day = $faker->numberBetween(1, 1096);
    $price = $faker->randomNumber(2);
    $stmt = $pdo->prepare("INSERT INTO Tariff (name, count_requests_day, price) VALUES (:name, :count_requests_day, :price)");
    $stmt->execute(['name' => $name, 'count_requests_day' => $count_requests_day, 'price' => $price]);
}

// Заполнение таблицы IdentityUsed
for ($i = 0; $i < 20; $i++) {
 $user_id = $faker->numberBetween(1, 20); // 20 пользователей
 $identity_id = $faker->numberBetween(1, 20);
 $created_at = $faker->dateTimeThisDecade->format('Y-m-d H:i:s');

 $stmt = $pdo->prepare("INSERT INTO IdentityUsed (user_id, identity_id, created_at) VALUES (:user_id, :identity_id, :created_at)");
 $stmt->execute(['user_id' => $user_id, 'identity_id' => $identity_id, 'created_at' => $created_at]);
}

// Заполнение таблицы Identity
for ($i = 0; $i < 20; $i++) {
 $name_id = $faker->numberBetween(1, 20); // 20 имен
 $surname_id = $faker->numberBetween(1, 20);
 $language_id = $faker->numberBetween(1, 5); // 5 языков
 $age = $faker->numberBetween(18, 65);
 $gender = $faker->numberBetween(0, 1);
 $email = $faker->unique()->safeEmail;

 $stmt = $pdo->prepare("INSERT INTO Identity (name_id, surname_id, language_id, age, gender, email) VALUES (:name_id, :surname_id, :language_id, :age, :gender, :email)");
 $stmt->execute(['name_id' => $name_id, 'surname_id' => $surname_id, 'language_id' => $language_id, 'age' => $age, 'gender' => $gender, 'email' => $email]);
}

// Заполнение таблицы Language
$languages = ['Русский', 'Английский', 'Французский', 'Испанский', 'Немецкий'];
for ($i = 0; $i < 5; $i++) {
    $value = $languages[$i];
    $stmt = $pdo->prepare("INSERT INTO Language (value) VALUES (:value)");
    $stmt->execute(['value' => $value]);
}

// Заполнение таблицы Name
for ($i = 0; $i < 20; $i++) {
    $language_id = $faker->numberBetween(1, 5); // Предполагая, что у вас есть 5 языков
    $value = $faker->firstName;
    $gender = $faker->numberBetween(0, 1);

    $stmt = $pdo->prepare("INSERT INTO Name (language_id, value, gender) VALUES (:language_id, :value, :gender)");
    $stmt->execute(['language_id' => $language_id, 'value' => $value, 'gender' => $gender]);
}

// Заполнение таблицы Surname
for ($i = 0; $i < 20; $i++) {
    $language_id = $faker->numberBetween(1, 5); // Предполагая, что у вас есть 5 языков
    $value = $faker->lastName;
    $gender = $faker->numberBetween(0, 1);

    $stmt = $pdo->prepare("INSERT INTO Surname (language_id, value, gender) VALUES (:language_id, :value, :gender)");
    $stmt->execute(['language_id' => $language_id, 'value' => $value, 'gender' => $gender]);
}

//$pdo = new \Src\migrations\Migration($db->pdo);
function dd($arr) {
    echo "<pre>" . print_r($arr, true) . "</pre>";
}

*/

echo "<pre>";
$query = $pdo->query("SELECT * FROM identity");
while ($row = $query->fetch()) {
    print_r($row);
}
echo "</pre>";
$pdo = null;
?>
