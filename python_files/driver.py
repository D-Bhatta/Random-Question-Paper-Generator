import qgs
import random
import divider
import project
import time

#marks= random.randint(10,100)
#print('marks in driver',marks)
#create list of tables for each subject
#table_list = ['econ_easy','econ_medium','econ_hard','gov_easy','gov_medium','gov_hard']
#difficulty_table = ['easy','medium','hard']

#generates attributes to call for qgs
def attribute_gen(cursor):
    tmarks = []
    listin = []
    listin = project.pro_oselect(cursor)
    #print ('order is:',listin)
    #parse row from orders table
    refno,userid,subject,new,completed,difficulty,marks=listin[0],listin[1],listin[2],listin[3],listin[4],listin[5],int(listin[6])
    print('in attribute gen:',refno,userid,subject,new,completed,difficulty,marks)
    #select complexity tables from subjects table
    table=project.pro_sselect(cursor,subject)
    print('tables in attribute gen:')
    print ('tables for 1st subject:',table)
    #take marks and divide it into sections and store in list tmarks
    tmarks = divider.divider(marks,difficulty)
    return (tmarks,table,refno,new)


#write initialization and exit function
#initialization function connects to orders table and subjects table
def init_driver():
    print('Starting Driver program...')
    #connect to orders db
    ##pull table list from subject_tables table and initialize
    cursor,db = project.pro_connect(1)
    return cursor,db

#runs the driver function indefinitely
def driver_run(cursor,db):
        if(project.pro_nselect(cursor)):
            qgs_instance(cursor,db)

def qgs_instance(cursor,db):
    (tmarks,table,refno,new) = attribute_gen(cursor)
    print ('tmarks in driver.py:',tmarks)
    print ('table in driver.py:',table)
    print ('refno in driver.py:',refno)
    print ('new in driver.py:',new)

    #pass list of tables and marks list to qgs

    if ((qgs.qgs(tmarks,table,cursor))==1):
        print ('Done generating file')
        project.pro_ncupdate(cursor,refno,db)
        #send confirmation and write to database
        #Go_to_waiting_state_again()

def exit_driver(cursor):
    #exit driver function and close cursor
    print('Exiting driver function....')
    project.pro_close(cursor)
    print('Program end')
    

#continously check orders table for a new order
#driver_run()
#get total no of questions and pass to qgs

#check if there is a call for a new question paper
while(1):
    cursor,db = init_driver()
    driver_run(cursor,db)
    #qgs_instance(cursor,db)
    exit_driver(cursor)
    time.sleep(.5)



