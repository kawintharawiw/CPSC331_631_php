/*
 DHTML Menu version 3.3.19
 Written by Andy Woolley
 Copyright 2002 (c) Milonic Solutions. All Rights Reserved.
 Please vist http://www.milonic.co.uk/menu or e-mail menu3@milonic.com
  */

//The following line is critical for menu operation, and MUST APPEAR ONLY ONCE. If you have more than one menu_array.js file rem out this line in subsequent files
menunum=0;menus=new Array();_d=document;
function addmenu(){menunum++;menus[menunum]=menu;}
function dumpmenus(){mt="<script language=javascript>";for(a=1;a<menus.length;a++){mt+=" menu"+a+"=menus["+a+"];"}mt+="<\/script>";_d.write(mt)}
//Please leave the above line intact. The above also needs to be enabled if it not already enabled unless this file is part of a multi pack.

////////////////////////////////////
// Editable properties START here //
////////////////////////////////////

// Special effect string for IE5.5 or above please visit http://www.milonic.co.uk/menu/filters_sample.php for more filters
if(navigator.appVersion.indexOf("MSIE 6.0")>0) {
	effect = "Fade(duration=0.2);Alpha(style=0,opacity=88);Shadow(color='#777777', Direction=135, Strength=5)"
} else {
	effect = "Shadow(color='#777777', Direction=135, Strength=5)" // Stop IE5.5 bug when using more than one filter
}

timegap=500				// The time delay for menus to remain visible
followspeed=5			// Follow Scrolling speed
followrate=40			// Follow Scrolling Rate
suboffset_top=10;		// Sub menu offset Top position 
suboffset_left=10;		// Sub menu offset Left position

style1=[				// style1 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"000000",				// Mouse Off Font Color
"FFFFCC",				// Mouse Off Background Color
"ffffff",				// Mouse On Font Color
"Purple",				// Mouse On Background Color
"000000",				// Menu Border Color 
13,						// Font Size in pixels
"normal",				// Font Style (italic or normal)
"normal",				// Font Weight (bold or normal)
"MS Sans Serif",		// Font Name
5,						// Menu Item Padding
"http://www.yonok.ac.th/pic/arrow.gif",		// Sub Menu Image (Leave this blank if not needed)
1,						// 3D Border & Separator bar
"Purple",				// 3D High Color
"000099",				// 3D Low Color
"Purple",				// Current Page Item Font Color (leave this blank to disable)
"pink",					// Current Page Item Background Color (leave this blank to disable)
"http://www.yonok.ac.th/pic/arrowdn.gif",	// Top Bar image (Leave this blank to disable)
"ffffff",				// Menu Header Font Color (Leave blank if headers are not needed)
"000099",				// Menu Header Background Color (Leave blank if headers are not needed)
]

style2=[				// style1 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"000000",				// Mouse Off Font Color
"ffffdd",				// Mouse Off Background Color
"ffff00",				// Mouse On Font Color
"000040",				// Mouse On Background Color
"ffffff",				// Menu Border Color 
13,						// Font Size in pixels
"normal",				// Font Style (italic or normal)
"normal",				// Font Weight (bold or normal)
"MS Sans Serif",		// Font Name
4,						// Menu Item Padding
"http://www.thaiall.com/java/arrow.gif",		// Sub Menu Image (Leave this blank if not needed)
1,						// 3D Border & Separator bar
"66ffff",				// 3D High Color
"000099",				// 3D Low Color
"Purple",				// Current Page Item Font Color (leave this blank to disable)
"pink",					// Current Page Item Background Color (leave this blank to disable)
"http://www.thaiall.com/java/arrowdn.gif",	// Top Bar image (Leave this blank to disable)
"ffffff",				// Menu Header Font Color (Leave blank if headers are not needed)
"000099",				// Menu Header Background Color (Leave blank if headers are not needed)
]

