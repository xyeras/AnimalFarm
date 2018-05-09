#view data analysis of each breed 
import unittest

class DataAnalysis(unittest.TestCase):
    def test_breed_breakdown(self):
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
        click("1525678847697.png")
        #assert data table shows becuase if that is the case then a 
        #breed break down must exist 
        assert("1525715073431.png")
        hover("1525715092338.png")
        assert("1525715126628.png")
        hover("1525715201635.png")
        assert("1525715213918.png")      
        hover("1525715232271.png")
        assert("1525715253454.png")
        hover("1525715294655.png")
        assert("1525715326004.png")
        hover("1525715334897.png")
        assert("1525715306163.png")
suite = unittest.TestLoader().loadTestsFromTestCase(DataAnalysis)
unittest.TextTestRunner(verbosity=2).run(suite)