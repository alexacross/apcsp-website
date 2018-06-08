#include <stdio.h>

int main(int argc, char* argv[])
{
	int input;

	if (argc == 2)  {
		if (sscanf(argv[1], "%d", &input) != 1)
			return 1;
        }
        else {
		printf("Choose a secret number from the following list: 1, 3, 6, 7, 12, 14, 15, 16, 25, 33, 34, 35, 37, 42, 43, 46, 48, or 49\n");
		scanf("%d",&input);
       	}

	int guess = 25;
	int* ptrguess = &guess;
	if (input == 1 || input == 3 || input == 6 || input == 7 || input == 12 || input == 14 || input == 15 || input == 16 || input == 25 || input == 33 || input == 34 || input == 35 || input == 37 || input == 42 || input == 43 || input == 46 || input == 48 || input == 49 )
	{
	  	 while ( input != guess )
                        {
                                if ( input < guess )
                                {
                                        *ptrguess = ( guess / 2 );
                                }
                                else if ( input > guess )
                                {
                                        *ptrguess = ( guess + ((50 - guess) / 2) );
                                }
                                printf("guess now equal to %d\n", guess);
                        }
		printf("The secret number is %d\n", guess);
	}
	else
	{
		printf("Please select a number from the list\n");
	}

	return 0;
}
