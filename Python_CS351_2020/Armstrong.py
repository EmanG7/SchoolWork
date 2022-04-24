def main():
    results = []
    for x in range(1,2501):
        astring = str(x)
        total = 0
        for i in astring:
            total+=(int(i)**3)
        if(total == x):
            results.append(x)
    print(results)
main()
