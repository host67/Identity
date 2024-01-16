CREATE TABLE user
(
    id              INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email           VARCHAR(190) NOT NULL UNIQUE,
    password        VARCHAR(255) NOT NULL,
    tariff_id       INT(6) UNSIGNED,
    tariff_date_end TIMESTAMP,
    token           VARCHAR(255),
    created_at      TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at      TIMESTAMP
);
CREATE TABLE tariff
(
    id                 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name               VARCHAR(255) NOT NULL,
    count_requests_day INT(4) UNSIGNED NOT NULL,
    price              INT(10) NOT NULL,
    created_at         TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at         TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at         TIMESTAMP
);
CREATE TABLE identity
(
    id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name_id     INT(6) UNSIGNED,
    surname_id  INT(6) UNSIGNED,
    language_id INT(6) UNSIGNED,
    age         INT(2) UNSIGNED,
    gender      TINYINT(1),
    email       VARCHAR(190) NOT NULL UNIQUE
);
CREATE TABLE identity_used

(
    id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id     INT(6) UNSIGNED,
    identity_id INT(6) UNSIGNED,
    created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE language
(
    id    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    value VARCHAR(255) NOT NULL
);
CREATE TABLE name
(
    id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    language_id INT(6) UNSIGNED,
    value       VARCHAR(255) NOT NULL,
    gender      TINYINT(1)
);
CREATE TABLE surname
(
    id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    language_id INT(6) UNSIGNED,
    value       VARCHAR(255) NOT NULL,
    gender      TINYINT(1)
);
