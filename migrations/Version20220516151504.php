<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220516151504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE room (
            id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
            title VARCHAR(255) NOT NULL, 
            description VARCHAR(255) DEFAULT NULL, 
            location VARCHAR(255) NOT NULL,
            type VARCHAR(255) NOT NULL, 
            max_guest INTEGER NOT NULL, 
            night_price INTEGER NOT NULL
            )'
        );

        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            1,
            "Heavenly Treehouse w/ Wrap Around Deck & Farm Views",
            "The Treehouse custom built for your comfort! You will have all the essentials your kitchenette, bathroom, shower. You also have shared access to the gardens gazebo.
            Are you sleeping among the clouds? Almost! The main bed has a memory foam mattress encircled what seems endless. Rest easy among the surrounding trees.",
            "Paris",
            "Double",
            2,
            30
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            2,
            "The Beach House. Oceanfront & Sunrise Views!",
            "Sleep great our new Serta iComfort Hybrid mattresses featuring Sertas cooling Carbon Fiber Memory Foam EverCool® Fuze Gel Memory Foam.
            This luxury two-bedroom home offers panoramic views of the water, rooms full of natural light, a gourmet kitchen, spacious living areas, balcony.
            Its literally steps the beach.",
            "Paris",
            "Triple",
            3,
            40
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            3,
            "Sky Haus - A-Frame Cabin",
            "Sky Haus has a very cozy loft 4 beds all brand new linens.
            The kitchen fully equipped everything you need. Just bring food :-)
            There is a gas fireplace which is controlled by the wall mounted thermostat.
            The hot tub is just outside the front door and is always ready.
            We are located next door to the iconic Tye Haus A-frame cabin.",
            "Barcelona",
            "Double",
            2,
            30
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            4,
            "IMAGIKA: 6 ACRES w VIEWS! CHEF KITCHEN! NEAR BEACH",
            "Unique 10,000 sq ft Malibu playhouse, full of architectural enchantment and imagination, with massive views of the Pacific Ocean and mountain backdrops. This house will bring out the child within, full of nooks and crannies to explore the vast gardens on the estate.",
            "Los Angeles",
            "Quadruple",
            4,
            50
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            5,
            "Olive Beach Bungalow",
            "Stunning remodeled bungalow that is only steps to the sand (one house off the beach). The open layout is perfect for families. Home comes with surf/body boards, bikes, beach chairs and anything else you would need to enjoy the incredible beach out front. The home has been remodeled top to bottom with no expense spared. Enjoy a morning coffee on the patio while gazing at spectacular ocean and sunset views. Walkable to amazing cafes/restaurants. Dogs are allowed with pet fee - please inquire.",
            "Los Angeles",
            "Single",
            1,
            20
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            6,
            "MASTERPIECE at Copper Rock!",
            "Masterpiece 5 Bedroom 3 Bath slice of heaven on the newly built Copper Rock Golf Course. Experience big open skies, top-tier amenities, and close proximity to some of Americas most beautiful national parks! Were just 40 minutes away from Zion National Park and 2 hours from Vegas!",
            "Sydney",
            "Quadruple",
            4,
            50
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            7,
            "Hobbit Cottage",
            "Tucked away in our peaceful garden, this modern Hobbit Cottage will delight you! Although its not the Shire of Middle Earth from LOTR, its our little piece of paradise. We are located near Bryce Canyon, Brian Head and Zion National Park, Kannarraville Falls. Custom built by Chris and I for those who love adventure, hiking, snow boarding. Make sure to catch the world-famous Shakespeare festival. Cedar City is known as Festival City for a good reason!",
            "Milan",
            "Single",
            1,
            20
            )'
        );
        $this->addSql('INSERT INTO room (
            id, title, description, location, type, max_guest, night_price) VALUES (
            8,
            "CHATEAU SUNSET Stunning 4BR/3BTH with PRIVATE POOL, SPA & MOUNTAIN VIEWS!",
            "Be among the first to enjoy this mesmerizing, single level pool and spa home in popular Las Vegas suburb of Henderson, Nevada. Chateau Sunset, living up to its name with picturesque backyard mountainous sunset views, simply perfect for your IG feed!",
            "Milan",
            "Double",
            2,
            30
            )'
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE room');
    }
}
