/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - dummy_data
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dummy_data` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dummy_data`;

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_no` int(11) DEFAULT NULL,
  `ch_name` varchar(255) DEFAULT NULL,
  `chapter_des` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `book` */

insert  into `book`(`id`,`ch_no`,`ch_name`,`chapter_des`) values 
(1,1,'print','In Python, the command print tells the program to display words or numbers\r\non the screen. Here\'s a line of code that tells Python to display the words\r\n“Hello, World!”\r\nprint(\"Hello, World!\")\r\nprint is a keyword—that is, a word that has special meaning for Python. It\r\nmeans, \"Display what’s inside the parentheses.\" Note that print isn\'t\r\ncapitalized. If you capitalize it, the program won’t run.\r\nThe parentheses are a special requirement of Python, one that you\'ll soon\r\nget used to. You\'ll be typing parentheses over and over again, in all kinds of\r\nPython statements.\r\nIn coding, the quoted text in the line above—\"Hello, World!\"—is called a\r\ntext string or simply a string. The name makes sense: it\'s a string of characters.\r\nWhen Python displays a string on the screen, the quotation marks don\'t\r\ndisplay. They’re only in your code to tell Python that it’s dealing with a string.\r\nNote that the opening parenthesis is jammed up against the keyword print,\r\nand the opening quotation mark is hugging the opening parenthesis. You could\r\nspace it out, writing...\r\nprint ( \"Hello, World!\" )\r\nBut I want you to learn the style conventions of Python, so I\'ll ask you to\r\nomit spaces when it’s the conventional thing to do.\r\nFind the interactive coding exercises for this chapter at:'),
(2,2,'Variables for Strings','Please memorize the following facts.\r\nMy name is Mark.\r\nMy nationality is U.S.\r\nNow that you\'ve memorized my name and nationality, I won\'t have to\r\nrepeat them again. If I say to you, \"You probably know other people who have\r\nmy name,\" you\'ll know I\'m referring to \"Mark.\"\r\nIf I ask you whether my nationality is the same as yours, I won\'t have to ask,\r\n\"Is your nationality the same as U.S.?\" I\'ll ask, \"Is your nationality the same as\r\nmy nationality?\" You\'ll remember that when I say \"my nationality,\" I\'m referring\r\nto \"U.S.\", and you\'ll compare your nationality with \"U.S.\", even though I haven\'t\r\nsaid \"U.S.\" explicitly.\r\nIn these examples, the terms my name and my nationality work the same\r\nway Python variables do. my name refers to a particular value, \"Mark.\" In the\r\nsame way, a variable refers to a particular value. You could say that my name is\r\na variable that refers to the string \"Mark.\"\r\nA variable is created this way:\r\nname = \"Mark\"\r\nNow the variable name refers to the text string \"Mark\".\r\nNote that it was my choice to call it name. I could have called it my_name,\r\nxyz, lol, or something else. It\'s up to me how to name my variables, within\r\nlimits. More on those limits later.\r\nWith the string \"Mark\" assigned to the variable name, my Python code\r\ndoesn\'t have to specify \"Mark\" again. Whenever Python encounters name,\r\n******ebook converter DEMO Watermarks*******Python knows that it\'s a variable that refers to \"Mark\".\r\nFor example, if you write...\r\nname = \"Mark\"\r\nprint(name)\r\n…Python displays…\r\nMark\r\nThe value that a variable refers to can change.\r\nLet\'s go back to the original examples, the facts I asked you to memorize.\r\nThese facts can change, and if they do, the terms my name and my nationality\r\nwill refer to new values.\r\nI could go to court and change my name to Ace. Then my name is no longer\r\nMark. If I want you to address me correctly, I\'ll have to tell you that my name is\r\nnow Ace. After I tell you that, you\'ll know that my name doesn\'t refer to the\r\nvalue it used to refer to (Mark), but refers to a new value (Ace).\r\nIf I acquire U.K. citizenship, my nationality is no longer U.S. It\'s U.K. If I\r\nwant you to know my nationality, I\'ll have to tell you that it is now U.K. After I\r\ntell you that, you\'ll know that my nationality doesn\'t refer to the original value,\r\n\"U.S.\", but now refers to a new value, U.K.\r\nPython variables can also change.'),
(3,3,'Variables for Numbers','A string isn\'t the only thing you can assign to a variable. You can also assign a\r\nnumber.\r\nweight = 150\r\nHaving coded the statement above, whenever you write weight in your\r\ncode, Python knows you mean 150. You can use this variable in math\r\ncalculations.\r\nIf you ask Python to add 25 to weight...\r\nweight + 25\r\n...Python, remembering that weight refers to 150, will come up with the\r\nsum 175.\r\nUnlike a string, a number is not enclosed in quotes. That\'s how Python\r\nknows it\'s a number that it can do math on and not a text string, like a ZIP\r\ncode, that it handles as text.\r\nBut then, since it\'s not enclosed in quotes, how does Python know it\'s not a\r\nvariable? Well, because a number can\'t be used as a variable name. If it\'s a\r\nnumber, Python rejects it as a variable. So it must be a number.\r\nIf you enclose a number in quotation marks, it\'s a string. Python can\'t do\r\naddition on it. It can do addition only on numbers not enclosed in quotes.\r\nNow look at this code.\r\n1 original_num = 23\r\n2 new_num = original_num + 7\r\nIn the second statement in the code above, Python substitutes the number\r\n******ebook converter DEMO Watermarks*******23 when it encounters the variable original_num. It adds 7 to 23. And it\r\nassigns the result, 30, to the variable new_num.\r\nPython can also do a calculation made up of nothing but variables. For\r\nexample...\r\n1 original_num = 23\r\n2 num_to_be_added = 7\r\n3 new_num = original_num + num_to_be_added\r\nThe variable new_num now has a value of 30.\r\nA variable can be used in calculating its own new value.\r\n1 original_num = 90\r\n2 original_num = original_num + 10\r\nThe variable original_num now has a value of 100.\r\nIf you enclose a number in quotation marks and add 7...\r\n1 original_num = \"23\"\r\n2 new_num = original_num + 7'),
(4,4,'Math expressions','You\'ve already used Python to make some simple calculations, like 2 + 2.\r\nThe programming term for a calculation is math expression. Familiar operators\r\nin math expressions are + (add), - (subtract), * (multiply), and / (divide).\r\nAs you\'ve seen, instead of assigning a number to a variable…\r\npopular_number = 4\r\n…you can assign the result of a math expression to the variable…\r\npopular_number = 2 + 2\r\nPython makes the calculation 2 + 2 and assigns the result to the variable. In\r\nthe statement above, popular_number is assigned the sum of 2 + 2—the\r\nnumber 4.\r\nYou can write:\r\nprint(2 + 2)\r\nThis displays 4 on the screen.\r\nHere\'s a statement that subtracts 24 from 12, assigning the result, -12, to the\r\nvariable.\r\nloss = 12 - 24\r\nThis one assigns the product of 3 times 12—the result is 36—to the\r\nvariable.\r\ndozens = 3 * 12\r\n******ebook converter DEMO Watermarks*******This one assigns 12 divided by 4—the result is 3—to the variable.\r\npopular_number = 12 / 4\r\nIn the next one, the float .075 is assigned to the variable num. Then the\r\ninteger 200 is added to the variable, and the sum, 200.075, is assigned to a\r\nsecond variable, total. As usual, you can mix variables and numbers.\r\n1 num = .075\r\n2 total = num + 200\r\nYou can also do a calculation using an expression containing nothing but\r\nvariables.\r\n1 num = 10\r\n2 another_num = 1.5\r\n3 sum_of_numbers = num + another_num\r\nIn the statement above, the variable sum_of_numbers winds up with a\r\nvalue of 11.5.\r\nFind the interactive coding exercises for this chapter at\r\nhttp://www.ASmarterWayToLearn.com/python/4.html'),
(5,5,'Variable Names Legal and Illegal','You\'ve already learned three rules about naming a variable:\r\n1. You can\'t enclose it in quotation marks.\r\n2. You can\'t have any spaces in it.\r\n3. It can\'t be a number or begin with a number.\r\nIn addition, a variable can\'t be any of Python\'s reserved words, also known as\r\nkeywords—the special words that act as programming instructions, like print.\r\nHere’s a list of them.\r\nand\r\nas\r\nassert\r\nbreak\r\nclass\r\ncontinue\r\ndef\r\ndel\r\nelif\r\nelse\r\nexcept\r\nFalse\r\nfinally\r\nfor\r\nfrom\r\nglobal\r\nif\r\nimport\r\nin\r\nis\r\nlambda\r\nNone\r\nnonlocal\r\nnot\r\nor\r\npass\r\nprint\r\nraise\r\nreturn\r\nTrue\r\ntry\r\nwhile\r\nwith\r\nyield\r\nYou don\'t need to memorize the list. If you accidentally try to use one of the\r\nreserved words as a variable name, Python will refuse it and tell you that you\'ve\r\nmade a syntax error. However, it won\'t specify that it\'s a variable-naming error,\r\nso keep this list in mind.\r\nHere are the rest of the rules for naming variables:\r\n******ebook converter DEMO Watermarks*******A variable name can contain only lowercase letters, uppercase letters,\r\nnumbers, and underscores.\r\nThough a variable name can\'t be any of Python\'s keywords, it can\r\ncontain any of those keywords.\r\nCapital letters are fine, but be careful. Variable names are case-sensitive.\r\nA rose with a lowercase r is not a Rose with an uppercase R. If you\r\nassign the string \"Floribundas\" to the variable rose, and then ask\r\nPython for the value assigned to Rose, you\'ll come up empty.\r\nPython\'s governing body recommends breaking up multi-word\r\nvariables with underscores. That\'s what I\'ll ask you to do with your\r\nown variable names. It\'ll make them more readable, and you\'ll be less\r\nlikely to get variables mixed up.\r\nExamples:\r\nuser_response\r\nuser_response_time\r\nuser_response_time_limit\r\nMake your variable names descriptive so it\'s easier to figure out what your\r\ncode means when you or someone else comes back to it three weeks or a year\r\nfrom now. Generally, user_name is better than x, and fave_breed is\r\nbetter than fav_brd, though the shorter names are perfectly legal. You should\r\nbalance readability with conciseness, though.\r\nbest_supporting_actress_in_a_drama_or_comedy is a model\r\nof clarity, but may be too much for most of us to type or read. You might want\r\nto shorten it.\r\nNote: In this book and the exercises, I sometimes use variable names like x,\r\ny, and z to simplify teaching points.\r\nFind the interactive coding exercises for this chapter at\r\nhttp://www.ASmarterWayToLearn.com/python/5.html'),
(6,6,'Unfamiliar operators','Now we come to a couple of operators that may be new to you.\r\nCheck this out:\r\nwhats_left_over = 10 % 3\r\n% is the modulo operator. It divides one number by another number, but\r\ndoesn\'t give you the result of the division. It gives you the remainder after the\r\nfirst number is divided by the second number. If you divide 10 by 3, the\r\nremainder is 1. So in the example above, whats_left_over has a value of\r\n1.\r\nIf one number divides evenly into another, the modulo statement assigns 0\r\nto the variable, since there is no remainder. In the following statement, 0 is\r\nassigned to the variable.\r\nwhats_left_over = 9 % 3\r\nHere\'s a second operator.\r\nSuppose you want to increase the value of a variable by 1. You could\r\nwrite…\r\nage = age + 1\r\nThe statement increases the value of the variable age by 1. If the variable\r\nstarted off with a value of 54, for example, it now has a value of 55.\r\nHere\'s a shorthand way of doing the same thing…\r\nage += 1\r\n******ebook converter DEMO Watermarks*******Again, if the original value of age was 54, its new value is 55.\r\nIn the following code, age winds up with a value of 62.\r\nage = 12\r\nage += 50\r\nYou can use the same kind of shorthand for other operators, too.\r\nIn the following code, age winds up with a value of 10.\r\n1 age = 12\r\n2 age -= 2\r\nIn the following code, age winds up with a value of 36.\r\n1 age = 12\r\n2 age *= 3\r\nDon\'t forget that you can always use a variable instead of a number. In the\r\nfollowing code, age winds up with a value of 15.\r\n1 age = 12\r\n2 amount_to_increment = 3\r\n3 age += amount_to_increment\r\nFind the interactive coding exercises for this chapter at\r\nhttp://www.ASmarterWayToLearn.com/python/6.html'),
(7,7,'Eliminating \r\nambiguity','Now we come to a couple of operators that may be new to you.\r\nCheck this out:\r\nwhats_left_over = 10 % 3\r\n% is the modulo operator. It divides one number by another number, but\r\ndoesn\'t give you the result of the division. It gives you the remainder after the\r\nfirst number is divided by the second number. If you divide 10 by 3, the\r\nremainder is 1. So in the example above, whats_left_over has a value of\r\n1.\r\nIf one number divides evenly into another, the modulo statement assigns 0\r\nto the variable, since there is no remainder. In the following statement, 0 is\r\nassigned to the variable.\r\nwhats_left_over = 9 % 3\r\nHere\'s a second operator.\r\nSuppose you want to increase the value of a variable by 1. You could\r\nwrite…\r\nage = age + 1\r\nThe statement increases the value of the variable age by 1. If the variable\r\nstarted off with a value of 54, for example, it now has a value of 55.\r\nHere\'s a shorthand way of doing the same thing…\r\nage += 1');

/*Table structure for table `dummy` */

DROP TABLE IF EXISTS `dummy`;

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dummy` */

