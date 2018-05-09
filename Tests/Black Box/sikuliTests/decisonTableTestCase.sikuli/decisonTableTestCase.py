import unittest
 
class DecsionTableLogin(unittest.TestCase):
     
     def test_login_page_restriction(self):
         find("1525629048853.png")
         click("1525629058100.png")
         wait("1525629083492.png")
         click("1525629115196.png")
         type("https://wwwanimalfarmcom.000webhostapp.com/" + Key.ENTER)
         wait("1525629176612.png")
         #not even trying to log in 
         click("1525677665994.png")
         #trying to access a restricted page
         type("https://wwwanimalfarmcom.000webhostapp.com/homeapp.php" + Key.ENTER) 
         wait("1525677903289.png")           
         #make sure user is prompted to login
         assert("1525677903289.png")
         click("1525667987356.png")
         type("dulcemeza2013@gmail.com") #user that registered succesfully 
         click("1525667889424.png")
         type("b7281dfda8")
         click("1525629404668.png")
         #assert we got access to homeapp.php
         assert("1525629507497.png")


suite = unittest.TestLoader().loadTestsFromTestCase(DecsionTableLogin)
unittest.TextTestRunner(verbosity=2).run(suite)