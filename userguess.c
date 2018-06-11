#include <stdio.h>
#include <stdlib.h>
#include <time.h>

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
	int* ptra = &a;
	srand(time(NULL));
	*ptra = rand() % 24+1;

	int i;
	while (i != a) {
		scanf("%d", &i);
		if ( i == a )
			printf("Your guess is correct! The secret number is %d\n", a);
		else if ( i > a )
			printf("Too high. Guess again.\n");
		else if ( i < a )
			printf("Too low. Guess again.\n");
	}
	return 0;
}
