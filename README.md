# Task Management System (TMS) 

A **web-based Task Management System** built to help users organize, track, and prioritize tasks efficiently. Features secure authentication, CRUD operations, and dynamic filtering.  

---

## ✨ Features  
- **User Authentication**: Register, login, and logout with password hashing for security.  
- **Task Management**:  
  - Add, edit, delete, and mark tasks as complete.  
  - Set task details: description, due date, and priority (High/Medium/Low).  
- **Smart Filtering**: Sort tasks by due date or priority.  
- **Responsive UI**: Works on desktop and mobile (Bootstrap-powered).  

---

## 🛠️ Technologies  
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5  
- **Backend**: PHP (with PDO for SQL injection prevention)  
- **Database**: MySQL  
- **Tools**: XAMPP (Apache/MySQL), Visual Studio Code  

---

## 🚀 Installation  
1. **Prerequisites**:  
   - Install [XAMPP](https://www.apachefriends.org/) (Apache + MySQL).  
2. **Setup**:  
   - Clone this repo into `xampp/htdocs/`:  
     ```bash
     git clone https://github.com/your-username/task-management-system.git
     ```  
   - Start Apache and MySQL via XAMPP Control Panel.  
3. **Database**:  
   - Open phpMyAdmin (`http://localhost/phpmyadmin`).  
   - Create a database named `tms` and import `tms.sql` (located in `/database`).  
4. **Run**:  
   - Access the app at `http://localhost/task-management-system`.  

---

## 🔑 Default Credentials  
| Username | Password |  
|----------|----------|  
| `Danial` | `danial` |  
| `Harriz` | `harriz` |  

---

## 📂 Project Structure  
```plaintext
tms/  
├── assets/          # CSS/JS/Images  
├── database/        # SQL files  
├── includes/       # PHP classes (e.g., Database.php)  
├── pages/          # Login, register, task views  
└── index.php       # Entry point  
