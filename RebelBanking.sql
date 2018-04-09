Drop table if exists Financials, Classification, Clients, Employee;

-- Table: Employee
CREATE TABLE Employee (
    Username varchar(24) NOT NULL,
    Passwords varchar(15) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    FinancilProfessional_1 bool NOT NULL,
    FinancilProfessional_2 bool NOT NULL,
    FinancilProfessional_3 bool NOT NULL,
    -- CONSTRAINT Employee_pk PRIMARY KEY (Emp_ID)
    PRIMARY KEY (Username)
);

CREATE TABLE Composite(
     Username varchar(24) NOT NULL,
     SS_Num varchar(11) NOT NULL,
     PRIMARY KEY (Username, SS_Num)
);

-- Table: Clients
CREATE TABLE Clients (
    SS_Num varchar(11) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NOT NULL,
    BIRTH_DATE varchar(24) NOT NULL,
    AGE varchar(2) NOT NULL,
    CLI_STATUS varchar(24) NOT NULL,
    PRIMARY KEY (SS_Num)
);

-- Table: Classification
CREATE TABLE Classification (
    CLI_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(10) NOT NULL,
    MARITAL varchar(1) NOT NULL,
    LEG_STATUS bool NOT NULL,
    Clients_SS_Num varchar(11) NOT NULL,
    PRIMARY KEY (CLI_ID)
);

-- Table: Financials
CREATE TABLE Financials (
    ACC_Num varchar(9) NOT NULL,
    EMPLOYMENT bool NOT NULL,
    INCOME_SRC varchar(5) NOT NULL,
    Classification_CLI_ID varchar(9) NOT NULL,
    PRIMARY KEY (ACC_Num)
);


-- foreign keys
-- Reference: Classification_Clients (table: Classification)
ALTER TABLE Classification ADD CONSTRAINT Classification_Clients FOREIGN KEY Classification_Clients (Clients_SS_Num)
    REFERENCES Clients (SS_Num);

-- Reference: Clients_Employee (table: Clients)
ALTER TABLE Composite ADD CONSTRAINT Clients_Composite FOREIGN KEY Clients_Composite (SS_Num)
    REFERENCES Clients (SS_Num);


-- Reference: Financials_Classification (table: Financials)
ALTER TABLE Financials ADD CONSTRAINT Financials_Classification FOREIGN KEY Financials_Classification (Classification_CLI_ID)
    REFERENCES Classification (CLI_ID);
    
    ALTER TABLE Composite ADD CONSTRAINT Employee_Composite FOREIGN KEY Employee_Composite(Username)
    REFERENCES Employee(Username);



INSERT INTO Employee VALUES('Amy1','OleMiss1!','Amy','Ashley','False','False','True');
INSERT INTO Employee VALUES('Adam2','OleMiss2!','Adam','Adams','False','False','True');
INSERT INTO Employee VALUES('Emily3','OleMiss3!','Emily','Evans','True','False','False');
INSERT INTO Employee VALUES('Everett4','OleMiss4!','Everett','Eagle','True','False','False');
INSERT INTO Employee VALUES('Elle5','OleMiss5!','Elle','Ellens','True','False','False');
INSERT INTO Employee VALUES('Eddy6','OleMiss6!','Eddy','Jackson','False','True','False');
INSERT INTO Employee VALUES('Eric7','OleMiss7!','Eric','Materson','False','True','False');
INSERT INTO Employee VALUES('Emma8','OleMiss8','Emma','Watson','False','True','False');


INSERT INTO Clients VALUES('667-07-0215','Niamh','Perry', 'Hansen', '06-10-1958', '60', 'ACTIVE');
INSERT INTO Clients VALUES('001-66-1622','Judith','Russell', 'Delacruz', '12-2-1962', '55', 'DEACTIVATED');
INSERT INTO Clients VALUES('016-90-0346','Brittney','Stevens', 'Little', '11-7-1966', '52', 'ACTIVE');
INSERT INTO Clients VALUES('492-21-3648','Livia ','Foster', 'Foster', '07-15-1972', '46', 'SUSPENDED');
INSERT INTO Clients VALUES('422-44-1999','Dante','Ramsey', 'Ramsey', '10-22-1976', '42', 'DEACTIVATED');
INSERT INTO Clients VALUES('614-87-0504','Pearl','Griffin', 'Griffin', '12-27-1977', '41', 'ACTIVE');
INSERT INTO Clients VALUES('404-14-1154','Sebastian','Ross', 'Ross', '121-5-1978', '40', 'DEACTIVATED');
INSERT INTO Clients VALUES('041-44-9678','Gavin','Terry', 'Terry', '01-03-1979', '39', 'DEACTIVATED');
INSERT INTO Clients VALUES('649-30-7152','Kerry','Day', 'Day', '05-27-1982', '36', 'ACTIVE');
INSERT INTO Clients VALUES('574-68-9407','Andy','Black', 'Velasquez', '07-18-1984', '34', 'SUSPENDED');
INSERT INTO Clients VALUES('676-22-6949','Kallum','Clarke', 'Bray', '01-23-1988', '30', 'SUSPENDED');
INSERT INTO Clients VALUES('484-28-2725','Chase','Black', 'Lamb', '03-12-1997', '21', 'ACTIVE');

