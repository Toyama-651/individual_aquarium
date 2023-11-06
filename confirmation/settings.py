#pip show numpy

import sys
print(sys.version)
print(sys.path)

'''
config=>apache=>httpd.confの最下層に以下の文を追加する。

# Python Settings
AddHandler cgi-script .py
AddHandler cgi-pre .py
ScriptInterpreterSource Registry-Strict
'''