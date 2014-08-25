<?php

class ItemsSeeder extends Seeder {

	public function run()
	{
		Item::truncate();

		Item::create([
			'name' => 'New Balance',
			'description' => 'Anti-ipis.Subok ng bayan. Bahain. Pinapasok ng tubig.
			Maganda ang design. Matibay. Maasahan. Adidas ng bayan. HAHA. Masarap ipang-sipa.
			Nagoauto-resize ayon sa paa. May kamahalan nga lang.',
			'price' => '25000.00',
			'image' => 'newbalance.png'
			]);			
		Item::create([
			'name' => 'Nike',
			'description' => 'White, murang mura. Abot kaya. Mapapamura ka din.',
			'price' => '553.99',
			'image' => 'nike.png'
			]);
		Item::create([
			'name' => 'Mario DBoro',
			'description' => 'Subok ng bayan. Bahain. Pinapasok ng tubig. Maganda ang design.
			Matibay. Maasahan. Adidas ng bayan. Pamorma lang, madaling mabutas ang unahan.',
			'price' => '3800.25',
			'image' => 'mariodboro.png'
			]);
		Item::create([
			'name' => 'Adidas',
			'description' => 'Matibay. Maasahan. Adidas ng bayan. HAHA.',
			'price' => '2800.50',
			'image' => 'adidas.png'
			]);
		Item::create([
			'name' => 'Converse <3',
			'description' => 'Subok ng bayan. Bahain. Pinapasok ng tubig. Maganda ang design.
			Matibay. Maasahan. Adidas ng bayan. HAHA.',
			'price' => '10000.75',
			'image' => 'converse.png'
			]);
	}
}