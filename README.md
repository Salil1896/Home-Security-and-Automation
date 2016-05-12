# Home-Security-and-Automation

Performed Tasks:
1. Controlling of Elecrical appliances using smart phone messages and webpage.
2. Real time notification, when system detects anything out of ordinary.

Functioning: 
A web page is hosted on Raspberry Pi’s local IP address using apache web server. User can log onto the web page  using  the username and password provided. He will then have access to home appliances and control them. Any changes made will be saved by the PHP in a local file saved on Raspberry Pi. A 
local Python script regularly monitors the file. The python script also communicates serially with the GSM module and looks for user inputs. Any changes observed are also reflected 
on webpage and vice-versa, since both PHP and python scripts are synchronized to each other. Python script also has access over  electrical appliances,  Electromagnetic  lock  (via 
electromagnetic  relay)  and  various  sensors  by  communicating  with  General-purpose input/output (GPIO) pins. Pi is connected to a magnetic door switch, which observes if door 
is opened forcefully (in locked mode). If so, it notifies Raspberry Pi, which in turn notifies the user via text message. Raspberry Pi is also connected to gas and smoke sensor which 
looks out for most of the flammable gases and signs of fire.

Components used in the project:
1. Raspberry Pi
2. Gas Sensor
3. PIR Motion Sensor
4. GSM Module
5. ULN 2003
6. Relay
7. Magnetic Lock
8. Magnetic Door Switch
9. Wifi Module
10. Router for home network

Steps before using project:
1. Arrange circuit as given in block diagram of: 
https://drive.google.com/open?id=0Bynb9nWKXjmldzZpWFIxdERlQVk
2. Install apache on RPI.
3. Connect RPI to home network using wifi module.


Complete Video of Final Project: 
https://www.youtube.com/watch?v=qRBnnMTHBL0

