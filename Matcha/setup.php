<?php

$DB_DSN = "127.0.0.1";
$DB_USER = "root";
$DB_PASSWORD = "123456";

try
{
  $conec = new PDO("mysql:host=$DB_DSN" , $DB_USER, $DB_PASSWORD);
  $conec->query("USE $dataname");
  $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conec->prepare("CREATE DATABASE IF NOT EXISTS matcha2");
  $sql->execute();
  $sql = $conec->prepare("USE matcha2");
  $sql->execute();

  $sql = $conec->prepare("CREATE TABLE `blocked` (
    `blocked_id` int(11) NOT NULL,
    `block_by` int(11) NOT NULL,
    `block` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

  $sql->execute();
  
  $sql = $conec->prepare("CREATE TABLE `images` (
    `image_id` int(11) NOT NULL,
    `user` varchar(255) NOT NULL,
    `image` longblob NOT NULL,
    `image_num` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);");
  
  $sql->execute();

  $sql = $conec->prepare("ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;");
  
  $sql->execute();
  
  include('./setup_files/image1.php');
  include('./setup_files/image2.php');
  include('./setup_files/image3.php');
  include('./setup_files/image4.php');
  include('./setup_files/image5.php');
  

  $sql = $conec->prepare("CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `liked_by` int(11) NOT NULL,
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();
  

  $sql = $conec->prepare("CREATE TABLE `matched` (
    `match_id` int(11) NOT NULL,
    `matched` int(11) NOT NULL,
    `matched_with` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();
  
  $sql = $conec->prepare("CREATE TABLE `pop` (
    `pop_id` int(11) NOT NULL,
    `user` int(11) NOT NULL,
    `viewed` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();
  
  $sql = $conec->prepare("INSERT INTO `pop` (`pop_id`, `user`, `viewed`) VALUES
  (4, 2, 6),
  (5, 2, 5),
  (6, 2, 7),
  (7, 2, 10),
  (8, 5, 2),
  (9, 2, 12);");
  
  $sql->execute();
  
  $sql = $conec->prepare("CREATE TABLE `pref` (
    `pref_id` int(11) NOT NULL,
    `user` int(11) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `preference` varchar(255) NOT NULL,
    `bio` blob NOT NULL,
    `profile_pic` longblob NOT NULL,
    `tags` longtext,
    `code` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();

  include("./setup_files/user1.php");
  include("./setup_files/user2.php");
  include("./setup_files/user3.php");
  include("./setup_files/user4.php");
  
  $sql = $conec->prepare("CREATE TABLE `tags` (
    `tag` varchar(255) NOT NULL,
    `tag_id` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();
  
  $sql = $conec->prepare("INSERT INTO `tags` (`tag`, `tag_id`) VALUES
  ('3D printing', 1),
  ('Acting', 2),
  ('Aeromodeling', 3),
  ('Air sports', 4),
  ('Airbrushing', 5),
  ('Aircraft Spotting', 6),
  ('Airsoft', 7),
  ('Airsofting', 8),
  ('Amateur astronomy', 9),
  ('Amateur geology', 10),
  ('Amateur Radio', 11),
  ('American football', 12),
  ('Animal fancy', 13),
  ('Animals/pets/dogs', 14),
  ('Antiquing', 15),
  ('Antiquities', 16),
  ('Aqua-lung', 17),
  ('Aquarium (Freshwater & Saltwater)', 18),
  ('Archery', 19),
  ('Art collecting', 20),
  ('Arts', 21),
  ('Association football', 22),
  ('Astrology', 23),
  ('Astronomy', 24),
  ('Audiophilia', 25),
  ('Australian rules football', 26),
  ('Auto audiophilia', 27),
  ('Auto racing', 28),
  ('Backgammon', 29),
  ('Backpacking', 30),
  ('Badminton', 31),
  ('Base Jumping', 32),
  ('Baseball', 33),
  ('Basketball', 34),
  ('Baton Twirling', 35),
  ('Beach Volleyball', 36),
  ('Beach/Sun tanning', 37),
  ('Beachcombing', 38),
  ('Beadwork', 39),
  ('Beatboxing', 40),
  ('Becoming A Child Advocate', 41),
  ('Beekeeping', 42),
  ('Bell Ringing', 43),
  ('Belly Dancing', 44),
  ('Bicycle Polo', 45),
  ('Bicycling', 46),
  ('Billiards', 47),
  ('Bird watching', 48),
  ('Birding', 49),
  ('Birdwatching', 50),
  ('Blacksmithing', 51),
  ('Blogging', 52),
  ('BMX', 53),
  ('Board games', 54),
  ('Board sports', 55),
  ('BoardGames', 56),
  ('Boating', 57),
  ('Body Building', 58),
  ('Bodybuilding', 59),
  ('Bonsai Tree', 60),
  ('Book collecting', 61),
  ('Bookbinding', 62),
  ('Boomerangs', 63),
  ('Bowling', 64),
  ('Boxing', 65),
  ('Brazilian jiu-jitsu', 66),
  ('Breakdancing', 67),
  ('Brewing Beer', 68),
  ('Bridge', 69),
  ('Bridge Building', 70),
  ('Bringing Food To The Disabled', 71),
  ('Building A House For Habitat For Humanity', 72),
  ('Building Dollhouses', 73),
  ('Bus spotting', 74),
  ('Butterfly Watching', 75),
  ('Button Collecting', 76),
  ('Cake Decorating', 77),
  ('Calligraphy', 78),
  ('Camping', 79),
  ('Candle making', 80),
  ('Canoeing', 81),
  ('Car Racing', 82),
  ('Card collecting', 83),
  ('Cartooning', 84),
  ('Casino Gambling', 85),
  ('Cave Diving', 86),
  ('Ceramics', 87),
  ('Cheerleading', 88),
  ('Chess', 89),
  ('Church/church activities', 90),
  ('Cigar Smoking', 91),
  ('Climbing', 92),
  ('Cloud Watching', 93),
  ('Coin Collecting', 94),
  ('Collecting', 95),
  ('Collecting Antiques', 96),
  ('Collecting Artwork', 97),
  ('Collecting Hats', 98),
  ('Collecting Music Albums', 99),
  ('Collecting RPM Records', 100),
  ('Collecting Sports Cards (Baseball, Football, Basketball, Hockey)', 101),
  ('Collecting Swords', 102),
  ('Color guard', 103),
  ('Coloring', 104),
  ('Comic book collecting', 105),
  ('Compose Music', 106),
  ('Computer activities', 107),
  ('Computer programming', 108),
  ('Conworlding', 109),
  ('Cooking', 110),
  ('Cosplay', 111),
  ('Cosplaying', 112),
  ('Couponing', 113),
  ('Crafts', 114),
  ('Crafts (unspecified)', 115),
  ('Creative writing', 116),
  ('Cricket', 117),
  ('Crochet', 118),
  ('Crocheting', 119),
  ('Cross-Stitch', 120),
  ('Crossword Puzzles', 121),
  ('Cryptography', 122),
  ('Curling', 123),
  ('Cycling', 124),
  ('Dance', 125),
  ('Dancing', 126),
  ('Darts', 127),
  ('Debate', 128),
  ('Deltiology (postcard collecting)', 129),
  ('Diecast Collectibles', 130),
  ('Digital arts', 131),
  ('Digital Photography', 132),
  ('Disc golf', 133),
  ('Do it yourself', 134),
  ('Dodgeball', 135),
  ('Dog sport', 136),
  ('Dolls', 137),
  ('Dominoes', 138),
  ('Dowsing', 139),
  ('Drama', 140),
  ('Drawing', 141),
  ('Driving', 142),
  ('Dumpster Diving', 143),
  ('Eating out', 144),
  ('Educational Courses', 145),
  ('Electronics', 146),
  ('Element collecting', 147),
  ('Embroidery', 148),
  ('Entertaining', 149),
  ('Equestrianism', 150),
  ('Exercise (aerobics, weights)', 151),
  ('Exhibition drill', 152),
  ('Falconry', 153),
  ('Fast cars', 154),
  ('Felting', 155),
  ('Fencing', 156),
  ('Field hockey', 157),
  ('Figure skating', 158),
  ('Fire Poi', 159),
  ('Fishing', 160),
  ('Fishkeeping', 161),
  ('Flag Football', 162),
  ('Floorball', 163),
  ('Floral Arrangements', 164),
  ('Flower arranging', 165),
  ('Flower collecting and pressing', 166),
  ('Fly Tying', 167),
  ('Flying', 168),
  ('Footbag', 169),
  ('Football', 170),
  ('Foraging', 171),
  ('Foreign language learning', 172),
  ('Fossil hunting', 173),
  ('Four Wheeling', 174),
  ('Freshwater Aquariums', 175),
  ('Frisbee Golf – Frolf', 176),
  ('Gambling', 177),
  ('Games', 178),
  ('Gaming (tabletop games and role-playing games)', 179),
  ('Garage Saleing', 180),
  ('Gardening', 181),
  ('Genealogy', 182),
  ('Geocaching', 183),
  ('Ghost hunting', 184),
  ('Glassblowing', 185),
  ('Glowsticking', 186),
  ('Gnoming', 187),
  ('Go', 188),
  ('Go Kart Racing', 189),
  ('Going to movies', 190),
  ('Golf', 191),
  ('Golfing', 192),
  ('Gongoozling', 193),
  ('Graffiti', 194),
  ('Grip Strength', 195),
  ('Guitar', 196),
  ('Gun Collecting', 197),
  ('Gunsmithing', 198),
  ('Gymnastics', 199),
  ('Gyotaku', 200),
  ('Handball', 201),
  ('Handwriting Analysis', 202),
  ('Hang gliding', 203),
  ('Herping', 204),
  ('Hiking', 205),
  ('Home Brewing', 206),
  ('Home Repair', 207),
  ('Home Theater', 208),
  ('Homebrewing', 209),
  ('Hooping', 210),
  ('Horse riding', 211),
  ('Hot air ballooning', 212),
  ('Hula Hooping', 213),
  ('Hunting', 214),
  ('Ice hockey', 215),
  ('Ice skating', 216),
  ('Iceskating', 217),
  ('Illusion', 218),
  ('Impersonations', 219),
  ('Inline skating', 220),
  ('Insect collecting', 221),
  ('Internet', 222),
  ('Inventing', 223),
  ('Jet Engines', 224),
  ('Jewelry Making', 225),
  ('Jigsaw Puzzles', 226),
  ('Jogging', 227),
  ('Judo', 228),
  ('Juggling', 229),
  ('Jukskei', 230),
  ('Jump Roping', 231),
  ('Kabaddi', 232),
  ('Kart racing', 233),
  ('Kayaking', 234),
  ('Keep A Journal', 235),
  ('Kitchen Chemistry', 236),
  ('Kite Boarding', 237),
  ('Kite flying', 238),
  ('Kites', 239),
  ('Kitesurfing', 240),
  ('Knapping', 241),
  ('Knife making', 242),
  ('Knife throwing', 243),
  ('Knitting', 244),
  ('Knotting', 245),
  ('Lacemaking', 246),
  ('Lacrosse', 247),
  ('Lapidary', 248),
  ('LARPing', 249),
  ('Laser tag', 250),
  ('Lasers', 251),
  ('Lawn Darts', 252),
  ('Learn to Play Poker', 253),
  ('Learning A Foreign Language', 254),
  ('Learning An Instrument', 255),
  ('Learning To Pilot A Plane', 256),
  ('Leather crafting', 257),
  ('Leathercrafting', 258),
  ('Lego building', 259),
  ('Legos', 260),
  ('Letterboxing', 261),
  ('Listening to music', 262),
  ('Locksport', 263),
  ('Machining', 264),
  ('Macramé', 265),
  ('Macrame', 266),
  ('Magic', 267),
  ('Mahjong', 268),
  ('Making Model Cars', 269),
  ('Marbles', 270),
  ('Marksmanship', 271),
  ('Martial arts', 272),
  ('Matchstick Modeling', 273),
  ('Meditation', 274),
  ('Metal detecting', 275),
  ('Meteorology', 276),
  ('Microscopy', 277),
  ('Mineral collecting', 278),
  ('Model aircraft', 279),  
  ('Model building', 280),
  ('Model Railroading', 281),
  ('Model Rockets', 282),
  ('Modeling Ships', 283),
  ('Models', 284),
  ('Motor sports', 285),
  ('Motorcycles', 286),
  ('Mountain Biking', 287),
  ('Mountain Climbing', 288),
  ('Mountaineering', 289),
  ('Movie and movie memorabilia collecting', 290),
  ('Mushroom hunting/Mycology', 291),
  ('Musical Instruments', 292),
  ('Nail Art', 293),
  ('Needlepoint', 294),
  ('Netball', 295),
  ('Nordic skating', 296),
  ('Orienteering', 297),
  ('Origami', 298),
  ('Owning An Antique Car', 299),
  ('Paintball', 300),
  ('Painting', 301),
  ('Papermache', 302),
  ('Papermaking', 303),
  ('Parachuting', 304),
  ('Paragliding or Power Paragliding', 305),
  ('Parkour', 306),
  ('People Watching', 307),
  ('Photography', 308),
  ('Piano', 309),
  ('Pigeon racing', 310),
  ('Pinochle', 311),
  ('Pipe Smoking', 312),
  ('Planking', 313),
  ('Playing music', 314),
  ('Playing musical instruments', 315),
  ('Playing team sports', 316),
  ('Poker', 317),
  ('Pole Dancing', 318),
  ('Polo', 319),
  ('Pottery', 320),
  ('Powerboking', 321),
  ('Protesting', 322),
  ('Puppetry', 323),
  ('Puzzles', 324),
  ('Pyrotechnics', 325),
  ('Quilting', 326),
  ('R/C Boats', 327),
  ('R/C Cars', 328),
  ('R/C Helicopters', 329),
  ('R/C Planes', 330),
  ('Racing Pigeons', 331),
  ('Racquetball', 332),
  ('Radio-controlled car racing', 333),
  ('Rafting', 334),
  ('Railfans', 335),
  ('Rappelling', 336),
  ('Rapping', 337),
  ('Reading', 338),
  ('Reading To The Elderly', 339),
  ('Record collecting', 340),
  ('Relaxing', 341),
  ('Renaissance Faire', 342),
  ('Renting movies', 343),
  ('Rescuing Abused Or Abandoned Animals', 344),
  ('Robotics', 345),
  ('Rock balancing', 346),
  ('Rock climbing', 347),
  ('Rock Collecting', 348),
  ('Rockets', 349),
  ('Rocking AIDS Babies', 350),
  ('Roleplaying', 351),
  ('Roller derby', 352),
  ('Roller skating', 353),
  ('Rugby', 354),
  ('Rugby league football', 355),
  ('Running', 356),
  ('Sailing', 357),
  ('Saltwater Aquariums', 358),
  ('Sand art', 359),
  ('Sand Castles', 360),
  ('Scrapbooking', 361),
  ('Scuba diving', 362),
  ('Sculling or Rowing', 363),
  ('Sculpting', 364),
  ('Sea glass collecting', 365),
  ('Seashell collecting', 366),
  ('Self Defense', 367),
  ('Sewing', 368),
  ('Shark Fishing', 369),
  ('Shooting', 370),
  ('Shooting sport', 371),
  ('Shopping', 372),
  ('Shortwave listening', 373),
  ('Singing', 374),
  ('Singing In Choir', 375),
  ('Skateboarding', 376),
  ('Skeet Shooting', 377),
  ('Sketching', 378),
  ('Skiing', 379),
  ('Skimboarding', 380),
  ('Sky Diving', 381),
  ('Skydiving', 382),
  ('Slack Lining', 383),
  ('Slacklining', 384),
  ('Sleeping', 385),
  ('Slingshots', 386),
  ('Slot car racing', 387),
  ('Snorkeling', 388),
  ('Snowboarding', 389),
  ('Soap Making', 390),
  ('Soapmaking', 391),
  ('Soccer', 392),
  ('Socializing with friends/neighbors', 393),
  ('Speed Cubing (rubix cube)', 394),
  ('Speed skating', 395),
  ('Spelunkering', 396),
  ('Spending time with family/kids', 397),
  ('Sports', 398),
  ('Squash', 399),
  ('Stamp Collecting', 400),
  ('Stand-up comedy', 401),
  ('Stone collecting', 402),
  ('Stone skipping', 403),
  ('Storm Chasing', 404),
  ('Storytelling', 405),
  ('String Figures', 406),
  ('Sudoku', 407),
  ('Surf Fishing', 408),
  ('Surfing', 409),
  ('Survival', 410),
  ('Swimming', 411),
  ('Table football', 412),
  ('Table tennis', 413),
  ('Taekwondo', 414),
  ('Tai chi', 415),
  ('Tatting', 416),
  ('Taxidermy', 417),
  ('Tea Tasting', 418),
  ('Tennis', 419),
  ('Tesla Coils', 420),
  ('Tetris', 421),
  ('Textiles', 422),
  ('Texting', 423),
  ('Tombstone Rubbing', 424),
  ('Tool Collecting', 425),
  ('Tour skating', 426),
  ('Toy Collecting', 427),
  ('Train Collecting', 428),
  ('Train Spotting', 429),
  ('Trainspotting', 430),
  ('Traveling', 431),
  ('Treasure Hunting', 432),
  ('Trekkie', 433),
  ('Triathlon', 434),
  ('Tutoring Children', 435),
  ('TV watching', 436),
  ('Ultimate Frisbee', 437),
  ('Urban exploration', 438),
  ('Vehicle restoration', 439),
  ('Video game collecting', 440),
  ('Video Games', 441),
  ('Video gaming', 442),
  ('Videophilia', 443),
  ('Vintage cars', 444),
  ('Violin', 445),
  ('Volleyball', 446),
  ('Volunteer', 447),
  ('Walking', 448),
  ('Warhammer', 449),
  ('Watching movies', 450),
  ('Watching sporting events', 451),
  ('Water sports', 452),
  ('Weather Watcher', 453),
  ('Web surfing', 454),
  ('Weightlifting', 455),
  ('Windsurfing', 456),
  ('Wine Making', 457),
  ('Wingsuit Flying', 458),
  ('Wood carving', 459),
  ('Woodworking', 460),
  ('Working In A Food Pantry', 461),
  ('Working on cars', 462),
  ('World Record Breaking', 463),
  ('Worldbuilding', 464),
  ('Wrestling', 465),
  ('Writing', 466),
  ('Writing Music', 467),
  ('Writing Songs', 468),
  ('Yo-yoing', 469),
  ('Yoga', 470),
  ('YoYo', 471),
  ('Ziplining', 472),
  ('Zumba', 473);");
  
  $sql->execute();
  
  $sql = $conec->prepare("CREATE TABLE `users` (
    `user_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `surname` varchar(255) NOT NULL,
    `user_name` varchar(255) NOT NULL,
    `user_pwd` varchar(255) NOT NULL,
    `user_email` varchar(255) NOT NULL,
    `user_dob` date NOT NULL,
    `vari` bit(1) DEFAULT b'1',
    `otp` varchar(255) NOT NULL,
    `comp` bit(1) DEFAULT NULL,
    `online` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `cur_on` bit(1) NOT NULL DEFAULT b'0'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
  
  $sql->execute();
  
  $sql = $conec->prepare("INSERT INTO `users` (`user_id`, `name`, `surname`, `user_name`, `user_pwd`, `user_email`, `user_dob`, `vari`, `otp`, `comp`, `online`, `cur_on`) VALUES
  (2, 'Quinten', 'Paddock', 'quintencp7', '36d2df598fdefdf4ddac1927820867ee', 'quinten.paddock@me.com', '1998-10-29', b'1', '64d284668d84ed2dd9b6511117b3941c', b'1', '2019-01-09 13:27:57', b'1'),
  (3, 'Test', 'Test', 'Test', '36d2df598fdefdf4ddac1927820867ee', 'testes@mailinator.com', '1998-01-02', b'1', '4b58db5ec33af76c6d9b968cf2c633b1', b'1', '2018-12-06 11:28:50', b'0'),
  (4, 'John', 'Lennon', 'tes01', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-29', b'1', '25d66fb4dc3672e724b542193f6d7abb', b'1', '2018-12-06 11:28:50', b'0'),
  (5, 'Amy', 'Sam', 'Test02', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-29', b'1', 'b5fa96ea4ca46ba15ccd29dc886ab34a', b'1', '2019-01-07 10:18:03', b'0'),
  (6, 'James', 'Knob', 'Test03', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-29', b'1', 'eb734196b9371c7619f942b6f1795217', b'1', '2019-01-09 13:41:54', b'0'),
  (7, 'Pieter', 'du Preez', 'Test04', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-25', b'1', '4abfc1afd8819410f9799f9ccc8bc5df', b'1', '2019-01-09 14:10:45', b'0'),
  (8, 'John', 'Hohls', 'Test05', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-29', b'1', '38ff773e51f4488f70a5a72f986a3f59', b'1', '2018-12-06 11:28:50', b'0'),
  (9, 'Adam', 'Test', 'Test06', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1998-10-29', b'1', '1562f5669d08699d291f61d5b1cfaa2c', b'1', '2018-12-06 11:28:50', b'0'),
  (10, 'Apple', 'Jack', 'Test07', '36d2df598fdefdf4ddac1927820867ee', 'qtest@mailinator.com', '1999-12-17', b'1', '8fffa361b11a2603f48f0e52ed683f3e', b'1', '2018-12-06 11:28:50', b'0'),
  (12, 'John', 'Test', 'Test08', '36d2df598fdefdf4ddac1927820867ee', 'test02@mailinator.com', '1998-02-26', b'1', '191a7fd494a69dc8c7ac0b7b4971da78', b'1', '2019-01-07 10:05:38', b'0'),
  (13, 'Lol', 'Test', 'Test09', '36d2df598fdefdf4ddac1927820867ee', 'test02@mailinator.com', '1998-02-26', b'1', '358e3898462304e44fc251f92facd0df', b'1', '2018-12-06 11:28:50', b'0');");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `blocked`
  ADD PRIMARY KEY (`blocked_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `matched`
  ADD PRIMARY KEY (`match_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `pop`
  ADD PRIMARY KEY (`pop_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `pref`
  ADD PRIMARY KEY (`pref_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `blocked`
  MODIFY `blocked_id` int(11) NOT NULL AUTO_INCREMENT;");
  
  $sql->execute();
  
  
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `matched`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `pop`
  MODIFY `pop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `pref`
  MODIFY `pref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;");
  
  $sql->execute();
  
  $sql = $conec->prepare("ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;");
  
  $sql->execute();

  echo "<h1 style='color: red; font-size: 200px;' >DATABASE CREATED!</h1>";

  sleep(5);

  header('Location: index.php');
  exit();
  
}

catch(PDOException $e)
{
  echo "Connection Failed: " . $e->getMessage();
}

?>