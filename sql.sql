-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `jokes`;
CREATE TABLE `jokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `setup` varchar(250) NOT NULL,
  `punchline` varchar(250) NOT NULL,
  `joke_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jokes` (`id`, `type`, `setup`, `punchline`, `joke_id`, `rating`) VALUES
(126,	'general',	'What did the duck say when he bought lipstick?',	'Put it on my bill',	30,	9),
(127,	'general',	'I just watched a documentary about beavers.',	'It was the best dam show I ever saw',	41,	9),
(128,	'general',	'Why do chicken coops only have two doors?',	'Because if they had four, they would be chicken sedans',	49,	8),
(130,	'general',	'What do you call a factory that sells passable products?',	'A satisfactory',	50,	9),
(132,	'general',	'How do you organize an outer space party?',	'You planet',	9,	11),
(134,	'general',	'Why did the Clydesdale give the pony a glass of water?',	'Because he was a little horse',	44,	8),
(135,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	46,	8),
(137,	'general',	'Why is peter pan always flying?',	'Because he neverlands',	55,	8),
(138,	'programming',	'Where do programmers like to hangout?',	'The Foo Bar.',	17,	8),
(140,	'general',	'How does a train eat?',	'It goes chew, chew',	6,	8),
(141,	'programming',	'Why do programmers always mix up Halloween and Christmas?',	'Because Oct 31 == Dec 25',	23,	9),
(144,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	1,	11),
(145,	'general',	'What do you call a belt made out of watches?',	'A waist of time.',	4,	11),
(147,	'general',	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	37,	9),
(149,	'general',	'If you boil a clown...',	'Do you get a laughing stock?',	45,	1),
(153,	'programming',	'If you put a million monkeys at a million keyboards, one of them will eventually write a Java program',	'the rest of them will write Perl',	26,	1),
(157,	'general',	'How do you make holy water?',	'You boil the hell out of it',	53,	0),
(159,	'general',	'What do you call a laughing motorcycle?',	'A Yamahahahaha.',	20,	0),
(166,	'general',	'How do you make a tissue dance?',	'You put a little boogie on it.',	2,	0),
(170,	'general',	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	42,	0),
(172,	'programming',	'To understand what recursion is...',	'You must first understand what recursion is',	28,	0),
(173,	'general',	'What kind of shoes does a thief wear?',	'Sneakers',	10,	0),
(175,	'programming',	'How do you check if a webpage is HTML5?',	'Try it out on Internet Explorer',	56,	0),
(178,	'general',	'What do you call a singing Laptop',	'A Dell',	7,	0),
(183,	'general',	'What does C.S. Lewis keep at the back of his wardrobe?',	'Narnia business!',	22,	0),
(190,	'general',	'Did you hear about the two silk worms in a race?',	'It ended in a tie.',	19,	0),
(199,	'general',	'How many lips does a flower have?',	'Tulips',	8,	0),
(203,	'general',	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	54,	0),
(278,	'general',	'Why do chicken coops only have two doors?',	'Because if they had four, they would be chicken sedans',	49,	0),
(279,	'programming',	'How do you check if a webpage is HTML5?',	'Try it out on Internet Explorer',	56,	0),
(280,	'general',	'How do you make a tissue dance?',	'You put a little boogie on it.',	2,	0),
(281,	'general',	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	54,	0),
(282,	'general',	'How many lips does a flower have?',	'Tulips',	8,	0),
(283,	'programming',	'If you put a million monkeys at a million keyboards, one of them will eventually write a Java program',	'the rest of them will write Perl',	26,	0),
(284,	'general',	'How do you organize an outer space party?',	'You planet',	9,	0),
(285,	'general',	'What do you call a singing Laptop',	'A Dell',	7,	0);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1,	'test@testers.com',	'tester'),
(2,	'tester@test.com',	'12345678');

-- 2018-09-13 08:15:57