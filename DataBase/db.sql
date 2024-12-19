create database fut_builder;
use fut_builder;

create table players(
 id int PRIMARY key AUTO_INCREMENT,
    name_player VARCHAR(255) unique NOT NULL,
    position CHAR(5) NOT NULL,
    rating FLOAT(1,1) NOT NULL,
    status VARCHAR(255) NOT NULL CHECK (status IN  ("principe","reserve")),
    deleted_player DATE DEFAULT NULL
);
CREATE TABLE goal_keepers(
      player_id int ,
    FOREIGN KEY (player_id) REFERENCES players(id) ,
    diving int NOT NULL,
    handling int NOT NULL,
    kicking int NOT NULL,
    reflexes int NOT NULL,
    speed int NOT NULL,
    positioning int NOT NULL
    
);

CREATE TABLE no_goal_keepers(
   player_id int ,
    FOREIGN KEY (player_id) REFERENCES players(id) ,
    pace int NOT NULL,
    shooting int NOT NULL,
    passing int NOT NULL,
    dribbling int NOT NULL,
    defending int NOT NULL,
    physical int NOT NULL
);

CREATE TABLE clubs(
    id int PRIMARY key AUTO_INCREMENT,
    name int NOT NULL ,
    logo int NOT NULL ,
    player_id int ,
    FOREIGN KEY (player_id) REFERENCES players(id)   
);