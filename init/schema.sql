DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  status tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `flower`;

CREATE TABLE `flower` (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    description text NOT NULL,
    code varchar(255) NOT NULL,
    image_path varchar(255) NOT NULL,
    pollen int(11) NOT NULL,
    nectar int(11) NOT NULL,
    x decimal(11) NOT NULL,
    y decimal(11) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `user_flower`;

CREATE TABLE `user_flower` (
    user_id int(11) NOT NULL,
    flower_id int(11) NOT NULL,
    party_id int(11) NOT NULL,
    PRIMARY KEY (user_id,flower_id, party_id),
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (flower_id) REFERENCES flower(id)
);

DROP TABLE IF EXISTS `party`;

CREATE TABLE `party`(
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    status tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `party_user`;

CREATE TABLE `party_user` (
    user_id int(11) NOT NULL,
    party_id int(11) NOT NULL,
    nectar int(11) NOT NULL,
    pollen int(11) NOT NULL,
    PRIMARY KEY (user_id, party_id),
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (party_id) REFERENCES party(id)
);

