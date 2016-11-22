def eqindex(data):
    '''
    a generator function that returns the equilibruim indices of a given list
    '''

    # get the sums of the reversed data list (data[-1], data[-1] + data[-2+],
    # data[-1] + data[-2] + data[-3], ect.)
    bw_sums = [sum(data[::-1][:i+1]) for i, x in enumerate(data[::-1])]
    # initialize a value to hold the sums of the values
    sums = 0
    # loop through each value in the list
    for i, n in enumerate(data):
        # add the value to the sums variable
        sums += n
        # check if sums is in backwards sum list, excluding the reverse index
        # and higher of the initial list
        if sums in bw_sums[:-(i+1)]:
            # add one so indices ar x[1], x[2], ... x[n] rather than
            # x[0], x[1], ... x[n-1]
            yield i + 1
