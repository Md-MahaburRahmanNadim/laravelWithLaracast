<?php
    /* different between ? and ?? operator 
    ? operator is used to check if the variable is null or not and if it is null then it will return the value after ? operator
    ?? operator is used to check if the variable is null or not and if it is null then it will return the value after ?? operator
    
    */
// ? operator
$name = 'John';
$name1 = null;
echo $name;
echo $name ? $name : 'Guest'; // if $name is not null then it will return $name else it will return 'Guest'
echo $name ?? 'Guest'; // if $name is not null then it will return $name else it will return 'Guest' here we reduce the code by using ?? operator
//now can you tell me waht will be the answer of below code?
echo $name1 ? $name1 : 'Guest'; 
echo $name1 ?? 'Guest';

/*dfferent between ?? and ?-> operator explained
?? operator is used to check if the variable is null or not and if it is null then it will return the value after ?? operator
?-> Null safe operator silently returns null if the expression to the left side evaluates to null. 
The null-safe operator solves this by short-circuiting the property/method access, and returning null immediately if the left side of the operator is null, without executing the rest of the expression.

The null-safe operator is read-only. It cannot write/assign values from it. It can only read values from it.
*/

class User{
    public function profile(){
        // setp 1
        // return new Profile();
        // setp 2
        return null;
    }
}
class Profile{
    public function address(){
        return 'want to be a Laravel Developer';
    }
}

$user = new User();
//echo $user->profile()->address(); this will return 'want to be a Laravel Developer' if the User return value not null(setp 1)
//echo $user->profile()->address(); this will throw an error if the User return value is null(setp 2)
// in setp 2 if we use ?-> operator then it will return null without throwing an error as i said above
echo $user->profile()?->address(); // this will return null if the User return value is null(setp 2)
