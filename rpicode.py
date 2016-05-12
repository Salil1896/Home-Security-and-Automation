GPIO.setwarnings(False)

led1 = 14
led2 = 18
led3 = 20
led4 = 23
led5 = 7
pir = 4

GPIO.setup(led1, GPIO.OUT)
GPIO.setup(led2, GPIO.OUT)
GPIO.setup(led3, GPIO.OUT)
GPIO.setup(led4, GPIO.OUT)
GPIO.setup(led5, GPIO.OUT)
GPIO.setup(pir, GPIO.IN, GPIO.PUD_UP)
flag2=0

while(1):
        ser.write('AT+CPMS="SM"\r')
        st=ser.read(45)
        if(st.find('10,25')!=-1):
                for i in range(1,11):
                        ser.write('AT+CMGD='+str(i)+'\r')
                        ser.read(30)
        #print ser.read(45)
        #ser.write('AT+CMGD=3\r')
        #print ser.read(100)
        ser.write('AT+CMGL="REC UNREAD"\r')
        c=ser.read(1)
        st=str(c)
        while (f!=2):
                c=ser.read(1)
                st=st+str(c)
                if (c=='O'):
                        f=f+1;
                if (c=='K' and f==1):
                        f=f+1;
        f=0;

        f1 = open('/var/www/design4.txt','r')
        strt = f1.readline()
        f1.close()

        if GPIO.input(pir)==True and strt=='ON':
                GPIO.output(led5,1);
                if flag2==0:
                        flag2=1
                        ser.write('AT+CSMP=17,167,0,16\r')
 			ser.read(30)
                        ser.write('AT+CMGF=1;\r')
                        ser.read(20)
                        ser.write('AT+CMGS="07575980024"\r')
                        print ser.read(35)
                        ser.write('Intrusion Detected')
                        ser.write('\x1A')
                        print ser.read(40)
        else:
                GPIO.output(led5,0);

        #print 'Message:\n'
        #print st
        st1 = 'LIGHT ON'
        st2 = 'LIGHT OFF'
        if (st.find(st1)!= -1):
                f1 = open('/var/www/design1.txt','w')
                f1.write('ON')
                f1.close()
        if (st.find(st2)!= -1):
                f1 = open('/var/www/design1.txt','w')
                f1.write('OFF')
                f1.close()

        st1 = 'FAN ON'
        st2 = 'FAN OFF'
        if (st.find(st1)!= -1):
                f1 = open('/var/www/design2.txt','w')
                f1.write('ON')
                f1.close()
        if (st.find(st2)!= -1):
                f1 = open('/var/www/design2.txt','w')
                f1.write('OFF')
                f1.close()

        st1 = 'LED ON'
        st2 = 'LED OFF'
        if (st.find(st1)!= -1):
                f1 = open('/var/www/design3.txt','w')
                f1.write('ON')
                f1.close()
        if (st.find(st2)!= -1):
                f1 = open('/var/www/design3.txt','w')
                f1.write('OFF')
                f1.close()

        st1 = 'SHIELD ON'
        st2 = 'SHIELD OFF'
        if (st.find(st1)!= -1):
                f1 = open('/var/www/design4.txt','w')
 		f1.write('OFF')
                f1.close()

        f1 = open('/var/www/design1.txt','r')
        strt = f1.readline()
        if (strt == 'ON'):
                GPIO.output(led1,1)
        if  (strt == 'OFF'):
                GPIO.output(led1,0)
        f1.close()
        f1 = open('/var/www/design2.txt','r')
        strt = f1.readline()
        if (strt == 'ON'):
                GPIO.output(led2,1)
        if  (strt == 'OFF'):
                GPIO.output(led2,0)
        f1.close()
        f1 = open('/var/www/design3.txt','r')
        strt = f1.readline()
        if (strt == 'ON'):
                GPIO.output(led3,1)
        if  (strt == 'OFF'):
                GPIO.output(led3,0)
        f1.close()
        f1 = open('/var/www/design4.txt','r')
        strt = f1.readline()
        if (strt == 'ON'):
                GPIO.output(led4,1)
        if  (strt == 'OFF'):
                GPIO.output(led4,0)
        f1.close()


ser.close() # close the serial port



