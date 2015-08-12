This is a very small PHP5 library, which makes it easy to develop web sites following the MVC pattern.

This library does not use mod-rewrite by default, but it is very easy to set up. This is so that the library is easy to use on IIS or other servers which do not support mod-rewrite.

Unlike many frameworks, it doesn't use active record. Instead, you write your own SQL. If you need active record, you could add an additional library such as coughphp.