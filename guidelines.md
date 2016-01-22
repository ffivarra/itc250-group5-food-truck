## P2: Food Truck

- Due Thursday by 11:59pm 
- Points 50 
- Submitting a website url

For our second group project we'll be  building a PHP application that allows a user to select items from a menu as if they are ordering from a food truck.

**Classes Required:** Data for the food truck items must be stored in objects.

The application must:

- Allow items to be chosen from a form
- Display the items chosen and add and display the total cost
- Allow more than one of each item to be purchased
- Each item must have at least a **name**, **description** and **price**
- Disallow incorrect data and provide feedback, for example, when a user inputs a string, the data is not processed and the user is informed of the mistake.
- Be built as nearly as possible to [PSR-1 (Links to an external site.)](http://www.php-fig.org/psr/psr-1/) and [PSR-2 (Links to an external site.)](http://www.php-fig.org/psr/psr-2/) standards
- Be built with internal phpDocumentor documentation added

**Project Document:** Besides a working application, you must also show your program design pieces visually on a project document shared by your team and also with my email: [williamnewman@gmail.com](mailto:williamnewman@gmail.com)

**Visual Elements Required:** Your program design document should identify an IPO chart and a flowchart of how the application will operate and process data.

**Source Code via Repo Required:** Please show your source code iby placing your code in a repo and providing a link to your repo.  If you wish to use a private repo, you can use my GitHub username and share it with me:**newmanix**

**phpDocumentor Documentation Standards Followed: **The additional element we'll add to this project is the requirement to document your code internally per phpDocumentor standards.  View the lesson named**Documentation** on the class website for details!

**Extra Credit:** You can gain up to 10 points extra credit for building an application that properly includes all subtotals and sales tax to the purchase!

**Extra Extra Credit:** You can gain up to 20 extra points for allowing sides or toppings to particular items (for example, $.25 cents for adding cheese, etc.)



**For this lab our entire requirement will be:**

Build a PHP page that uses a form to allow clients to build their own sundae and select toppings. The sundae must be allowed to have a choice of at least three toppings, for example:

- chocolate
- pineapple
- peanuts

Once the user has ordered their sundae, you must produce output similar to this:

**_You ordered a sundae with chocolate, pineapple and peanuts_**

Note the placement of the word **AND**. You must get the syntax perfect for 100%. This means the word **and** is added (or removed) depending on the choices of the customer.  **No comma is allowed just before the word "and"** (no serial comma - [interesting background info (Links to an external site.)](http://answers.yahoo.com/question/index?qid=20080725094337AA3f833))

The form must properly handle any number of toppings, including none, perfectly. Check all inputs.

If the customer orders no toppings, instead the feedback should be something like:

**_You ordered a sundae with no toppings. That sounds boring!_**

**Extra Credit: 10** extra points for using **2** more toppings and handling the "**and**" issue perfectly!
