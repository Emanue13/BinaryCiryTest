CREATE TABLE users (
  user_id VARCHAR(10) PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  middle_name VARCHAR(50),
  last_name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone_number VARCHAR(20) NOT NULL
);



//*This code creates a table called "users" with columns for user ID, first name, middle name, 
last name, email,and phone number.I It also created a trigger called "generate_user_id" 
that automatically generates a unique user ID before a new row is inserted into the table.*//



DELIMITER $$
CREATE TRIGGER generate_user_id
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
  DECLARE initial_1 CHAR(1);
  DECLARE initial_2 CHAR(1);
  DECLARE initials VARCHAR(3);
  DECLARE suffix INT;
  SET initial_1 = UPPER(SUBSTR(NEW.first_name, 1, 1));
  IF NEW.middle_name IS NULL THEN
    SET initial_2 = '';
  ELSE
    SET initial_2 = UPPER(SUBSTR(NEW.middle_name, 1, 1));
  END IF;
  SET initials = CONCAT(initial_1, initial_2, UPPER(SUBSTR(NEW.surname, 1, 1)));
  SET suffix = 1;
  WHILE EXISTS (SELECT * FROM users WHERE user_id = CONCAT(initials, LPAD(suffix, 3, '0'))) DO
    SET suffix = suffix + 1;
  END WHILE;
  SET NEW.user_id = CONCAT(initials, LPAD(suffix, 3, '0'));
END $$
DELIMITER ;


/*The trigger first sets the initial letters of the first name, middle name , and last name to variables. 
It then concatenates these initials and adds a 3-digit suffix to create a potential user ID. 
If a user with that user ID already exists, 
the suffix is incremented and the process is repeated until a unique user ID is generated.*/