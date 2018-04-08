
-- Table: Login
CREATE TABLE Login (
    Username varchar(24) NOT NULL,
    Password varchar(24) NOT NULL,
    Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Login_pk PRIMARY KEY (Username)
) 

-- Table: Employee
CREATE TABLE Employee (
    Emp_ID varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Username varchar(15) NOT NULL,
    Login_Username varchar(24) NOT NULL,
    Tier1 int NOT NULL,
    Tier2 int NOT NULL,
    Tier3 int NOT NULL,
    CONSTRAINT Employee_pk PRIMARY KEY (Emp_ID)
) 

-- Table: Client
CREATE TABLE Client (
    CLI_ORG_ID varchar(9) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NOT NULL,
    BIRTH_DATE varchar(8) NOT NULL,
    AGE varchar(3) NOT NULL,
    SS_NUMBER varchar(9) NOT NULL,
    STATE_ID varchar(9) NOT NULL,
    EMP_ID varchar(24) NOT NULL,
    CLI_STATUS varchar(2) NOT NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Client_pk PRIMARY KEY (CLI_ORG_ID)
) 

-- Table: Classification
CREATE TABLE Classification (
    STATE_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(2) NOT NULL,
    HISPANIC varchar(2) NOT NULL,
    EDUCATION varchar(2) NOT NULL,
    MARITAL varchar(1) NOT NULL,
    LEG_STATUS varchar(1) NOT NULL,
    VET_STATUS varchar(1) NOT NULL,
    Client_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Classification_pk PRIMARY KEY (STATE_ID)
) 

-- Table: Client
CREATE TABLE Client (
    CLI_ORG_ID varchar(9) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NOT NULL,
    BIRTH_DATE varchar(8) NOT NULL,
    AGE varchar(3) NOT NULL,
    SS_NUMBER varchar(9) NOT NULL,
    STATE_ID varchar(9) NOT NULL,
    EMP_ID varchar(24) NOT NULL,
    CLI_STATUS varchar(2) NOT NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Client_pk PRIMARY KEY (CLI_ORG_ID)
) 


-- Table: Financials
CREATE TABLE Financials (
    SS_NUMBER varchar(9) NOT NULL,
    EMPLOYMENT varchar(2) NOT NULL,
    INCOME_SRC varchar(1) NOT NULL,
    INCOME_HOUS varchar(6) NOT NULL,
    INCOME_DEP varchar(2) NOT NULL,
    ELIG_SSI int NOT NULL,
    ELIG_MCAID int NOT NULL,
    PAYMENT varchar(2) NOT NULL,
    Client_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Financials_pk PRIMARY KEY (SS_NUMBER)
) 


-- Table: Services
CREATE TABLE Services (
    INPAT_SERV varchar(3) NOT NULL,
    RESID_SERV varchar(3) NOT NULL,
    PARTI_SERV varchar(3) NOT NULL,
    OUTPA_SERV varchar(3) NOT NULL,
    CASE_SERV varchar(3) NOT NULL,
    DSC_ID int NOT NULL,
    Medical_DSC_ID int NOT NULL,
    CONSTRAINT Services_pk PRIMARY KEY (DSC_ID)
) 



