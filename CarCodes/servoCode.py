import RPi.GPIO as GPIO
from time import sleep

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(18, GPIO.OUT)

pwm = GPIO.PWM(18, 50)
pwm.start(0)

def set_angle(angle):
    duty = angle / 18 + 2
    GPIO.output(18, True)
    pwm.ChangeDutyCycle(duty)
    sleep(1)
    GPIO.output(18, False)
    pwm.ChangeDutyCycle(0)

# Testen Sie verschiedene Winkel

set_angle(-90) # Links
set_angle(90) # Rechts
set_angle(0) # Neutral

pwm.stop()
GPIO.cleanup()
