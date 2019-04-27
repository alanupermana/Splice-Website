###################
Splice Website
###################

Splice merupakan website untuk berbagi suatu project yang berhubungan dengan Design Audio, dimana para musisi, audio enginer, accompanist, atau bahkan user yang mendalami musik dapat meng-upload project musiknya. Website ini masih memiliki banyak fitur lainya.

*******************
Halaman yang dibangun
*******************

-	Home
-	Dashboard
-	Sign up
-	Log in
-	Studio
-	Community
-	Profile
-	Edit Profile


**************************
Halaman yang dijadikan sistem CRUD
**************************

-	Dashboard : Read Project 
-	Sign up : Create User
-	Log in : Read User berdasarkan Username dan Password
-	Studio : Create, Read, Update, Delete suatu Project
-	Community : Read Project
-	Profile : Read
-	Edit Profile : Create, Read, Update, Delete User


*******************
MVC Folder Index
*******************

**Controller** 	: Splice.php, User.php
**Model**				: User.php
**View**			
- Home 			: Index.php
- Login 		: loginUser.php
- Signup 		: signupUser.php
- Dashboard	: DashboardUser.php
- Studio 		: studioUser.php
- Community :communityUser.php
- Profile 	: Profile.php, editPorifle.php
