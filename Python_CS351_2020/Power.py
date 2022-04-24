def main(): #declares method
    num = int(input("Enter a number: ")) #user input for first number
    power = int(input("Enter the power: ")) #user input for second number
    results = num #initialize results with first number
    for i in range(power-1): #repeats second number input to multiply results by the first number 
        results *= num #multiplying results by first input number
    print(results) #prints results
main() #runs method
