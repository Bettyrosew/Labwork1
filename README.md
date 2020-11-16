# Labwork1
Lab exercise 1 and 2
Using HTML 5/HTML and CSS (you could use CSS and JavaScript libraries of framework), design a simple but good-looking interface for an app (do not implement the server logic), which could allow a user to:

To create an account (using full name, email, city of residence, and profile photo)
Login (to some empty page showing user full name, profile pic and logout button or link) (email and password)
And change password (using current and new password)
It is time to implement your logic for the interfaces and database you designed.
You will create a class User , which implement the Account interface provided below.
Interface Account {
public function register ($pdo);
public function login($pdo);
public function changePassword($pdo);
public function logout ($pdo);
}
$pdo is the database connection handle
In your User class, you may add other supporting methods or setters and getters.
Other requirements…
Validate your form inputs both in client side and server side.
Passwords are hashed using PHP’s password_hash () function.
Database connection uses PDO
Link to application: C:\xampp\htdocs\Labwork\Lab1
