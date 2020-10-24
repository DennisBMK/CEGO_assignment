# CEGO_assignment

## Installation
Download the files and get them into the same folder in your 
server eventually a LAMP or XAMP server setup.

## Explanation
The Get_and_check file starts by getting the data from the database and inserting it into a .csv file. 
After it has done that and saved the file it opens it back up and imports the data to make sure it has gotten all data and that it is the same as in the database.
If all the data is valid the software displays a button to make it possible to delete the data from the database.
When the button is pressed all data will get deleted from users table.

## Difficulties
The data is saved twice on each row in the .csv file ex. 0D00A443-93D3-8573-135D-8946397866A1,0D00A443-93D3-8573-135D-8946397866A1,Hayes,Hayes,Cruz,Cruz,dui@aliquetsem.org,dui@aliquetsem.org
