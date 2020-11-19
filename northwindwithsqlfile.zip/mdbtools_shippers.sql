-- ----------------------------------------------------------
-- MDB Tools - A library for reading MS Access database files
-- Copyright (C) 2000-2011 Brian Bruns and others.
-- Files in libmdb are licensed under LGPL and the utilities under
-- the GPL, see COPYING.LIB and COPYING files respectively.
-- Check out http://mdbtools.sourceforge.net
-- ----------------------------------------------------------

-- That file uses encoding UTF-8

CREATE TABLE `Shippers`
 (
	`ShipperID`			int, 
	`CompanyName`			varchar (40) NOT NULL, 
	`Phone`			varchar (24)
);


INSERT INTO `Shippers` (`ShipperID`, `CompanyName`, `Phone`) VALUES (1,"Speedy Express","(503) 555-9831");
INSERT INTO `Shippers` (`ShipperID`, `CompanyName`, `Phone`) VALUES (2,"United Package","(503) 555-3199");
INSERT INTO `Shippers` (`ShipperID`, `CompanyName`, `Phone`) VALUES (3,"Federal Shipping","(503) 555-9931");
