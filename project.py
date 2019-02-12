import MySQLdb
# Open database connection
#db = MySQLdb.connect("localhost","testuser","test123","testdb" )
# prepare a cursor object using cursor() method
#cursor = db.cursor()
def pro_connect(x):
   #Connect to database
   print('Opening database connection...')
   # Open database connection
   db = MySQLdb.connect("localhost","testuser","test123","testdb" )
   # prepare a cursor object using cursor() method
   cursor = db.cursor()
   if(cursor):
      print('Connected to databse succesfully')
   # execute SQL query using execute() method.
   cursor.execute("SELECT VERSION()")
   # Fetch a single row using fetchone() method.
   data = cursor.fetchone()
   print ("Database version  %s " % data)
   return cursor,db
    
def pro_insert(cursor):
   # Prepare SQL query to INSERT a record into the database.
   sql = """INSERT INTO orders (Qno,Question,Option1,Option2,Option3,Option4,Answer,Marks,Complexity)
            VALUES (1494,'Demand for a commodity refers to','Need for the commodity', 'Desire for the commodity','Amount of the commodity demanded at a particular
            price and at a particular time','Quantity demanded of that commodity',3,1, 'hard')"""
   # Execute the SQL command
   cursor.execute(sql)
   print(cursor.rowcount, "record inserted.")
   # Commit your changes in the database
   db.commit()
   # Rollback in case there is any error
   db.rollback() 
   # Prepare SQL query to INSERT a record into the database.
   sql =  """INSERT INTO GOVERNMENT (Qno,Question,Option1,Option2,Option3,Option4,Answer,Marks)
            VALUES (2048,'When did India adopt a written constitution','November 26, 1949', 'January 26, 1950','January 1, 1997',' January 1, 1999',1)"""
   try:
   # Execute the SQL command
      cursor.execute(sql)
      print(cursor.rowcount, "record inserted.")
   # Commit your changes in the database
      db.commit()
   except:
   # Rollback in case there is any error
      db.rollback()


def pro_select(cursor,table):
# Prepare SQL query to count questions in table
   sql =  """SELECT COUNT(*) FROM """+table
# Execute the SQL command
   cursor.execute(sql)
   myresult = cursor.fetchall()
   for y in myresult:
      k = str(y)
      #print k
   #k = k.strip('(')
   #k = k.strip(')')
   #k = k.strip(',')
   #k = k.strip('L')
   k = k.translate(None, "''L,()")
   k = int(k) #https://stackoverflow.com/questions/642154/how-to-convert-strings-into-integers-in-python
   return k

def pro_qselect(cursor, ransetqs,table):
# Prepare SQL query to select questions from table
# LIST TO STORE QUERY RESULTS
   qlist = []
   qlistin = []
   newransetqs = []
   #sql2 = """ AND Qno<500"""
   for i in range(len(ransetqs)):
    newransetqs.append(str(ransetqs[i]))
   #print newransetqs
# Prepare SQL query to select questions from table
   sql =  """SELECT Question,Option1,Option2,Option3,Option4,Marks FROM """ +table+ """ where Qno = """
   qsetin = (' OR Qno=').join(newransetqs)
   sql = sql + qsetin
   #print sql
   #sql = sql + sql2
   #print sql
# Execute the SQL command
   cursor.execute(sql)
   myresult = cursor.fetchall()
   #print myresult[1]
   #myresult[1] = str(myresult[1]).strip('L')
   for y in myresult:
      qlistin.append(str(y))
   for k in range(len(qlistin)):
      qlistin[k] = qlistin[k].translate(None, "''L,()")
      qlistin[k] = qlistin[k].replace("[]", "\n")
   return qlistin
# Commit your changes in the database
   db.commit()
# Rollback in case there is any error
      #db.rollback()

def pro_marks(qlistin):
   marks = []
   for k in qlistin:
      lent = len(k)
      marks.append(int(k[lent-1]))
   return marks

def pro_markd(bqlistin):
   mqlistin = []
   for k in bqlistin:
      lent = len(k)
      k = k[:lent-2]
      mqlistin.append(k)
   return mqlistin

def pro_markc(bmarks):
   mmarks = []

def pro_oselect(cursor, table="orders"):
# Prepare SQL query to select current order from table orders
# LIST TO STORE QUERY RESULTS   
   listin = []   
# Prepare SQL query to SELECT a record from database
   sql =  """SELECT * FROM `orders` WHERE `new`=1"""   
# Execute the SQL command
   cursor.execute(sql)
#Fetch result and format it
   listin = cursor.fetchall()
   listin=list(listin[0])
   for i in range(len(listin)):
      listin[i] = str(listin[i]).translate(None, "L")   
   return listin   

def pro_sselect(cursor,subject,table="subjects"):
# Prepare SQL query to select tables related to given subject from table subjects
# LIST TO STORE QUERY RESULTS   
   listin = []   
# Prepare SQL query to SELECT a record from database
   sql =  """SELECT * FROM `subjects` WHERE subject='"""+subject+"""'"""
   print ('in pro_sselect() sql is:',sql)
# Execute the SQL command
   cursor.execute(sql)
#Fetch result and format it
   listin = cursor.fetchall()
   listin=list(listin[0])
   for i in range(len(listin)):
      listin[i] = str(listin[i]).translate(None, "L")   
   return listin[2:]   

def pro_nselect(cursor, table="orders"):
# Prepare SQL query to select current order from table orders
# LIST TO STORE QUERY RESULTS   
   listin = []   
# Prepare SQL query to SELECT a record from database
   sql =  """SELECT * FROM `orders` WHERE `new`=1"""   
# Execute the SQL command
   cursor.execute(sql)
#Fetch result and format it
   listin = cursor.fetchall()
   if not listin:
      return False
   listin=list(listin[0])
   
   listin[3] = str(listin[3]).translate(None, "L")   
   return bool(listin[3])

def pro_ncupdate(cursor,refno,db, table="orders"):
# Prepare SQL query to select current order from table orders
   print('updating order in orders table')
# Prepare SQL query to SELECT a record from database
   sql =  """UPDATE `orders` set `completed` = 1 where `refno`="""+str(refno)
   sql2 = """UPDATE `orders` set `new` = 0 where `refno`="""+str(refno)+""" AND `completed`=1"""
# Execute the SQL command
   cursor.execute(sql)
   db.commit()
   cursor.execute(sql2)
   db.commit()
   print('new order has been set to completed in orders table')


def pro_close(cursor):
   # disconnect from server
   #db = MySQLdb.connect("localhost","testuser","test123","testdb" )
   #cursor = db.cursor()
   cursor.close()
   print('Database connection closed')
   
   
   














