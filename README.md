# MyFirstCRUD by Sergi Oliveres (aka solive93) @ Factoria F5 Full Stack dev Bootcamp.

This is a very basic CRUD app build with PHP and MySQL without using any framewok. It was one of my first projects in Factoria F5 Bootcamp, done in less than 2 weeks during COVID-19 Quarantine. 
========================================================================================================================================

This simple CRUD app simulates an online videogames store. The main user stories I thought about in order to build this app were :

1. As developer, I wanted to be able to perform basic CRUD operations against the database from my PHP in order to work with that data in my program. 

2. As user, I wanted to see all the available games to see what games can I play to. (AND additionally, I want to filter them by genre/category, price and release date so I can make a more accurate choice).

3. As admin, I wanted to be able to upload, edit and delete games from my online store.

At the end of the 'sprint', except of filtering the results, I managed to implement all the features I set as the 'sprint goal' I even implemented a feedback alert when a game was created, updated or deleted (working with in-session variables).

========================================================================================================================================

Features/functionalities I wish I had time to implement (I may implement them in the following days/weeks):

- Filtering the results by genre/price (as mentioned above).

- Handling the image stuff better. I wanted that the cards in which the games are displayed in the home page had an image. I didn't know how to work with images in MySQL (upload and retrieve them), and as it was not a priority for the project and I wanted to keep things simple, I just put the images in my project's image folder, and stored in the database the relative path to them. I should fix that an hadle better the image stuff in the future.

- Set relationships between tables in my database. That week we recieved a masterclass about relational databases, JOINS and this stuff. I tried to make my database more 'sophisticated' by creating a secondary table 'categories' and a pivot table so I could set a 'many-to-many' relationship between videogames and categories (a single game can belong to more than one category; f.e. we could consider 'Fortnite' as 'action', 'shooter', 'RPG' and 'multiplayer'). But after creating the tables and setting the relationships on PHP MyAdmin, I couldn't make a syntactically correct query to get all the games that belong to a specific category (despite the help of a StackOverflow guy).

========================================================================================================================================

The code may look a little bit "spaghettish", but take in mind I am a complete beginner and I a short period of time to complete this project. I had to invest large amount of time in 'study spikes' in order to figure out how to implement stuff. In the following days I will try to refactor and clean-up a little bit my code to fit 'good practices' (as much as possible with the knowledge I currently have).

Overall, I'd say I I learnt lots of useful stuff in this project. 
- I worked and got familiar with static methods.
- I used GET, POST and SESSION super globals.
- I scrapped the surface of MySQL relations and SQL syntax.

I also used Bootstrap (i never used it before) to make my app look nicer without spending much time with CSS, as it was a 'Back-End project' (and I had a short period of time to develop it). Plus, to improve our Front-End skills, in Factoria F5 we have a weekly assignment in which we have to clone a website using raw HTML and CSS (as well as some JS for animations if required). Check my webclone repo.

# solive93
