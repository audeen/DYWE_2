DROP TABLE IF EXISTS users;
CREATE TABLE users (
    `user_id` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    `u_name` VARCHAR(50) NOT NULL ,
    `u_pass` VARCHAR(50) NOT NULL 
    );

INSERT INTO users VALUES (1, 'admin', 'admin');

DROP TABLE IF EXISTS inhalt;
CREATE TABLE inhalt (
    `inhalt_id` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `id_art` INT(10) default '1',
    `i_img` VARCHAR(100) default '',
    `i_img_layout` VARCHAR(5) default '1',
    `i_img_anord` VARCHAR(5) default '1',
    `i_ueber` VARCHAR(100) default '1',
    `i_text` TEXT default '',
    `i_pdf`VARCHAR(100) default '',
    `i_zeit` INT(12) default 0
);

INSERT INTO inhalt VALUES (
    1,
    1,
    'walhai.jpg',
    1,
    1,
    "Der Walhai",
    "Der Walhai (Rhincodon typus) ist der größte Hai und zugleich der
    größte Fisch der Gegenwart. Es handelt sich um die einzige Art der
    Gattung Rhincodon, die wiederum die einzige Gattung innerhalb der
    Familie Rhincodontidae ist. Der Walhai gehört der Ordnung der
    Ammenhaiartigen an.",
    '',
    1540287161
);

DROP TABLE IF EXISTS art;
CREATE TABLE art (
    `art_id` INT(10) PRIMARY KEY AUTO_INCREMENT, 
    `a_name` VARCHAR(50) NOT NULL default ''
);

INSERT INTO art VALUES (
    1, 
    "FISCH"
);