# CHANGELOG

### Changelog for v1.3
--------------------

* add cs-diff command,, which will run cs fixer in dry mode with --diff flag
* get rid of the warnings when cs-fixer without an argument is called

### Changelog for v1.2.0
--------------------

* fix small bug in pre-commit script
* make it possible to override finder rules

### Changelog for v1.1.2
--------------------

* handle the erorr if the git pre-commit script is not initialized

### Changelog for v1.1.1
--------------------

* fixed cs-fixer script, try to find php-cs-fixer in both bin/ and vendor/bin dirs

### Changelog for v1.1
--------------------

* added cs-fixer exec file that provides api for all available commands (the file is copied in composer bin dir)
* added var dir in exclude list

### Changelog for v1.0
------------------

* First release
