all: All 

All: Sum.o Main.o 
	clang++ Sum.o Main.o -o Main

Main.o: Main.cpp
	clang++ -c -std=c++20 -Wall -Werror -Wpedantic -Wextra Main.cpp

Sum.o: Sum.cpp Sum.h
	clang++ -c -std=c++20 -Wall -Wextra -Werror -Wpedantic Sum.cpp 
