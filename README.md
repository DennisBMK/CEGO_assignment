# CEGO_assignment

## Installation
Download the files and get them into the same folder in your 
server, it could eventually be a LAMP or XAMP server setup. Create new database called cego and insert SQL from https://github.com/cego/interview-assignment to have some data that is available to get, validate and delete. To run the software insert direction to Get_and_check.php file in your choosen browser.

## Explanation
The Get_and_check file starts by getting the data from the database and inserting it into a .csv file. 
After it has done that and saved the file it opens it back up and imports the data to make sure it has gotten all data and that it is the same as in the database.
If all the data is valid the software displays a button to make it possible to delete the data from the database.
When the button is pressed all data will get deleted from users table.

I've tested this on my XAMP server on a windows 10 OS, to make sure all settings are the same to replicate the result this would be the ideal setup.

## Difficulties
The data is saved twice on each row in the .csv file ex. 0D00A443-93D3-8573-135D-8946397866A1,0D00A443-93D3-8573-135D-8946397866A1,Hayes,Hayes,Cruz,Cruz,dui@aliquetsem.org,dui@aliquetsem.org