insert  into `dummy`(`id`,`product`,`name`,`no`) values 
(1,'Eldon Base for stackable storage shelf, platinum','Muhammed MacIntyre',3),
(2,'1.7 Cubic Foot Compact \"Cube\" Office Refrigerators','Barry French',293),
(3,'Cardinal Slant-D? Ring Binder, Heavy Gauge Vinyl','Barry French',293),
(4,'R380','Clay Rozendal',483),
(5,'Holmes HEPA Air Purifier','Carlos Soltero',515),
(6,'G.E. Longer-Life Indoor Recessed Floodlight Bulbs','Carlos Soltero',515),
(7,'Angle-D Binders with Locking Rings, Label Holders','Carl Jackson',613),
(8,'SAFCO Mobile Desk Side File, Wire Frame','Carl Jackson',613),
(9,'SAFCO Commercial Wire Shelving, Black','Monica Federle',643),
(10,'Xerox 198','Dorothy Badders',678),
(11,'Xerox 1980','Neola Schneider',807),
(12,'Advantus Map Pennant Flags and Round Head Tacks','Neola Schneider',807),
(13,'Holmes HEPA Air Purifier','Carlos Daly',868),
(14,'DS/HD IBM Formatted Diskettes, 200/Pack - Staples','Carlos Daly',868),
(15,'Wilson Jones 1\" Hanging DublLock? Ring Binders','Claudia Miner',933),
(16,'Ultra Commercial Grade Dual Valve Door Closer','Neola Schneider',995),
(17,'#10-4 1/8\" x 9 1/2\" Premium Diagonal Seam Envelopes','Allen Rosenblatt',998),
(18,'Hon 4-Shelf Metal Bookcases','Sylvia Foulston',1154),
(19,'Lesro Sheffield Collection Coffee Table, End Table, Center Table, Corner Table','Sylvia Foulston',1154),
(20,'g520','Jim Radford',1344),
(21,'LX 788','Jim Radford',1344),
(22,'Avery 52','Carlos Soltero',1412),
(23,'Plymouth Boxed Rubber Bands by Plymouth','Carlos Soltero',1412),
(24,'GBC Pre-Punched Binding Paper, Plastic, White, 8-1/2\" x 11\"','Carl Ludwig',1539),
(25,'Maxell 3.5\" DS/HD IBM-Formatted Diskettes, 10/Pack','Carl Ludwig',1539),
(26,'Newell 335','Don Miller',1540),
(27,'SANFORD Liquid Accent? Tank-Style Highlighters','Annie Cyprus',1702),
(28,'Canon PC940 Copier','Carl Ludwig',1761),
(29,'Tenex Personal Project File with Scoop Front Design, Black','Carlos Soltero',1792),
(30,'Col-Erase? Pencils with Erasers','Grant Carroll',2275),
(31,'Imation 3.5\" DS/HD IBM Formatted Diskettes, 10/Pack','Don Miller',2277),
(32,'White Dual Perf Computer Printout Paper, 2700 Sheets, 1 Part, Heavyweight, 20 lbs., 14 7/8 x 11','Don Miller',2277),
(33,'Self-Adhesive Address Labels for Typewriters by Universal','Alan Barnes',2532),
(34,'Accessory37','Alan Barnes',2532),
(35,'Fuji 5.2GB DVD-RAM','Jack Garza',2631),
(36,'Bevis Steel Folding Chairs','Julia West',2757),
(37,'Avery Binder Labels','Eugene Barchas',2791),
(38,'Hon Every-Day? Chair Series Swivel Task Chairs','Eugene Barchas',2791),
(39,'IBM Multi-Purpose Copy Paper, 8 1/2 x 11\", Case','Eugene Barchas',2791),
(40,'Global Troy? Executive Leather Low-Back Tilter','Edward Hooks',2976),
(41,'XtraLife? ClearVue? Slant-D? Ring Binders by Cardinal','Brad Eason',3232),
(42,'Computer Printout Paper with Letter-Trim Perforations','Nicole Hansen',3524),
(43,'6160','Dorothy Wardle',3908),
(44,'Avery 49','Aaron Bergman',4132),
(45,'Hoover Portapower? Portable Vacuum','Jim Radford',4612),
(46,'Timeport L7089','Annie Cyprus',4676),
(47,'Avery 510','Annie Cyprus',4676),
(48,'Xerox 1881','Annie Cyprus',4676),
(49,'LX 788','Annie Cyprus',4676),
(50,'Cardinal Slant-D? Ring Binder, Heavy Gauge Vinyl','Annie Cyprus',5284);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
