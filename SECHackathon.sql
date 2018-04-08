

-- Table: Classification
CREATE TABLE Classification (
    CLI_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(10) NOT NULL,
    MARITAL varchar(1) NOT NULL,
    LEG_STATUS bool NOT NULL,
    Client_SS_Num varchar(9) NOT NULL,
    CONSTRAINT Classification_pk PRIMARY KEY (CLI_ID)
);

-- Table: Client
CREATE TABLE Client (
    SS_Num varchar(9) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NOT NULL,
    BIRTH_DATE varchar(8) NOT NULL,
    AGE varchar(3) NOT NULL,
    CLI_STATUS varchar(2) NOT NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Client_pk PRIMARY KEY (SS_Num)
);

-- Table: Employee
CREATE TABLE Employee (
    Emp_ID varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Username varchar(15) NOT NULL,
    PASSWORD varchar(15) NOT NULL,
    FinancilProfessional_1 bool NOT NULL,
    FinancilProfessional_2 bool NOT NULL,
    FinancilProfessional_3 bool NOT NULL,
    Login_Password varchar(24) NOT NULL,
    Login_Username varchar(24) NOT NULL,
    CONSTRAINT Employee_pk PRIMARY KEY (Emp_ID)
);

-- Table: Financials
CREATE TABLE Financials (
    ACC_Num varchar(9) NOT NULL,
    EMPLOYMENT bool NULL,
    INCOME_SRC varchar(20) NULL,
    Classification_CLI_ID varchar(9) NOT NULL,
    CONSTRAINT Financials_pk PRIMARY KEY (ACC_Num)
);

-- Table: Login
CREATE TABLE Login (
    Username varchar(24) NOT NULL,
    PASSWORD varchar(24) NULL,
    Emp_ID varchar(10) NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Login_pk PRIMARY KEY (Username)
);

-- foreign keys
-- Reference: Classification_Client (table: Classification)
ALTER TABLE Classification ADD CONSTRAINT Classification_Client FOREIGN KEY Classification_Client (Client_SS_Num)
    REFERENCES Client (SS_Num);

-- Reference: Client_Employee (table: Client)
ALTER TABLE Client ADD CONSTRAINT Client_Employee FOREIGN KEY Client_Employee (Employee_Emp_ID)
    REFERENCES Employee (Emp_ID);

-- Reference: Employee_Login (table: Employee)
ALTER TABLE Employee ADD CONSTRAINT Employee_Login FOREIGN KEY Employee_Login (Login_Username)
    REFERENCES Login (Username);

-- Reference: Financials_Classification (table: Financials)
ALTER TABLE Financials ADD CONSTRAINT Financials_Classification FOREIGN KEY Financials_Classification (Classification_CLI_ID)
    REFERENCES Classification (CLI_ID);

-- Reference: Login_Employee (table: Login)
ALTER TABLE Login ADD CONSTRAINT Login_Employee FOREIGN KEY Login_Employee (Employee_Emp_ID)
    REFERENCES Employee (Emp_ID);


--INSERT INTO Login VALUES("Username","Password","Emp_ID");
INSERT INTO Login VALUES("Amy1","OleMiss1!","01234");
INSERT INTO Login VALUES("Adam2","OleMiss2!","12345");
INSERT INTO Login VALUES("Emily3","OleMiss3!","23456");
INSERT INTO Login VALUES("Everett4","OleMiss4!","34567");
INSERT INTO Login VALUES("Elle5","OleMiss5!","45678");
INSERT INTO Login VALUES("Eddy6","OleMiss6!","56789");
INSERT INTO Login VALUES("Eric7","OleMiss7!","67890");
INSERT INTO Login VALUES("Emma8","OleMiss8!","78901");

--INSERT INTO Employee VALUES("Emp_ID","First_Name","Last_Name","Username","PASSWORD"," FinancilProfessional_1"," FinancilProfessional_2", FinancilProfessional_3,);
INSERT INTO Employee VALUES("01234","Amy","Ashley","Amy1","OleMiss1!","False","False","True");
INSERT INTO Employee VALUES("12345","Adam","Adams","Adam2","OleMiss2!","False","False","True");
INSERT INTO Employee VALUES("12345","Emily","Evans","Emily3","OleMiss3!","True","False","False");
INSERT INTO Employee VALUES("12345","Everett","Eagle","Everett4","OleMiss4!","True","False","False");
INSERT INTO Employee VALUES("12345","Elle","Ellens","Elle5","OleMiss5!","True","False","False");
INSERT INTO Employee VALUES("12345","Eddy","Jackson","Eddy6","OleMiss6!","False","True","False");
INSERT INTO Employee VALUES("12345","Eric","Materson","Eric7","OleMiss7!","False","True","False");
INSERT INTO Employee VALUES("12345","Emma","Watson","Emma8","OleMiss8","False","True","False");

