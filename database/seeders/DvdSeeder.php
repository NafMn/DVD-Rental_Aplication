<?php

namespace Database\Seeders;

use App\Models\dvd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DvdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dvd1 = new dvd;
        $dvd1->dvd_code = 'ROP7';
        $dvd1->img_url = 'https://cdn.anime-planet.com/anime/primary/the-ancient-magus-bride-those-awaiting-a-star-1-190x271.jpg';
        $dvd1->harga = '30.000';
        $dvd1->title = 'The Ancient Magus Bride: Those Awaiting a Star';
        $dvd1->rilis = '2016 - 2017';
        $dvd1->durasi = '3 eps x 24 min';
        $dvd1->produser = 'WIT Studio';
        $dvd1->deskripsi = 'When Angelica sends Chise a pile of books to help with her magical studies, Chise is surprised to discover a childrens picture book among them that she once owned years ago as a child';
        $dvd1->created_at = new \DateTime();
        $dvd1->updated_at = new \DateTime();
        $dvd1->save();

        $dvd2 = new dvd;
        $dvd2->dvd_code = '4QE';
        $dvd2->img_url = 'https://cdn.anime-planet.com/anime/primary/jojos-bizarre-adventure-stardust-crusaders-battle-in-egypt-1-190x285.jpg';
        $dvd2->harga = '40.000';
        $dvd2->title = 'JoJo s Bizarre Adventure: Stardust Crusaders';
        $dvd2->rilis = '2015';
        $dvd2->durasi = '24 eps';
        $dvd2->produser = 'David Production';
        $dvd2->deskripsi = 'After 30 days of travel across the world, plagued with countless battles, Jotaro and his companions have finally arrived in Egypt! Now only the strongest Stand users remain to rebuff our heroes final march on Cairo';
        $dvd2->created_at = new \DateTime();
        $dvd2->updated_at = new \DateTime();
        $dvd2->save();

        $dvd3 = new dvd;
        $dvd3->dvd_code = '8KU';
        $dvd3->img_url = 'https://cdn.anime-planet.com/anime/primary/fire-force-2nd-season-1-190x285.jpg';
        $dvd3->harga = '50.000';
        $dvd3->title = 'Fire Force 2nd Season';
        $dvd3->rilis = '2020';
        $dvd3->durasi = '24 eps';
        $dvd3->produser = 'David Production';
        $dvd3->deskripsi = 'After 30 days of travel across the world, plagued with countless battles, Jotaro and his companions have finally arrived in Egypt! Now only the strongest Stand users remain to rebuff our heroes final march on Cairo';
        $dvd3->created_at = new \DateTime();
        $dvd3->updated_at = new \DateTime();
        $dvd3->save();

        $dvd4 = new dvd;
        $dvd4->dvd_code = 'UIP9';
        $dvd4->img_url = 'https://cdn.anime-planet.com/anime/primary/one-piece-1-190x260.jpg?';
        $dvd4->harga = '20.000';
        $dvd4->title = 'One Piece';
        $dvd4->rilis = '1999';
        $dvd4->durasi = 'Fall 1999';
        $dvd4->produser = 'Toei Animation';
        $dvd4->deskripsi = 'Long ago the infamous Gol D. Roger was the strongest and most powerful pirate on the seas';
        $dvd4->created_at = new \DateTime();
        $dvd4->updated_at = new \DateTime();
        $dvd4->save();

        $dvd5 = new dvd;
        $dvd5->dvd_code = '5ZX';
        $dvd5->img_url = 'https://cdn.anime-planet.com/anime/primary/chained-soldier-1-285x399.webp?t=1704406562';
        $dvd5->harga = '80.000';
        $dvd5->title = 'Chained Soldier';
        $dvd5->rilis = '2024';
        $dvd5->durasi = '2 eps';
        $dvd5->produser = 'Seven Arcs';
        $dvd5->deskripsi = 'The battle fantasy is set in a world where a demonic gate has unleashed monsters known as Shuuki.';
        $dvd5->created_at = new \DateTime();
        $dvd5->updated_at = new \DateTime();
        $dvd5->save();

        $dvd6 = new dvd;
        $dvd6->dvd_code = '7IO';
        $dvd6->img_url = 'https://cdn.anime-planet.com/anime/primary/shaman-king-flowers-1-285x399.webp';
        $dvd6->harga = '85.000';
        $dvd6->title = 'Shaman King: Flowers';
        $dvd6->rilis = '2020';
        $dvd6->durasi = '24 eps';
        $dvd6->produser = 'David Production';
        $dvd6->deskripsi = 'After 30 days of travel across the world, plagued with countless battles, Jotaro and his companions have finally arrived in Egypt! Now only the strongest Stand users remain to rebuff our heroes final march on Cairo';
        $dvd6->created_at = new \DateTime();
        $dvd6->updated_at = new \DateTime();
        $dvd6->save();

        $dvd7 = new dvd;
        $dvd7->dvd_code = '9OP';
        $dvd7->img_url = 'https://cdn.anime-planet.com/anime/primary/sasaki-and-peeps-1-285x399.webp';
        $dvd7->harga = '30.000';
        $dvd7->title = 'Sasaki and Peeps';
        $dvd7->rilis = '2024';
        $dvd7->durasi = '1 + eps';
        $dvd7->produser = 'SILVER LINK.';
        $dvd7->deskripsi = '
        When Sasaki brightens up his tired corporate life by buying a pet sparrow, he never imagined the bird would actually be a reincarnated sage from another world! With his new avian roommate teaching him all sorts of magic tricks, could this be Sasaki s chance to escape his droll office job';
        $dvd7->created_at = new \DateTime();
        $dvd7->updated_at = new \DateTime();
        $dvd7->save();

        $dvd8 = new dvd;
        $dvd8->dvd_code = 'GT7';
        $dvd8->img_url = 'https://cdn.anime-planet.com/anime/primary/great-pretender-razbliuto-1-285x399.webp';
        $dvd8->harga = '50.000';
        $dvd8->title = 'Great Pretender razbliuto';
        $dvd8->rilis = '2024';
        $dvd8->durasi = '2 eps';
        $dvd8->produser = 'David Production';
        $dvd8->deskripsi = 'his film follows Dorothy, the self-proclaimed genius con artist who recruited the infamous Laurent Thierry to the life of crime. This time around, she has been defeated at her own game by the Shanghai Longu Bang and is thought to be dead, but she soon reemerges in a small seaside village. Pursued by the underworld of Taipei, she heads to Kyoto, but what will she find waiting for her there...?!';
        $dvd8->created_at = new \DateTime();
        $dvd8->updated_at = new \DateTime();
        $dvd8->save();

        $dvd9 = new dvd;
        $dvd9->dvd_code = 'ER6';
        $dvd9->img_url = 'https://cdn.anime-planet.com/manga/primary/jujutsu-kaisen-1-285x428.jpg';
        $dvd9->harga = '60.000';
        $dvd9->title = 'Jujutsu Kaisen';
        $dvd9->rilis = '2018';
        $dvd9->durasi = '24 eps';
        $dvd9->produser = 'Weekly Shounen Jump';
        $dvd9->deskripsi = '
        Although Yuji Itadori looks like your average teenager, his immense physical strength is something to behold! Every sports club wants him to join, but Itadori would rather hang out with the school outcasts in the Occult Research Club. One day, the club manages to get their hands on a sealed cursed object';
        $dvd9->created_at = new \DateTime();
        $dvd9->updated_at = new \DateTime();
        $dvd9->save();

        $dvd10 = new dvd;
        $dvd10->dvd_code = 'UI9';
        $dvd10->img_url = 'https://cdn.anime-planet.com/manga/primary/jujutsu-kaisen-1-285x428.jpg';
        $dvd10->harga = '60.000';
        $dvd10->title = 'The Extra’s Academy Survival Guide';
        $dvd10->rilis = '2023';
        $dvd10->durasi = '24 eps';
        $dvd10->produser = 'Naver Webtoon';
        $dvd10->deskripsi = '
        Not only did I take the place of a character in a video game, I ended up becoming a disowned extra that doesn t even qualify as a real villain! When I ended up in the game <Silvenia s Failed Swordmaster>, I took the place of the failed  villain  Ed Rothstaylor.';
        $dvd10->created_at = new \DateTime();
        $dvd10->updated_at = new \DateTime();
        $dvd10->save();
    }
}
