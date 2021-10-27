<?php
$num = $_GET["fvalue"]

if($num/2==0 && $num){
    
}

if num > 1:
   for i in range(2,num//2):
      #Select if the number is divisible by any number between 2 and num/2.
      if (num % i) == 0:
         print(num,"is not a prime number")
         print(i,"times",num//i,"is",num)
         break
      else:
         #If given number is not fully divisible by any number between 1 and num/2, then its prime.
         print(num,"is a prime number")
# Also, if the number is less than 1, its also not a prime number.
else:
   print(num,"is not a prime number")
   ?>