--INSERT INTO Client VALUES("SS_Num","LAST_NAME","FIRST_NAME", "MAID_NAME", "BIRTH_DATE", "AGE", "CLI_STATUS");
INSERT INTO Client VALUES("667-07-0215","Niamh","Perry", "Hansen", "06/10/1958", "60", "ACTIVE");
INSERT INTO Client VALUES("001-66-1622","Judith","Russell", "Delacruz", "12/2/1962", "55", "DEACTIVATED");
INSERT INTO Client VALUES("016-90-0346","Brittney","Stevens", "Little", "11/7/1966", "52", "ACTIVE");
INSERT INTO Client VALUES("492-21-3648","Livia ","Foster", "Foster", "07/15/1972", "46", "SUSPENDED");
INSERT INTO Client VALUES("422-44-1999","Dante","Ramsey", "Ramsey", "10/22/1976", "42", "DEACTIVATED");
INSERT INTO Client VALUES("614-87-0504","Pearl","Griffin", "Griffin", "12/27/1977", "41", "ACTIVE");
INSERT INTO Client VALUES("404-14-1154","Sebastian","Ross", "Ross", "12/15/1978", "40", "DEACTIVATED");
INSERT INTO Client VALUES("041-44-9678","Gavin","Terry", "Terry", "01/3/1979", "39", "DEACTIVATED");
INSERT INTO Client VALUES("649-30-7152","Kerry","Day", "Day", "05/27/1982", "36", "ACTIVE");
INSERT INTO Client VALUES("574-68-9407","Andy","Black", "Velasquez", "07/18/1984", "34", "SUSPENDED");
INSERT INTO Client VALUES("676-22-6949","Kallum","Clarke", "Bray", "01/23/1988", "30", "SUSPENDED");
INSERT INTO Client VALUES("484-28-2725","Chase","Black", "Lamb", "03/12/1997", "21", "ACTIVE");

--INSERT INTO Classification VALUES("CLI_ID","SEX","RACE","MARITAL","LEG_STATUS","SS_NUM")
INSERT INTO Classification VALUES("849612753","F","Asian American","M","TRUE","667-07-0215"); --Niamh
INSERT INTO Classification VALUES("426709318","F","White","D","TRUE","001-66-1622"); --Judith
INSERT INTO Classification VALUES("583764209","F","White","M","TRUE","016-90-0346"); --Brittney
INSERT INTO Classification VALUES("391540782","F","Latin American","S","TRUE","492-21-3648"); --Livia
INSERT INTO Classification VALUES("130475269","F","Native American","S","FALSE","422-44-1999"); --Dante
INSERT INTO Classification VALUES("409632175","F","African American","S","TRUE","614-87-0504");--Pearl
INSERT INTO Classification VALUES("136724089","M","White","M","FALSE","404-14-1154"); --Sebastian
INSERT INTO Classification VALUES("107642895","M","Asian American","S","TRUE","041-44-9678"); --Gavin
INSERT INTO Classification VALUES("840132956","M","White","M","FALSE","649-30-7152"); --Kerry
INSERT INTO Classification VALUES("403678192","M","African American","D","FALSE","574-68-9407"); --Andy
INSERT INTO Classification VALUES("062319478","M","Native American","M","TRUE","676-22-6949"); --Kallum
INSERT INTO Classification VALUES("627109384","M","Latin American","M","TRUE","484-28-2725"); --Chase


--INSERT INTO Finacials VALUES("ACC_Num","EMPLOYMENT","INCOME_SRC","SS_Num")
INSERT INTO Finacials VALUES("028653714","TRUE","Full-Time Job","849612753");
INSERT INTO Finacials VALUES("714982560","TRUE","Part-Time Job","426709318");
INSERT INTO Finacials VALUES("786395214","TRUE","Full-Time Job","583764209");
INSERT INTO Finacials VALUES("307615428","TRUE","Part-Time Job","391540782");
INSERT INTO Finacials VALUES("291704538","TRUE","Full-Time Job","130475269");
INSERT INTO Finacials VALUES("691024738","TRUE","Full-Time Job","409632175");
INSERT INTO Finacials VALUES("953182406","TRUE","Part-Time Job","136724089");
INSERT INTO Finacials VALUES("034987625","TRUE","Full-Time Job","107642895");
INSERT INTO Finacials VALUES("034987625","TRUE","Part-Time Job","840132956");
INSERT INTO Finacials VALUES("912587064","TRUE","Full-Time Job","403678192");
INSERT INTO Finacials VALUES("842519603","FALSE","PARENT","062319478");
INSERT INTO Finacials VALUES("935741820","FALSE","PARENT","627109384");