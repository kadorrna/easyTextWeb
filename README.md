easyTextWeb
===


## Main idea
The idea is to have a web without databases or heavy background in php that can have editable texts.
This is only to do simple web pages and have a "CMS" to edit texts for the user.

## Security
This example has no users security, I think that security can be provided with htaccess directly, or a database for the users.
But the objective of this is to be used by an unique user that want to edit his own texts.


## Usage
# Once you have the web running
1. /admin/texts.json, add all the keys and texts
2. index.php, add id="key" to have the text filled in the element.

#once you have all set, from you domain/admin/login.php
1. Login
2. Change texts
3. Save