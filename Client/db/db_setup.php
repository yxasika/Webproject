<?php
if (!file_exists("../db/dpad.db")) {
    session_start();
    $_SESSION['db_set'] = true;

    include "../db/createArticle.php";
    include "../db/createUserlist.php";
    include "../db/createCategorylist.php";
    include "../db/createNotification.php";

    $userObj = new user();
    $userObj->insertUser('test', 'Mustertest', 'test@mail.com', md5("test"), 'author');
    $userObj->insertUser('Max', 'Musterman', 'muster@mail.com', md5("muster"), 'editor');

    $articleObj = new article();
    $articleObj->insertArticle("Tom Clancy's RainbowSix: Siege", 'test Mustertest', 'test@mail.com', '2018-01-15', 1, '../../Server/imgs/rainbow_six.jpg', '../../Server/pdfs/standortplan.pdf', 'published', 'Tom Clancy\'s Rainbow Six Siege is a first-person shooter game, in which players control an operator from the Rainbow team. Different operators have different nationalities, weapons, and gadgets. The game features an asymmetrical structure whereby the teams are not always balanced in their ability choices.', '20');
    $articleObj->insertArticle('Overwatch', 'test Mustertest', 'test@mail.com', '2018-02-10', 2, '../../Server/imgs/overwatch.jpg', '../../Server/pdfs/standortplan.pdf', 'published', 'Overwatch features a number of different game modes, principally designed around squad-based combat with two opposing teams of six players each. Players select one of over two dozen pre-made hero characters from one of three class types: Damage heroes that deal most of the damage to attack or defend control points, Tank heroes that can absorb a large amount of damage, and Support heroes that providing healing or other buffs for their teammates.', '23');
    $articleObj->insertArticle('Warcraft 3', 'test Mustertest', 'test@mail.com', '2018-03-08', 3, '../../Server/imgs/warcraft3.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'Warcraft III takes place on a map of varying size, such as large plains and fields, with terrain features like rivers, mountains, seas, or cliffs. The map is initially hidden from the player and only becomes visible through exploration. Areas no longer in sight range of an allied unit or building are covered with the fog of war, meaning that while the terrain remains visible, changes such as enemy troop movements and building construction are not.', '41');
    $articleObj->insertArticle('Path of Exile', 'test Mustertest', 'test@mail.com', '2018-02-09', 4, '../../Server/imgs/path_of_exile.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'The player controls a single character from an overhead perspective and explores large outdoor areas and underground caves or dungeons, battling monsters and fulfilling quests from NPCs to gain experience points and equipment. The game borrows heavily from the Diablo series, particularly Diablo II.', '12');
    $articleObj->insertArticle('Bloodborne', 'Max Mustermann', 'muster@mail.com', '2018-01-15', 5, '../../Server/imgs/bloodborne.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'Bloodborne is an action role-playing game played from a third-person perspective and features elements similar to those found in the Souls series of games, particularly Demon\'s Souls and Dark Souls. The player makes their way through different locations within the decrepit Gothic world of Yharnam, while battling varied enemies, including bosses, collecting different types of useful items that have many uses, interacting with the strange non-player characters,[3] opening up shortcuts, and continuing through the main story.', '17');
    $articleObj->insertArticle("Monster Hunter World", 'test Mustertest', 'test@mail.com', '2017-06-15', 6, '../../Server/imgs/monster_hunter_world.jpg', '../../Server/pdfs/standortplan.pdf', 'published', 'Monster Hunter: World is an open-world action role-playing game played from a third-person perspective. Similar to previous games in the series, the player takes the role of a player-created character who travels to the "New World", an unpopulated land mass filled with monsters, to join the Research Commission that study the land from their central command base of Astera.', '54');
    $articleObj->insertArticle('Battlefield 1', 'test Mustertest', 'test@mail.com', '2018-02-12', 7, '../../Server/imgs/battlefield_1.jpg', '../../Server/pdfs/standortplan.pdf', 'published', 'Similar to its predecessors, Battlefield 1 is a first-person shooter game that emphasizes teamwork. It is set in the period of World War I, and is inspired by historical events. Players can make use of World War I weapons, including bolt-action rifles, automatic and semi-automatic rifles, artillery, flamethrowers, and mustard gas to combat opponents.[3][4][5][6] Melee combat was reworked, with DICE introducing new melee weapons such as sabres, trench clubs, and shovels into the game. These melee weapons were divided into three groups: heavy, medium and light.', '34');
    $articleObj->insertArticle('Crash Bandicoot', 'test Mustertest', 'test@mail.com', '2018-06-20', 8, '../../Server/imgs/crash_Bandicoot.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'Crash Bandicoot is primarily a platforming series. The goal of each level is to guide Crash from the beginning to the end, travelling either into the screen, towards the player or left and right in a side-scrolling manner. Several levels place Crash in unique situations which require the use of motorbikes, jet skis, submarines and various wild animals to reach the level\'s end.', '20');
    $articleObj->insertArticle('Rayman Legends', 'test Mustertest', 'test@mail.com', '2018-06-09', 9, '../../Server/imgs/rayman_Legends.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'The game carries on the style of gameplay from Rayman Origins in which up to four players (depending on the format) simultaneously make their way through various levels. Lums can be collected by touching them, defeating enemies, or freeing captured Teensies. Collecting Teensies unlocks new worlds, which can be played in any order once they are available. Along with Rayman, Globox, and the Teensies returning as playable characters, players can now control new female character Barbara and her sisters, once they are rescued from certain stages.', '30');
    $articleObj->insertArticle('Ratchet & Clank', 'Max Mustermann', 'muster@mail.com', '2018-06-15', 10, '../../Server/imgs/ratchet_clank.jpg', '../../Server/pdfs/standortplan.pdf', 'pending', 'Ratchet & Clank is a series of action platformer and third-person shooter video games. The franchise was created and developed by Insomniac Games and published by Sony Computer Entertainment for PlayStation consoles, such as PlayStation 2, PlayStation 3 and PlayStation 4 with the exclusion of Size Matters and Secret Agent Clank, which were developed by High Impact Games for the PlayStation Portable.', '40');


    $categoryObj = new category();
    $categoryObj->insertCategory(1, 'Shooter');
    $categoryObj->insertCategory(2, 'Shooter');
    $categoryObj->insertCategory(3, 'Rpg');
    $categoryObj->insertCategory(4, 'Rpg');
    $categoryObj->insertCategory(5, 'Action');
    $categoryObj->insertCategory(5, 'Rpg');
    $categoryObj->insertCategory(6, "Rpg");
    $categoryObj->insertCategory(7, 'Shooter');
    $categoryObj->insertCategory(8, 'Jumpnrun');
    $categoryObj->insertCategory(9, 'Jumpnrun');
    $categoryObj->insertCategory(10, 'Jumpnrun');


    $notifiObj = new notification();
    $notifiObj->insertNotifi('test@mail.com', 'muster@mail.com', 'Missing Abstract', 'Here is a text message.');
    $notifiObj->insertNotifi('muster@mail.com', 'test@mail.com', 'RE:Missing Abstract', 'Here is a response message.');
}
?>