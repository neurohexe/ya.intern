#include <iostream>
#include <string>
int main()
{
double target = 2021;
double x = 1;
double oldx;
do {
oldx = x;
x = (x + target / x) / 2;
}
while (oldx != x);
std::cout << "x = " << x << "\n";
std::cout << "x^2 = " << x*x << "\n";
}