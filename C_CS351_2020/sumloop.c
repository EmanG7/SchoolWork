#include <stdio.h>

void sumloop();


int main (void) {
  while(1){
	  sumloop();
	 //fibonacci();
	 // doubledigits();
	 // printf("Please enter a number (1 to continue, anything else to leave): ");
   // scanf("%d", &i);
  }
	
}
void sumloop(){


    int i=1;

  int long  sum=0, temp,m=1;
  while(1){
   // printf("Enter a number to add to the sum (Enter '0' Zero to exit):");
    
    //if(temp != 0){
      sum+=i;
   // }else{
      i++;
    //}
  
  printf("The sum is %ld\n", sum);

  }
}
