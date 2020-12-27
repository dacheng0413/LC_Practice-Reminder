
CREATE TABLE LeetCode(
LC_ID varchar(30) NOT NULL,
Input_Date char(2) NOT NULL DEFAULT CURRENT_DATE,
Review_Date datetime NOT NULL DEFAULT CURRENT_DATE,
Is_Remembered boolean NOT NULL DEFAULT 0,
PRIMARY KEY(LC_ID);

