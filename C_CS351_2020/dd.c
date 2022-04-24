#include <stdio.h>


int doubledigits();


int main (void) {
  int i=1;
  while(1){
	 // sumloop();
	 //fibonacci();
	  doubledigits(56);//nestloop
	 // printf("Please enter a number (1 to continue, anything else to leave): ");
   // scanf("%d", &i);
  }
	
}

int doubledigits(int i){
  for (int i=1;i<6;i++){
    for(int o=1;o<6;o++){
      printf("%d%d\n",i,o);
    }
  }
}