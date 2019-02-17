import random
import knapsack
import project

#return a set of question numbers
def qset(n):
    '''return a set of question numbers'''
    setqs = []
    setqs = range(1,n)
    return setqs


#return a set of distinct question numbers, of length nqs
def ranq(n, nqs):
    '''return a set of distinct question numbers, of length nqs from range 1 to n'''
    ransetqs = random.sample(xrange(1,n),nqs)
    return ransetqs

def qknapsack(ransetqs,marks,tmarks):
    '''uses the knapsack algo to find the optimal selection of questions from a set ransetqs till the total weight w'''
    #print('in qknapsack, ransetqs,marks,tmarks:',ransetqs,marks,tmarks)
    n = len(ransetqs)
    a = knapsack.printknapSack(tmarks, marks, ransetqs, n)
    return a

def ranqthrice(n, nqs):
    '''return a set of distinct question numbers, of set n of length range nqs'''
    ransetqs = random.sample(a,nqs)
    return ransetqs