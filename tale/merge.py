from os import listdir
from os.path import isfile, join
import re

filenames = [f for f in listdir("./") if isfile(join("./", f)) and re.match('\d+ - \w.*\w\.md', f)]
filenames.sort()
with open('Conte d\'un futur souhaitable.md', 'w', encoding="utf-8") as outfile:
    for fname in filenames:
        with open(fname, 'r', encoding="utf-8") as infile:
            print(fname)
            outfile.write(u"\n\n# " + fname[:-3] + "\n")
            # print(infile.read())
            outfile.write(infile.read())
