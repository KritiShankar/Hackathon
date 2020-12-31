import paho.mqtt.client as paho
import time

def on_publish(client,userdata,result):             #create function for callback
    print("data published \n")
    pass
client1= paho.Client()                           
client1.on_publish = on_publish                          
client1.connect("hackathon.ilens.io",1883,60)
i=0                  #establish connection
while(True):
	sttr = input("Enter temperature,wind,pressure,humidity,location : ")
	sttr = sttr + " " + str(time.time())
	ret= client1.publish("iot/live/location_name",sttr)
	time.sleep(10)
