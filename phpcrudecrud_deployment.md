Section #1 describes, in brief, the purpose of the PHP Crude CRUD Application.  What does it allow the user to do?
	The PHP Crude Crud application allows a user to deploy a LAMP stack web application through a virtual machine to allow a user to search, add, update, delete, and find employees stored on a database.

Section #2 that describes at a high level what the general steps are to create and an entirely new application architecture and stack from the "ground up."  Start with the provisioning of the Virtual Machine.  End with the deploying the PHP Crude CRUD app.  Just a few sentences.  Again this is just an overview, so the admin knows what's involved at the high-level.
	Install and configure VirtualBox, then create a new machine allocating all the minimum machines resources with Ubuntu 20.04 as its CD ram drive. Certain packages, including Apache2, PHP, and MySQL, will need to be installed to run the PHP Crude Crud application. Once they are all installed, the PHP Crude Crud app package can be pushed to the root of the server and deployed as a web application accessing it with an IP Address. 
	
Section 3: Virtual Machine configurations: The suggested configurations to run the PHP Crude Crud application on a virtual machine consists of:
-	Ubuntu 20.04 operating system
-	1 or 2 processors
-	2048 MB of base memory
-	40GB of disk space

Section #4 – Step by step instructions on how to create a VirtualBox Virtual Machine.
1.	Install and configure your platform’s Type 2 hypervisor such as VirtualBox.
2.	Create a new virtual machine within VirtualBox.
	1.	On the ribbon menu of VirtualBox, go to “Machine” -> select “New”
	2.	Choose your “Name”, “Type”, and “Version” of an operating system.
	3.	Delegate 2GB of base memory
	4.	Create a VDI hard disk -> select Dynamically allocated storage -> and delegate 40GB of storage.

Section #5 – Step by step instructions on how to install the Ubuntu 20.04 Operating System.
	1.On the web, locate a downloadable Disc Image File of Ubuntu 20.04
	2.Adding ubuntu as a disc in VirtualBox
		a.On the newly created virtual machine, go to “settings” -> “Storage” -> select the “Empty” disc -> Select “Choose a disk file…” -> select the Disc Image File of Ubuntu that was installed as a virtual CD Ram.
	3.Configure Ubuntu in VirtualBox
		a.Select “Start”
		b.Let the system load then Select “English” as a language -> “English (US)” keyboard layout.
		c.No proxy server or mirror address needed.
		d.Leave the Network Connections, Proxy, Ubuntu Archive Mirror, Guided Storage Configuration, and storage configuration as default.
		e.Enter your credentials for your “Profile setup”
		f.Let the system update and complete which should take several minutes

Section #6 – Step by step instructions on how to install Apache 2 and PHP
	1.Install Apache
		a.Commands to install Apache2
			i.sudo apt update
			ii.sudo apt upgrade
			iii.sudo apt install apache2
		b.Commands to install PHP and its various utilities
			i.sudo apt install php libapache2-mod-php php-cli php-mysql php-pgsql

Section #7 – Step by step instructions on how to install MySQL
	1.Commands to install MySQL
		a.sudo apt update
		b.sudo apt upgrade
		c.sudo apt install mariadb-server
		d.sudo systemctl status mariadb
		e.mysql -V
		f.sudo mysql_secure_installation     

Section #8 – Configuration information regarding connection and credentials needed for PHP to connect to the database.  And where that connection data is stored.
	•The PHP Crude Crud application needs to be stored on the root of the system in /var/www/html in order to present itself as a web application using index.html.
	•The below files that require access to the database
		oAddmployee.php
		oDeletemployee.php
		oFindemployeetable.php
		oFindemployee.php
		oUpdateemployee.php
		oAnd the rest of the .php files except credentials.php
	•The connection from the .php files such as addemployee.php utilizes the credentials.php file in order to access a connection with the MySQL connection. It includes credentials to the server’s name, user name, password, and database name. 

Section #9 – Step by step instructions on how to deploy the PHP Crude CRUD Application
	•To deploy the PHP Crude CRUD app, ensure the credentials on the credentials.php application is similar to the MySQL database credentials.
	•Push the PHP crude curd app to /var/www/html
	•The PHP Crude Crud contains an index.html which will represent the home page of PHP crude crud.

Section #10 - Suggest system tests to run to make sure the Application is working.
	System tests that can be run include searching for an employee with the last name “Weedman”. There should be an expected of over 10 results that arise,
Adding a test employee to the database through the web application, updating the test employee records, searching the test employee, and deleting the test employee. This will ensure the application is working and tied to the database. All of this can be used by clicking on the hyperlinks. 
