const assert = require('chai').assert;
//--------------------------------------------------
const date3 = require('../app').date3;



describe('getDate3.1.js',function(){

    it('returns a string',function(){
        let result = date3(4,22,2018);
        assert.typeOf(result,'string');
    });

    describe('gets the date 20 days after today for every month (no zero precedding 1 digit numbers)', function(){
        describe('Jan',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(1,1,2018);
                assert.equal(result,'1/21/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(1,30,2018);
                assert.equal(result,'2/19/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(1,1,2018);
                assert.equal(result,'1/20/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(1,1,2018);
                assert.equal(result,'1/22/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(1,30,2018);
                assert.equal(result,'2/18/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(1,30,2018);
                assert.equal(result,'2/20/2018');
            });
        }); 
        
        describe('Feb',function(){

            it('return date after 20 days (same month) not a leap year',function(){
                let result = date3(2,8,2018);
                assert.equal(result,'2/28/2018');
            });

            it('return date after 20 days (same month) leap year',function(){
                let result = date3(2,9,2016);
                assert.equal(result,'2/29/2016');
            });

            it('return date after 20 days (next month) not a leap year',function(){
                let result = date3(2,27,2018);
                assert.equal(result,'3/19/2018');
            });

            it('return date after 20 days (next month) leap year',function(){
                let result = date3(2,27,2016);
                assert.equal(result,'3/18/2016');
            });

            //-----------------------------------------------------------------------
            it('FAIL CASE: before 20 days (same month) not a leap year',function(){
                let result = date3(2,8,2018);
                assert.equal(result,'2/27/2018');
            });

            it('FAIL CASE: after 20 days (same month) not a leap year',function(){
                let result = date3(2,7,2018);
                assert.equal(result,'2/28/2018');
            });

            it('FAIL CASE: before 20 days (same month) leap year',function(){
                let result = date3(2,9,2016);
                assert.equal(result,'2/28/2016');
            });

            it('FAIL CASE: after 20 days (same month) leap year',function(){
                let result = date3(2,8,2016);
                assert.equal(result,'2/29/2016');
            });

            //-----------------------------------------------------------------------
            it('FAIL CASE: before 20 days (next month) not a leap year',function(){
                let result = date3(2,27,2018);
                assert.equal(result,'3/18/2018');
            });

            it('FAIL CASE: after 20 days (next month) not a leap year',function(){
                let result = date3(2,27,2018);
                assert.equal(result,'3/20/2018');
            });

            it('FAIL CASE: before 20 days (next month) leap year',function(){
                let result = date3(2,27,2016);
                assert.equal(result,'3/17/2016');
            });

            it('FAIL CASE: after 20 days (next month) leap year',function(){
                let result = date3(2,27,2016);
                assert.equal(result,'3/19/2016');
            });
        });  

        describe('Mar',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(3,2,2018);
                assert.equal(result,'3/22/2018');
            });


            it('return date after 20 days (next month)',function(){
                let result = date3(3,26,2018);
                assert.equal(result,'4/15/2018');
            });

            it('CASE FAIL: before 20 days (same month)',function(){
                let result = date3(3,2,2018);
                assert.equal(result,'3/21/2018');
            });

            it('CASE FAIL: after 20 days (same month)',function(){
                let result = date3(3,2,2018);
                assert.equal(result,'3/23/2018');
            });


            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(3,26,2018);
                assert.equal(result,'4/14/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(3,26,2018);
                assert.equal(result,'4/16/2018');
            });
        });  

        describe('April',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(4,10,2018);
                assert.equal(result,'4/30/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(4,29,2018);
                assert.equal(result,'5/19/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(4,9,2018);
                assert.equal(result,'4/28/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(4,9,2018);
                assert.equal(result,'4/30/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(4,29,2018);
                assert.equal(result,'5/18/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(4,29,2018);
                assert.equal(result,'5/20/2018');
            });
        });  

        describe('May',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(5,6,2018);
                assert.equal(result,'5/26/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(5,28,2018);
                assert.equal(result,'6/17/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(5,6,2018);
                assert.equal(result,'5/25/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(5,6,2018);
                assert.equal(result,'5/27/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(5,28,2018);
                assert.equal(result,'6/16/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(5,28,2018);
                assert.equal(result,'6/18/2018');
            });
        });
        
        describe('Jun',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(6,8,2018);
                assert.equal(result,'6/28/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(6,26,2018);
                assert.equal(result,'7/16/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(6,8,2018);
                assert.equal(result,'6/27/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(6,8,2018);
                assert.equal(result,'6/29/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(6,26,2018);
                assert.equal(result,'7/15/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(6,26,2018);
                assert.equal(result,'7/17/2018');
            });
        });
        
        describe('Jul',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(7,2,2018);
                assert.equal(result,'7/22/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(7,29,2018);
                assert.equal(result,'8/18/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(7,2,2018);
                assert.equal(result,'7/21/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(7,2,2018);
                assert.equal(result,'7/23/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(7,29,2018);
                assert.equal(result,'8/17/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(7,29,2018);
                assert.equal(result,'8/19/2018');
            });
        }); 
        
        describe('Aug',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(8,3,2018);
                assert.equal(result,'8/23/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(8,29,2018);
                assert.equal(result,'9/18/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(8,3,2018);
                assert.equal(result,'8/22/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(8,3,2018);
                assert.equal(result,'8/24/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(8,29,2018);
                assert.equal(result,'9/17/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(8,29,2018);
                assert.equal(result,'9/19/2018');
            });
        });
        
        describe('Sep',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(9,1,2018);
                assert.equal(result,'9/21/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(9,26,2018);
                assert.equal(result,'10/16/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(9,1,2018);
                assert.equal(result,'9/20/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(9,1,2018);
                assert.equal(result,'9/22/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(9,26,2018);
                assert.equal(result,'10/15/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(9,26,2018);
                assert.equal(result,'10/17/2018');
            });
        });
        
        describe('Oct',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(10,3,2018);
                assert.equal(result,'10/23/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(10,28,2018);
                assert.equal(result,'11/17/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(10,3,2018);
                assert.equal(result,'10/22/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(10,3,2018);
                assert.equal(result,'10/24/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(10,28,2018);
                assert.equal(result,'11/16/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(10,28,2018);
                assert.equal(result,'11/18/2018');
            });
        }); 
        
        describe('Nov',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(11,4,2018);
                assert.equal(result,'11/24/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(11,27,2018);
                assert.equal(result,'12/17/2018');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(11,4,2018);
                assert.equal(result,'11/23/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(11,4,2018);
                assert.equal(result,'11/25/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(11,27,2018);
                assert.equal(result,'12/16/2018');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(11,27,2018);
                assert.equal(result,'12/18/2018');
            });
        });
        
        describe('Dec',function(){

            it('return date after 20 days (same month)',function(){
                let result = date3(12,6,2018);
                assert.equal(result,'12/26/2018');
            });

            it('return date after 20 days (next month)',function(){
                let result = date3(12,28,2018);
                assert.equal(result,'1/17/2019');
            });

            it('FAIL CASE: before 20 days (same month)',function(){
                let result = date3(12,6,2018);
                assert.equal(result,'12/25/2018');
            });

            it('FAIL CASE: after 20 days (same month)',function(){
                let result = date3(12,6,2018);
                assert.equal(result,'12/27/2018');
            });

            it('FAIL CASE: before 20 days (next month)',function(){
                let result = date3(12,28,2018);
                assert.equal(result,'1/16/2019');
            });

            it('FAIL CASE: after 20 days (next month)',function(){
                let result = date3(12,28,2018);
                assert.equal(result,'1/18/2019');
            });
        });  
    }); 
});

    
