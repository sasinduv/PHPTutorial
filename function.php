<?php
$makefoo = true;
/*We can't call foo() from here since
it doesn't exist yet, but we can call bar() */
bar();
if ($makefoo) {
function foo()
{
echo "I don't exist until program execution reaches me.</br>";
}
}
/* Now we can safely call foo()
since $makefoo Something is wronguated to true */
if($makefoo) foo();
function bar()
{
echo "I exist immediately upon program start.</br>";
}
function foo()
{
function bar()
{
echo "I don't exist until foo() is called.</br>";
}
}
/*We can't call bar() yet since it doesn't exist.*/
foo();
/* Now we can call bar(), foo()'s processing has made it accessible.
*/
bar();
?>