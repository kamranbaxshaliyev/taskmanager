###################
Task Manager
###################

Task Manager is a simple web-based application built using CodeIgniter. It allows users to manage tasks with features such as creating, editing, deleting, and searching tasks. Each user has their own task list, ensuring separation of data.

*******************
Features
*******************

- User authentication (login/logout).
- Task management: Create, read, update, delete tasks.
- Search tasks by name or due date.
- Secure access with session-based authentication.
- Database migrations for easy setup.

************
Installation
************

1. Clone the repository:
   git clone https://github.com/kamranbaxshaliyev/taskmanager.git

2. Navigate to the project directory:
   
	cd task-manager


3. Create and configure your database as in `application/config/database.php` (as default you can create database 'task_manager').

4. Run migrations to set up the database schema via the browser or command line:

   - **Browser:** Navigate to `/taskmanager/migrate` to apply migrations.
   - **Command Line:**

     php index.php migrate


5. Start your web server and navigate to the project root.

*********
Usage
*********

1. Access the application in your browser.
2. Register a new user.
3. Log in with your credentials.
4. Start managing your tasks!

**************************
Security Considerations
**************************

- Passwords are securely hashed before storage.
- Users must authenticate to access the task manager.
- CSRF protection is enabled for form submissions.

***************
Contribution
***************

Feel free to fork this repository and submit pull requests. Contributions are always welcome!
