def main():
    while(0==0):
        x = int(input("Input the first number: "))
        y = int(input("Input the second number: "))
        z = int(input("Input the third number: "))
        total=x+y+z
        print("Sum of numbers:",total)
        ans = input("Do you want to try again? (Y/N): ")
        if (ans != "Y"):
            break
main()
