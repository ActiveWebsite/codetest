def eqindex(data):
    indices = []
    left, right = 0, sum(data)   # initiate left and right sums
    for index, current in enumerate(data):
        right -= current    # keep running total of right sum
        if right == left:
            indices.append(index)
        left += current # keep running total of left sum
    if not indices:
        return None
    return indices
