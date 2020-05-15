import sys


class Instagram():
    p1 = ""

    def runwithoutparameter(self):
        print('This is a test from script python with no parameters')
        print('-')

    def runwithparameter(self):
        global p1

        print('This is a test from script python with parameters\n')
        print('&')
        print(self.p1)
        print('-')


runs = Instagram()
runs.p1 = sys.argv[1]

runs.runwithoutparameter()
runs.runwithparameter()
