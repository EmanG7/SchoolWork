#include <stdio.h>

int fibonacci();

int main (void) {
  while(1){
	 fibonacci(9000);
  }
	
}

int fibonacci(int num1){
  int i=0, fone=0, ftwo=0, temp;
  while(i<num1){
    switch(i){
      case 1:
        ftwo=1;
      default:
        temp = fone;
        fone = ftwo;
        ftwo = temp + fone;
    }
    i++;
  }
  printf("The %d term in Fibonacci sequence is %d\n", num1, fone);
}