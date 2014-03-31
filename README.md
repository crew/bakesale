# bakesale
bakesale is the codename for a project being developed by the crew.
The goal of the project is to have DDS in a working form by the end of the second week of April.

## CMS (Content Management System)
The frontend for content creators is going to be WordPress. User groups in WordPress will assign content creators groups where they can create and modify content. User groups will also act as the subscriber groups mentioned later in this document. PIEs are also WordPress users, to ease the process of adding and changing the behavior of PIEs.

## backbone
The backbone is a server that handles interaction between the PIEs and the CMS. It controls the subscriber groups on the network through the pub-sub pattern using zeromq.

## Subscriber Groups
Subscriber groups are queues of actions that each PIE in the group follows on a timed rotation.

## Displays - P.I.E.s (Public Information Endpoints)
Each PIE will have be Raspberry Pi connected up to a LCD display. The PIEs will be distributed throughout WVH in locations that were previously home to the old routers hosting CCIS-Wireless. The PIEs will display infomation relevant to the area they are located in, as well as data relevant to CCIS as a whole.

### Design structure
PIEs can be assigned to one or more subscriber groups. When a subscriber group changes the slides it contains, the backbone server publishes the new list of slides to the network. The PIEs handle their own queues based upon what action groups they are subscribed to. Upon receiving an action group the PIE appends each action group it has stored together and creates a new queue.

#### Example:
PIE 312 is part of the "Crew", "CCIS", and "3rd Floor" subscriber groups.
"Crew" has 3 slides: Cr1, Cr2, Cr3
"CCIS" has 3 slides: CS1, CS2, CS3
"3rd Floor" has 1 slide: 3rd1

Its current slide queue is: Cr1, Cr2, Cr3, CS1, CS2, CS3, 3rd1

If the "CCIS" group has a slide added, it is appended to the list, and published to all subscribers on the network.

PIE 312 recieves an updated list of slides for "CCIS":
CS1, CS2, CS3, CS4

Its new slide queue becomes: Cr1, Cr2, Cr3, CS1, CS2, CS3, CS4, 3rd1

This document will be updated as the project progresses.