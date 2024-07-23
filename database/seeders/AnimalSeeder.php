<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $animalsData = [
            [
                'name' => 'Lion',
                'species' => 'Panthera leo',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg',
                'description' => 'The lion is a species in the family Felidae.',
            ],
            [
                'name' => 'Tiger',
                'species' => 'Panthera tigris',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Tiger.50.jpg',
                'description' => 'The tiger is the largest living cat species.',
            ],
            [
                'name' => 'Leopard',
                'species' => 'Panthera pardus',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Leopard_in_the_Serengeti.JPG',
                'description' => 'The leopard is distinguished by its well-camouflaged fur.',
            ],
            [
                'name' => 'Cheetah',
                'species' => 'Acinonyx jubatus',
                'age' => 2,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Gepard_1980.jpg',
                'description' => 'The cheetah is known for its incredible speed.',
            ],
            [
                'name' => 'Jaguar',
                'species' => 'Panthera onca',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/Jaguar_(Panthera_onca_palustris)_male_three_quarters_body_turn.jpg',
                'description' => 'The jaguar is the largest cat species in the Americas.',
            ],
            [
                'name' => 'Elephant',
                'species' => 'Loxodonta africana',
                'age' => 10,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/African_Bush_Elephant.jpg',
                'description' => 'The African bush elephant is the largest land animal.',
            ],
            [
                'name' => 'Giraffe',
                'species' => 'Giraffa camelopardalis',
                'age' => 7,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Giraffe_standing.jpg',
                'description' => 'The giraffe is the tallest living terrestrial animal.',
            ],
            [
                'name' => 'Zebra',
                'species' => 'Equus quagga',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Common_zebra_Grant%27s.jpg',
                'description' => 'Zebras are African equines with distinctive black-and-white striped coats.',
            ],
            [
                'name' => 'Kangaroo',
                'species' => 'Macropus rufus',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Red_kangaroo_-_melbourne_zoo.jpg',
                'description' => 'The red kangaroo is the largest of all kangaroos.',
            ],
            [
                'name' => 'Panda',
                'species' => 'Ailuropoda melanoleuca',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Grosser_Panda.JPG',
                'description' => 'The giant panda is a bear species endemic to China.',
            ],
            [
                'name' => 'Koala',
                'species' => 'Phascolarctos cinereus',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Koala_climbing_tree.jpg',
                'description' => 'The koala is an arboreal herbivorous marsupial native to Australia.',
            ],
            [
                'name' => 'Penguin',
                'species' => 'Aptenodytes forsteri',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Emperor_Penguin_Manchot_empereur.jpg',
                'description' => 'The emperor penguin is the tallest and heaviest of all living penguin species.',
            ],
            [
                'name' => 'Polar Bear',
                'species' => 'Ursus maritimus',
                'age' => 8,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Ursus_maritimus_Polar_bear.JPG',
                'description' => 'The polar bear is a hypercarnivorous bear whose native range lies largely within the Arctic Circle.',
            ],
            [
                'name' => 'Rhinoceros',
                'species' => 'Rhinocerotidae',
                'age' => 12,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/ea/White_Rhinoceros_%28Ceratotherium_simum_simum%29.jpg',
                'description' => 'Rhinoceros are large, herbivorous mammals identified by their characteristic horned snouts.',
            ],
            [
                'name' => 'Hippopotamus',
                'species' => 'Hippopotamus amphibius',
                'age' => 10,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Hippo_at_Yong_Bi_Ka.jpg',
                'description' => 'The hippopotamus is a large, mostly herbivorous, semi-mammalian mammal native to sub-Saharan Africa.',
            ],
            [
                'name' => 'Wolf',
                'species' => 'Canis lupus',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Canis_lupus_lupus_qtl1.jpg/800px-Canis_lupus_lupus_qtl1.jpg',
                'description' => 'The wolf is a large canine native to Eurasia and North America.',
            ],
            [
                'name' => 'Fox',
                'species' => 'Vulpes vulpes',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Vulpes_vulpes_laying_in_snow.jpg',
                'description' => 'The red fox is the largest of the true foxes and one of the most widely distributed members of the order Carnivora.',
            ],
            [
                'name' => 'Bear',
                'species' => 'Ursus arctos',
                'age' => 7,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/79/2010-brown-bear.jpg',
                'description' => 'The brown bear is a large bear species found across Eurasia and North America.',
            ],
            [
                'name' => 'Eagle',
                'species' => 'Aquila chrysaetos',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Golden_eagle.jpg',
                'description' => 'The golden eagle is one of the best-known birds of prey in the Northern Hemisphere.',
            ],
            [
                'name' => 'Falcon',
                'species' => 'Falco peregrinus',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6d/Peregrine_Falcon_juvenile.jpg',
                'description' => 'The peregrine falcon is a widespread bird of prey in the family Falconidae.',
            ],
            [
                'name' => 'Owl',
                'species' => 'Bubo bubo',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/20/Eagle_Owl_Oulu_20131011.JPG',
                'description' => 'The Eurasian eagle-owl is a species of eagle-owl that resides in much of Eurasia.',
            ],
            [
                'name' => 'Monkey',
                'species' => 'Macaca mulatta',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2d/Rhesus_macaque_1.jpg',
                'description' => 'The rhesus macaque is one of the best-known species of Old World monkeys.',
            ],
            [
                'name' => 'Chimpanzee',
                'species' => 'Pan troglodytes',
                'age' => 8,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/83/2014_Female_Pan_troglodytes.jpg',
                'description' => 'The chimpanzee is a species of great ape native to the forests and savannas of tropical Africa.',
            ],
            [
                'name' => 'Gorilla',
                'species' => 'Gorilla beringei',
                'age' => 12,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Gorilla_sitting_in_sun.jpg',
                'description' => 'The eastern gorilla is a critically endangered species of the genus Gorilla and the largest living primate.',
            ],
            [
                'name' => 'Orangutan',
                'species' => 'Pongo pygmaeus',
                'age' => 9,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/84/Bornean_Orangutan.jpg',
                'description' => 'The Bornean orangutan is a species of orangutan native to the island of Borneo.',
            ],
            [
                'name' => 'Sloth',
                'species' => 'Bradypus variegatus',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/ed/MC_Sloth.jpg',
                'description' => 'The brown-throated sloth is a species of three-toed sloth found in Central and South America.',
            ],
            [
                'name' => 'Kangaroo',
                'species' => 'Macropus giganteus',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Red_kangaroo_-_melbourne_zoo.jpg',
                'description' => 'The eastern grey kangaroo is a large and common kangaroo found in southern and eastern Australia.',
            ],
            [
                'name' => 'Wallaby',
                'species' => 'Macropus rufogriseus',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1d/Red-necked_wallaby444.jpg',
                'description' => 'The red-necked wallaby is a medium-sized macropod marsupial native to eastern Australia.',
            ],
            [
                'name' => 'Koala',
                'species' => 'Phascolarctos cinereus',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Koala_climbing_tree.jpg',
                'description' => 'The koala is an arboreal herbivorous marsupial native to Australia.',
            ],
            [
                'name' => 'Panda',
                'species' => 'Ailuropoda melanoleuca',
                'age' => 7,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Grosser_Panda.JPG',
                'description' => 'The giant panda is a bear species endemic to China.',
            ],
            [
                'name' => 'Sloth Bear',
                'species' => 'Melursus ursinus',
                'age' => 8,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/55/Sloth_Bear_4.jpg',
                'description' => 'The sloth bear is a myrmecophagous bear species native to the Indian subcontinent.',
            ],
            [
                'name' => 'Polar Bear',
                'species' => 'Ursus maritimus',
                'age' => 9,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Ursus_maritimus_Polar_bear.JPG',
                'description' => 'The polar bear is a hypercarnivorous bear whose native range lies largely within the Arctic Circle.',
            ],
            [
                'name' => 'Grizzly Bear',
                'species' => 'Ursus arctos horribilis',
                'age' => 10,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/79/2010-brown-bear.jpg',
                'description' => 'The grizzly bear is a large subspecies of brown bear inhabiting North America.',
            ],
            [
                'name' => 'Black Bear',
                'species' => 'Ursus americanus',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/a/ae/American_Black_Bear.jpg',
                'description' => 'The American black bear is a medium-sized bear native to North America.',
            ],
            [
                'name' => 'Sun Bear',
                'species' => 'Helarctos malayanus',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/18/Sun_bear_in_Khao_Kheow_open_zoo.jpg',
                'description' => 'The sun bear is a bear found primarily in the tropical forest habitats of Southeast Asia.',
            ],
            [
                'name' => 'Raccoon',
                'species' => 'Procyon lotor',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Raccoon_(Procyon_lotor).jpg',
                'description' => 'The raccoon is a medium-sized mammal native to North America.',
            ],
            [
                'name' => 'Red Panda',
                'species' => 'Ailurus fulgens',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/RedPandaFullBody.JPG',
                'description' => 'The red panda is a mammal native to the eastern Himalayas and southwestern China.',
            ],
            [
                'name' => 'Arctic Fox',
                'species' => 'Vulpes lagopus',
                'age' => 2,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Vulpes_lagopus_-_Norway.jpg',
                'description' => 'The Arctic fox is a small fox native to the Arctic regions of the Northern Hemisphere.',
            ],
            [
                'name' => 'Platypus',
                'species' => 'Ornithorhynchus anatinus',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Platypus.jpg',
                'description' => 'The platypus is a semi-aquatic egg-laying mammal endemic to eastern Australia.',
            ],
            [
                'name' => 'Emu',
                'species' => 'Dromaius novaehollandiae',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/24/Emu_-_Dromaius_novaehollandiae.jpg',
                'description' => 'The emu is the second-largest living bird by height, native to Australia.',
            ],
            [
                'name' => 'Kookaburra',
                'species' => 'Dacelo novaeguineae',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/ec/Dacelo_novaeguineae.jpg',
                'description' => 'The laughing kookaburra is a bird in the kingfisher subfamily Halcyoninae.',
            ],
            [
                'name' => 'Cassowary',
                'species' => 'Casuarius casuarius',
                'age' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/36/Southern_cassowary_Casuarius_casuarius.jpg',
                'description' => 'The southern cassowary is a large flightless bird native to the tropical forests of New Guinea, nearby islands, and northern Australia.',
            ],
            [
                'name' => 'Kiwi',
                'species' => 'Apteryx mantelli',
                'age' => 3,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/TeTuatahianui.jpg',
                'description' => 'The North Island brown kiwi is a species of kiwi endemic to the North Island of New Zealand.',
            ],
            [
                'name' => 'Kea',
                'species' => 'Nestor notabilis',
                'age' => 4,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Nestor_notabilis_-Fiordland%2C_New_Zealand-8.jpg',
                'description' => 'The kea is a large species of parrot found in forested and alpine regions of the South Island of New Zealand.',
            ],
            [
                'name' => 'Wombat',
                'species' => 'Vombatus ursinus',
                'age' => 6,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/81/Common_wombat.jpg',
                'description' => 'The common wombat is a marsupial found in Australia.',
            ],
        ];

        foreach ($animalsData as $animalData) {
            $newAnimal = new Animal();
            $newAnimal->name = $animalData['name'];
            $newAnimal->species = $animalData['species'];
            $newAnimal->age = $animalData['age'];
            $newAnimal->image_url = $animalData['image_url'];
            $newAnimal->description = $animalData['description'];
            $newAnimal->save();

        }
    }
}
