# Coding School
This is my personal repository used for learning purposes.

## About
I used these apps to work on my projects:
- Figma
- Visual Studio Code
- TablePlus
- XAMPP
- ChatGPT
- PhotoFiltre
- Inkscape
- Google Fonts

## Contents
- CSS projects
  - Chill Chinchillas
  - La Strada
  - Notion
  - Vence
  - Launch Button
- JS projects
  - Guest List
  - To-Do App
- PHP projects
  - Meal Counter
 
## Chill Chinchillas
A static multi-page website about chinchillas I created using HTML, CSS and JS.  
Purpose:  Practice of design layout, flexbox, grid, effects, animations, responsivity.  
Copyright: All rights reserved.  

## La Strada
A landing page of an existing website which I tried to replicate using HTML, CSS and JS.  
Purpose: Practice of design layout, flexbox, grid, effects, responsivity.  

## Notion
A landing page of an existing website which I tried to replicate using HTML and CSS.  
Purpose: Practice of design layout, flexbox, grid, effects, responsivity.  

## Vence
A landing page of an existing website which I tried to replicate using HTML and CSS.  
Purpose: Practice of design layout, flexbox, grid, effects, responsivity.  

## Lauch Button
A single button created using HTML and CSS.  
Purpose: Practice creativity and effects in button design.  

## Guest List
A small project created using HTML, CSS and JS.  
It is used to create a guestlist with credentials, such as name, phone number etc.  
It is possible to add and delete guests. A checkbox is added for each guest to mark attendace.  
It uses "@media print" so it is suitable for printing.  
Purpose: Practice of JS element creation, attribute setting, child appending, conditionals.  

## To Do App
A small incomplete project created using HTML, CSS and JS.  
Is is used to create a to-do list by adding tasks (consisting of task name and deadline).  
It is possible to add and delete tasks.  
Purpose: Practice of JS element creation, deletion, child appending, conditionals, event listeners.  

## Meal Counter
My largest personal project yet. It uses HTML, CSS, JS, PHP and SQL.  
I prototyped it using Figma before starting development.  
It is built on MVC architecture and written using OOP.  
It serves as a personal meal planner for seven days.  
Purpose: Final project during my full-stack web development course.  

Account management:
- display of user's registraion date
- email address can be changed
- password can be changed (all passwords are hashed)
- user can switch units to kCal/kJ
- user can switch to light/dark mode
- user can switch localization czech/english
- number of personal meals and ingredients
- account can be deleted prompting password confirmation
User management:
- users must create an account to make use of the app
- only authenticated in users can access inner parts of the app (otherwise they are redirected to login)
- unauthenticated users are provided with a different header component
- on login user data are called from DB and stored in session for further usage
- users can only access their personal content
- users can log out
Content management:
- user can create and delete ingredients using "ingredient counter"
- user can create and delete meals by adding ingrediends using "meal counter"
- user can plan daily diet in "meal plan" by adding created meals to each time for each day (incomplete)
- these contents are rendered using components and iterrations
- articles are localized as well and dependent on user's chosen localization
- all changes user makes are updated in session and in DB if necessary.

I also made heavy use of modals for small user interactions (for instance adding an ingredient).  
This project is still under development and parts of it are incompete.  
Copyright: All rights reserved.  
