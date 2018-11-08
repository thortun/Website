import matplotlib
matplotlib.use("Pdf")
import matplotlib.pyplot as plt
import time
import random

while True:
    L = random.sample(range(0, 100), 50);
    plt.plot(L)             # Plot the data
    plt.ylabel('data')      # Set ylabel
    plt.savefig('foo.png')  # Save the image to file
    time.sleep(10)          # Wait 10 seconds
    plt.clf()               # Clear the figure for next loop
