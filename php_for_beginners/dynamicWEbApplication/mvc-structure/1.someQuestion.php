<?php
/*
some empty value if the empty() function find those value then it will return true
These values are considered to be empty values:

    “”  ( an empty string)
    0  ( 0 as an integer)
    0.0 ( 0 as a float)
    “0” ( 0 as a string)
    NULL
    FALSE
    array() (an empty array)
    */
//create 10 varaible with empty value which give false in empty() function
$var1 = 0;
$var2 = 0.0;
$var3 = '';
$var4 = '0';
$var5 = false;
$var6 = [];
$var7 = null;
$var8 = 'null' ;
$var9 = 'false';
$var10 = '0.0';
// cheak every variable with empty() function
var_dump(empty($var1));
var_dump(empty($var2));
var_dump(empty($var3));
var_dump(empty($var4));
var_dump(empty($var5));
var_dump(empty($var6));
var_dump(empty($var7));
var_dump(empty($var8));
var_dump(empty($var9));
var_dump(empty($var10));
?>
<h1>Cheaking every variable with empty()</h1>
?>
<?php
// cheak every variable with isset() function
var_dump(isset($var1));
var_dump(isset($var2));
var_dump(isset($var3));
var_dump(isset($var4));
var_dump(isset($var5));
var_dump(isset($var6));
var_dump(isset($var7));
var_dump(isset($var8));
var_dump(isset($var9));
var_dump(isset($var10));
?>
<h1>cheak every variable with isset() function</h1>
<?php
// cheak every variable with is_null() function
var_dump(is_null($var1));
var_dump(is_null($var2));
var_dump(is_null($var3));
var_dump(is_null($var4));
var_dump(is_null($var5));
var_dump(is_null($var6));
var_dump(is_null($var7));
var_dump(is_null($var8));
var_dump(is_null($var9));
var_dump(is_null($var10));
?>
<h1>cheak every variable with is_null() function</h1>
<?php
// cheak every variable with is_numeric() function
var_dump(is_numeric($var1));
var_dump(is_numeric($var2));
var_dump(is_numeric($var3));
var_dump(is_numeric($var4));
var_dump(is_numeric($var5));
var_dump(is_numeric($var6));
var_dump(is_numeric($var7));
var_dump(is_numeric($var8));
var_dump(is_numeric($var9));
var_dump(is_numeric($var10));
?>
<h1>cheak every variable with is_numeric() function</h1>
<?php
// cheak every variable with is_string() function
var_dump(is_string($var1));
var_dump(is_string($var2));
var_dump(is_string($var3));
var_dump(is_string($var4));
var_dump(is_string($var5));
var_dump(is_string($var6));
var_dump(is_string($var7));
var_dump(is_string($var8));
var_dump(is_string($var9));
var_dump(is_string($var10));
?>
<h1>cheak every variable with is_string() function</h1>
<?php
// cheak every variable with is_bool() function
var_dump(is_bool($var1));
var_dump(is_bool($var2));
var_dump(is_bool($var3));
var_dump(is_bool($var4));
var_dump(is_bool($var5));
var_dump(is_bool($var6));
var_dump(is_bool($var7));
var_dump(is_bool($var8));
var_dump(is_bool($var9));
var_dump(is_bool($var10));
?>
<h1>cheak every variable with is_bool() function</h1>
<?php

// cheak every variable with is_array() function
var_dump(is_array($var1));
var_dump(is_array($var2));
var_dump(is_array($var3));
var_dump(is_array($var4));
var_dump(is_array($var5));
var_dump(is_array($var6));
var_dump(is_array($var7));
var_dump(is_array($var8));
var_dump(is_array($var9));
var_dump(is_array($var10));
?>
<h1>cheak every variable with is_array() function</h1>
<?php
// cheak every variable with is_float() function
var_dump(is_float($var1));
var_dump(is_float($var2));
var_dump(is_float($var3));
var_dump(is_float($var4));
var_dump(is_float($var5));
var_dump(is_float($var6));
var_dump(is_float($var7));
var_dump(is_float($var8));
var_dump(is_float($var9));
var_dump(is_float($var10));
?>
<h1>cheak every variable with is_float() function</h1>
<?php
// cheak every variable with is_int() function
var_dump(is_int($var1));
var_dump(is_int($var2));
var_dump(is_int($var3));
var_dump(is_int($var4));
var_dump(is_int($var5));
var_dump(is_int($var6));
var_dump(is_int($var7));
var_dump(is_int($var8));
var_dump(is_int($var9));
var_dump(is_int($var10));
?>
<h1>cheak every variable with is_int() function</h1>
<?php
// cheak every variable with is_object() function
var_dump(is_object($var1));
var_dump(is_object($var2));
var_dump(is_object($var3));
var_dump(is_object($var4));
var_dump(is_object($var5));
var_dump(is_object($var6));
var_dump(is_object($var7));
var_dump(is_object($var8));
var_dump(is_object($var9));
var_dump(is_object($var10));
?>
<h1>cheak every variable with is_object() function</h1>
<?php
// cheak every variable with is_resource() function
var_dump(is_resource($var1));
var_dump(is_resource($var2));
var_dump(is_resource($var3));
var_dump(is_resource($var4));
var_dump(is_resource($var5));
var_dump(is_resource($var6));
var_dump(is_resource($var7));
var_dump(is_resource($var8));
var_dump(is_resource($var9));
var_dump(is_resource($var10));
?>
<h1>cheak every variable with is_resource() function</h1>
<?php
// cheak every variable with is_scalar() function
var_dump(is_scalar($var1));
var_dump(is_scalar($var2));
var_dump(is_scalar($var3));
var_dump(is_scalar($var4));
var_dump(is_scalar($var5));
var_dump(is_scalar($var6));
var_dump(is_scalar($var7));
var_dump(is_scalar($var8));
var_dump(is_scalar($var9));
var_dump(is_scalar($var10));
?>
<h1>cheak every variable with is_scalar() function</h1>
<?php
// cheak every variable with is_countable() function
var_dump(is_countable($var1));
var_dump(is_countable($var2));
var_dump(is_countable($var3));
var_dump(is_countable($var4));
var_dump(is_countable($var5));
var_dump(is_countable($var6));
var_dump(is_countable($var7));
var_dump(is_countable($var8));
var_dump(is_countable($var9));
var_dump(is_countable($var10));
?>
<h1>cheak every variable with is_countable() function</h1>
<?php
// cheak every variable with is_iterable() function
var_dump(is_iterable($var1));
var_dump(is_iterable($var2));
var_dump(is_iterable($var3));
var_dump(is_iterable($var4));
var_dump(is_iterable($var5));
var_dump(is_iterable($var6));
var_dump(is_iterable($var7));
var_dump(is_iterable($var8));
var_dump(is_iterable($var9));
var_dump(is_iterable($var10));
?>
<h1>cheak every variable with is_iterable() function</h1>
<?php
// cheak every variable with is_callable() function
var_dump(is_callable($var1));
var_dump(is_callable($var2));
var_dump(is_callable($var3));
var_dump(is_callable($var4));
var_dump(is_callable($var5));
var_dump(is_callable($var6));
var_dump(is_callable($var7));
var_dump(is_callable($var8));
var_dump(is_callable($var9));
var_dump(is_callable($var10));

?>
