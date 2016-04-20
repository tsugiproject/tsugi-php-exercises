
Tsugi Workshop Exercises
========================

This is a simple set of exercises that you can download and work on.
There are a set of specifications linked from the `index.php` file
to describe each task.  You can see a hosted copy of the specs at:

* [Tsugi Exercise Specs](https://lti-tools.dr-chuck.com/tsugi-php-exercises/)

You probably want to fork this repository before you check it out
so you can check your code into your own copy of this repo.

Simple Installation and Configuration
-------------------------------------

In the simple installation scenario, you have already installed and 
configured Tsugi in a folder like:

    htdocs/tsugi

Once you have checked this code out, you need to create a config.php that
simply includes the `config.php` from the Tsugi directory.   For example
if you checked this code into a "peer" folder next to `tsugi`, your
`config.php` in this folder should be:

    <?php 
    require_once "../tsugi/config.php";

You will also need to inform Tsugi to search the new tool's folder
for files like `index.php`, `register.php`, and `database.php`.
To do this, edite the `$CFG->tool_folders` parameter in the 
Tsugi `config.php` file to include the relative path to this tool.

    $CFG->tool_folders = array("admin", "mod", ... ,
        "exercises", "../tsugi-php-exercises");

Once you have connected this tool to a Tsugi install as described above, 
you can use the Admin/Database Upgrade feature to create / maintain database 
tables for these tools.  You can also use the Developer mode of that Tsugi to
test launch this tool.   The LTI 2.0 support, CASA Support, and Content Item
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

Once you start developing Tsugi Applications, you should join the Tsugi 
Developers list so you can get announcements when things change.

    https://groups.google.com/a/apereo.org/forum/#!forum/tsugi-dev

Once you have joined, you can send mail to tsugi-dev@apereo.org

