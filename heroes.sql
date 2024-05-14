-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 13 2024 р., 22:33
-- Версія сервера: 10.4.32-MariaDB
-- Версія PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `dota2db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `img` text NOT NULL,
  `categoryimg` text NOT NULL,
  `category` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `detail_image` varchar(255) NOT NULL,
  `attack_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `img`, `categoryimg`, `category`, `description`, `detail_image`, `attack_type`) VALUES
(3, 'abadon', 'uploads/images.jpg', 'uploads/hero_universal.png', 'UNIVERSAL', 'The Font of Avernus is the source of a family\'s strength, a crack in primal stones from which vapors of prophetic power have issued for generations. Each newborn of the cavernous House Avernus is bathed in the black mist, and by this baptism they are given an innate connection to the mystic energies of the land. They grow up believing themselves fierce protectors of their lineal traditions, the customs of the realm--but what they really are protecting is the Font itself. And the motives of the mist are unclear.\r\n\r\nWhen the infant Abaddon was bathed in the Font, they say something went awry. In the child\'s eyes there flared a light of comprehension that startled all present and set the sacerdotes to whispering. He was raised with every expectation of following the path all scions of Avernus took--to train in war, that in times of need he might lead the family\'s army in defense of the ancestral lands. But Abaddon was always one apart. Where others trained with weapons, he bent himself to meditation in the presence of the mist. He drank deep from the vapors that welled from the Font, learning to blend his spirit with the potency that flowed from far beneath the House; he became a creature of the black mist.\r\n\r\nThere was bitterness within the House Avernus--elders and young alike accusing him of neglecting his responsibilities. But all such accusations stopped when Abaddon rode into battle, and they saw how the powers of the mist had given him mastery over life and death beyond those of any lord the House had ever known.', 'uploads/зображення_2024-05-14_043053968.png', 'MELEE'),
(4, 'ALCHEMIST', 'uploads/images (1).jpg', 'uploads/hero_strength.png', 'STRENGTH', 'The sacred science of Chymistry was a Darkbrew family tradition, but no Darkbrew had ever shown the kind of creativity, ambition, and recklessness of young Razzil. However, when adulthood came calling he pushed aside the family trade to try his hand at manufacturing gold through Alchemy.\r\n\r\nIn an act of audacity befitting his reputation, Razzil announced he would transmute an entire mountain into gold. Following two decades of research and spending and preparation, he failed spectacularly, quickly finding himself imprisoned for the widespread destruction his experiment wrought. Yet Razzil was never one to take a setback lightly, and sought escape to continue his research.\r\n\r\nWhen his new cellmate turned out to be a fierce ogre, he found just the opportunity he needed. After convincing the ogre not to eat him, Razzil set about carefully concocting a tincture for it to drink, made from the moulds and mosses growing in the prison stone work. In a week\'s time, it seemed ready. When the ogre drank the potion, it flew into an unstoppable berserker rage, destroying the cell bars and exploding through walls and guards alike.\r\n\r\nThey soon found themselves lost somewhere in the forest surrounding the city with a trail of wreckage in their wake and no signs of pursuit. In the tonic\'s afterglow, the ogre seemed serene, happy, and even eager. Resolving to work together, the pair set off to collect the materials needed to attempt Razzil\'s Alchemic transmutation once more.', 'uploads/зображення_2024-05-14_043205132.png', 'MELEE'),
(13, 'ANCIENT APPARITION', 'uploads/зображення_2024-05-14_042311604.png', 'uploads/зображення_2024-05-14_042210771.png', 'INTELLIGENCE', 'Kaldr, the Ancient Apparition, is an image projected from outside time. He springs from the cold, infinite void that both predates the universe and awaits its end. Kaldr is, Kaldr was, Kaldr shall be...and what we perceive, powerful as it appears to us, is but the faintest faded echo of the true, eternal Kaldr. Some believe that as the cosmos ages and approaches its final moments, the brightness and power of Kaldr will also intensify--that the Ancient Apparition will grow younger and stronger as eternity\'s end draws nigh. His grip of ice will bring all matter to a stop, his image will cast a light too terrible to behold. An Apparition no longer!\r\n', 'uploads/зображення_2024-05-14_042254200.png', 'RANGED');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