addmenu(menu=[		// This is the array that contains your menu properties and details
"mainmenu",			// Menu Name - This is needed in order for the menu to be called
100,				// Menu Top - The Top position of the menu in pixels
10,				// Menu Left - The Left position of the menu in pixels
100,				// Menu Width - Menus width in pixels
2,					// Menu Border Width 
"",					// Screen Position - here you can use "center;left;right;middle;top;bottom" or a combination of "center:middle"
style1,				// Properties Array - this is set higher up, as above
1,					// Always Visible - allows the menu item to be visible at all time (1=on/0=off)
"center",			// Alignment - sets the menu elements text alignment, values valid here are: left, right or center
effect,				// Filter - Text variable for setting transitional effects on menu activation - see above for more info
0,					// Follow Scrolling - Tells the menu item to follow the user down the screen (visible at all times) (1=on/0=off)
1, 					// Horizontal Menu - Tells the menu to become horizontal instead of top to bottom style (1=on/0=off)
,					// Keep Alive - Keeps the menu visible until the user moves over another menu or clicks elsewhere on the page (1=on/0=off)
,					// Position of TOP sub image left:center:right
,					// Set the Overall Width of Horizontal Menu to 100% and height to the specified amount (Leave blank to disable)
,					// Right To Left - Used in Hebrew for example. (1=on/0=off)
,					// Open the Menus OnClick - leave blank for OnMouseover (1=on/0=off)
,					// ID of the div you want to hide on MouseOver (useful for hiding form elements)
,					// Reserved for future use
,					// Reserved for future use
,					// Reserved for future use

// "Description Text","URL", "Alternate URL", "Status", "Separator Bar"
// Main menu
,"northwind","show-menu=northwind",,"",1    
,"mysql_update","show-menu=mysql_update",,"",1
,"pyramid36","show-menu=pyramid36",,"",1    
,"contact","show-menu=contact",,"",1
])

addmenu(menu=["northwind",,,150,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"categories","show-menu=categories",,,1
,"customers","show-menu=customers",,,1
,"employees","show-menu=employees",,,1
,"orderdetails","show-menu=orderdetails",,,1
,"orders","show-menu=orders",,,1
,"products","show-menu=products",,,1
,"shippers","show-menu=shippers",,,1
,"suppliers","show-menu=suppliers",,,1
])

addmenu(menu=["mysql_update",,,150,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"categories_update","show-menu=categories_update",,,1
,"customers_update","show-menu=customers_update",,,1
,"employees_update","show-menu=employees_update",,,1
,"orderdetails_update","show-menu=orderdetails_update",,,1
,"orders_update","show-menu=orders_update",,,1
,"products_update","show-menu=products_update",,,1
,"shippers_update","show-menu=shippers_update",,,1
,"suppliers_update","show-menu=suppliers_update",,,1
])


addmenu(menu=["pyramid36",,,150,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"pyramid 1-6","show-menu=pyramid 1-6",,,1
,"pyramid 7-12","show-menu=pyramid 7-12",,,1
,"pyramid 13-18","show-menu=pyramid 13-18",,,1
,"pyramid 19-24","show-menu=pyramid 19-24",,,1
,"pyramid 25-30","show-menu=pyramid 25-30",,,1
,"pyramid 31-36","show-menu=pyramid 31-36",,,1
,"pyramid all","show-menu=pyramid all",,,1
])
	
addmenu(menu=["categories",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"cate_s0index","cust_s0index.php  target=_blank",,,1
,"cate_s1connect","cust_s1connect.php target=_blank",,,1
,"cate_s2crtdb","cust_s2crtdb.php  target=_blank",,,1
,"cate_s3select","cust_s3select.php target=_blank",,,1
,"cate_s4insert","cust_s4insert.php  target=_blank",,,1
,"cate_s5delete","cust_s5delete.php target=_blank",,,1
,"cate_s6update","cust_s6update.php target=_blank",,,1
,"cate_s7drop","cust_s7drop.php target=_blank",,,1
])

