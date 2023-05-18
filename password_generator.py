"""
@author : azZoRk_

"""


import random

low = 'abcdefghijklmnopqrstuvwxyz'
up = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'

numbers = "0123456789"

symbols = "[]{}#()@;:/*.-_"

concatenate = low+up+numbers+symbols

lenght_password = 12

password = "" .join(random.sample(concatenate, \
                        lenght_password ))

print (password)