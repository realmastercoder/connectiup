INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES ('1', 'User1', 'user1@mail.com', 'password1', '2/10/23 2:37'), ('2', 'User2', 'user2@mail.com', 'password2', '2/10/23 2:37'), ('3', 'User3', 'user3@mail.com', 'password3', '2/10/23 2:37'), ('4', 'user4', 'user4@mail.com', 'password4', '2/10/23 2:37'); 
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES ('1', '1', 'First post by user 1', 'This is the content of post 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1:13PM 2/13/2023'), ('2', '3', 'Second post, made by user 3.', 'Content for post 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1:14PM 2/13/2023'), ('3', '1', 'Third post. Created by user 1.', 'Content for post 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1:16PM 2/13/2023'); 
INSERT INTO `replies` (`id`, `user_id`, `post_id`, `content`, `created_at`) VALUES ('1', '2', '1', 'This is the a reply by user 2 to post #1.', '1:17PM 2/13/2023'), ('2', '4', '1', 'This is a reply from user 4 to post #2', '1:18PM 2/13/2023'), ('3', '3', '1', 'This is a reply from user3 to post #1', '1:19PM 2/13/2023'), ('4', '4', '2', 'This is a reply from user 4 to post #2', '1:21PM 2/13/2023');
