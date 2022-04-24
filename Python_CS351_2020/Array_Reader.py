def main(): #declares method
    array = [1,2,3,4,5,6,7,8,9,10] #initializes array
    oddsum = 0 #initializes output var
    evensum = 0 #initializes output var
    for i in array: #for loop to repeat array elements as i
        if (i % 2) == 1: #if statement to find odds by using remainder
            oddsum+=i #adds odds to oddsum
        else: #else statement for any number in the array that isn't odd
            evensum+=i #adds evens to evensum
    print("Odds:",oddsum) #prints oddsum
    print("Evens:", evensum) #prints evensum
    input("Press Enter to continue...")
main() #run method
