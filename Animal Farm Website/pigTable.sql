create database swine;

use swine;

create table swine (pen nvarchar(50), notch nvarchar(50), tag nvarchar(50), date1 date, boar1 nvarchar(50),
				date2 date, boar2 nvarchar(50), heat nvarchar(50), date3 date, line nvarchar(30),
                newPen nvarchar(50), comm nvarchar(50));

insert into swine values
('car', 'dksld', 'ldjls', 12/09/1996, 'ldlsdl', 12/20/1997, 'dksldj', 'dkd', 12/30/1996, 'dlkd', 'kdjdl', 'kdjsl');



# select * from swine;
select * from swine where datediff(date1, date3) = 20;
SELECT DATE_FORMAT("2017-06-15", "%m/%d/%Y");

drop database swine;