INSERT INTO Composite VALUES('Amy1','667-07-0215');
INSERT INTO Composite VALUES('Amy1','001-66-1622');
INSERT INTO Composite VALUES('Amy1','016-90-0346');
INSERT INTO Composite VALUES('Amy1','492-21-3648');
INSERT INTO Composite VALUES('Amy1','422-44-1999');
INSERT INTO Composite VALUES('Amy1','614-87-0504');
INSERT INTO Composite VALUES('Amy1','404-14-1154');
INSERT INTO Composite VALUES('Amy1','041-44-9678');
INSERT INTO Composite VALUES('Amy1','649-30-7152');
INSERT INTO Composite VALUES('Amy1','574-68-9407');
INSERT INTO Composite VALUES('Amy1','676-22-6949');
INSERT INTO Composite VALUES('Amy1','484-28-2725');

INSERT INTO Composite VALUES('Adam2','667-07-0215');
INSERT INTO Composite VALUES('Adam2','001-66-1622');
INSERT INTO Composite VALUES('Adam2','016-90-0346');
INSERT INTO Composite VALUES('Adam2','492-21-3648');
INSERT INTO Composite VALUES('Adam2','422-44-1999');
INSERT INTO Composite VALUES('Adam2','614-87-0504');
INSERT INTO Composite VALUES('Adam2','404-14-1154');
INSERT INTO Composite VALUES('Adam2','041-44-9678');
INSERT INTO Composite VALUES('Adam2','649-30-7152');
INSERT INTO Composite VALUES('Adam2','574-68-9407');
INSERT INTO Composite VALUES('Adam2','676-22-6949');
INSERT INTO Composite VALUES('Adam2','484-28-2725');

INSERT INTO Composite VALUES('Emily3','667-07-0215');
INSERT INTO Composite VALUES('Emily3','001-66-1622');
INSERT INTO Composite VALUES('Emily3','016-90-0346');
INSERT INTO Composite VALUES('Emily3','492-21-3648');
INSERT INTO Composite VALUES('Emily3','422-44-1999');
INSERT INTO Composite VALUES('Emily3','614-87-0504');
INSERT INTO Composite VALUES('Emily3','404-14-1154');
INSERT INTO Composite VALUES('Emily3','041-44-9678');
INSERT INTO Composite VALUES('Emily3','649-30-7152');
INSERT INTO Composite VALUES('Emily3','574-68-9407');
INSERT INTO Composite VALUES('Emily3','676-22-6949');
INSERT INTO Composite VALUES('Emily3','484-28-2725');

INSERT INTO Composite VALUES('Everett4','667-07-0215');
INSERT INTO Composite VALUES('Everett4','001-66-1622');
INSERT INTO Composite VALUES('Everett4','016-90-0346');
INSERT INTO Composite VALUES('Everett4','492-21-3648');
INSERT INTO Composite VALUES('Everett4','422-44-1999');
INSERT INTO Composite VALUES('Everett4','614-87-0504');
INSERT INTO Composite VALUES('Everett4','404-14-1154');
INSERT INTO Composite VALUES('Everett4','041-44-9678');
INSERT INTO Composite VALUES('Everett4','649-30-7152');
INSERT INTO Composite VALUES('Everett4','574-68-9407');
INSERT INTO Composite VALUES('Everett4','676-22-6949');
INSERT INTO Composite VALUES('Everett4','484-28-2725');

INSERT INTO Composite VALUES('Elle5','667-07-0215');
INSERT INTO Composite VALUES('Elle5','001-66-1622');
INSERT INTO Composite VALUES('Elle5','016-90-0346');
INSERT INTO Composite VALUES('Elle5','492-21-3648');
INSERT INTO Composite VALUES('Elle5','422-44-1999');
INSERT INTO Composite VALUES('Elle5','614-87-0504');
INSERT INTO Composite VALUES('Elle5','404-14-1154');
INSERT INTO Composite VALUES('Elle5','041-44-9678');
INSERT INTO Composite VALUES('Elle5','649-30-7152');
INSERT INTO Composite VALUES('Elle5','574-68-9407');
INSERT INTO Composite VALUES('Elle5','676-22-6949');
INSERT INTO Composite VALUES('Elle5','484-28-2725');

