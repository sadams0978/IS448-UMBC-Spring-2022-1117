CREATE TABLE STOCK(
    C_ID INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    C_NAME CHAR(20),
    C_DESC TEXT,
    C_QUANTITY INTEGER,
    C_CATEG CHAR(20),
    C_CONDITION CHAR(10),
    C_FINISH CHAR(10),
    C_COMP CHAR(20),
    PRICE DECIMAL(2,2)
);
