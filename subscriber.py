import paho.mqtt.client as mqtt
import mysql.connector
import json



def on_connect(client,userdata,flags,rc):
	print("Connected with code : ",str(rc))
	client.subscribe("iot/live/#")
	
def on_message(client,userdata,msg):
	print(msg.topic," ---- ",msg.payload.decode())
	data = json.loads(msg.payload.decode())
	lst = (data['station'],data['Temperature'],data['Humidity'],data['Pressure'],data['ts'])
	#lst = tuple(sttr.split())
	sqlFormula = "INSERT INTO iot_data(location,temperature,humidity,pressure,time) VALUES (%s,%s,%s,%s,%s)"
	global conn
	cur = conn.cursor()
	cur.execute("use knowledge_lens")
	cur.execute(sqlFormula,lst)
	conn.commit()
	print(type(lst))
	

client = mqtt.Client()
client.on_connect = on_connect 
client.on_message = on_message
conn = mysql.connector.connect(host="localhost",user="root",passwd="")
print(conn)

#client.connect("192.168.43.130")
client.connect("hackathon.ilens.io",1883,60)
client.loop_forever()
