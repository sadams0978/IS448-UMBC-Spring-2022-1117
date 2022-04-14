DROP TABLE IF EXISTS stock;

CREATE TABLE stock (C_ID INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
					C_category CHAR(20), 
					C_condition CHAR(20), 
                    C_finish CHAR(20),
                    C_composition CHAR(20), 
                    C_year NUMBER, 
                    C_description TEXT, 
                    C_unitprice NUMBER, 
                    C_sellerquantity NUMBER);   

INSERT INTO stock(C_category, C_condition, C_finish, C_composition, C_year, C_description, C_unitprice, C_sellerquantity)   
VALUES ('test1', 'test1', 'test1', 'test1', 'test1' , 'test1' , 'test1', 'test1');
