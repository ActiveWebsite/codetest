def truebooj(number):
    '''
    function to return a number, or a string depending on if the remainder of
    the number argument divided by 3, 5, or 10 is = to 0
    '''

    if number % 10 == 0:
        return 'TrueBooj'
    elif number % 5 == 0:
        return 'Booj'
    elif number % 3 == 0:
        return 'True'
    else:
        return str(number)
