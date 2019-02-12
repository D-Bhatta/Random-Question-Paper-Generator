import choice#gen questions randomly
import project#database ops
import filewriter#print to file
import pdf_create#convert to pdf


#take markslist and tablelist and gen part of qpaper for each table and corresponding marks
#print entirety tp file
#print referencenumber along with date to file
def qgs(tmarks_list,table_list,cursor):
    print ('tmarks in qgs:',tmarks_list)
    print ('table in qgs:',table_list)
    mqlistin = []
    bmarks = []
    #for each in tmarks,table call qgs
    for i in range(3):
        table = table_list[i]
        tmarks = tmarks_list[i]
        print ('table in qgs loop:',table)
        print ('tmarks in qgs loop:',tmarks)
        b = [] 

        q_total = project.pro_select(cursor,table)#convert this to int #done
        print ('questions in',table,':',q_total )
        

        #call from choice to get random nos, qset, randomqset, output question numbers
        ransetqs = choice.ranq(q_total,tmarks)#tmarks is the max no of question sample, since questions have minimum 1 marks
        qlistin = project.pro_qselect(cursor, ransetqs,table)

        marks = project.pro_marks(qlistin)

        a = choice.qknapsack(ransetqs,marks,tmarks)
        b = a[0]#these are the questions

        #b = choice.qknapsack(b,marks,tmarks)
        #print b
        bqlistin = project.pro_qselect(cursor, b,table)
        #print len(bqlistin)
        #bmarks = project.pro_marks(qlistin)
        bmarks = bmarks + a[1]#these are the marks

        #for i in range(1,len(b)): i=i+1
        #print i

        mqlistin = mqlistin + project.pro_markd(bqlistin)
    

    filewriter.filewrite(mqlistin,bmarks)
    #project.pro_close(cursor)

    pdf_create.pro_pdf()
    return 1


