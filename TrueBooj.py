def truebooj(number):
    for num in range(1, number):
    output = []
    if num % 3  == 0:
        output.append('True')
    if num % 5 == 0:
        output.append('Booj')
    if num % 10 == 0:
        output.append('TrueBooj')

    if output:
        print(' '.join(output))
    else:
        print(num)
