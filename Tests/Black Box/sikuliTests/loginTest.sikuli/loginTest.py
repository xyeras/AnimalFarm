import unittest
 #if correct password is given user will be welcomed with the dashboard page 
class TestLogin(unittest.TestCase):
    
    def test_successful_login(self):
        find("1525629048853.png")
        click("1525629058100.png")
        wait("1525629083492.png")
        click("1525629115196.png")
        type("https://wwwanimalfarmcom.000webhostapp.com/" + Key.ENTER)
        wait("1525629176612.png")
        click("1525629191742.png")
        wait("1525629323241.png")
        click("1525667987356.png")
        type("dulcemeza2013@gmail.com")
        click("1525667889424.png")
        type("b7281dfda8")
        click("1525629404668.png")
        #wait to get access to the main dashbaord page
        wait("1525629450093.png")
        #assert that its true 
        assert("1525629507497.png")
        click("1525629653130.png")
    def test_successful_logout(self):
        find("1525629048853.png")
        click("1525629058100.png")
        wait("1525629083492.png")
        click("1525629115196.png")
        type("https://wwwanimalfarmcom.000webhostapp.com/" + Key.ENTER)
        wait("1525629176612.png")
        click("1525629191742.png")
        wait("1525629323241.png")
        click("1525667987356.png")
        type("dulcemeza2013@gmail.com")
        click("1525667889424.png")
        type("b7281dfda8")
        click("1525629404668.png")
        #wait to get access to the main dashbaord page
        wait("1525629450093.png")
        click("1525629573523.png")
        assert("1525629594722.png")
        click("1525629653130.png")
   

suite = unittest.TestLoader().loadTestsFromTestCase(TestLogin)
unittest.TextTestRunner(verbosity=2).run(suite)