addmenu(menu=["customers",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"cust_s0index","cust_s0index.php  target=_blank",,,1
,"cust_s1connect","cust_s1connect.php target=_blank",,,1
,"cust_s2crtdb","cust_s2crtdb.php  target=_blank",,,1
,"cust_s3select","cust_s3select.php target=_blank",,,1
,"cust_s4insert","cust_s4insert.php  target=_blank",,,1
,"cust_s5delete","cust_s5delete.php target=_blank",,,1
,"cust_s6update","cust_s6update.php target=_blank",,,1
,"cust_s7drop","cust_s7drop.php target=_blank",,,1
])

addmenu(menu=["employees",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"emp_s0index","emp_s0index.php  target=_blank",,,1
,"emp_s1connect","emp_s1connect.php target=_blank",,,1
,"emp_s2crtdb","emp_s2crtdb.php  target=_blank",,,1
,"emp_s3select","emp_s3select.php target=_blank",,,1
,"emp_s4insert","emp_s4insert.php  target=_blank",,,1
,"emp_s5delete","emp_s5delete.php target=_blank",,,1
,"emp_s6update","emp_s6update.php target=_blank",,,1
,"emp_s7drop","emp_s7drop.php target=_blank",,,1
])

addmenu(menu=["orderdetails",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"orddt_s0index","orddt_s0index.php  target=_blank",,,1
,"orddt_s1connect","orddt_s1connect.php target=_blank",,,1
,"orddt_s2crtdb","orddt_s2crtdb.php  target=_blank",,,1
,"orddt_s3select","orddt_s3select.php target=_blank",,,1
,"orddt_s4insert","orddt_s4insert.php  target=_blank",,,1
,"orddt_s5delete","orddt_s5delete.php target=_blank",,,1
,"orddt_s6update","orddt_s6update.php target=_blank",,,1
,"orddt_s7drop","orddt_s7drop.php target=_blank",,,1
])

addmenu(menu=["orders",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"ord_s0index","ord_s0index.php  target=_blank",,,1
,"ord_s1connect","ord_s1connect.php target=_blank",,,1
,"ord_s2crtdb","ord_s2crtdb.php  target=_blank",,,1
,"ord_s3select","ord_s3select.php target=_blank",,,1
,"ord_s4insert","ord_s4insert.php  target=_blank",,,1
,"ord_s5delete","ord_s5delete.php target=_blank",,,1
,"ord_s6update","ord_s6update.php target=_blank",,,1
,"ord_s7drop","ord_s7drop.php target=_blank",,,1
])

addmenu(menu=["products",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"pro_s0index","pro_s0index.php  target=_blank",,,1
,"pro_s1connect","pro_s1connect.php target=_blank",,,1
,"pro_s2crtdb","pro_s2crtdb.php  target=_blank",,,1
,"pro_s3select","pro_s3select.php target=_blank",,,1
,"pro_s4insert","pro_s4insert.php  target=_blank",,,1
,"pro_s5delete","pro_s5delete.php target=_blank",,,1
,"pro_s6update","pro_s6update.php target=_blank",,,1
,"pro_s7drop","pro_s7drop.php target=_blank",,,1
])

addmenu(menu=["shippers",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"ship_s0index","ship_s0index.php  target=_blank",,,1
,"ship_s1connect","ship_s1connect.php target=_blank",,,1
,"ship_s2crtdb","ship_s2crtdb.php  target=_blank",,,1
,"ship_s3select","ship_s3select.php target=_blank",,,1
,"ship_s4insert","ship_s4insert.php  target=_blank",,,1
,"ship_s5delete","ship_s5delete.php target=_blank",,,1
,"ship_s6update","ship_s6update.php target=_blank",,,1
,"ship_s7drop","ship_s7drop.php target=_blank",,,1
])

