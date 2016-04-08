#include <stdio.h>
#include "bitslab.h"
int main() {
  printf("Test with main.\n");
  printf("bitAnd Result: %d\n", bitAnd(15,3));
  printf("getByte Result: %d \n",getByte(0x12345678,22));
  printf("bitcount Result: %d \n", bitCount(1));
  printf("bang result is: %d \n", bang(3));
  printf("minimum two's complement integer is: %d \n",tmin());
  printf("fitbits result is: %d \n",fitsBits(-4,3));
  printf("divpwr2 result  is: %d \n",divpwr2(-33,4));
  printf("negate result is: %d \n",negate(4));
  printf("isPositive result is: %d \n",isPositive(-4));
  printf("isLessOrEqual result is: %d \n",isLessOrEqual(5,5));
  printf("float_neg result is: %d \n",float_neg(13));
  printf("float_i2f result is: %d \n",float_i2f(15));
  printf("float_twice result is: %d \n",float_twice(9.84));

}
