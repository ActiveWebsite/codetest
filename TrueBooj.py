def truebooj(number):
    for i in range(1,number+1):
        if i % 10 == 0:
            print ('TrueBooj')
        elif i % 5 == 0:
            print ('Booj')
        elif i % 3 == 0:
            print ('True')
        else:
            print (i)