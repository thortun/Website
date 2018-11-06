import matplotlib
matplotlib.use("Pdf")
import matplotlib.pyplot as plt
import time
import random

L = random.sample(range(0, 100), 10);
plt.plot(L)
plt.ylabel('data')
plt.savefig('foo.png')
