# Some Teams Project

A simple PHP-based website that lists football teams and displays information about each one. Website includes an About page describing the author.

## Project Overview

This website contains:

- **Start page _'index.php'_** - The homepage, which displays the football teams and information about them.

- **About page _'about.php'_** - A secondary page with information about the creator - background, skills and intrests.

## Tech Used

PHP, HTML, CSS

## Features

- Data about the teams displayed on the main page comes from _'data.php'_.
- Data about the author displayed on the about page comes from _'authors.php'_.
- _'index.php'_ loops through the data and renders a list of teams inside cards. The information about each team is displayed in a table (name, league, ranking and city).
- _'about.php'_ presents a personal "About me" section - who the author is, their skills as well as their hobbys and intrests. Information is also displayed in cards.
- No HTML output though PHP 'echo'.
- The project is built so that there are *no PHP notices, warnings or errors* when run in Mozilla Firefox, Google Chrome, Microsoft Edge. 

## Potential Future Improvements

- Adding a team detail page.
- Improving accessibility and mobile responsiveness.

## Lessons Learned

- Do not use Wikipedia's table standards as a reference, as they are outdated and often incorrectly implemented on older pages.
- Gained experience in keeping my code organized.


## License

This project is licensed under the MIT License.