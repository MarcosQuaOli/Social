CREATE TABLE `tb_users` (
  `iduser` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`iduser`, `nome`, `email`, `password`, `birthday`) VALUES
(1, 'Marcos Oliveira', 'marco_oliver10@outlook.com', '$2y$12$ti52rUa2tyqMzKmXsJvFL.iP68R9NtuiboAytQvUenck6kzgOqdl2', '1996-03-07'),
(2, 'Fredericka', 'sit.amet@gravida.org', '771', '2019-08-10'),
(3, 'Cadman', 'libero.Integer@ettristiquepellentesque.co.uk', '305', '2021-06-18'),
(4, 'Grace', 'nulla.vulputate@loremsemper.org', '201', '2020-10-12'),
(5, 'Breanna', 'turpis.non.enim@fermentumconvallis.net', '778', '2020-08-11'),
(6, 'Edward', 'amet.ante.Vivamus@Pellentesquetincidunt.ca', '863', '2020-01-07'),
(7, 'Elmo', 'eu.tellus@auctorveliteget.co.uk', '817', '2020-03-19'),
(8, 'Karen', 'Mauris.eu@necmaurisblandit.ca', '48', '2021-02-14'),
(9, 'Colton', 'consequat@tristique.edu', '422', '2020-02-18'),
(10, 'Virginia', 'a.scelerisque.sed@metus.org', '589', '2019-12-24'),
(11, 'Colton', 'nisl@auctorvitae.net', '487', '2020-05-03'),
(12, 'Bevis', 'fringilla@vulputatedui.co.uk', '590', '2020-08-22'),
(13, 'Colt', 'lobortis.augue@risus.org', '39', '2020-11-08'),
(14, 'Rigel', 'tristique.pharetra.Quisque@ornareIn.ca', '619', '2021-04-13'),
(15, 'Alan', 'vulputate.lacus.Cras@nascetur.edu', '280', '2021-04-01'),
(16, 'Galvin', 'ultricies.ornare.elit@volutpatNulla.edu', '326', '2021-02-01'),
(17, 'Patrick', 'risus.Duis.a@eueleifendnec.net', '158', '2020-11-19'),
(18, 'Ciara', 'tempus@cubiliaCurae.org', '545', '2019-10-27'),
(19, 'Virginia', 'ipsum.Curabitur.consequat@Nunc.ca', '433', '2020-12-15'),
(20, 'Zephania', 'ut.aliquam@euismodet.net', '679', '2020-09-09'),
(21, 'Rana', 'suscipit@non.org', '461', '2020-07-01'),
(22, 'Grace', 'amet.ultricies@ullamcorpermagna.org', '882', '2021-03-07'),
(23, 'April', 'Nunc.lectus@urnaUttincidunt.net', '793', '2019-08-08'),
(24, 'Kylan', 'mollis.Phasellus.libero@loremluctusut.com', '498', '2021-03-23'),
(25, 'Fitzgerald', 'molestie.pharetra@ligulaNullamfeugiat.net', '620', '2020-12-24'),
(26, 'Palmer', 'non.massa@aliquetlibero.ca', '308', '2020-11-09'),
(27, 'Clementine', 'Nullam@quisdiamluctus.org', '323', '2020-10-16'),
(28, 'Lucius', 'mauris@dapibus.co.uk', '606', '2020-10-12'),
(29, 'Asher', 'semper.tellus.id@necimperdiet.ca', '720', '2019-07-17'),
(30, 'Ray', 'adipiscing@Vivamusmolestiedapibus.ca', '957', '2021-06-25'),
(31, 'Hedy', 'Fusce@duinec.ca', '96', '2021-05-09'),
(32, 'Nehru', 'ridiculus.mus.Aenean@purusin.co.uk', '195', '2019-12-15'),
(33, 'Quyn', 'vel@non.net', '476', '2020-06-16'),
(34, 'Doris', 'libero.et@amet.ca', '205', '2020-02-17'),
(35, 'Patrick', 'condimentum@sagittislobortismauris.co.uk', '101', '2019-07-22'),
(36, 'Tanisha', 'pharetra.sed@euismodenimEtiam.net', '158', '2019-11-09'),
(37, 'Yoshi', 'vel.lectus@ridiculus.org', '377', '2021-07-08'),
(38, 'Guy', 'lorem@iaculisenim.ca', '850', '2020-10-09'),
(39, 'Ivy', 'a@egetmetus.edu', '959', '2021-03-06'),
(40, 'Meredith', 'sem.vitae.aliquam@nec.org', '591', '2021-01-27'),
(41, 'MacKensie', 'ut.ipsum@nec.co.uk', '480', '2021-06-29'),
(42, 'Amos', 'placerat@pedenonummy.com', '549', '2021-06-11'),
(43, 'Nicholas', 'molestie@consequat.ca', '25', '2020-05-05'),
(44, 'Davis', 'mi.eleifend@vitae.edu', '682', '2021-03-03'),
(45, 'Pearl', 'Lorem@primis.edu', '865', '2019-09-04'),
(46, 'Graham', 'Cras@morbitristiquesenectus.com', '415', '2020-09-09'),
(47, 'Drew', 'sagittis@scelerisque.net', '819', '2020-07-13'),
(48, 'Lev', 'purus@etarcuimperdiet.ca', '174', '2019-07-26'),
(49, 'Akeem', 'eget.ipsum.Suspendisse@lobortisaugue.org', '45', '2020-07-29'),
(50, 'Ferdinand', 'urna@gravidanonsollicitudin.net', '157', '2021-01-22'),
(51, 'Kennedy', 'mollis.dui@gravida.com', '205', '2019-11-17'),
(52, 'Gregory', 'Proin.mi@parturient.ca', '11', '2020-01-15'),
(53, 'Kitra', 'rutrum@Loremipsum.com', '912', '2019-12-21'),
(54, 'Aiko', 'orci.adipiscing@pretiumet.com', '363', '2019-12-20'),
(55, 'Gareth', 'mi.Aliquam@DonectinciduntDonec.ca', '206', '2019-07-15'),
(56, 'Grant', 'lobortis.quis.pede@porttitor.org', '597', '2020-04-24'),
(57, 'Hedwig', 'Nulla.tempor.augue@Morbi.co.uk', '197', '2020-06-09'),
(58, 'Teagan', 'sem.molestie@liberoest.co.uk', '460', '2020-07-02'),
(59, 'Brendan', 'eget@tortornibhsit.com', '656', '2019-08-22'),
(60, 'Oscar', 'sociis.natoque.penatibus@convalliserateget.co.uk', '545', '2021-03-08'),
(61, 'Melodie', 'pede.blandit@convallis.com', '585', '2020-09-25'),
(62, 'Sloane', 'dapibus.rutrum@augue.ca', '440', '2021-06-22'),
(63, 'Haley', 'sed.dictum@Namac.com', '647', '2019-10-25'),
(64, 'Ifeoma', 'parturient.montes@vitaeodio.edu', '299', '2021-05-23'),
(65, 'Carl', 'elit.pretium.et@variusNam.edu', '703', '2020-03-06'),
(66, 'Kelly', 'blandit@mauris.co.uk', '867', '2021-06-25'),
(67, 'Conan', 'fringilla.ornare@velitegestaslacinia.org', '188', '2019-10-06'),
(68, 'Quon', 'at.fringilla.purus@eleifendnondapibus.edu', '644', '2019-09-02'),
(69, 'Logan', 'eu.dui.Cum@Morbisit.ca', '678', '2019-10-30'),
(70, 'Ruth', 'adipiscing.lacus@iaculisnec.net', '474', '2019-12-04'),
(71, 'Melinda', 'In.tincidunt@tempordiam.org', '482', '2021-07-01'),
(72, 'Melissa', 'iaculis.aliquet.diam@orci.co.uk', '290', '2020-12-10'),
(73, 'Yvonne', 'magna.Nam.ligula@molestie.net', '954', '2019-11-14'),
(74, 'Len', 'cursus.et@nunc.org', '715', '2020-04-18'),
(75, 'William', 'accumsan.laoreet@odio.edu', '121', '2020-01-04'),
(76, 'Zorita', 'in.consectetuer@at.co.uk', '690', '2020-12-29'),
(77, 'Keefe', 'libero@sit.org', '896', '2020-06-23'),
(78, 'Bruce', 'libero.Proin@nascetur.co.uk', '173', '2020-10-23'),
(79, 'Chester', 'nunc.Quisque.ornare@dapibus.edu', '185', '2019-11-14'),
(80, 'Linda', 'tincidunt@diamatpretium.co.uk', '57', '2020-05-25'),
(81, 'Allen', 'non.leo@sapien.net', '690', '2020-09-08'),
(82, 'Colt', 'Donec.tempor.est@nectempus.co.uk', '548', '2020-04-05'),
(83, 'Freya', 'habitant.morbi@MaurisnullaInteger.co.uk', '583', '2019-11-24'),
(84, 'Joseph', 'tellus@Vestibulumanteipsum.co.uk', '120', '2021-03-19'),
(85, 'Elmo', 'egestas.lacinia@mitemporlorem.ca', '581', '2019-08-28'),
(86, 'Jaquelyn', 'Mauris.ut@Curabitur.com', '20', '2020-12-28'),
(87, 'Cora', 'ad.litora@Nullaaliquet.net', '378', '2020-06-04'),
(88, 'Irene', 'enim.non@ultricesDuis.net', '559', '2020-12-25'),
(89, 'Jerome', 'Donec.sollicitudin.adipiscing@auctornuncnulla.edu', '906', '2020-11-08'),
(90, 'Valentine', 'urna.Ut.tincidunt@auctornuncnulla.net', '114', '2019-11-07'),
(91, 'Willow', 'et.netus@augue.co.uk', '706', '2021-04-26'),
(92, 'Sacha', 'parturient.montes@Aliquamnec.org', '151', '2021-06-11'),
(93, 'Martin', 'Mauris.nulla.Integer@auctor.ca', '247', '2021-06-10'),
(94, 'Wanda', 'ut.nulla@molestieSed.org', '361', '2020-08-10'),
(95, 'Britanni', 'Phasellus.at@sagittisfelis.edu', '235', '2020-07-22'),
(96, 'Brennan', 'sit.amet@nonlacinia.com', '433', '2019-10-25'),
(97, 'Callie', 'non@Fuscedolor.co.uk', '187', '2019-11-21'),
(98, 'Zeus', 'ullamcorper.Duis@Integer.net', '915', '2020-08-30'),
(99, 'Thane', 'Suspendisse.sed@necmollis.org', '427', '2019-10-25'),
(100, 'Vance', 'dolor.elit.pellentesque@Seddiam.edu', '531', '2020-04-30'),
(101, 'Brynn', 'vestibulum.Mauris.magna@utpellentesqueeget.co.uk', '841', '2021-03-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_follows`
--

CREATE TABLE `users_follows` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `iduser_follow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users_follows`
--

INSERT INTO `users_follows` (`id`, `iduser`, `iduser_follow`) VALUES
(2, 1, 8),
(3, 1, 60);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `users_follows`
--
ALTER TABLE `users_follows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `users_follows`
--
ALTER TABLE `users_follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;