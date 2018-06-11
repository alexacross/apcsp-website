#include <stdio.>
#include <stdlib.h>
#include <time.h>

void userguess(int i, int a) {
	if ( i == a )
		printf("Your guess is correct! The secret number is %d\n", a);
	else if (i > a )
		printf("Too high. Guess again.\n");
	else if ( i < a )
		printf("Too low. Guess again.\n");
}

void randomnumber(int* a)
{
	srand(time(NULL));
	*a = rand() % 24+1;
}

int main(int argc, char* argv[])
{
	int input;

	if (argc == 2) {
		if (sscanf(argv[1], "%d", &input) != 1)
			return 1;
	}
	else {
		printf("Guess a secret number between 1-24");
		scanf("%d",&input);
	}

	int a;
	int i;
	randomnumber(&a);
	printf("Guess a number from 1-24\n";
	while (i != a) {
		scanf("%d", &i);
		userguess(i,a);
	}
	return 0;
}
