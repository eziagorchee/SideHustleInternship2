<?php
/* See variable as a pot/container
 containig data

 To declare a variable in php,we use
  a dollar sign($)Followed directly by
  the variablename*/

  echo "<h1>Rules for Naming Variables</h1>";
  echo "variableName must start with letter
        or underscore. ";
   echo "can only contain alphaNumeric
          characters and undercore(a-z),(0-9)
          and underscore. Also note that
          variables are case sensitive";
    echo "variables can change at any time.
          anything like usernames n passwords
           pi,etc will not change hence should
           be declared as a <h2>Constant</h2>";
    echo "constants are similar to variables as
          they are both containers just that 
          constants cannot
          be changed once declared";
    echo "<h1>How to create a constant or call it</h1>";
    echo "<h2>UseFunction[Define]FollowedBy()
          andInsideTheBrackets,write the
          key/name/pot enclosed in
          quotes oo(case sensitive too)
          FollowedBy_a_commaToDistinguish
          betweenKeyAndValue and then
          the Value which could be enclosedin
          quotes or not depending on the Datatype
          i.e whether it is stringOrInt</h2>";
    echo "<h1>Example of a Contant(pleaseNote
          that to print it out,U use dEchoFunction)</h1>";
    define("name","Chiagozie");
    define("age",22);
    echo "<h3>FunctionDefinitionNotEchoed</h3>";
    echo name ;
    echo age;
    echo "<h3>see that quotes and dollar
          sign not needed in calling a Constant</h3>";
    echo "example showing variable declaration";
    $name = "Chiagozie";
    $age = 22;
    echo "<h2>$name</h2>";
    echo "<small>Now_U_knowHowToDefine_a_Function
          andDecalre_a_Variable</small>";  


?>