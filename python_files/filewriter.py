def filewrite(mqlistin,bmarks):
    qcount = 1
    print ('in filewriter list of marks:',bmarks)
    print ('number of questions:',len(bmarks))
    # Open a file in witre mode
    fo = open("foo.html", "w+")
    #print "Name of the file: ", fo.name
    #my_list = ['Question','Option A','Option B','Option C','Option D','Marks']
    fo.write("<br>QUESTION PAPER<br>Q.%d->" % qcount)
    for i in range(len(mqlistin)):
        my_list = mqlistin[i].splitlines()
        for item in my_list:
            fo.write("%s<br>" % item)
        marks = bmarks[i]
        fo.write("Marks :%d<br>" % marks)
        qcount = qcount + 1
        fo.write("<br>Q.%d->" % qcount)
    
    print('done writing to file')

    fo.seek(0,0)
    
    # Close open file
    fo.close()

    print('printed %d questions' % (qcount-1))