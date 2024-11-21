CREATE TABLE `post` 
( `title` varchar(254) NOT NULL, 
`content` varchar(254) NOT NULL, 
 primary key (`title`) 
);

INSERT INTO post (title, content) 
VALUES ('receipt', 'watermelon 5 dollars, eggs 10 dollars, flour 6 dollars');

INSERT INTO post (title, content) 
VALUES ('mood', 'really happy and excited');

INSERT INTO post (title, content) 
VALUES ('event', 'At 10pm there is a conference in room c');