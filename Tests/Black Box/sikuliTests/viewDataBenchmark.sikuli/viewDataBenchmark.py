#we are seeing how much it takes to load data from database to meet our NFR1
#ONE MUST ALREADY BE LOGGED IN AND IN THE DASHBOARD
import unittest
#you should already be logged into dashboard so this will cause you to go to that screen 
click("1525678946189.png")
#measure the time it takes for the database to load 
class TestDataBaseTime(unittest.TestCase):
    
    def test_data_retrieval(self):
        click("1525678847697.png")
        assert("dataTable.png")
#run test 5 times to get the average 
for n in range(5):
    suite = unittest.TestLoader().loadTestsFromTestCase(TestDataBaseTime)
    unittest.TextTestRunner(verbosity=2).run(suite)
    #we click here so we can go back to the dashboard 
    click("1525681354992.png")
    
    