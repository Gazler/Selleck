Selleck
==============
Selleck is a template loader for php allowing you to output your templates in javascript when using a javascript mustache loader such as [icanjhaz.js][icanhaz.js]

[icanhaz.js]: http://icanhazjs.com/

Installation
------------
Simply include [selleck.php][selleck] into your application and you are
then ready to go.  You may need to change the templates directory in selleck.

[selleck]: https://github.com/Gazler/Selleck/blob/master/selleck.php
Usage
-----

You simply need to call render or js_template on the template you wish to load.

    $t = new Selleck();
    echo $t->render("index", array('name' => 'test'));
    echo $t->js_template("index", "index_template");


The second variable of render matches the usage of mustache with an assosciative array of the data.

In the above example, the template is simply:

    <h1>{{name}}</h1>

