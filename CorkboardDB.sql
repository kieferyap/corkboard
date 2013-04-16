DROP DATABASE corkboarddb;
CREATE DATABASE corkboarddb;

CREATE TABLE users (
    userid serial PRIMARY KEY,
    email varchar(64),
	firstname varchar(128),
	lastname varchar(128)
);

CREATE SEQUENCE users_id_seq START 8;

CREATE TABLE courses (
    courseid serial PRIMARY KEY,
    instructorid integer REFERENCES users,
	name varchar(128),
	description text
);

CREATE TABLE usercourses (
	usercourseid serial PRIMARY KEY,
	userid integer REFERENCES users,
	courseid integer REFERENCES courses
);

CREATE TABLE badges (
	badgeid serial PRIMARY KEY,
	name varchar(128),
	image_url varchar(128)
);

CREATE TABLE studentbadges (
	studentbadgeid serial PRIMARY KEY,
	usercourseid integer REFERENCES usercourses,
	badgeid integer REFERENCES badges
);


INSERT INTO users VALUES(1, 'kiefer.yap@gmail.com', 'Kiefer', 'Yap');
INSERT INTO users VALUES(2, 'simon.hills@gmail.com', 'Simon', 'Hills');
INSERT INTO users VALUES(3, 'prof.oak@pokemon.com', 'Professor', 'Oak');
INSERT INTO users VALUES(4, 'prof.birch@pokemon.com', 'Professor', 'Birch');
INSERT INTO users VALUES(5, 'prof.rowan@pokemon.com', 'Professor', 'Rowan');
INSERT INTO users VALUES(6, 'prof.elm@pokemon.com', 'Professor', 'Elm');
INSERT INTO users VALUES(7, 'prof.juniper@pokemon.com', 'Professor', 'Juniper');

INSERT INTO courses VALUES (1, 3, 'HUM209', 'Human and Pokemon Dynamics');
INSERT INTO courses VALUES (2, 4, 'GEO133', 'Pokemon and Habitatsby Region');
INSERT INTO courses VALUES (3, 5, 'EVO157', 'Theory and Ethics ofPokemon Evolution');
INSERT INTO courses VALUES (4, 6, 'DEV201', 'Pokemon Abilities and Development');
INSERT INTO courses VALUES (5, 7, 'HIST147', 'Pokemon Origins and History');

INSERT INTO badges VALUES (1, 'Boulder Badge', 'http://cdn.bulbagarden.net/upload/thumb/d/dd/Boulder_Badge.png/50px-Boulder_Badge.png');
INSERT INTO badges VALUES (2, 'Cascade Badge', 'http://cdn.bulbagarden.net/upload/thumb/9/9c/Cascade_Badge.png/50px-Cascade_Badge.png');
INSERT INTO badges VALUES (3, 'Thunder Badge', 'http://cdn.bulbagarden.net/upload/thumb/a/a6/Thunder_Badge.png/50px-Thunder_Badge.png');

INSERT INTO usercourses VALUES (1, 1, 1);
INSERT INTO usercourses VALUES (2, 1, 2);
INSERT INTO usercourses VALUES (3, 1, 5);
INSERT INTO usercourses VALUES (4, 1, 3);
INSERT INTO usercourses VALUES (5, 2, 3);
INSERT INTO usercourses VALUES (6, 2, 2);
INSERT INTO usercourses VALUES (7, 2, 4);

INSERT INTO studentbadges VALUES (1, 1, 1);
INSERT INTO studentbadges VALUES (2, 5, 2);
INSERT INTO studentbadges VALUES (3, 7, 3);