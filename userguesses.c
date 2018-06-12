#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
        int input;
                printf("Guess a secret number between 1-24");
                scanf("%d",&input);
        int a;
        int* ptra = &a;
                srand(time(NULL));
                *ptra = rand() % 24+1;

        while (input != a) {
                scanf("%d",&input);
		if ( input == a )
                        printf("Your guess is correct! The secret number is %d\n", a);
                else if ( input > a )
                        printf("Too high. Guess again.\n");
                else if ( input < a )
                        printf("Too low. Guess again.\n");
        }

FILE* output;
output = fopen("output.out","w");
if (output == NULL) {
	printf("error - failed to oepn file for writing\n");
	return 1;
}
fprintf(output, "The correct guess is %d",a);
fclose(output);
}
