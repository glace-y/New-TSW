current = [4, 5, 2, 6, 1]
completed = []

def recur(num):
    if num == 0:
        return
    else:
        completed.append(current[num-1])
        recur(num-1)
        return
    
print(recur(4))