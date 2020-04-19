CREATE DATABASE LibraryDB;
USE LibraryDB;

grant all on publications.* to 'me'@'email.com'
identified by '1234';


CREATE TABLE member (
        member_id int(10) NOT NULL AUTO_INCREMENT,
        roles varchar(6) NOT NULL,
        first_name varchar(20) NOT NULL,
        last_name varchar(20) NOT NULL,
        user_name varchar(50) NOT NULL,
        password varchar(50) NOT NULL,
        address_line_1 varchar(50) not null,
        address_line_2 varchar(50),
        city varchar(25) NOT NULL,
        state varchar(2) NOT NULL,
        zip int(5) NOT NULL,
        start_date date NOT NULL,
        email varchar(50) NOT NULL,
        phone_number varchar(16) NOT NULL,
        PRIMARY KEY (member_id)
	);
    

    INSERT INTO member (member_id, roles, first_name, last_name, user_name, password, address_line_1, address_line_2, city, state, zip, start_date, email, phone_number) VALUES
    (10000, 'admin', 'Ethan', 'Larsen', 'elarsen', 'c9adf19fa02c68697932be19deedbb2b', '123 Easy Street', NULL, 'Salt Lake City', 'UT', 84123, '2020-04-09', 'ethan.larsen@gmail.com', '8017215003'),
    (10001, 'admin', 'Chandler', 'Braddley', 'cbraddley', 'root', '567 Some Street', NULL, 'Salt Lake City', 'UT', 84123, '2020-04-09', 'Chandler.Braddley@gmail.com', '8014253625'),
    (10002, 'admin', 'Tamsen', 'Reid', 'treid', 'root', 'River Heights', NULL, 'South Jordan', 'UT', 84095, '2020-04-09', 'Tamsen.Reid@gmail.com', '8017215232'),
    (10003, 'admin', 'Dustin', 'Fife', 'dfife', 'root', 'Oak Drive', NULL, 'Sandy', 'UT', 84123, '2020-04-09', 'Dustin.Fife@gmail.com', '5627524603'),
    (10004, 'member', 'Rudy', 'Gobert', 'rgobert', 'root', 'Maple Avenue', NULL, 'Cottonwood Heights', 'UT', 84635, '2020-04-03', 'Rudy.Gobert@gmail.com', '8018426325'),
    (10005, 'member', 'Mike', 'Conley', 'mconley', 'root', 'Cherry Street', NULL, 'Draper', 'UT', 84526, '2020-04-02', 'Mike.Conley@gmail.com', '8015632462'),
    (10006, 'member', 'Bowser', 'Boss', 'bboss', 'c9adf19fa02c68697932be19deedbb2b', 'Dogwood Lane', NULL, 'Herriman', 'UT', 84856, '2020-04-01', 'Bowser.Boss@gmail.com', '8013698562'),
    (10007, 'member', 'Peach', 'Princess', 'pprincess', 'root', 'Applewood Row', NULL, 'Riverton', 'UT', 84452, '2020-04-01', 'Princess.Peach@gmail.com', '8015236526'),
    (10008, 'member', 'Mario', 'Plumber', 'mplumber', 'root', 'Mario Street', NULL, 'Layton', 'UT', 84953, '2020-04-05', 'Mario.Plumber@gmail.com', '8017536985'),
    (10009, 'member', 'Lugi', 'Plumber', 'lplumber', 'root', 'Lugi Street', NULL, 'Hooper', 'UT', 84456, '2020-04-06', 'Lugi.Plumber@gmail.com', '8017856324'),
    (10010, 'admin', 'Jeff', 'Larsen', 'elarsen', 'c9adf19fa02c68697932be19deedbb2b', '123 Easy Street', NULL, 'Salt Lake City', 'UT', 84123, '2020-04-09', 'Jeff.larsen@gmail.com', '8017215003'),
    (10011, 'admin', 'Susy', 'Braddley', 'cbraddley', 'root', '567 Some Street', NULL, 'Salt Lake City', 'UT', 84123, '2020-04-09', 'Susy.Braddley@gmail.com', '8014253625'),
    (10012, 'admin', 'Allen', 'Reid', 'treid', 'root', 'River Heights', NULL, 'South Jordan', 'UT', 84095, '2020-04-09', 'Allen.Reid@gmail.com', '8017215232'),
    (10013, 'admin', 'Layne', 'Fife', 'dfife', 'root', 'Oak Drive', NULL, 'Sandy', 'UT', 84123, '2020-04-09', 'Layne.Fife@gmail.com', '5627524603'),
    (10014, 'member', 'Alfred', 'Gobert', 'rgobert', 'root', 'Maple Avenue', NULL, 'Cottonwood Heights', 'UT', 84635, '2020-04-03', 'Alfred.Gobert@gmail.com', '8018426325'),
    (10015, 'member', 'Jake', 'Conley', 'mconley', 'root', 'Cherry Street', NULL, 'Draper', 'UT', 84526, '2020-04-02', 'Aaron.Conley@gmail.com', '8015632462'),
    (10016, 'member', 'Aaron', 'Boss', 'bboss', 'c9adf19fa02c68697932be19deedbb2b', 'Dogwood Lane', NULL, 'Herriman', 'UT', 84856, '2020-04-01', 'Bowser.Boss@gmail.com', '8013698562'),
    (10017, 'member', 'Eric', 'Princess', 'pprincess', 'root', 'Applewood Row', NULL, 'Riverton', 'UT', 84452, '2020-04-01', 'Eric.Peach@gmail.com', '8015236526'),
    (10018, 'member', 'Kody', 'Plumber', 'mplumber', 'root', 'Mario Street', NULL, 'Layton', 'UT', 84953, '2020-04-05', 'Kody.Plumber@gmail.com', '8017536985'),
    (10019, 'member', 'Luke', 'Plumber', 'lplumber', 'root', 'Lugi Street', NULL, 'Hooper', 'UT', 84456, '2020-04-06', 'Luke.Plumber@gmail.com', '8017856324');

    CREATE TABLE library (
        library_id int(10) NOT NULL AUTO_INCREMENT,
        street varchar(50) NOT NULL,
        city varchar(50) NOT NULL,
        state varchar(2) NOT NULL,
        zip varchar(5) NOT NULL,
        open_hour int(4) NOT NULL,
        close_hour int(4) NOT NULL,
        PRIMARY KEY (library_id)
    );

    INSERT INTO library (library_id, street, city, state, zip, open_hour, close_hour) VALUES
    (001, '808 Main Street 400 S', 'Salt Lake City', 'UT', 84123, 0080, 1800);

    CREATE TABLE book (
        book_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        isbn varchar(50) NOT NULL,
        publisher varchar(50) NOT NULL,
        publisher_date date NOT NULL,
        author varchar(50) NOT NULL,
        genre varchar(25) NOT NULL,
        PRIMARY KEY (book_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO book (book_id, item_id, item_description, item_type, isbn, publisher, publisher_date, author, genre) VALUES
    (100, 1000,"Java A Beginner's Guide Sixth Edition", 'book', '978-0-07-180925-2', 'Oracle Press', '2014-01-01', 'Hebert Schildt', 'education'),
    (101, 1001,"Java A Beginner's Guide Sixth Edition", 'book', '978-0-07-180925-2', 'Oracle Press', '2014-01-01', 'Hebert Schildt', 'education'),
    (102, 1002,'OCA Oracle Database 12c SQL Fundamentals', 'book', '978-0-07-182028-8', 'Oracle Press', '2014-01-01', 'Roopesh Ramklass', 'education'),
    (103, 1003,'OCA Oracle Database 12c SQL Fundamentals', 'book', '978-0-07-182028-8', 'Oracle Press', '2014-01-01', 'Roopesh Ramklass', 'education'),
    (104, 1004,'CompTIA Network+ Guide to Networks', 'book', '978-1-305-09094-1', 'Cengage Learning', '2016-01-01', 'Jill West', 'education'),
    (105, 1005,'CompTIA Network+ Guide to Networks', 'book', '978-1-305-09094-1', 'Cengage Learning', '2016-01-01', 'Jill West', 'education'),
    (106, 1006,'Python Crash Course', 'book', '978-1-59327-928-8', 'no starch press', '2019-01-01', 'Eric Matthes', 'education'),
    (107, 1007,'Python Crash Course', 'book', '978-1-59327-928-8', 'no starch press', '2019-01-01', 'Eric Matthes', 'education'),
    (108, 1008,'Modern Database MANAGEMENT', 'book', '978-93-868-7326-2', 'Pearson', '2016-01-01', 'Jeffrey A. Hoffer', 'education'),
    (109, 1009,'Modern Database MANAGEMENT', 'book', '978-93-868-7326-2', 'Pearson', '2016-01-01', 'Jeffrey A. Hoffer', 'education'),
    (110, 1010,"Cat and the Hat", 'book', '978-0-07-134679-2', 'Oracle Press', '2014-01-01', 'Hebert Schildt', 'education'),
    (111, 1011,"Cat and the Hat", 'book', '978-0-07-134679-2', 'Oracle Press', '2014-01-01', 'Hebert Schildt', 'education'),
    (112, 1012,'Jane and Joe', 'book', '978-0-07-136524-8', 'Oracle Press', '2014-01-01', 'Roopesh Ramklass', 'education'),
    (113, 1013,'Jane and Joe', 'book', '978-0-07-136524-8', 'Oracle Press', '2014-01-01', 'Roopesh Ramklass', 'education'),
    (114, 1014,'How to Make Friends and Keep Them', 'book', '978-1-305-963258-1', 'Cengage Learning', '2016-01-01', 'Jill West', 'education'),
    (115, 1015,'How to Make Friends and Keep Them', 'book', '978-1-305-963258-1', 'Cengage Learning', '2016-01-01', 'Jill West', 'education'),
    (116, 1016,'So Much SQL...', '978-1-43169-928-8', 'no starch press', '2019-01-01', 'Eric Matthes', 'education'),
    (117, 1017,'So Much SQL...', 'book', '978-1-43169-928-8', 'no starch press', '2019-01-01', 'Eric Matthes', 'education'),
    (118, 1018,'This is My Last Class', 'book', '978-63-868-4362-2', 'Pearson', '2016-01-01', 'Jeffrey A. Hoffer', 'education'),
    (119, 1019,'This is My Last Class', 'book', '978-74-868-4362-2', 'Pearson', '2016-01-01', 'Jeffrey A. Hoffer', 'education');

    CREATE TABLE audiobook (
        audiobook_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        publisher varchar(50) NOT NULL,
        publisher_date date NOT NULL,
        author varchar(50) NOT NULL,
        genre varchar(25) NOT NULL,
        PRIMARY KEY (audiobook_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO audiobook (audiobook_id, item_id, item_description, item_type, publisher, publisher_date, author, genre) VALUES
    (200, 1010, 'The Institute', 'audiobook', 'Simon & Schuster Audio', '2019-09-01', 'Stephen King', 'fiction'),
    (201, 1011, 'The Institute', 'audiobook', 'Simon & Schuster Audio', '2019-09-01', 'Stephen King', 'fiction'),
    (203, 1012, 'Becoming', 'audiobook', 'Random House', '2018-11-01', 'Michelle Obama', 'Biography'),
    (204, 1013, 'Becoming', 'audiobook', 'Random House', '2018-11-01', 'Michelle Obama', 'Biography'),
    (205, 1014, 'The Subtle Art of Not Giving a F*ck', 'audiobook', 'HarperAudio', '2016-09-01', 'Mark Manson', 'self help'),
    (206, 1015, 'The Subtle Art of Not Giving a F*ck', 'audiobook', 'HarperAudio', '2016-09-01', 'Mark Manson', 'self help'),
    (207, 1016, 'Where the Crawdads Sing', 'audiobook', 'Penguin Audio', '2018-08-03', 'Ashley Owens', 'fiction'),
    (208, 1017, 'Where the Crawdads Sing', 'audiobook', 'Penguin Audio', '2018-08-03', 'Ashley Owens', 'fiction'),
    (209, 1018, 'Untamed', 'audiobook', 'Random House', '2020-03-01', 'Mary Doyle', 'biography'),
    (210, 1019, 'Untamed', 'audiobook', 'Random House', '2020-03-01', 'Mary Doyle', 'biography'),
    (211, 1020, 'Farmwork Fun', 'audiobook', 'Simon & Schuster Audio', '2019-09-02', 'Lewis King', 'fiction'),
    (212, 1021, 'Farmwork Fun', 'audiobook', 'Simon & Schuster Audio', '2019-09-02', 'Lewis King', 'fiction'),
    (213, 1022, 'All About Nothing', 'audiobook', 'Random House', '2018-11-01', 'Jane Obama', 'Biography'),
    (214, 1023, 'All About Nothing', 'audiobook', 'Random House', '2018-11-01', 'Jane Obama', 'Biography'),
    (215, 1024, 'Harry Potter', 'audiobook', 'HarperAudio', '2016-09-01', 'Mark Manson', 'self help'),
    (216, 1025, 'Harry Potter', 'audiobook', 'HarperAudio', '2016-09-01', 'Mark Manson', 'self help'),
    (217, 1026, 'Insert Audiobook Title Here', 'audiobook', 'Penguin Audio', '2018-08-01', 'Delia Owens', 'fiction'),
    (218, 1027, 'Insert Audiobook Title Here', 'audiobook', 'Penguin Audio', '2018-08-01', 'Delia Owens', 'fiction'),
    (219, 1028, 'Stuff and Things', 'audiobook', 'Random House', '2020-03-01', 'Glenndon Doyle', 'biography'),
    (220, 1029, 'Stuff and Things', 'audiobook', 'Random House', '2020-03-01', 'Glenndon Doyle', 'biography');

    CREATE TABLE film (
        film_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        director varchar(50) NOT NULL,
        release_date date NOT NULL,
        genre varchar(25) NOT NULL,
        PRIMARY KEY (film_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO film (film_id, item_id, item_description, item_type, director, release_date, genre) VALUES
    (300, 1020, 'Ip Man 4: The Finale', 'film', 'Wilson Yip', '2019-01-01', 'action'),
    (301, 1021, 'Ip Man 4: The Finale', 'film', 'Wilson Yip', '2019-01-01', 'action'),
    (302, 1022, 'Jurassic Park', 'film', 'Steven Spielberg', '1993-01-01', 'action'),
    (303, 1023, 'Jurassic Park', 'film', 'Steven Spielberg', '1993-01-01', 'action'),
    (304, 1024, 'The Mask', 'film', 'Chuck Russell', '1994-01-01', 'comedy'),
    (305, 1025, 'The Mask', 'film', 'Chuck Russell', '1994-01-01', 'comedy'),
    (306, 1026, 'Zardoz', 'film', 'John Boorman', '1974-01-01', 'sci-fi'),
    (307, 1027, 'Zardoz', 'film', 'John Boorman', '1974-01-01', 'sci-fi'),
    (308, 1028, 'Doctor Sleep', 'film', 'Mike Flanagan', '2019-01-01', 'horror'),
    (309, 1029, 'Doctor Sleep', 'film', 'Mike Flanagan', '2019-01-01', 'horror'),
    (310, 1030, 'Frozen 2', 'film', 'Wilson Yip', '2019-01-01', 'action'),
    (311, 1031, 'Frozen 2', 'film', 'Wilson Yip', '2019-01-01', 'action'),
    (312, 1032, 'Jurassic Park 2', 'film', 'Steven Spielberg', '1993-01-01', 'action'),
    (313, 1033, 'Jurassic Park 2', 'film', 'Steven Spielberg', '1993-01-01', 'action'),
    (314, 1034, 'The Boat', 'film', 'Chuck Russell', '1994-01-01', 'comedy'),
    (315, 1035, 'The Boat', 'film', 'Chuck Russell', '1994-01-01', 'comedy'),
    (316, 1036, 'Frankenstein', 'film', 'John Boorman', '1974-01-01', 'sci-fi'),
    (317, 1037, 'Frankenstein', 'film', 'John Boorman', '1974-01-01', 'sci-fi'),
    (318, 1038, 'Doctor Awake', 'film', 'Mike Flanagan', '2019-01-01', 'horror'),
    (319, 1039, 'Doctor Awake', 'film', 'Mike Flanagan', '2019-01-01', 'horror');

    CREATE TABLE magazine (
        magazine_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        publisher varchar(50) NOT NULL,
        publisher_date date NOT NULL,
        issue_number int(5),
        genre varchar(25),
        PRIMARY KEY (magazine_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO magazine (magazine_id, item_id, item_description, item_type, publisher, publisher_date, issue_number, genre) VALUES
    (400, 1030, 'People - The Untold Story of Tiger King', 'magazine', 'people', '2020-03-01', 1234, 'lifesytle'),
    (401, 1031, 'People - the Untold Story of Tiger King', 'magazine', 'people', '2020-03-01', 1234, 'lifestyle'),
    (402, 1032, 'Time - Special Report: Heros of the Front Lines', 'magazine', 'time', '2020-03-01', 2765, 'news'),
    (403, 1033, 'Time - Special Report: Heros of the Front Lines', 'magazine', 'time', '2020-03-01', 2765, 'news'),
    (404, 1034, 'Popular Mechanics - What Are You Building?', 'magazine', 'hearst magazines', '2020-03-01', 26548, 'mechanics'),
    (405, 1035, 'Popular Mechanics - What Are You Building?', 'magazine', 'hearst magazines', '2020-03-01', 26548, 'mechanics'),
    (406, 1036, "Car and Driver - Tesla's First Real Test", 'magazine', 'hearst magazines', '2020-03-01', 3623, 'automotive'),
    (407, 1037, "Car and Driver - Tesla's First Real Test", 'magazine', 'hearst magazines', '2020-03-01', 3623, 'automotive'),
    (408, 1038, 'Motor Trend - Super Hybrids', 'magazine', 'magazine express, inc', '2020-03-01', 65423, 'automotive'),
    (409, 1039, 'Motor Trend - Super Hybrids', 'magazine', 'magazine express, inc', '2020-03-01', 65423, 'automotive'),
    (410, 1040, 'People - Who the Hell Reads People?', 'magazine', 'people', '2020-03-01', 1232, 'lifesytle'),
    (411, 1041, 'People - Who the Hell Reads People?', 'magazine', 'people', '2020-03-01', 1232, 'lifestyle'),
    (412, 1042, 'Time - Really Sick of Staying Indoors All Day', 'magazine', 'time', '2020-03-02', 2784, 'news'),
    (413, 1043, 'Time - Really Sick of Staying Indoors All Day', 'magazine', 'time', '2020-03-02', 2784, 'news'),
    (414, 1044, 'Popular Mechanics - Build Stuff Bob', 'magazine', 'hearst magazines', '2020-03-01', 26549, 'mechanics'),
    (415, 1045, 'Popular Mechanics - Build Stuff Bob', 'magazine', 'hearst magazines', '2020-03-01', 26549, 'mechanics'),
    (416, 1046, "Car and Driver - Who is Driving These Days?", 'magazine', 'hearst magazines', '2020-03-01', 3622, 'automotive'),
    (417, 1047, "Car and Driver - Who is Driving These Days?", 'magazine', 'hearst magazines', '2020-03-01', 3622, 'automotive'),
    (418, 1048, 'Motor Trend - Vroom Vroom', 'magazine', 'magazine express, inc', '2020-03-01', 65422, 'automotive'),
    (419, 1049, 'Motor Trend - Vroom Vroom', 'magazine', 'magazine express, inc', '2020-03-01', 65422, 'automotive');

    CREATE TABLE music (
        music_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        artist varchar(50) NOT NULL,
        album varchar(50) NOT NULL,
        genre varchar(25) NOT NULL,
        publisher_date date NOT NULL,
        PRIMARY KEY (music_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO music (music_id, item_id, item_description, item_type, artist, album, genre, publisher_date) VALUES
    (500, 1040, 'The Arcs - The Arcs vs. The Inventors Vol. I', 'music', 'The Arcs', 'The Arcs vs. The Inventors Vol. 1', 'rock', '2015-01-01'),
    (501, 1041, 'The Arcs - The Arcs vs. The Inventors Vol. I', 'music', 'The Arcs', 'The Arcs vs. The Inventors Vol. 1', 'rock', '2015-01-01'),
    (502, 1042, 'Axel Thesleff - The Hollow Men', 'music', 'Alex Thesleff', 'The Hollow Men', 'indie electronic', '2015-01-01'),
    (503, 1043, 'Axel Thesleff - The Hollow Men', 'music', 'Alex Thesleff', 'The Hollow Men', 'indie electronic', '2015-01-01'),
    (504, 1044, 'Billy Talent Hits', 'music', 'Billy Talent', 'Hits', 'rock', '2014-01-01'),
    (505, 1045, 'Billy Talent Hits', 'music', 'Billy Talent', 'Hits', 'rock', '2014-01-01'),
    (506, 1046, 'Chali 2na, Krafty Kuts - Adventures of a Reluctant Superhero', 'music', 'Chali 2na, Krafty Kuts', 'Adventures of a Reluctnat Superhero', 'rap', '2019-01-01'),
    (507, 1047, 'Chali 2na, Krafty Kuts - Adventures of a Reluctant Superhero', 'music', 'Chali 2na, Krafty Kuts', 'Adventures of a Reluctnat Superhero', 'rap', '2019-01-01'),
    (508, 1048, 'Flight Facilities - Down to Earth', 'music', 'Flight Facilities', 'Down to Earth', 'indie electronic', '2014-01-01'),
    (509, 1049, 'Flight Facilities - Down to Earth', 'music', 'Flight Facilities', 'Down to Earth', 'indie electronic', '2014-01-01'),    
    (510, 1050, 'Writings on the Wall', 'music', 'Destinys Child', 'Writings on the Wall', 'pop', '2015-01-01'),
    (511, 1051, 'Survivor', 'music', 'Destinys Child', 'Survivor', 'pop', '2015-01-01'),
    (512, 1052, 'Because I love You', 'music', 'Lizzo', 'Because I love You', 'pop', '2015-01-01'),
    (513, 1053, 'Big Girl Small World', 'music', 'Lizzo', 'Big Girl Small World', 'pop', '2015-01-01'),
    (514, 1054, 'Damn', 'music', 'Kendrick Lamar', 'Damn', 'rap', '2014-01-01'),
    (515, 1055, 'To Pimp A Butterfly', 'music', 'Kendrick Lamar', 'Damn', 'rap', '2014-01-01'),
    (516, 1056, 'KOD', 'music', 'J Cole', 'KOD', 'rap', '2019-01-01'),
    (517, 1057, 'Forest Hills Drive', 'music', 'J Cole', '2014 Forest Hills Drive', 'rap', '2019-01-01'),
    (518, 1058, 'For Your Eyes Only', 'music', 'J Cole', '4 Your Eyes Only', 'rap', '2014-01-01'),
    (519, 1059, 'Born Sinner', 'music', 'J Cole', 'Born Sinner', 'rap',  '2014-01-01');
    (520, 1060, 'Music Box', 'music', 'Mariah Carey', 'Music Box', 'pop', '2014-01-01'),
    (521, 1061, 'DayDream', 'music', 'Mariah Carey', 'DayDream', 'pop', '2019-01-01'),
    (522, 1062, 'Butterfly', 'music', 'Mariah Carey', 'Butterfly', 'pop', '2019-01-01'),
    (523, 1063, 'Mariah Carey', 'music', 'Mariah Carey','Mariah Carey', 'pop', '2014-01-01'),
    (524, 1064, 'Merry Christmas', 'music', 'Mariah Carey', 'Merry Christmas', 'pop',  '2014-01-01');

    CREATE TABLE equipment (
        equipment_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        equipment_type varchar(50) NOT NULL,
        purchase_date date NOT NULL,
        PRIMARY KEY (equipment_id),
        KEY inventory_fk (item_id)
    );

    INSERT INTO equipment (equipment_id, item_id, item_description, item_type, equipment_type, purchase_date) VALUES
    (600, 1050, 'Cable 6ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (601, 1051, 'Cable 6ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (602, 1052, 'Projector 4k', 'equipment', 'projector', '2020-04-01'),
    (603, 1053, 'Projector 4k', 'equipment', 'projector', '2020-04-01'),
    (604, 1054, 'Record Player Hi-Def', 'equipment', 'record player', '2020-04-01'),
    (605, 1055, 'Record Player Hi-Def', 'equipment', 'record player', '2020-04-01'),
    (606, 1056, 'Folding Chair Plastic', 'equipment', 'chair', '2020-04-01'),
    (607, 1057, 'Folding Chair Plastic', 'equipment', 'chair', '2020-04-01'),
    (608, 1058, 'Cable 12ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (609, 1059, 'Cable 12ft HDMI', 'equipment', 'cable', '2020-04-01');
    
    (610, 1060, 'Cable 20ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (611, 1061, 'Cable 30ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (612, 1062, 'Projector 5k', 'equipment', 'projector', '2020-04-01'),
    (613, 1063, 'Projector 6k', 'equipment', 'projector', '2020-04-01'),
    (614, 1064, 'Record Player Low-Def', 'equipment', 'record player', '2020-04-01'),
    (615, 1065, 'Record Player Low-Def', 'equipment', 'record player', '2020-04-01'),
    (616, 1066, 'Folding Chair Wood', 'equipment', 'chair', '2020-04-01'),
    (617, 1067, 'Folding Chair Wood', 'equipment', 'chair', '2020-04-01'),
    (618, 1068, 'Cable 20ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (619, 1069, 'Cable 120ft HDMI', 'equipment', 'cable', '2020-04-01');


    CREATE TABLE inventory (
        item_id int(10) NOT NULL AUTO_INCREMENT,
        item_description varchar(100) NOT NULL,
        item_type varchar(10) NOT NULL,
        copy_id int(10) NOT NULL,
        library_id int(10) NOT NULL,
        PRIMARY KEY (item_id),
        KEY copy_fk (copy_id),
        KEY library_fk (library_id)
    );

    INSERT INTO inventory (item_id, item_description, item_type, copy_id, library_id) VALUES
    (1000, "Java A Beginner's Guide Sixth Edition", 'book', 5000, 001),
    (1001, "Java A Beginner's Guide Sixth Edition", 'book', 5001, 001),
    (1002, 'OCA Oracle Database 12c SQL Fundamentals I Exam Guide', 'book', 5002, 001),
    (1003, 'OCA Oracle Database 12c SQL Fundamentals I Exam Guide', 'book', 5003, 001),
    (1004, 'CompTIA Network+ Guide to Networks', 'book', 5004, 001),
    (1005, 'CompTIA Network+ Guide to Networks', 'book', 5005, 001),
    (1006, 'Python Crash Course', 'book', 5006, 001),
    (1007, 'Python Crash Course', 'book', 5007, 001),
    (1008, 'Modern Database MANAGEMENT', 'book', 5008, 001),
    (1009, 'Modern Database MANAGEMENT', 'book', 5009, 001),

    (1010, 'The Institute', 'audiobook', 5010, 001),
    (1011, 'The Institute', 'audiobook', 5011, 001),
    (1012, 'Becoming', 'audiobook', 5012, 001),
    (1013, 'Becoming', 'audiobook', 5013, 001),
    (1014, 'The Subtle Art of Not Giving a F*ck', 'audiobook', 5014, 001),
    (1015, 'The Subtle Art of Not Giving a F*ck', 'audiobook', 5014, 001),
    (1016, 'Where the Crawdads Sing', 'audiobook', 5016, 001),
    (1017, 'Where the Crawdads Sing', 'audiobook', 5017, 001),
    (1018, 'Untamed', 'audiobook', 5018, 001),
    (1019, 'Untamed', 'audiobook', 5019, 001),

    (1020, 'Ip Man 4: The Finale', 'film', 5020, 001),
    (1021, 'Ip Man 4: The Finale', 'film', 5021, 001),
    (1022, 'Jurassic Park', 'film', 5022, 001),
    (1023, 'Jurassic Park', 'film', 5023, 001),
    (1024, 'The Mask', 'film', 5024, 001),
    (1025, 'The Mask', 'film', 5025, 001),
    (1026, 'Zardoz', 'film', 5026, 001),
    (1027, 'Zardoz', 'film', 5027, 001),
    (1028, 'Doctor Sleep', 'film', 5028, 001),
    (1029, 'Doctor Sleep', 'film', 5029, 001),

    (1030, 'People - The Untold Story of Tiger King', 'magazine', 5030, 001),
    (1031, 'People - the Untold Story of Tiger King', 'magazine', 5031, 001),
    (1032, 'Time - Special Report: Heros of the Front Lines', 'magazine', 5032, 001),
    (1033, 'Time - Special Report: Heros of the Front Lines', 'magazine', 5033, 001),
    (1034, 'Popular Mechanics - What Are You Building?', 'magazine', 5034, 001),
    (1035, 'Popular Mechanics - What Are You Building?', 'magazine', 5035, 001),
    (1036, "Car and Driver - Tesla's First Real Test", 'magazine', 5036, 001),
    (1037, "Car and Driver - Tesla's First Real Test", 'magazine', 5037, 001),
    (1038, 'Motor Trend - Super Hybrids', 'magazine', 5038, 001),
    (1039, 'Motor Trend - Super Hybrids', 'magazine', 5039, 001),

    (1040, 'The Arcs - The Arcs vs. The Inventors Vol. I', 'music', 5040, 001),
    (1041, 'The Arcs - The Arcs vs. The Inventors Vol. I', 'music', 5041, 001),
    (1042, 'Axel Thesleff - The Hollow Men', 'music', 5042, 001),
    (1043, 'Axel Thesleff - The Hollow Men', 'music', 5043, 001),
    (1044, 'Billy Talent Hits', 'music', 5044, 001),
    (1045, 'Billy Talent Hits', 'music', 5045, 001),
    (1046, 'Chali 2na, Krafty Kuts - Adventures of a Reluctant Superhero', 'music', 5046, 001),
    (1047, 'Chali 2na, Krafty Kuts - Adventures of a Reluctant Superhero', 'music', 5047, 001),
    (1048, 'Flight Facilities - Down to Earth', 'music', 5048, 001),
    (1049, 'Flight Facilities - Down to Earth', 'music', 5049, 001),

    (1050, 'Cable 6ft HDMI', 'equipment', 5050, 001),
    (1051, 'Cable 6ft HDMI', 'equipment', 5051, 001),
    (1052, 'Projector 4k', 'equipment', 5052, 001),
    (1053, 'Projector 4k', 'equipment', 5053, 001),
    (1054, 'Record Player Hi-Def', 'equipment', 5054, 001),
    (1055, 'Record Player Hi-Def', 'equipment', 5055, 001),
    (1056, 'Folding Chair Plastic', 'equipment', 5056, 001),
    (1057, 'Folding Chair Plastic', 'equipment', 5057, 001),
    (1058, 'Cable 12ft HDMI', 'equipment', 5058, 001),
    (1059, 'Cable 12ft HDMI', 'equipment', 5059, 001),
    
    (610, 1060, 'Cable 20ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (611, 1061, 'Cable 30ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (612, 1062, 'Projector 5k', 'equipment', 'projector', '2020-04-01'),
    (613, 1063, 'Projector 6k', 'equipment', 'projector', '2020-04-01'),
    (614, 1064, 'Record Player Low-Def', 'equipment', 'record player', '2020-04-01'),
    (615, 1065, 'Record Player Low-Def', 'equipment', 'record player', '2020-04-01'),
    (616, 1066, 'Folding Chair Wood', 'equipment', 'chair', '2020-04-01'),
    (617, 1067, 'Folding Chair Wood', 'equipment', 'chair', '2020-04-01'),
    (618, 1068, 'Cable 20ft HDMI', 'equipment', 'cable', '2020-04-01'),
    (619, 1069, 'Cable 120ft HDMI', 'equipment', 'cable', '2020-04-01'),

    (510, 1050, 'Writings on the Wall', 'music', 'Destinys Child', 'Writings on the Wall', 'pop', '2015-01-01'),
    (511, 1051, 'Survivor', 'music', 'Destinys Child', 'Survivor', 'pop', '2015-01-01'),
    (512, 1052, 'Because I love You', 'music', 'Lizzo', 'Because I love You', 'pop', '2015-01-01'),
    (513, 1053, 'Big Girl Small World', 'music', 'Lizzo', 'Big Girl Small World', 'pop', '2015-01-01'),
    (514, 1054, 'Damn', 'music', 'Kendrick Lamar', 'Damn', 'rap', '2014-01-01'),
    (515, 1055, 'To Pimp A Butterfly', 'music', 'Kendrick Lamar', 'Damn', 'rap', '2014-01-01'),
    (516, 1056, 'KOD', 'music', 'J Cole', 'KOD', 'rap', '2019-01-01'),
    (517, 1057, 'Forest Hills Drive', 'music', 'J Cole', '2014 Forest Hills Drive', 'rap', '2019-01-01'),
    (518, 1058, 'For Your Eyes Only', 'music', 'J Cole', '4 Your Eyes Only', 'rap', '2014-01-01'),
    (519, 1059, 'Born Sinner', 'music', 'J Cole', 'Born Sinner', 'rap',  '2014-01-01');
    (520, 1060, 'Music Box', 'music', 'Mariah Carey', 'Music Box', 'pop', '2014-01-01'),
    (521, 1061, 'DayDream', 'music', 'Mariah Carey', 'DayDream', 'pop', '2019-01-01'),
    (522, 1062, 'Butterfly', 'music', 'Mariah Carey', 'Butterfly', 'pop', '2019-01-01'),
    (523, 1063, 'Mariah Carey', 'music', 'Mariah Carey','Mariah Carey', 'pop', '2014-01-01'),
    (524, 1064, 'Merry Christmas', 'music', 'Mariah Carey', 'Merry Christmas', 'pop',  '2014-01-01');

    CREATE TABLE copy (
        copy_id int(10) NOT NULL AUTO_INCREMENT,
        item_id int(10) NOT NULL,
        library_id int(10) NOT NULL,
        copy_condition varchar(10) NOT NULL,
        checkout_status varchar(12) NOT NULL,
        member_id int(10),
        checkout_date date,
        PRIMARY KEY (copy_id),
        KEY inventory_fk (item_id),
        KEY library_fk (library_id),
        KEY member_fk (member_id)
    );


    INSERT INTO copy(copy_id,item_id, library_id, copy_condition, checkout_status, member_id, checkout_date) VALUES
    (5000, 1000, 001, 'new', 'checked out', 10000, '2020-04-12'),
    (5001, 1001, 001, 'new', 'in stock', NULL, '2020-04-01'),
    (5002, 1002, 001, 'used', 'in stock', NULL, '2020-04-01'),
    (5003, 1003, 001, 'new', 'checked out', 10001, '2020-04-11'),
    (5004, 1004, 001, 'used', 'checked out', 10000, '2020-04-10'),
    (5005, 1005, 001, 'new', 'in stock', NULL, '2020-04-01'),
    (5006, 1006, 001, 'used', 'in stock', NULL, '2020-04-01'),
    (5007, 1007, 001, 'new', 'checked out', 10004, '2020-04-03'),
    (5008, 1008, 001, 'used', 'in stock', NULL, '2020-04-01'),
    (5009, 1009, 001, 'new', 'in stock', NULL, '2020-04-01'),

    (5010, 1010, 001, 'new', 'checked out', 10006, '2020-04-06'),
    (5011, 1011, 001, 'new', 'checked out', 10004, '2020-04-10'),
    (5012, 1012, 001, 'new', 'checked out', 10008, '2020-04-03'),
    (5013, 1013, 001, 'new', 'checked out', 10005, '2020-04-03'),
    (5014, 1014, 001, 'new', 'checked out', 10006, '2020-04-06'),
    (5015, 1015, 001, 'new', 'in stock', NULL, NULL),
    (5016, 1016, 001, 'new', 'in stock', NULL, NULL),
    (5017, 1017, 001, 'new', 'checked out', 10008, '2020-04-05'),
    (5018, 1018, 001, 'new', 'checked out', 10009, '2020-04-03'),
    (5019, 1019, 001, 'new', 'checked out', 10007, '2020-04-02'),

    (5020, 1020, 001, 'new', 'checked out', 10002, '2020-04-02'),
    (5021, 1021, 001, 'new', 'checked out', 10003, '2020-04-03'),
    (5022, 1022, 001, 'new', 'checked out', 10004, '2020-04-04'),
    (5023, 1023, 001, 'new', 'checked out', 10008, '2020-04-05'),
    (5024, 1024, 001, 'new', 'checked out', 10009, '2020-04-06'),
    (5025, 1025, 001, 'new', 'in stock', NULL, NULL),
    (5026, 1026, 001, 'new', 'checked out', 10002, '2020-04-07'),
    (5027, 1027, 001, 'new', 'checked out', 10000, '2020-04-08'),
    (5028, 1028, 001, 'new', 'in stock', NULL, NULL),
    (5029, 1029, 001, 'new', 'checked out', 10007, '2020-04-09'),

    (5030, 1030, 001, 'new', 'checked out', 10000, '2020-04-02'),
    (5031, 1031, 001, 'new', 'in stock', NULL, NULL),
    (5032, 1032, 001, 'new', 'checked out', 10001, '2020-04-06'),
    (5033, 1033, 001, 'new', 'checked out', 10006, '2020-04-05'),
    (5034, 1034, 001, 'new', 'checked out', 10007, '2020-04-03'),
    (5035, 1035, 001, 'new', 'checked out', 10004, '2020-04-02'),
    (5036, 1036, 001, 'new', 'in stock', NULL, NULL),
    (5037, 1037, 001, 'new', 'in stock', NULL, NULL),
    (5038, 1038, 001, 'new', 'checked out', 10003, '2020-04-03'),
    (5039, 1039, 001, 'new', 'checked out', 10008, '2020-04-06'),

    (5040, 1040, 001, 'new', 'checked out', 10000, '2020-04-06'),
    (5041, 1041, 001, 'new', 'checked out', 10006, '2020-04-07'),
    (5042, 1042, 001, 'new', 'checked out', 10005, '2020-04-09'),
    (5043, 1043, 001, 'new', 'checked out', 10003, '2020-04-02'),
    (5044, 1044, 001, 'new', 'checked out', 10008, '2020-04-08'),
    (5045, 1045, 001, 'new', 'checked out', 10004, '2020-04-04'),
    (5046, 1046, 001, 'new', 'checked out', 10009, '2020-04-01'),
    (5047, 1047, 001, 'new', 'checked out', 10007, '2020-04-08'),
    (5048, 1048, 001, 'new', 'checked out', 10006, '2020-04-02'),
    (5049, 1049, 001, 'new', 'checked out', 10007, '2020-04-07'),

    (5050, 1050, 001, 'new', 'in stock', NULL, NULL),
    (5051, 1051, 001, 'new', 'in stock', NULL, NULL),
    (5052, 1052, 001, 'new', 'checked out', 10000, '2020-04-02'),
    (5053, 1053, 001, 'used', 'in stock', NULL, NULL),
    (5054, 1054, 001, 'new', 'in stock', NULL, NULL),
    (5055, 1055, 001, 'new', 'in stock', NULL, NULL),
    (5056, 1056, 001, 'new', 'checked out', 10001, '2020-04-03'),
    (5057, 1057, 001, 'new', 'checked out', 10002, '2020-04-05'),
    (5058, 1058, 001, 'new', 'checked out', 10003, '2020-04-01'),
    (5059, 1059, 001, 'new', 'in stock', NULL, NULL);

