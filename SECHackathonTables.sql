-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-04-08 03:56:03.666

-- tables

-- Table: Login
CREATE TABLE Login (
    Username varchar(24) NOT NULL,
    Password varchar(24) NULL,
    Emp_ID varchar(10) NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    Administrator_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Login_pk PRIMARY KEY (Username)
);

-- Table: Administrator
CREATE TABLE Administrator (
    Emp_ID varchar(24) NOT NULL,
    First_Name varchar(24) NOT NULL,
    Last_Name varchar(24) NOT NULL,
    Login_Password varchar(24) NOT NULL,
    Login_Username varchar(24) NOT NULL,
    CONSTRAINT Administrator_pk PRIMARY KEY (Emp_ID)
);

-- Table: Employee
CREATE TABLE Employee (
    Emp_ID varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Username varchar(15) NOT NULL,
    Password varchar(15) NOT NULL,
    FinancilProfessional_1 int NOT NULL,
    FinancilProfessional_2 int NOT NULL,
    FinancilProfessional_3 int NOT NULL,
    Login_Username varchar(24) NOT NULL,
    Login_Password varchar(24) NOT NULL,
    CONSTRAINT Employee_pk PRIMARY KEY (Emp_ID)
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

-- Table: Classification
CREATE TABLE Classification (
    CLI_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(2) NOT NULL,
    HISPANIC varchar(2) NOT NULL,
    MARITAL varchar(1) NOT NULL,
    LEG_STATUS varchar(1) NOT NULL,
    Client_SS_Num varchar(9) NOT NULL,
    CONSTRAINT Classification_pk PRIMARY KEY (CLI_ID)
);

-- Table: Financials
CREATE TABLE Financials (
    ACC_Num varchar(9) NOT NULL,
    SS_Num varchar(9) NULL,
    EMPLOYMENT varchar(2) NULL,
    INCOME_SRC varchar(1) NULL,
    INCOME_DEP varchar(2) NULL,
    PAYMENT varchar(2) NULL,
    Classification_CLI_ID varchar(9) NOT NULL,
    CONSTRAINT Financials_pk PRIMARY KEY (ACC_Num)
);

-- Table: Services
CREATE TABLE Services (
    ACC_Num varchar(9) NOT NULL,
    Money_Tran varchar(10) NULL,
    ACC_Sav varchar(10) NULL,
    ACC_Bal varchar(20) NULL,
    Classification_CLI_ID varchar(9) NOT NULL,
    CONSTRAINT Services_pk PRIMARY KEY (ACC_Num)
);


