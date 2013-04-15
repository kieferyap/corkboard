DROP DATABASE corkboarddb;
CREATE DATABASE corkboarddb;

CREATE TABLE users (
    userid serial PRIMARY KEY,
    email varchar(64),
	firstname varchar(128),
	lastname varchar(128)
);

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
