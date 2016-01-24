import os
#os.system("xhost +localhost")
#os.system("gksudo gnome-terminal -e 'bash -c \"sudo apt-get update; exec bash\"'")

#os.system("gnome-terminal -e 'bash -c \"sudo mn\"'")
#os.system("gnome-terminal -e 'bash -c \"sudo mn\"'")

os.system("pkexec env DISPLAY=$DISPLAY XAUTHORITY=$XAUTHORITY mn")
#os.system("pkexec mn")
#os.system("pkexec env DISPLAY=$DISPLAY XAUTHORITY=$XAUTHORITY python script1.py")
#os.system("pkexec env DISPLAY=$DISPLAY XAUTHORITY=$XAUTHORITY python /var/www/html/script1.py")
#os.system("pingall")

#os.system("gnome-terminal 'sudo apt-get update'")
#os.system("pkexec env DISPLAY=$DISPLAY XAUTHORITY=$XAUTHORITY subl")
#os.system("echo '<br>python1'")

print "hello"
