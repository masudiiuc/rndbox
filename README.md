RnDBox: Share your Project Ideas
================================
Architecture:
--------------------------------
    Symfony Framework 2.0
    Development host name: rndbox.lmjobs.com
    VirutlHost configuration:
    <VirtualHost *:80>
        ServerAdmin     masudiiuc@gmail.com
        ServerName      rndbox.lmjobs.com
        DocumentRoot    "/var/www/rndbox/web"
    </VirtualHost>

SQL Dump:
--------------------------------
    --
    -- Database: `rndbox`
    --

    -- --------------------------------------------------------

    --
    -- Table structure for table `ideas`
    --

    CREATE TABLE `ideas` (
      `idea_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `user_id` int(10) unsigned DEFAULT NULL,
      `title` varchar(255) DEFAULT NULL,
      `slug` varchar(255) DEFAULT NULL,
      `description` text,
      `status` varchar(25) DEFAULT NULL,
      `modified_date` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`idea_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    --
    -- Dumping data for table `ideas`
    --


    -- --------------------------------------------------------

    --
    -- Table structure for table `idea_comments`
    --

    CREATE TABLE `idea_comments` (
      `idea_comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `user_id` int(10) unsigned DEFAULT NULL,
      `comment` text,
      `like_it` enum('yes','no') DEFAULT NULL,
      `want_to_work` enum('yes','no') DEFAULT NULL,
      `created_date` datetime DEFAULT NULL,
      `modified_date` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`idea_comment_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    --
    -- Dumping data for table `idea_comments`
    --


    -- --------------------------------------------------------

    --
    -- Table structure for table `idea_status`
    --

    CREATE TABLE `idea_status` (
      `status` varchar(25) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

    --
    -- Dumping data for table `idea_status`
    --

    INSERT INTO `idea_status` VALUES('upcomming');
    INSERT INTO `idea_status` VALUES('completed');
    INSERT INTO `idea_status` VALUES('rejected');
    INSERT INTO `idea_status` VALUES('in progress');
    INSERT INTO `idea_status` VALUES('closed');

    -- --------------------------------------------------------

    --
    -- Table structure for table `idea_workers`
    --

    CREATE TABLE `idea_workers` (
      `idea_worker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `user_id` int(10) unsigned DEFAULT NULL,
      `started_date` datetime DEFAULT NULL,
      PRIMARY KEY (`idea_worker_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    --
    -- Dumping data for table `idea_workers`
    --


    -- --------------------------------------------------------

    --
    -- Table structure for table `users`
    --

    CREATE TABLE `users` (
      `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `email_address` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      `user_type` enum('developer','designer','sqa','project manager','techinical writter') NOT NULL,
      `created_date` datetime DEFAULT NULL,
      `modified_date` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    --
    -- Dumping data for table `users`
    --


    -- --------------------------------------------------------

    --
    -- Table structure for table `user_profiles`
    --

    CREATE TABLE `user_profiles` (
      `user_profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `user_id` int(10) unsigned DEFAULT NULL,
      `first_name` varchar(255) DEFAULT NULL,
      `last_name` varchar(255) DEFAULT NULL,
      `created_date` datetime DEFAULT NULL,
      `modified_date` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`user_profile_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    --
    -- Dumping data for table `user_profiles`
    --

