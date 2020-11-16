Link to the lab exercises: http://localhost/Labwork/Lab1/
Lab exercise 1
Using HTML 5/HTML and CSS (you could use CSS and JavaScript libraries of framework), design a
simple but good-looking interface for an app (do not implement the server logic), which could allow
a user to:
- To create an account (using full name, email, city of residence, and profile photo)
- Login (to some empty page showing user full name, profile pic and logout button or link)
(email and password)
- And change password (using current and new password)
Also, design and implement the database that cab be used by this app interface (use MySQL DBMS).

Lab exercise 2
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

Lab exercise 3
Now remember the empty page (mentioned in lab 1) which shows your name, profile picture and a
logout button/link?
Well, from here, let’s assume we want to consume an API, which allows us to accomplish the
following: -
- Order food from a restaurant (sitting in a totally different web app) by entering the food
item and number of units you want. The API will respond back with order ID and total cost of
your order.
- Check the status of the order from another system by entering the order ID.
You are required to create a simple interface, which allows a user to accomplish the two tasks. Now
that the API is not working yet, just collect the information you need and inform the user that this
feature is coming soon.
Try to use ajax (maybe from jquery) so that you do not need to reload your page every time you are
doing something. You can also use bootstrap or any frontend framework of your choice. (there are
plenty frontend frameworks which you need to learn - react, vue, angular etc…)