addmenu(menu=["suppliers",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"sup_s0index","sup_s0index.php  target=_blank",,,1
,"sup_s1connect","sup_s1connect.php target=_blank",,,1
,"sup_s2crtdb","sup_s2crtdb.php  target=_blank",,,1
,"sup_s3select","sup_s3select.php target=_blank",,,1
,"sup_s4insert","sup_s4insert.php  target=_blank",,,1
,"sup_s5delete","sup_s5delete.php target=_blank",,,1
,"sup_s6update","sup_s6update.php target=_blank",,,1
,"sup_s7drop","sup_s7drop.php target=_blank",,,1
])

addmenu(menu=["mysql_update",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"categories_update","categories_update.php  target=_blank",,,1
,"customers_update","customers_update.php target=_blank",,,1
,"employees_update","semployees_update.php  target=_blank",,,1
,"orderdetails_update","orderdetails_update.php target=_blank",,,1
,"orders_update","orders_update.php  target=_blank",,,1
,"products_update","products_update.php target=_blank",,,1
,"shippers_update","shippers_update.php target=_blank",,,1
,"suppliers_update","suppliers_update.php target=_blank",,,1
])

addmenu(menu=["pyramid 1-6",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_01","wiw_01.php  target=_blank",,,1
,"wiw_02","wiw_02.php target=_blank",,,1
,"wiw_03","wiw_03.php  target=_blank",,,1
,"wiw_04","wiw_04.php target=_blank",,,1
,"wiw_05","wiw_05.php  target=_blank",,,1
,"wiw_06","wiw_06.php target=_blank",,,1
])

addmenu(menu=["pyramid 7-12",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_07","wiw_07.php target=_blank",,,1
,"wiw_08","wiw_08.php target=_blank",,,1
,"wiw_09","wiw_09.php target=_blank",,,1
,"wiw_10","wiw_10.php target=_blank",,,1
,"wiw_11","wiw_11.php target=_blank",,,1
,"wiw_12","wiw_12.php target=_blank",,,1
])

addmenu(menu=["pyramid 13-18",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_13","wiw_13.php target=_blank",,,1
,"wiw_14","wiw_14.php target=_blank",,,1
,"wiw_15","wiw_15.php target=_blank",,,1
,"wiw_16","wiw_16.php target=_blank",,,1
,"wiw_17","wiw_17.php target=_blank",,,1
,"wiw_18","wiw_18.php target=_blank",,,1
])

addmenu(menu=["pyramid 19-24",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_19","wiw_19.php target=_blank",,,1
,"wiw_20","wiw_20.php target=_blank",,,1
,"wiw_21","wiw_21.php target=_blank",,,1
,"wiw_22","wiw_22.php target=_blank",,,1
,"wiw_23","wiw_23.php target=_blank",,,1
,"wiw_24","wiw_24.php target=_blank",,,1
])

addmenu(menu=["pyramid 25-30",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_25","wiw_25.php target=_blank",,,1
,"wiw_26","wiw_26.php target=_blank",,,1
,"wiw_27","wiw_27.php target=_blank",,,1
,"wiw_28","wiw_28.php target=_blank",,,1
,"wiw_29","wiw_29.php target=_blank",,,1
,"wiw_30","wiw_30.php target=_blank",,,1
])

addmenu(menu=["pyramid 31-36",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_31","wiw_31.php target=_blank",,,1
,"wiw_32","wiw_32.php target=_blank",,,1
,"wiw_33","wiw_33.php target=_blank",,,1
,"wiw_34","wiw_34.php target=_blank",,,1
,"wiw_35","wiw_35.php target=_blank",,,1
,"wiw_36","wiw_36.php target=_blank",,,1
])

addmenu(menu=["pyramid all",,,200,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"wiw_all","wiw_all.php target=_blank",,,1
])

addmenu(menu=["contact",,,200,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"facebook.com","https://www.facebook.com/kawintara.wiw",,,1
,"twitter.com","https://twitter.com/KawintharaY",,,1
,"instagram.com","https://www.instagram.com/kawinkawinthara/",,,1
,"youtube.com","https://www.youtube.com/channel/UCf2-upkzyK9GEpKYy-ySX3A",,,1
,"github.com","https://github.com/kawintharawiw",,,1
])
		
dumpmenus()
