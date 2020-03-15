@echo off
echo Please Press Enter key to procceed
echo Migrating..
C:\xampp\mysql\bin\mysql -u root -p < migrate/borrowing-system.sql
echo Adding Equipment Databse..
C:\xampp\mysql\bin\mysql -u root -p < migrate/migrate_db.sql
SET /P variable=Do You Want to Add Dummy Student Profile?(y)es or (n)o:
IF "%variable%"=="y" (
	C:\xampp\mysql\bin\mysql -u root -p < migrate/dummy-db.sql
	echo DUMMY DATABASE ADDED!
	)
echo Database Seed Success!!
pause



