Microsoft Windows [Version 10.0.19042.985]
(c) Microsoft Corporation. All rights reserved.

C:\Users\Admin>cd
C:\Users\Admin

C:\Users\Admin>
C:\Users\Admin>cd/

C:\>cd xampp

C:\xampp>cd mysql

C:\xampp\mysql>cd bin

C:\xampp\mysql\bin>mysql -u root -p -h 127.0.0.1
Enter password:
ERROR 2002 (HY000): Can't connect to MySQL server on '127.0.0.1' (10061)

C:\xampp\mysql\bin>mysql -u root -p -h 127.0.0.1
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
Server version: 10.4.14-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| labactivity        |
| mysql              |
| netdbs-lastname    |
| performance_schema |
| phpmyadmin         |
| student_tab        |
| test               |
| valenzuela_bsit4   |
+--------------------+
9 rows in set (0.011 sec)

MariaDB [(none)]> use userlogin;
ERROR 1049 (42000): Unknown database 'userlogin'
MariaDB [(none)]> use valenzuela_bsit4
Database changed
MariaDB [valenzuela_bsit4]> show tables
    -> ;
+----------------------------+
| Tables_in_valenzuela_bsit4 |
+----------------------------+
| valenzuelateacher          |
+----------------------------+
1 row in set (0.002 sec)

MariaDB [valenzuela_bsit4]> describe user;
ERROR 1146 (42S02): Table 'valenzuela_bsit4.user' doesn't exist
MariaDB [valenzuela_bsit4]> describe user;
ERROR 1146 (42S02): Table 'valenzuela_bsit4.user' doesn't exist
MariaDB [valenzuela_bsit4]> describe valenzuelateacher
    -> ;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| Teacher ID | varchar(6)  | NO   | MUL | NULL    |       |
| Name       | varchar(50) | NO   |     | NULL    |       |
| Office     | varchar(50) | NO   |     | NULL    |       |
| Phone      | varchar(15) | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.020 sec)

MariaDB [valenzuela_bsit4]> INSERT INTO `valenzuelateacher`
 (`Teacher ID`, `Name`, `Office`, `Phone`) VALUES 
 ('RD1122', 'Rommel Dorin', 'CCS', '883-1864'), 
 ('CD0908', 'Cha Dechavez ', 'COE ', '854-8721'), 
 ('WS1106', 'Wilber Sabado ', 'CBA', '873-8855');
Query OK, 3 rows affected (0.007 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [valenzuela_bsit4]> select * from valenzuelateacher
    -> ;
+------------+----------------+--------+----------+
| Teacher ID | Name           | Office | Phone    |
+------------+----------------+--------+----------+
| RD1122     | Rommel Dorin   | CCS    | 883-1864 |
| CD0908     | Cha Dechavez   | COE    | 854-8721 |
| WS1106     | Wilber Sabado  | CBA    | 873-8855 |
+------------+----------------+--------+----------+
3 rows in set (0.006 sec)

MariaDB [valenzuela_bsit4]> alter table valenzuelateacher
    -> change Name teacherFullName;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual 
that corresponds to your MariaDB server version for the right syntax to use
 near '' at line 2
MariaDB [valenzuela_bsit4]> Update valenzuelateacher
    ->
    ->
    ->
    -> bruh
    -> no
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual
 that corresponds to your MariaDB server version for the right syntax to use 
 near 'no' at line 6
MariaDB [valenzuela_bsit4]> ALTER TABLE valenzuelateacher ADD COLUMN Email varchar<50>;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual 
that corresponds to your MariaDB server version for the right syntax to use 
near '<50>' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email varchar;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that
 corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email "varchar<50>";
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that
 corresponds to your MariaDB server version for the right syntax to use near '"varchar<50>"'
  at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email 'varchar<50>';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that
 corresponds to your MariaDB server version for the right syntax to use near ''varchar<50>'' 
 at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email varchar<50 NLL;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near '<50 NLL' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email varchar Null;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near 'Null' at line 1
MariaDB [valenzuela_bsit4]> (╯°□°）╯︵ ┻━┻
    ->
    -> /
    -> Hotdog!
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to
 your MariaDB server version for the right syntax to use near '?°?°)?? ???

/
Hotdog!' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email varchar;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to
 your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE valenzuelateacher ADD COLUMN Email varchar NOT NULL
 AUTOINCREMENT PRIMARY KEY;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near 'NOT NULL AUTOINCREMENT 
 PRIMARY KEY' at line 1
MariaDB [valenzuela_bsit4]>  ALTER TABLE `valenzuelateacher` ADD `Email` VARCHAR(50) NOT NULL
 AFTER `Phone`;
Query OK, 0 rows affected (0.340 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [valenzuela_bsit4]> describe valenzuelateacher;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| Teacher ID | varchar(6)  | NO   | MUL | NULL    |       |
| Name       | varchar(50) | NO   |     | NULL    |       |
| Office     | varchar(50) | NO   |     | NULL    |       |
| Phone      | varchar(15) | NO   |     | NULL    |       |
| Email      | varchar(50) | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
5 rows in set (0.015 sec)

MariaDB [valenzuela_bsit4]> Alter table valenzuelateacher
    -> change Name teacherFullName;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near '' at line 2
MariaDB [valenzuela_bsit4]> ALTER TABLE `valenzuelateacher` CHANGE `Name` `teacherFullName`
 VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
Query OK, 0 rows affected (0.018 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [valenzuela_bsit4]> describe valenzuelateacher;
+-----------------+-------------+------+-----+---------+-------+
| Field           | Type        | Null | Key | Default | Extra |
+-----------------+-------------+------+-----+---------+-------+
| Teacher ID      | varchar(6)  | NO   | MUL | NULL    |       |
| teacherFullName | varchar(50) | NO   |     | NULL    |       |
| Office          | varchar(50) | NO   |     | NULL    |       |
| Phone           | varchar(15) | NO   |     | NULL    |       |
| Email           | varchar(50) | NO   |     | NULL    |       |
+-----------------+-------------+------+-----+---------+-------+
5 rows in set (0.013 sec)

MariaDB [valenzuela_bsit4]> Truncate table valenzuelateacher;
Query OK, 0 rows affected (0.227 sec)

MariaDB [valenzuela_bsit4]> decribe valenzuelateacher;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near 'decribe valenzuelateacher'
  at line 1
MariaDB [valenzuela_bsit4]> select * from table valenzuelateacher;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds
 to your MariaDB server version for the right syntax to use near 'table valenzuelateacher' at 
 line 1
MariaDB [valenzuela_bsit4]> SELECT * FROM `valenzuelateacher`;
Empty set (0.001 sec)

MariaDB [valenzuela_bsit4]> show tables;
+----------------------------+
| Tables_in_valenzuela_bsit4 |
+----------------------------+
| valenzuelateacher          |
+----------------------------+
1 row in set (0.002 sec)

MariaDB [valenzuela_bsit4]> select * from valenzuelateacher
    -> ;
Empty set (0.001 sec)

MariaDB [valenzuela_bsit4]>