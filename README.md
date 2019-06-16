
Tsugi Workshop Exercises
========================

This is a component of the [Tsugi PHP Project](https://github.com/tsugiproject/tsugi).

This is a simple set of exercises that you can download and work on.
There are a set of specifications linked from the `index.php` file
to describe each task.  You can see a hosted copy of the specs at:

* [Tsugi Exercise Specs](https://lti-tools.dr-chuck.com/exercises/)

Pre-Requisites
--------------

In the simple installation scenario, you have already installed,
configured, and set up the databases for Tsugi in a folder like:

    htdocs/tsugi


You probably want to fork this repository before you check it out
so you can check your code into your own copy of this repo into a peer
folder right next to `htdocs/tsugi`.

    cd htdocs
    git clone https://github.com/YOUR_GITHUB/tsugi-php-exercises.git 


Simple Installation and Configuration
-------------------------------------

You will need to inform Tsugi to search the new tool's folder
for files like `index.php`, `register.php`, and `database.php`.
To do this, edite the `$CFG->tool_folders` parameter in the 
Tsugi `config.php` file to include the relative path to this tool.

    $CFG->tool_folders = array("admin", "mod", 
        ... , "../tsugi-php-exercises");

Once you have connected this tool to a Tsugi install as described above, 
you can use the Admin/Database Upgrade feature to create / maintain database 
tables for these tools.  You can also use the Developer mode of that Tsugi to
test launch this tool.   The App Store Deep Linking, and Content Item
support for the controlling Tsugi will know about this tool.

Launching and Testing This Code
-------------------------------

To launch the tools (assuming installed as described above) go to:

    http://localhost/tsugi/dev.php
    http://localhost:8888/tsugi/dev.php  (for MAMP)

And all these tools should show up in the drop-down for easy testing 
and launching.
 
Tsugi Developer List
--------------------

You should join the Tsugi Developers list so you can get 
announcements when things change.

    https://groups.google.com/a/apereo.org/forum/#!forum/tsugi-dev

Once you have joined, you can send mail to tsugi-dev@apereo.org

