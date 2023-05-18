"""
@author : azZoRk_

French : Selon les recommendations de la CNIL , les mots de passe doivent être composés d'au minimum 12 caractères comprenant des majuscules, des minuscules, des chiffres et des caractères spéciaux.
English : According to the recommendations of the CNIL, passwords must be composed of at least 12 characters including uppercase, lowercase, numbers and special characters.
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