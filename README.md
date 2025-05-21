Install xampp
Create database phpMyAdmin
Copy Folder to C:\xampp\htdocs
Open Link : http://localhost/datatable_json

1. How to create Table "department" in database phpMyAdmin
Code 
CREATE TABLE department (
    department_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    department_name varchar(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;
  
Code for adding data to the table
Code
INSERT INTO department (department_id,department_name) VALUES('1','Information Technology');
INSERT INTO department (department_id,department_name) VALUES('2','Human Resource');
INSERT INTO department (department_id,department_name) VALUES('3','Finance');
INSERT INTO department (department_id,department_name) VALUES('4','Accounting');

-------------------------------------------------------------------------------------------------------------

2. How to create Table "employee" in database phpMyAdmin
Code
CREATE TABLE employee (
    employee_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50) NOT NULL
    lastname varchar(50) NOT NULL
    department_id int(10) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

Code for adding data to the table
Code
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('1','Amelia','Margaret','2');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('2','Olivia','Samantha','2');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('3','Bethany','Sophia','3');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('4','Emily','Elizabeth','3');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('5','Jessica','Lauren','4');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('6','Smith','Murphy','1');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('7','Thomas ','O'Connor','1');
INSERT INTO employee (employee_id,firstname,lastname,department_id) VALUES('8','Lam','Williams','4');

3.Join Table 1: department with Table 2: employee using a LEFT JOIN. Use data from the department table as the primary source, 
and SELECT the specified fields. Use CONCAT to combine firstname and lastname into a single column.
Code
SELECT 
    employee_id,
    CONCAT(firstname, ' ', lastname) As employee_title,
    department_name
FROM department 
LEFT JOIN employee
ON employee.department_id = department.department_id;

Note : This PHP code connects to a database, performs a SQL query, converts the retrieved data into JSON format, and outputs the result using echo.
