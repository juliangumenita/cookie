<?php
  require "Cookie.php";

  Cookie::set("foo", "boo");
  /* Sets the cookie. */

  $cookie = Cookie::get("foo");
  /* Returns 'boo'. */

  Cookie::delete("foo");
  /* Deletes only one key. */

  Cookie::clear();
  /* Clears all of the keys. */
?>
