<?php

// -------------------------------------------------------------------------
// Basic variable related bugs
// -------------------------------------------------------------------------

//ERROR: unused param
function vars_bad_foo($a) {

  $ok = 1;
  vars_bar($ok);

  //ERROR: unused variable
  $c = 1;

  //ERROR: use of undefined variable
  echo $b;

  //ERROR: use of undefined variable
  vars_bar($d);

  //ERROR: unused variable. Yes it's used by unset but this should not count
  $memory = 1;
  unset($memory);

  //ERROR: unused variable
  $match = array();
  // note that this error shows the need for more than just counting token
  $matches = array();
  foreach($matches as $match) {
    echo $match;
  }
}

class vars_A {
  public function foo($a) {
    //ERROR: unused variable, because of the typo below
    $im_service = vars_bar($a);
    //ERROR: typo
    if ($im_servce === false) {
      return 1;
    }
    return 2;
  }
}

// -------------------------------------------------------------------------
// Algorithm cleverness
// -------------------------------------------------------------------------

// A first algorithm idea proposed by sgrimm was just to count the number
// of occurences for each variables (T_DOLLAR_...)
// and if one variable is mentionned only once, then it's probably a bug.
// It requires just a lexer. Many typos can be detected by this simple 
// algorithm.
function analysis1() {
  //ERROR:
  $occured_only_once_in_this_file = 1;
  //ERROR:
  echo $occured_also_only_once_in_this_file;
}

// If one unused variable in a function happened to be also defined and used
// in another function, then the token-based solution will not detect it.
// You need at least a parser and a basic AST to catch such bugs.
// Moreover it's also ok sometimes to have one variable mentioned
// only once in a file, if it's a parameter of a method in an interface
// definition for instance.

function analysis2() {
  //ERROR: even if $ok was mentionned before, it's no ok anymore
  $ok = 1;
}

interface X {
  // this is ok, $p is not a unused parameter
  function analysis2bis($p);
}

// TODO cfg-based algorithm ??

// TODO liveness-based algorithm
function analysis4() {
  //TODO should be error. useless assignement
  $a = 1;
  $a = 2;
  echo $a;
}

function analysis4bis() {
  $a = 1;
  if (true) { $a = 2; }
  echo $a;
}

function analysis4bis2() {
  //TODO should be error. there is no path where this assignement is useful
  $a = 1;
  if (true) { 
    $a = 2; 
  } else {
    $a = 3;
  }
  echo $a;
}

// -------------------------------------------------------------------------
// False positives fix
// -------------------------------------------------------------------------
// My analysis used to have a few false positives because my code was buggy.

function vars_ok_keyword_arguments() {
  // no error for now even if $key appeared as unused. PHP has no
  // keyword arguments so people use such assignation as a kind of
  // comment
  vars_bar($key = 1);
}

function vars_ok1() {
  $a = 1;
  if (isset($a)) {
    return $a;
  }
  return 2;
}

function vars_ok2() {
  $db_scb_key = 1;
  if (!isset(A::$dbGetters[$db_scb_key])) {
    return 2;
  }
}


// keyword arguments should be considered even when deeply nested ... hmmm
function vars_ok3() {
  vars_bar(vars_bar($key = 1));
}

// -------------------------------------------------------------------------
// TODO
// -------------------------------------------------------------------------

function vars_bad_compact() {

  // this should not generate a warning for now. At some point
  // we want to remove all those ugly compact() but before that, no error.

  //ERROR: todo actually should not generate error
  $foo = 1;
  // this function is horrible. it's the opposite of extract()
  $arr = compact('foo');

  return $arr;
}

// -------------------------------------------------------------------------
// auxillary functions
// -------------------------------------------------------------------------

function vars_bar($key) {
  echo $key;
}

//builtin, now in data/php_stdlib/
//function compact($_x) {}
