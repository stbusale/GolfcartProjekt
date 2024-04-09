import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
pin_sensor = 12
pin_led = 13

GPIO.setup(pin_led, GPIO.OUT)  # LED-Pin als Ausgang einrichten

while True:
    reading = 0
    GPIO.setup(pin_sensor, GPIO.OUT)
    GPIO.output(pin_sensor, GPIO.LOW)
    time.sleep(1)
    GPIO.setup(pin_sensor, GPIO.IN)
    while GPIO.input(pin_sensor) == GPIO.LOW:
        reading += 1
    print(reading)
    if reading > 5000:
        GPIO.output(pin_led, GPIO.HIGH)  # LED einschalten, wenn der Wert über 3000 liegt
    else:
        GPIO.output(pin_led, GPIO.LOW)   # LED ausschalten, wenn der Wert nicht über 3000 liegt
    time.sleep(0.1)
