# SQL Injection and Prevention

<p align="center">
<a href="https://sql-injection-and-prevention.herokuapp.com/">
<img src="./public/assets/SQL Injection.png" width="60%" alt="sql-injection-and-prevention" />
</a>
</p>

Demonstrates SQL injection attacks using malicious SQL queries and SQL prevention techniques.

[Deployed project link](https://sql-injection-and-prevention.herokuapp.com/)

---

## Table of content

- [Demo](#Demo)
  - [SQL Injection Demo](#SQL-Injection-Demo)
  - [Navbar Demo](#Navbar-Demo)
- [What's unique in this Project](#whats-unique-in-this-project)
- [What's SQL Injection](#whats-sql-injection)
- [Technologies](#Technologies)
- [Installation](#Installation)
- [Contributors](#Contributors)

---

## Demo

### SQL Injection Demo

- In this demo, the Database Schema is displayed first
- Later, 4 sets of Login credentials are tested:
	1. Correct credentials present in the user database
	2. Wrong credentials to show the failure message
	3. First SQL Injection example is demonstrated
	4. Later the Second SQL Injection example is demonstrated


<p>
<img src="./public/assets/SQL Injection Login.gif" alt="SQL Injection" />
</p>

### Navbar Demo

- In this demo, the Navigation bar is demonstrated
<p>
<img src="./public/assets/SQL Injection Navbar.gif" alt="SQL Injection" />
</p>

---

## What's unique in this Project

- The project is deployed as Microservices of Front-end, Server, and Database using Heroku Cloud Platfrom
- Demostrates SQL Injection in an elegant way using **LAMP** stack
- Follows best practices and code readability 

---

## What's SQL Injection

- SQL injection is an attack used to take over database servers by dynamically poisoning SQL queries.
- In this attack, a special SQL query is passed as user input to the login page.
- Later, when the backend code compiles the input along with the SQL query.
- The code then gets hijacked because these queries will change the meaning of the backend code.
- The SQL injection queries used for this demonstration project are:
' or 1=1--
- This query will change all the SQL statement always true because of the or keyword.
- And the rest of the SQL statement after '--' will be commmented.
admin' or '1'='1
- This query will change all the SQL statement will also always be true.
Because of the or keyword, and the two expression producting true values.

---

## Technologies

### Front End

- [HTML5](https://html.com/)
- [CSS3](https://www.w3.org/Style/CSS/Overview.en.html)
- [Bootstrap4](https://getbootstrap.com/)
- [JavaScript](https://www.javascript.com/)

### Back End

- [XAMPP](https://www.apachefriends.org/download.html)
    - [Apache HTTP Server](https://httpd.apache.org/)
    - [MariaDB database](https://mariadb.com/)
    - [PHP](https://www.php.net/)

---

## Installation
To get the project working, you need to install the following dependencies.
1. [XAMPP Control Panel](https://www.apachefriends.org/download.html)
2. [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli)

---

## Contributors

- T Aswin Barath <https://github.com/AswinBarath>

---

**[⬆ Back to Top](#Table-of-content)**