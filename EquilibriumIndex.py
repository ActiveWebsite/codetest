def eqindex(data):
    #Intialize all variables
    sum = 0
    leftsum = 0
    indexes = []
    #Algorithm is O(n) complexity
    #Calculate Total Sum
    for i in range(0, len(data)):
        sum += data[i]
    
    for n in range(0, len(data)):
        #Total Sum now rightsum
        sum -= data[n]
        #Check if equilbrium index
        if (leftsum == sum):
            indexes.append(n)
        leftsum += data[n]
    return indexes