CREATE TABLE C_IMAGE(
    C_ID INT,
    IMG BLOB,
    FOREIGN KEY (C_ID) REFERENCES STOCK(C_ID)
);