INSERT INTO Composite VALUES('Eddy6','667-07-0215');
INSERT INTO Composite VALUES('Eddy6','001-66-1622');
INSERT INTO Composite VALUES('Eddy6','016-90-0346');
INSERT INTO Composite VALUES('Eddy6','492-21-3648');
INSERT INTO Composite VALUES('Eddy6','422-44-1999');
INSERT INTO Composite VALUES('Eddy6','614-87-0504');
INSERT INTO Composite VALUES('Eddy6','404-14-1154');
INSERT INTO Composite VALUES('Eddy6','041-44-9678');
INSERT INTO Composite VALUES('Eddy6','649-30-7152');
INSERT INTO Composite VALUES('Eddy6','574-68-9407');
INSERT INTO Composite VALUES('Eddy6','676-22-6949');
INSERT INTO Composite VALUES('Eddy6','484-28-2725');

INSERT INTO Composite VALUES('Eric7','667-07-0215');
INSERT INTO Composite VALUES('Eric7','001-66-1622');
INSERT INTO Composite VALUES('Eric7','016-90-0346');
INSERT INTO Composite VALUES('Eric7','492-21-3648');
INSERT INTO Composite VALUES('Eric7','422-44-1999');
INSERT INTO Composite VALUES('Eric7','614-87-0504');
INSERT INTO Composite VALUES('Eric7','404-14-1154');
INSERT INTO Composite VALUES('Eric7','041-44-9678');
INSERT INTO Composite VALUES('Eric7','649-30-7152');
INSERT INTO Composite VALUES('Eric7','574-68-9407');
INSERT INTO Composite VALUES('Eric7','676-22-6949');
INSERT INTO Composite VALUES('Eric7','484-28-2725');

INSERT INTO Composite VALUES('Emma8','667-07-0215');
INSERT INTO Composite VALUES('Emma8','001-66-1622');
INSERT INTO Composite VALUES('Emma8','016-90-0346');
INSERT INTO Composite VALUES('Emma8','492-21-3648');
INSERT INTO Composite VALUES('Emma8','422-44-1999');
INSERT INTO Composite VALUES('Emma8','614-87-0504');
INSERT INTO Composite VALUES('Emma8','404-14-1154');
INSERT INTO Composite VALUES('Emma8','041-44-9678');
INSERT INTO Composite VALUES('Emma8','649-30-7152');
INSERT INTO Composite VALUES('Emma8','574-68-9407');
INSERT INTO Composite VALUES('Emma8','676-22-6949');
INSERT INTO Composite VALUES('Emma8','484-28-2725');


INSERT INTO Classification VALUES('849612753','F','Asian American','M','TRUE','667-07-0215'); 
INSERT INTO Classification VALUES('426709318','F','White','D','TRUE','001-66-1622'); 
INSERT INTO Classification VALUES('583764209','F','White','M','TRUE','016-90-0346'); 
INSERT INTO Classification VALUES('391540782','F','Latin American','S','TRUE','492-21-3648'); 
INSERT INTO Classification VALUES('130475269','F','Native American','S','FALSE','422-44-1999'); 
INSERT INTO Classification VALUES('409632175','F','African American','S','TRUE','614-87-0504');
INSERT INTO Classification VALUES('136724089','M','White','M','FALSE','404-14-1154'); 
INSERT INTO Classification VALUES('107642895','M','Asian American','S','TRUE','041-44-9678'); 
INSERT INTO Classification VALUES('840132956','M','White','M','FALSE','649-30-7152'); 
INSERT INTO Classification VALUES('403678192','M','African American','D','FALSE','574-68-9407'); 
INSERT INTO Classification VALUES('062319478','M','Native American','M','TRUE','676-22-6949'); 
INSERT INTO Classification VALUES('627109384','M','Latin American','M','TRUE','484-28-2725'); 

INSERT INTO Financials VALUES('028653714','TRUE','Full-Time Job','849612753');
INSERT INTO Financials VALUES('714982560','TRUE','Part-Time Job','426709318');
INSERT INTO Financials VALUES('786395214','TRUE','Full-Time Job','583764209');
INSERT INTO Financials VALUES('307615428','TRUE','Part-Time Job','391540782');
INSERT INTO Financials VALUES('291704538','TRUE','Full-Time Job','130475269');
INSERT INTO Financials VALUES('691024738','TRUE','Full-Time Job','409632175');
INSERT INTO Financials VALUES('953182406','TRUE','Part-Time Job','136724089');
INSERT INTO Financials VALUES('034987625','TRUE','Full-Time Job','107642895');
INSERT INTO Financials VALUES('034987695','TRUE','Part-Time Job','840132956');
INSERT INTO Financials VALUES('912587064','TRUE','Full-Time Job','403678192');
INSERT INTO Financials VALUES('842519603','FALSE','PARENT','062319478');
INSERT INTO Financials VALUES('935741820','FALSE','PARENT','627109384');