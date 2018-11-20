DROP TABLE IF EXISTS user;
CREATE TABLE user (
    `u_id` INT(10) NOT NULL AUTO_INCREMENT ,
    `u_name` VARCHAR(50) NOT NULL ,
    `u_pw` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`u_id`)
    ) ;

INSERT INTO user VALUES (1, 'admin', 'admin');

DROP TABLE IF EXISTS inhalt;
CREATE TABLE inhalt (
    `i_id` INT(10) NOT NULL AUTO_INCREMENT ,
    `i_f` INT(10) default 1,
    `image` VARCHAR(100),
    `image_layout` VARCHAR(1) default 1,
    `image_anordnung` VARCHAR(1) default 1,
    `ueberschrift` VARCHAR(100),
    `text` TEXT,
    `pdf`VARCHAR(100),
    `speicherzeit` INT(12) default 0,
    PRIMARY KEY (`i_id`)
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
    `a_id` INT(10) NOT NULL AUTO_INCREMENT, 
    `a_name` VARCHAR(50),
    PRIMARY KEY (`art_id`)
);

INSERT INTO art VALUES (
    1, 
    "FISCH"
);