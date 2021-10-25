CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `likes` int(11) NOT NULL
);

INSERT INTO `gallery` (`id`, `image_path`, `likes`) VALUES
(1, /images/1.jpg, 0),
(2, /images/2.jpg, 0),
(3, /images/3.jpg, 0),
(4, /images/4.jpg, 0),
(5, /images/5.jpg, 0),
(6, /images/6.jpg, 0),
(7, /images/7.jpg, 0),
(8, /images/8.jpg, 0);

ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;  
