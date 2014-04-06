# bakesale
bakesale is the codename for a project being developed by the crew.
The goal of the project is to have DDS in a working form by the end of the second week of April.

## CMS (Content Management System)
The frontend for content creators is going to be WordPress. User groups in WordPress will assign content creators to groups where they can create and modify content. User groups will also act as the display groups mentioned later in this document. PIEs are also WordPress users, to ease the process of adding and changing the behavior of PIEs.

### Display Groups
Display groups are queues of actions that each PIE in the group follows on a timed rotation.

## Displays - P.I.E.s (Public Information Endpoints)
Each PIE will have be Raspberry Pi connected up to a LCD display. The PIEs will be distributed throughout WVH in locations that were previously home to the old routers hosting CCIS-Wireless. The PIEs will display infomation relevant to the area they are located in, as well as data relevant to CCIS as a whole.

### Design structure
PIEs can be assigned to one or more display groups. PIEs periodically query the CMS to find a list of slides they are supposed to be showing.

#### Example:
PIE 312 is part of the "Crew", "CCIS", and "3rd Floor" display groups.
"Crew" has 3 slides: Cr1, Cr2, Cr3
"CCIS" has 3 slides: CS1, CS2, CS3
"3rd Floor" has 1 slide: 3rd1



##Wordpress Plugins
	* DDS Manager
		* List of displays
		* Ability to manage displays - add/edit/remove - put them into multiple display groups
		* Ability to manage users - edit what display groups they have access to
		* Assign slides to display groups (e.g. "2nd Floor", "Outside Wahl's Office", "Printers", etc.)
	* DDS API
		* How the PIEs talk to the main server
		* "Hey, what slides should I be displaying" - every 5 minutes or something
		* Returns JSON (Javascript Object Notaton)
	* Slide Template
		* When the PIEs load the WordPress pages, they add some additional information to the request saying that they are a PIE
		* They provide their PIE ID:
		* "http://dds-server.ccs.neu.edu/lolpage?PIE=5"
		* When this page is loaded, WordPress filters out some HTML (removing everything on the web-page besides the slide)