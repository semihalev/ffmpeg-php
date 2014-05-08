--TEST--
ffmpeg get key frames test 
--SKIPIF--
<?php 
extension_loaded('ffmpeg') or die("skip ffmpeg extension not loaded"); 
extension_loaded('gd') or die("skip gd extension not avaliable.");
function_exists("imagecreatetruecolor") or die("skip function imagecreatetruecolor unavailable");
?>
--FILE--
<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');
$img = dirname(__FILE__) . '/test-';

while (($frame = $mov->getNextKeyFrame()) != false) {
    $i = $mov->getFrameNumber();
    $filename = $img . $i . '.png';
    $gd_image = $frame->toGDImage();
    imagepng($gd_image, $filename);
    printf("ffmpeg getFrame($i): md5 = %s\n", md5(file_get_contents($filename)));
    imagedestroy($gd_image);
    unlink($filename);
}
?>
--EXPECT--
ffmpeg getFrame(1): md5 = 054ca5377a0592ea15497bcfefa59181
ffmpeg getFrame(2): md5 = 054ca5377a0592ea15497bcfefa59181
ffmpeg getFrame(3): md5 = 054ca5377a0592ea15497bcfefa59181
ffmpeg getFrame(4): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFrame(5): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFrame(6): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFrame(7): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFrame(8): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFrame(9): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFrame(10): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFrame(11): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFrame(12): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFrame(13): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFrame(14): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFrame(15): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFrame(16): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFrame(17): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFrame(18): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFrame(19): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFrame(20): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFrame(21): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFrame(22): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFrame(23): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFrame(24): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFrame(25): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFrame(26): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFrame(27): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFrame(28): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFrame(29): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFrame(30): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFrame(31): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFrame(32): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFrame(33): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFrame(34): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFrame(35): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFrame(36): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFrame(37): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFrame(38): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFrame(39): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFrame(40): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFrame(41): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFrame(42): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFrame(43): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFrame(44): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFrame(45): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFrame(46): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFrame(47): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFrame(48): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFrame(49): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFrame(50): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFrame(51): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFrame(52): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFrame(53): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFrame(54): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFrame(55): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFrame(56): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFrame(57): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFrame(58): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFrame(59): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFrame(60): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFrame(61): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFrame(62): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFrame(63): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFrame(64): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFrame(65): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFrame(66): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFrame(67): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFrame(68): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFrame(69): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFrame(70): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFrame(71): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFrame(72): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFrame(73): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFrame(74): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFrame(75): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFrame(76): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFrame(77): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFrame(78): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFrame(79): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFrame(80): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFrame(81): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFrame(82): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFrame(83): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFrame(84): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFrame(85): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFrame(86): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFrame(87): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFrame(88): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFrame(89): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFrame(90): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFrame(91): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFrame(92): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFrame(93): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFrame(94): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFrame(95): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFrame(96): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFrame(97): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFrame(98): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFrame(99): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFrame(100): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFrame(101): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFrame(102): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFrame(103): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFrame(104): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFrame(105): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFrame(106): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFrame(107): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFrame(108): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFrame(109): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFrame(110): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFrame(111): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFrame(112): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFrame(113): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFrame(114): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFrame(115): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFrame(116): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFrame(117): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFrame(118): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFrame(119): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFrame(120): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFrame(121): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFrame(122): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFrame(123): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFrame(124): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFrame(125): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFrame(126): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFrame(127): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFrame(128): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFrame(129): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFrame(130): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFrame(131): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFrame(132): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFrame(133): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFrame(134): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFrame(135): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFrame(136): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFrame(137): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFrame(138): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFrame(139): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFrame(140): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFrame(141): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFrame(142): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFrame(143): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFrame(144): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFrame(145): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFrame(146): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFrame(147): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFrame(148): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFrame(149): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFrame(150): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFrame(151): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFrame(152): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFrame(153): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFrame(154): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFrame(155): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFrame(156): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFrame(157): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFrame(158): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFrame(159): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFrame(160): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFrame(161): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFrame(162): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFrame(163): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFrame(164): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFrame(165): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFrame(166): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFrame(167): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFrame(168): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFrame(169): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFrame(170): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFrame(171): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFrame(172): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFrame(173): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFrame(174): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFrame(175): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFrame(176): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFrame(177): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFrame(178): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFrame(179): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFrame(180): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFrame(181): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFrame(182): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFrame(183): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFrame(184): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFrame(185): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFrame(186): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFrame(187): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFrame(188): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFrame(189): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFrame(190): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFrame(191): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFrame(192): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFrame(193): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFrame(194): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFrame(195): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFrame(196): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFrame(197): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFrame(198): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFrame(199): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFrame(200): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFrame(201): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFrame(202): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFrame(203): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFrame(204): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFrame(205): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFrame(206): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFrame(207): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFrame(208): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFrame(209): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFrame(210): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFrame(211): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFrame(212): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFrame(213): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFrame(214): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFrame(215): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFrame(216): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFrame(217): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFrame(218): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFrame(219): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFrame(220): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFrame(221): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFrame(222): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFrame(223): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFrame(224): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFrame(225): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFrame(226): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFrame(227): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFrame(228): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFrame(229): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFrame(230): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFrame(231): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFrame(232): md5 = da9910064c0414e256056b769f942049
ffmpeg getFrame(233): md5 = da9910064c0414e256056b769f942049
ffmpeg getFrame(234): md5 = da9910064c0414e256056b769f942049
ffmpeg getFrame(235): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFrame(236): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFrame(237): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFrame(238): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFrame(239): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFrame(240): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFrame(241): md5 = e3a3ea606c5ccdc530c7c6b2a2a5aa71
ffmpeg getFrame(242): md5 = e3a3ea606c5ccdc530c7c6b2a2a5aa71
