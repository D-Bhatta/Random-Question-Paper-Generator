def divider_ratio(load_list, total_num, min_num=1):
  """
  Returns the distribution of `total_num` in the ratio of `load_list` in the best possible way
  `min_num` gives the minimum per entry
  >>> reduce_ratio([5, 10, 15], 12)
  [2, 4, 6]
  >>> reduce_ratio([7, 13, 30], 6, 0)
  [1, 2, 3]
  >>> reduce_ratio([7, 13, 50], 6)
  [1, 1, 4]
  >>> reduce_ratio([7, 13, 50], 6, 3)
  Traceback (most recent call last):
    ...
  ValueError: Could not satisfy min_num
  >>> reduce_ratio([7, 13, 50], 100, 15)
  [15, 18, 67]
  >>> reduce_ratio([7, 13, 50], 100)
  [10, 19, 71]
  """
  if not load_list:
    raise ValueError('Cannot distribute over an empty container')
  if any(l <= 0 for l in load_list):
    raise ValueError('Load list must contain only stricly positive elements')
  num_loads = [ [load, 0] for  load in load_list ]
  for _ in range(total_num):
    min_elem = min(num_loads, key=lambda (load, count): (float(count)/load, load))
    min_elem[1] += 1
  reduced_loads = [num for _,num in num_loads]
  assert(sum(reduced_loads) == total_num)
  return reduced_loads

def divider(marks,difficulty):
  '''
  easy = 60%easy, 30%medium, 10%hard
  medium = 20%easy, 60%medium, 20%hard
  hard = 60%hard, 30%medium, 10%easy
  '''
  if(difficulty=='easy'):
    marksreturn = divider_ratio([60,30,10],marks)
  if(difficulty=='medium'):
    marksreturn = divider_ratio([20,60,20],marks)
  if(difficulty=='hard'):
    marksreturn = divider_ratio([60,30,10],marks)
  return marksreturn



#a = divider(100,1)
#print(a)